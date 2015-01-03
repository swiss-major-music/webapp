<?php
    class KickboneController {
        private $view;
        private $action;
        public $model;
        private $viewbag = array();

        function __construct($model) {
            $this->model = $model;
            $this->set('title', DEFAULT_VIEW_TITLE);
        }

        public function register($view, $action) {
            $this->view = $view;
            $this->action = $action;
        }

        public function template($template) {
            if($template != null) {
                $this->action = $template;
            }
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
            $data = array_merge($data, $this->model->data);
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
            $this->register(default_action(), default_action());
        }

        public function ErrorAction() {
            $this->register('error', 'index');
            $this->set('title', 'Oops..');
        }

        function __destruct() {
            $this->render();
        }
    }
