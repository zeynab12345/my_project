<?php
    /**
     * Copyright (c) 2015 - 2018 by KAA Soft. All rights reserved.
     */

    /**
     * Created by KAA Soft.
     * Date: 2018-07-14
     */


    namespace KAASoft\Util;


    use RuntimeException;

    class FileStreamer {
        private $filePath;
        private $fileName;
        private $boundary;
        private $fileSize = 0;

        function __construct($filePath) {
            set_time_limit(0);

            if (!is_file($filePath)) {
                throw  new RuntimeException(_("File is not found."));
            }

            $this->fileSize = filesize($filePath);
            $this->filePath = fopen($filePath,
                                    "r");
            $this->boundary = md5($filePath);
            $this->fileName = basename($filePath);
        }

        public function send() {
            $ranges = null;
            $range = null;
            $rangeCount = 0;

            // if request file by parts
            if (isset( $_SERVER['HTTP_RANGE'] ) && $range = stristr(trim($_SERVER['HTTP_RANGE']),
                                                                    'bytes=')
            ) {
                $range = substr($range,
                                6);
                $ranges = explode(',',
                                  $range);
                $rangeCount = count($ranges);
            }
            header("Accept-Ranges: bytes");
            header("Content-Type: application/octet-stream");
            header("Content-Transfer-Encoding: binary");
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header(sprintf('Content-Disposition: attachment; filename="%s"',
                           $this->fileName));
            if ($rangeCount > 0) {
                header("HTTP/1.1 206 Partial content");
                $rangeCount === 1 ? $this->pushSingle($range) : $this->pushMulti($ranges);
            }
            else {
                header("Content-Length: " . $this->fileSize);
                $this->readFile();
            }
            flush();
        }

        private function pushSingle($range) {
            $start = $end = 0;
            $this->getRange($range,
                            $start,
                            $end);
            header("Content-Length: " . ( $end - $start + 1 ));
            header(sprintf("Content-Range: bytes %d-%d/%d",
                           $start,
                           $end,
                           $this->fileSize));
            fseek($this->filePath,
                  $start);
            $this->readBuffer($end - $start + 1);
            $this->readFile();
        }

        private function pushMulti($ranges) {
            $length = $start = $end = 0;

            $tl = "Content-type: application/octet-stream\r\n";
            $formatRange = "Content-range: bytes %d-%d/%d\r\n\r\n";
            foreach ($ranges as $range) {
                $this->getRange($range,
                                $start,
                                $end);
                $length += strlen("\r\n--$this->boundary\r\n");
                $length += strlen($tl);
                $length += strlen(sprintf($formatRange,
                                          $start,
                                          $end,
                                          $this->fileSize));
                $length += $end - $start + 1;
            }
            $length += strlen("\r\n--$this->boundary--\r\n");
            header("Content-Length: $length");
            header("Content-Type: multipart/x-byteranges; boundary=$this->boundary");
            foreach ($ranges as $range) {
                $this->getRange($range,
                                $start,
                                $end);
                echo "\r\n--$this->boundary\r\n";
                echo $tl;
                echo sprintf($formatRange,
                             $start,
                             $end,
                             $this->fileSize);
                fseek($this->filePath,
                      $start);
                $this->readBuffer($end - $start + 1);
            }
            echo "\r\n--$this->boundary--\r\n";
        }

        private function getRange($range, &$start, &$end) {
            list( $start, $end ) = explode('-',
                                           $range);
            $fileSize = $this->fileSize;
            if ($start == '') {
                $tmp = $end;
                $end = $fileSize - 1;
                $start = $fileSize - $tmp;
                if ($start < 0) {
                    $start = 0;
                }
            }
            else {
                if ($end == '' || $end > $fileSize - 1) {
                    $end = $fileSize - 1;
                }
            }
            if ($start > $end) {
                header("Status: 416 Requested range not satisfiable");
                header("Content-Range: */" . $fileSize);
                exit();
            }

            return array( $start,
                          $end );
        }

        private function readFile() {
            while (!feof($this->filePath)) {
                echo fgets($this->filePath);
                flush();
                // sleep(3);
            }
        }

        private function readBuffer($bytes, $size = 1024) {
            $bytesLeft = $bytes;
            while ($bytesLeft > 0 && !feof($this->filePath)) {
                $bytesLeft > $size ? $bytesRead = $size : $bytesRead = $bytesLeft;
                $bytesLeft -= $bytesRead;
                echo fread($this->filePath,
                           $bytesRead);
                flush();
                // sleep(3);
            }
        }
    }