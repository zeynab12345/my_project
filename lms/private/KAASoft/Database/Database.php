<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Database;

    use Exception;
    use KAASoft\Environment\Session;
    use KAASoft\Util\Helper;
    use KAASoft\Util\Message;
    use Logger;
    use PDO;
    use PDOException;
    use PDOStatement;

    /**
     * Class Database
     * @package KAASoft\Database
     */
    class Database {
        /**
         * @var Logger
         */
        protected $logger;
        // General
        protected $databaseType;
        protected $charset;
        protected $databaseName;
        protected $pdo;

        // For MySQL, MariaDB, MSSQL, Sybase, PostgreSQL, Oracle
        protected $server;
        protected $username;
        protected $password;

        // For SQLite
        protected $databaseFile;

        // For MySQL or MariaDB with unix_socket
        protected $socket;

        // Optional
        protected $port;
        protected $option = [];

        // Variable
        protected $logs = [];

        protected $debugMode = false;

        protected $distinctMode = false;

        /**
         * Database constructor.
         * @param array $options
         * @throws Exception
         */
        protected function __construct($options = null) {
            // try {
            $commands = [];

            if (is_string($options) && !empty( $options )) {
                if (strtolower($this->databaseType) == "sqlite") {
                    $this->databaseFile = $options;
                }
                else {
                    $this->databaseName = $options;
                }
            }
            elseif (is_array($options)) {
                foreach ($options as $option => $value) {
                    $this->$option = $value;
                }
            }

            $port = null;
            if (isset( $this->port ) && is_int($this->port * 1)) {
                $port = $this->port;
            }

            $type = strtolower($this->databaseType);
            $isPort = isset( $port );

            $isDatabase = isset( $this->databaseName );


            $dsn = null;

            if ($type == "mariadb") {
                $type = "mysql";
            }

            switch ($type) {
                case "mysql":
                    if ($this->socket) {
                        $dsn = $type . ":unix_socket=" . $this->socket . ( $isDatabase ? ";dbname=" . $this->databaseName : "" );
                    }
                    else {
                        $dsn = $type . ":host=" . $this->server . ( $isPort ? ";port=" . $port : "" ) . ( $isDatabase ? ";dbname=" . $this->databaseName : "" );
                    }

                    // Make MySQL using standard quoted identifier
                    $commands[] = "SET SQL_MODE=ANSI_QUOTES";
                    break;

                case "pgsql":
                    $dsn = $type . ":host=" . $this->server . ( $isPort ? ";port=" . $port : "" ) . ( $isDatabase ? ";dbname=" . $this->databaseName : "" );
                    break;

                case "sybase":
                    $dsn = "dblib:host=" . $this->server . ( $isPort ? ":" . $port : "" ) . ( $isDatabase ? ";dbname=" . $this->databaseName : "" );
                    break;
                // todo: check oracle DSN
                case "oracle":
                    $dbname = $this->server ? "//" . $this->server . ( $isPort ? ":" . $port : ":1521" ) . "/" . $this->databaseName : $this->databaseName;

                    $dsn = "oci:dbname=" . $dbname . ( $this->charset ? ";charset=" . $this->charset : "" );
                    break;

                case "mssql":
                    $dsn = strstr(PHP_OS,
                                  "WIN") ? "sqlsrv:server=" . $this->server . ( $isPort ? "," . $port : "" ) . ( $isDatabase ? ";dbname=" . $this->databaseName : "" ) : "dblib:host=" . $this->server . ( $isPort ? ":" . $port : "" ) . ( $isDatabase ? ";dbname=" . $this->databaseName : "" );

                    // Keep MSSQL QUOTED_IDENTIFIER is ON for standard quoting
                    $commands[] = "SET QUOTED_IDENTIFIER ON";
                    break;

                case "sqlite":
                    $dsn = $type . ":" . $this->databaseFile;
                    $this->username = null;
                    $this->password = null;
                    break;
            }

            if (in_array($type,
                         explode(" ",
                                 "mariadb mysql pgsql sybase mssql")) && $this->charset
            ) {
                $commands[] = "SET NAMES '" . $this->charset . "'";
            }

            $this->option = [ PDO::ATTR_EMULATE_PREPARES         => false,
                              PDO::ATTR_ERRMODE                  => PDO::ERRMODE_EXCEPTION,
                              PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true ];

            $this->pdo = new PDO($dsn,
                                 $this->username,
                                 $this->password,
                                 $this->option);

            foreach ($commands as $value) {
                $this->pdo->exec($value);
            }
        }

        /**
         * @return bool
         */
        public function startTransaction() {
            return $this->pdo->beginTransaction();
        }

        /**
         * @return bool
         */
        public function commitTransaction() {
            return $this->pdo->commit();
        }

        /**
         * @return bool
         */
        public function rollbackTransaction() {
            return $this->pdo->rollBack();
        }

        /**
         * @return bool
         */
        public function isInTransaction() {
            return $this->pdo->inTransaction();
        }

        /**
         * @param $tableName
         * @param $columns
         * @return bool: true - if all is ok, false - if failed. Check diagnostic message if creation is failed.
         */
        public function createTable($tableName, $columns) {
            if (isset( $tableName ) && isset( $columns )) {
                $sql = "CREATE TABLE " . $tableName . " (" . $this->column_quote("id") . " INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY" . ( empty( $columns ) ? " " : ", " );

                $columnNum = count($columns);
                $index = 0;
                foreach ($columns as $columnName => $columnType) {
                    $sql .= $this->column_quote($columnName) . " " . $columnType . ( $index < $columnNum - 1 ? ", " : "" );
                    $index++;
                }
                $sql .= ")";

                $this->logQuery($sql);
                try {
                    $result = $this->exec($sql);
                    if ($result === false) {
                        $this->addMessage($this->error()[2]);
                    }

                    return $result;

                }
                catch (PDOException $e) {
                    $this->addMessage($sql . "<br>" . $e->getMessage());

                    return false;
                }
            }
            else {
                $this->addMessage(_("Table name or column list are not specified."));

                return false;
            }
        }

        /**
         * @param $query
         * @return int|false
         */
        public function exec($query) {
            if ($this->debugMode) {
                Helper::printHtmlLine($query);
            }
            $this->logQuery($query);

            $result = $this->pdo->exec($query);
            if ($result === false) {
                $this->addMessage($this->error()[2]);
            }

            return $result;
        }

        /**
         * @param $message
         */
        public function addMessage($message) {
            Session::addSessionMessage($message,
                                       Message::MESSAGE_STATUS_ERROR);
        }

        /**
         * @param $tableName
         * @return bool true if exist and false in another case
         */
        public function isTableExists($tableName) {

            return $this->pdo->query("SHOW TABLES LIKE '" . $tableName . "'")->rowCount() > 0;
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $columns
         * @param null $where
         * @return array|bool
         */
        public function select($table, $join, $columns = null, $where = null/*, $column_fn = null*/) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $columns,
                                                        $where/*,
                                                        $column_fn*/));

            return $query ? $query->fetchAll(( is_string($columns) && $columns != "*" ) ? PDO::FETCH_COLUMN : PDO::FETCH_ASSOC) : false;
        }

        /**
         * @param $query
         * @return PDOStatement
         */
        public function query($query) {
            if ($this->debugMode) {
                Helper::printHtmlLine($query);
            }
            $this->logQuery($query);

            $result = $this->pdo->query($query);
            if ($result === false) {
                $this->addMessage($this->error()[2]);
            }

            //reset distinct
            $this->distinctMode = false;

            return $result;
        }

        /**
         * @param $string
         * @return string
         */
        public function quote($string) {
            return $this->pdo->quote($string);
        }

        /**
         * @param $table
         * @param $keyValuePairs
         * @return array|bool false if insert is failed
         */
        public function insert($table, $keyValuePairs) {
            $lastId = [];

            // Check indexed or associative array
            if (!isset( $keyValuePairs[0] )) {
                $keyValuePairs = [ $keyValuePairs ];
            }

            foreach ($keyValuePairs as $keyValuePair) {
                $values = [];
                $columns = [];

                foreach ($keyValuePair as $key => $value) {
                    array_push($columns,
                               $this->column_quote($key));

                    if (!isset( $value )) {
                        $values[] = "NULL";
                    }
                    else {
                        switch (gettype($value)) {
                            case "NULL":
                                $values[] = "NULL";
                                break;

                            case "array":
                                preg_match("/\(JSON\)\s*([\w]+)/i",
                                           $key,
                                           $column_match);

                                $values[] = isset( $column_match[0] ) ? $this->quote(json_encode($value)) : $this->quote(serialize($value));
                                break;

                            case "boolean":
                                $values[] = ( $value ? "1" : "0" );
                                break;

                            case "integer":
                            case "double":
                            case "string":
                                $values[] = $this->fn_quote($key,
                                                            $value);
                                break;
                        }
                    }
                }

                $sql = 'INSERT INTO "' . $table . '" (' . implode(", ",
                                                                  $columns) . ") VALUES (" . implode($values,
                                                                                                     ", ") . ")";
                if ($this->exec($sql) === false) {
                    return false;
                }

                $lastId[] = $this->pdo->lastInsertId();
            }

            return count($lastId) > 1 ? $lastId : $lastId[0];
        }

        /**
         * @param      $table
         * @param      $data
         * @param null $where
         * @return bool|int
         */
        public function update($table, $data, $where = null) {
            $fields = [];

            foreach ($data as $key => $value) {
                preg_match("/([\w]+)(\[(\+|\-|\*|\/)\])?/i",
                           $key,
                           $match);

                if (isset( $match[3] )) {
                    if (is_numeric($value)) {
                        $fields[] = $this->column_quote($match[1]) . " = " . $this->column_quote($match[1]) . " " . $match[3] . " " . $value;
                    }
                }
                else {
                    $column = $this->column_quote($key);

                    if (!isset( $value )) {
                        $fields[] = $column . " = NULL";
                    }
                    else {
                        switch (gettype($value)) {
                            case "NULL":
                                $fields[] = $column . " = NULL";
                                break;

                            case "array":
                                preg_match("/\(JSON\)\s*([\w]+)/i",
                                           $key,
                                           $column_match);

                                $fields[] = $column . " = " . $this->quote(isset( $column_match[0] ) ? json_encode($value) : serialize($value));
                                break;

                            case "boolean":
                                $fields[] = $column . " = " . ( $value ? "1" : "0" );
                                break;

                            case "integer":
                            case "double":
                            case "string":
                                $fields[] = $column . " = " . $this->fn_quote($key,
                                                                              $value);
                                break;
                        }
                    }
                }
            }

            return $this->exec('UPDATE "' . $table . '" SET ' . implode(", ",
                                                                        $fields) . $this->where_clause($where));
        }

        /**
         * @param $table
         * @return bool|int
         */
        public function deleteAllTableContent($table) {
            return $this->exec('DELETE FROM "' . $table . '"');
        }

        /**
         * @param $table
         * @param $where
         * @return bool|int
         */
        public function delete($table, $where) {
            return $this->exec('DELETE FROM "' . $table . '"' . $this->where_clause($where));
        }

        /**
         * @param      $table
         * @param      $columns
         * @param null $search
         * @param null $replace
         * @param null $where
         * @return bool|int
         */
        public function replace($table, $columns, $search = null, $replace = null, $where = null) {
            if (is_array($columns)) {
                $replace_query = [];

                foreach ($columns as $column => $replacements) {
                    foreach ($replacements as $replace_search => $replace_replacement) {
                        $replace_query[] = $column . " = REPLACE(" . $this->column_quote($column) . ", " . $this->quote($replace_search) . ", " . $this->quote($replace_replacement) . ")";
                    }
                }

                $replace_query = implode(", ",
                                         $replace_query);
                $where = $search;
            }
            else {
                if (is_array($search)) {
                    $replace_query = [];

                    foreach ($search as $replace_search => $replace_replacement) {
                        $replace_query[] = $columns . " = REPLACE(" . $this->column_quote($columns) . ", " . $this->quote($replace_search) . ", " . $this->quote($replace_replacement) . ")";
                    }

                    $replace_query = implode(", ",
                                             $replace_query);
                    $where = $replace;
                }
                else {
                    $replace_query = $columns . " = REPLACE(" . $this->column_quote($columns) . ", " . $this->quote($search) . ", " . $this->quote($replace) . ")";
                }
            }

            return $this->exec('UPDATE "' . $table . '" SET ' . $replace_query . $this->where_clause($where));
        }

        /**
         * @param      $table
         * @param null $join
         * @param null $column
         * @param null $where
         * @return bool|array|mixed
         */
        public function get($table, $join = null, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where) . " LIMIT 1");

            if ($query) {
                $data = $query->fetchAll(PDO::FETCH_ASSOC);

                if (isset( $data[0] )) {
                    $column = $where == null ? $join : $column;

                    if (is_string($column) && $column != "*") {
                        return $data[0][$column];
                    }

                    return $data[0];
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $where
         * @return bool
         */
        public function has($table, $join, $where = null) {
            $column = null;

            $query = $this->query("SELECT EXISTS(" . $this->select_context($table,
                                                                           $join,
                                                                           $column,
                                                                           $where,
                                                                           1) . ")");

            return $query ? $query->fetchColumn() == true : false;
        }

        /**
         * @param      $table
         * @param null $join
         * @param null $column
         * @param null $where
         * @return bool|int
         */
        public function count($table, $join = null, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where,
                                                        "COUNT"));

            return $query ? 0 + (int)$query->fetchColumn() : false;
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $column
         * @param null $where
         * @return bool|int|string
         */
        public function max($table, $join, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where,
                                                        "MAX"));

            if ($query) {
                $max = $query->fetchColumn();

                return is_numeric($max) ? $max + 0 : $max;
            }
            else {
                return false;
            }
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $column
         * @param null $where
         * @return bool|int|string
         */
        public function min($table, $join, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where,
                                                        "MIN"));

            if ($query) {
                $min = $query->fetchColumn();

                return is_numeric($min) ? $min + 0 : $min;
            }
            else {
                return false;
            }
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $column
         * @param null $where
         * @return bool|int
         */
        public function avg($table, $join, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where,
                                                        "AVG"));

            return $query ? 0 + (double)$query->fetchColumn() : false;
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $column
         * @param null $where
         * @return bool|int
         */
        public function sum($table, $join, $column = null, $where = null) {
            $query = $this->query($this->select_context($table,
                                                        $join,
                                                        $column,
                                                        $where,
                                                        "SUM"));

            return $query ? 0 + (double)$query->fetchColumn() : false;
        }

        /**
         * @return $this
         */
        public function distinct() {
            $this->distinctMode = true;

            return $this;
        }

        /**
         * @return $this
         */
        public function debug() {
            $this->debugMode = true;

            return $this;
        }

        /**
         * @return array
         */
        public function error() {
            return $this->pdo->errorInfo();
        }

        /**
         * @return mixed
         */
        public function getLastQuery() {
            return end($this->logs);
        }

        /**
         * @return array of log messages
         */
        public function getQueryLog() {
            return $this->logs;
        }

        /**
         * append message string to log array
         * @param $message
         */
        public function logQuery($message) {
            array_push($this->logs,
                       $message);
            if ($this->logger !== null and $this->debugMode) {
                $this->logger->info($message);
            }
        }

        /**
         * @return array
         */
        public function info() {
            $output = [ "server"     => "SERVER_INFO",
                        "driver"     => "DRIVER_NAME",
                        "client"     => "CLIENT_VERSION",
                        "version"    => "SERVER_VERSION",
                        "connection" => "CONNECTION_STATUS" ];

            foreach ($output as $key => $value) {
                $output[$key] = $this->pdo->getAttribute(constant("PDO::ATTR_" . $value));
            }

            return $output;
        }

        /**
         * @param $tableName
         * @return bool|int
         */
        public function deleteTable($tableName) {
            $sql = "DROP TABLE IF EXISTS " . $tableName;

            return $this->exec($sql);
        }

        /**
         * @param $oldTableName
         * @param $newTableName
         * @return bool|int
         */
        public function renameTable($oldTableName, $newTableName) {
            $sql = "ALTER TABLE " . $oldTableName . " RENAME " . $newTableName;

            return $this->exec($sql);
        }

        /**
         * @param $tableName
         * @param $columnName
         * @param $columnType
         * @return bool|int
         */
        public function addTableColumn($tableName, $columnName, $columnType) {
            $sql = "ALTER TABLE " . $tableName . " ADD " . $this->column_quote($columnName) . " " . $columnType;

            return $this->exec($sql);
        }

        /**
         * @param $tableName
         * @param $columnName
         * @return bool|int
         */
        public function deleteTableColumn($tableName, $columnName) {
            $sql = "ALTER TABLE " . $tableName . " DROP COLUMN " . $this->column_quote($columnName);

            return $this->exec($sql);
        }

        /**
         * @param $tableName
         * @param $oldColumnName
         * @param $newColumnName
         * @param $type
         * @return bool|int
         */
        public function changeTableColumn($tableName, $oldColumnName, $newColumnName, $type) {
            $sql = "ALTER TABLE " . $tableName . " CHANGE COLUMN " . $oldColumnName . " " . $newColumnName . " " . $type;

            return $this->exec($sql);
        }

        /**
         * @return array
         */
        public function getAllTables() {
            $sql = "SHOW TABLES FROM " . $this->quote($this->databaseName);

            $pdoStatement = $this->query($sql);

            $result = [];

            if ($pdoStatement !== false) {
                while ($row = $pdoStatement->fetch(PDO::FETCH_NUM)) {
                    $result[] = $row[0];
                }
            }

            return $result;
        }

        /**
         * @param $tableName
         * @return array|false
         */
        public function getTableColumns($tableName) {
            $sql = "SHOW COLUMNS FROM \"" . $tableName . "\"";

            $pdoStatement = $this->query($sql);

            $columns = [];

            if ($pdoStatement !== false) {
                while ($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)) {
                    $columns[] = $row["Field"];
                }
            }
            else {
                return false;
            }

            return $columns;
        }

        /**
         * @param $pattern
         * @return array
         */
        public function getTablesByPattern($pattern) {

            $sql = "SHOW TABLES WHERE tables_in_" . $this->databaseName . " REGEXP '" . $pattern . "'";

            $pdoStatement = $this->query($sql);

            $result = [];
            if ($pdoStatement !== false) {
                while ($row = $pdoStatement->fetch(PDO::FETCH_NUM)) {
                    $result[] = $row[0];
                }
            }

            return $result;
        }

        /**
         * @param $fileName
         * @return bool
         */
        public function execFile($fileName) {
            try {
                $result = false;
                if ($this->pdo->beginTransaction()) {
                    $query = file_get_contents($fileName);
                    $stmt = $this->pdo->prepare($query);
                    $result = $stmt->execute();
                }

                if (!$result || !$this->commitTransaction()) {
                    $this->addMessage($this->error()[2]);
                    throw new PDOException($this->error()[2]);
                }

            }
            catch (PDOException $pdoException) {
                $this->pdo->rollBack();

                return false;
            }

            return true;
        }

        /**
         * @param $fileName
         * @return bool
         */
        public function execFileWithoutTransaction($fileName) {
            $query = file_get_contents($fileName);
            $stmt = $this->pdo->prepare($query);

            $result = $stmt->execute();
            do {
                // check if any errors in sql script
                // !!! $stmt->nextRowset() - produce exception if any error in middle of script
            } while ($stmt->nextRowset());

            return $result;
        }

        /**
         * @param $string
         * @return string
         */
        protected function column_quote($string) {
            return '"' . str_replace(".",
                                     '"."',
                                     preg_replace("/(^#|\(JSON\))/",
                                                  "",
                                                  $string)) . '"';
        }

        /**
         * @param      $table
         * @param      $join
         * @param null $columns
         * @param null $where
         * @param null $column_fn
         * @return string
         */
        protected function select_context($table, $join, &$columns = null, $where = null, $column_fn = null) {
            $table = '"' . $table . '"';
            $join_key = is_array($join) ? array_keys($join) : null;

            if (isset( $join_key[0] ) && strpos($join_key[0],
                                                "[") === 0
            ) {
                $table_join = [];

                $join_array = [ ">"  => "LEFT",
                                "<"  => "RIGHT",
                                "<>" => "FULL",
                                "><" => "INNER" ];

                foreach ($join as $sub_table => $relation) {
                    preg_match("/(\[(<|>|><|<>)\])?([a-zA-Z0-9_\-]*)\s?(\(([a-zA-Z0-9_\-]*)\))?/",
                               $sub_table,
                               $match);

                    if ($match[2] != "" && $match[3] != "") {
                        if (is_string($relation)) {
                            $relation = 'USING ("' . $relation . '")';
                        }

                        if (is_array($relation)) {
                            // For ["column1", "column2"]
                            if (isset( $relation[0] )) {
                                $relation = 'USING ("' . implode($relation,
                                                                 '", "') . '")';
                            }
                            else {
                                $joins = [];

                                foreach ($relation as $key => $value) {
                                    $joins[] = ( strpos($key,
                                                        ".") > 0 ? // For ["tableB.column" => "column"]
                                            '"' . str_replace(".",
                                                              '"."',
                                                              $key) . '"' :

                                            // For ["column1" => "column2"]
                                            $table . '."' . $key . '"' ) . " = " . '"' . ( isset( $match[5] ) ? $match[5] : $match[3] ) . '"."' . $value . '"';
                                }

                                $relation = "ON " . implode($joins,
                                                            " AND ");
                            }
                        }

                        $table_join[] = $join_array[$match[2]] . ' JOIN "' . $match[3] . '" ' . ( isset( $match[5] ) ? 'AS "' . $match[5] . '" ' : "" ) . $relation;
                    }
                }

                $table .= " " . implode($table_join,
                                        " ");
            }
            else {
                if (is_null($columns)) {
                    if (is_null($where)) {
                        if (is_array($join) && isset( $column_fn )) {
                            $where = $join;
                            $columns = null;
                        }
                        else {
                            $where = null;
                            $columns = $join;
                        }
                    }
                    else {
                        $where = $join;
                        $columns = null;
                    }
                }
                else {
                    $where = $columns;
                    $columns = $join;
                }
            }

            if ($this->distinctMode) {
                $distinct = "DISTINCT ";
            }
            else {
                $distinct = "";
            }

            if (isset( $column_fn )) {
                if ($column_fn == 1) {
                    $column = "1";

                    if (is_null($where)) {
                        $where = $columns;
                    }
                }
                else {
                    if (empty( $columns )) {
                        $columns = "*";
                        $where = $join;
                    }

                    $column = $column_fn . "(" . $distinct . $this->column_push($columns) . ")";
                }
            }
            else {
                $column = $distinct . $this->column_push($columns);
            }

            return "SELECT " . $column . " FROM " . $table . $this->where_clause($where);
        }

        /**
         * @param $columns
         * @return array|string
         */
        protected function column_push($columns) {
            if ($columns == "*") {
                return $columns;
            }

            if (is_string($columns)) {
                $columns = [ $columns ];
            }

            $stack = [];

            foreach ($columns as $key => $value) {

                if (Helper::startsWith($value,
                                       "{#}") === true
                ) {
                    array_push($stack,
                               substr($value,
                                      3));
                    continue;
                }
                preg_match("/([a-zA-Z0-9_\-\.]*)\s*\(([a-zA-Z0-9_\-]*)\)/i",
                           $value,
                           $match);

                if (isset( $match[1], $match[2] )) {
                    array_push($stack,
                               $this->column_quote($match[1]) . " AS " . $this->column_quote($match[2]));
                }
                else {
                    array_push($stack,
                               $this->column_quote($value));
                }
            }

            return implode($stack,
                           ",");
        }

        /**
         * @param $where
         * @return string
         */
        protected function where_clause($where) {
            $where_clause = "";

            if (is_array($where)) {
                $where_keys = array_keys($where);
                $where_AND = preg_grep("/^AND\s*#?$/i",
                                       $where_keys);
                $where_OR = preg_grep("/^OR\s*#?$/i",
                                      $where_keys);

                $single_condition = array_diff_key($where,
                                                   array_flip(explode(" ",
                                                                      "AND OR GROUP ORDER HAVING LIMIT LIKE MATCH")));

                if ($single_condition != []) {
                    $where_clause = " WHERE " . $this->data_implode($single_condition,
                                                                    "");
                }

                if (!empty( $where_AND )) {
                    $value = array_values($where_AND);
                    $where_clause = " WHERE " . $this->data_implode($where[$value[0]],
                                                                    " AND");
                }

                if (!empty( $where_OR )) {
                    $value = array_values($where_OR);
                    $where_clause = " WHERE " . $this->data_implode($where[$value[0]],
                                                                    " OR");
                }

                if (isset( $where["MATCH"] )) {
                    $MATCH = $where["MATCH"];

                    if (is_array($MATCH) && isset( $MATCH["columns"], $MATCH["keyword"] )) {
                        $where_clause .= ( $where_clause != "" ? " AND " : " WHERE " ) . ' MATCH ("' . str_replace(".",
                                                                                                                   '"."',
                                                                                                                   implode($MATCH["columns"],
                                                                                                                           '", "')) . '") AGAINST (' . $this->quote($MATCH["keyword"]) . ")";
                    }
                }

                if (isset( $where["GROUP"] )) {
                    if (is_array($where["GROUP"])) {
                        $stack = [];

                        foreach ($where["GROUP"] as $column) {
                            if (!empty( $column )) {
                                array_push($stack,
                                           '"' . str_replace(".",
                                                             '"."',
                                                             $column) . '"');
                            }
                        }

                        $where_clause .= " GROUP BY " . implode($stack,
                                                                ",");
                    }
                    else {
                        $where_clause .= " GROUP BY " . $this->column_quote($where["GROUP"]);

                        if (isset( $where["HAVING"] )) {
                            $where_clause .= " HAVING " . $this->data_implode($where["HAVING"],
                                                                              " AND");
                        }
                    }
                }

                if (isset( $where["ORDER"] )) {
                    $ORDER = $where["ORDER"];

                    if (is_array($ORDER)) {
                        $stack = [];

                        foreach ($ORDER as $column => $value) {
                            if (is_array($value)) {
                                $stack[] = "FIELD(" . $this->column_quote($column) . ", " . $this->array_quote($value) . ")";
                            }
                            else if ($value === "ASC" || $value === "DESC") {
                                $stack[] = $this->column_quote($column) . " " . $value;
                            }
                            else if (is_int($column)) {
                                $stack[] = $this->column_quote($value);
                            }
                        }

                        $where_clause .= " ORDER BY " . implode($stack,
                                                                ",");
                    }
                    else {
                        $where_clause .= " ORDER BY " . $this->column_quote($ORDER);
                    }
                }

                if (isset( $where["LIMIT"] )) {
                    $LIMIT = $where["LIMIT"];

                    if (is_numeric($LIMIT)) {
                        $where_clause .= " LIMIT " . $LIMIT;
                    }

                    if (is_array($LIMIT) && is_numeric($LIMIT[0]) && is_numeric($LIMIT[1])) {
                        if ($this->databaseType === "pgsql") {
                            $where_clause .= " OFFSET " . $LIMIT[0] . " LIMIT " . $LIMIT[1];
                        }
                        else {
                            $where_clause .= " LIMIT " . $LIMIT[0] . "," . $LIMIT[1];
                        }
                    }
                }
            }
            else {
                if ($where != null) {
                    $where_clause .= " " . $where;
                }
            }

            return $where_clause;
        }

        /**
         * @param $data
         * @param $conjunctor
         * @return string
         */
        protected function data_implode($data, $conjunctor/*, $outer_conjunctor = null*/) {
            $wheres = [];

            foreach ($data as $key => $value) {
                $type = gettype($value);

                if (preg_match("/^(AND|OR)\s*#?/i",
                               $key,
                               $relation_match) && $type == "array"
                ) {
                    $wheres[] = 0 !== count(array_diff_key($value,
                                                           array_keys(array_keys($value)))) ? "(" . $this->data_implode($value,
                                                                                                                        " " . $relation_match[1]) . ")" : "(" . $this->inner_conjunct($value,
                                                                                                                                                                                      " " . $relation_match[1],
                                                                                                                                                                                      $conjunctor) . ")";
                }
                else {
                    preg_match("/(#?)([\w\.]+)(\[(>|>=|<|<=|!|<>|><|!?~)\])?/i",
                               $key,
                               $match);
                    $column = $this->column_quote($match[2]);

                    if (isset( $match[4] )) {
                        $operator = $match[4];

                        if ($operator == "!") {
                            switch ($type) {
                                case "NULL":
                                    $wheres[] = $column . " IS NOT NULL";
                                    break;

                                case "array":
                                    $wheres[] = $column . " NOT IN (" . $this->array_quote($value) . ")";
                                    break;

                                case "integer":
                                case "double":
                                    $wheres[] = $column . " != " . $value;
                                    break;

                                case "boolean":
                                    $wheres[] = $column . " != " . ( $value ? "1" : "0" );
                                    break;

                                case "string":
                                    $wheres[] = $column . " != " . $this->fn_quote($key,
                                                                                   $value);
                                    break;
                            }
                        }

                        if ($operator == "<>" || $operator == "><") {
                            if ($type == "array") {
                                if ($operator == "><") {
                                    $column .= " NOT";
                                }

                                if (is_numeric($value[0]) && is_numeric($value[1])) {
                                    $wheres[] = "(" . $column . " BETWEEN " . $value[0] . " AND " . $value[1] . ")";
                                }
                                else {
                                    $wheres[] = "(" . $column . " BETWEEN " . $this->quote($value[0]) . " AND " . $this->quote($value[1]) . ")";
                                }
                            }
                        }

                        if ($operator == "~" || $operator == "!~") {
                            if ($type == "string") {
                                $value = [ $value ];
                            }

                            if (!empty( $value )) {
                                $like_clauses = [];

                                foreach ($value as $item) {
                                    if ($operator == "!~") {
                                        $column .= " NOT";
                                    }

                                    if (preg_match("/^(?!%).+(?<!%)$/",
                                                   $item)) {
                                        $item = "%" . $item . "%";
                                    }

                                    $like_clauses[] = $column . " LIKE " . $this->fn_quote($key,
                                                                                           $item);
                                }

                                $wheres[] = implode(" OR ",
                                                    $like_clauses);
                            }
                        }

                        if (in_array($operator,
                                     [ ">",
                                       ">=",
                                       "<",
                                       "<=" ])) {
                            if (is_numeric($value)) {
                                $wheres[] = $column . " " . $operator . " " . $value;
                            }
                            elseif (strpos($key,
                                           "#") === 0
                            ) {
                                $wheres[] = $column . " " . $operator . " " . $this->fn_quote($key,
                                                                                              $value);
                            }
                            else {
                                $wheres[] = $column . " " . $operator . " " . $this->quote($value);
                            }
                        }
                    }
                    else {
                        switch ($type) {
                            case "NULL":
                                $wheres[] = $column . " IS NULL";
                                break;

                            case "array":
                                $wheres[] = $column . " IN (" . $this->array_quote($value) . ")";
                                break;

                            case "integer":
                            case "double":
                                $wheres[] = $column . " = " . $value;
                                break;

                            case "boolean":
                                $wheres[] = $column . " = " . ( $value ? "1" : "0" );
                                break;

                            case "string":
                                $wheres[] = $column . " = " . $this->fn_quote($key,
                                                                              $value);
                                break;
                        }
                    }
                }
            }

            return implode($conjunctor . " ",
                           $wheres);
        }

        /**
         * @param $data
         * @param $conjunctor
         * @param $outer_conjunctor
         * @return string
         */
        protected function inner_conjunct($data, $conjunctor, $outer_conjunctor) {
            $haystack = [];

            foreach ($data as $value) {
                $haystack[] = "(" . $this->data_implode($value,
                                                        $conjunctor) . ")";
            }

            return implode($outer_conjunctor . " ",
                           $haystack);
        }

        /**
         * @param $array
         * @return string
         */
        protected function array_quote($array) {
            $temp = [];

            foreach ($array as $value) {
                $temp[] = is_int($value) ? $value : $this->pdo->quote($value);
            }

            return implode($temp,
                           ",");
        }

        /**
         * @param $column
         * @param $string
         * @return string
         */
        protected function fn_quote($column, $string) {
            return ( strpos($column,
                            "#") === 0 && preg_match("/^[A-Z0-9_]*\([^)]*\)$/",
                                                     $string) ) ? $string : $this->quote($string);
        }

        public function closeConnection() {
            // if connection is not closed yet
            if ($this->pdo !== null) {
                $this->pdo = null;
            }
        }
    }

    ?>