<?php
    class KickboneController {
        private $view;
        private $action;
        private $model;
        private $viewbag = array();

        function __construct() {
            $this->set('title', DEFAULT_VIEW_TITLE);
        }

        public function register($view, $action) {
            $this->view = $view;
            $this->action = $action;
        }

        public function set_model($model) {
            $this->model = $model;
        }

        private function require_view_path() {
            return APP_VIEW_PATH . $this->view . DS;
        }

        public function set($key, $value) {
            $this->viewbag[$key] = $value;
        }

        public function render($data = array()) {
            $data = array_merge($data, $this->viewbag);
            if(file_exists($this->require_view_path() . 'head.php')) {
                require_once($this->require_view_path() . 'head.php');
            } else {
                require_once(APP_VIEW_PATH . 'head.php');
            }
            require_once($this->require_view_path() . $this->action . '.php');
            if(file_exists($this->require_view_path() . 'foot.php')) {
                require_once($this->require_view_path() . 'foot.php');
            } else {
                require_once(APP_VIEW_PATH . 'foot.php');
            }
        }

        public function DefaultAction() {
            $this->register('error', 'index');
        }

        function __destruct() {
            $this->render();
        }
    }
