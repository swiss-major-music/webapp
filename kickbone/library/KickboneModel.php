<?php
    class KickboneModel {
        public $data = array();
        private $args;

        function __construct($route = array()) {
            $this->arguments = $route;
        }

        public function set($key, $value) {
            $this->data[$key] = $value;
        }

        public function get($key) {
            return $this->data[$key];
        }
    }
