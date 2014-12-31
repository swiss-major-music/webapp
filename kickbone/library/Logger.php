<?php
    class Logger {
        private $file;

        function __construct($file = null) {
            if($file != null) {
                $this->file = $file;
            }
        }

        private function stamp() {
            return '[' . date('m/d/Y h:i:s') . ']';
        }

        public function write($str = '') {
            file_put_contents($this->file, $this->stamp() . ': ' . $str . "\n", FILE_APPEND | LOCK_EX);
        }
    }
