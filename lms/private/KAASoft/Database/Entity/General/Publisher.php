<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Database\Entity\General;

    use JsonSerializable;
    use KAASoft\Database\Entity\DatabaseEntity;
    use KAASoft\Database\KAASoftDatabase;
    use KAASoft\Util\Comparable;
    use KAASoft\Util\ValidationHelper;

    /**
     * Class Publisher
     * @package KAASoft\Database\Entity\General
     */
    class Publisher extends DatabaseEntity implements JsonSerializable, Comparable {
        private $name;

        /**
         * Publisher constructor.
         * @param null $id
         */
        function __construct($id = null) {
            parent::__construct($id);
        }

        /**
         * @return array
         */
        public function getDatabaseArray() {
            return array_merge(parent::getDatabaseArray(),
                               [ "name" => $this->name ]);
        }

        /**
         * @param array $databaseArray
         * @return Publisher to restore form databaseArray
         */
        public static function getObjectInstance(array $databaseArray) {
            $author = new Publisher(ValidationHelper::getNullableInt($databaseArray["id"]));
            $author->setName(ValidationHelper::getString($databaseArray["name"]));

            return $author;
        }


        /**
         * @return array
         */
        public static function getDatabaseFieldNames() {
            return array_merge(parent::getDatabaseFieldNames(),
                               [ KAASoftDatabase::$PUBLISHERS_TABLE_NAME . ".name" ]);
        }

        /**
         * (PHP 5 &gt;= 5.4.0)<br/>
         * Specify data which should be serialized to JSON
         * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
         * @return mixed data which can be serialized by <b>json_encode</b>,
         * which is a value of any type other than a resource.
         */
        function jsonSerialize() {
            return $this->getDatabaseArray();
        }

        /**
         * @param $other
         * @return bool
         */
        public function compareTo($other) {
            return $other instanceof Publisher and strcasecmp($other->getName(),
                                                              $this->name) === 0;
        }

        /**
         * @return mixed
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name) {
            $this->name = $name;
        }
    }