<?php
    require_once(BASE . 'kickbone' . DS . 'config' . DS .'config.php');
    require_once(KICKBONE_ROOT . 'config' . DS . 'path.php');
    require_once(APP_CONFIG_PATH . 'application.php');
    require_once(KICKBONE_ROOT . 'library' . DS . 'action.php');
    require_once(KICKBONE_ROOT . 'library' . DS . 'error.php');
    require_once(KICKBONE_ROOT . 'library' . DS . 'access.php');
    require_once(KICKBONE_ROOT . 'library' . DS . 'frontend.php');

    function __autoload($class_name) {
        if(file_exists(APPROOT . 'controller' . DS . $class_name . '.php')) {
            require_once(APPROOT . 'controller' . DS . $class_name . '.php');
        } else if(file_exists(APPROOT . 'view' . DS . $class_name . '.php')) {
            require_once(APPROOT . 'view' . DS . $class_name . '.php');
        } else if(file_exists(APPROOT . 'model' . DS . $class_name . '.php')) {
            require_once(APPROOT . 'model' . DS . $class_name . '.php');
        } else if(file_exists(KICKBONE_ROOT . 'library' . DS . $class_name . '.php')) {
            require_once(KICKBONE_ROOT . 'library' . DS . $class_name . '.php');
        } else {
            $ctrl = new ErrorController();
            $ctrl->register('error', 'index');
            $ctrl->IndexAction(array(
                'code' => '500',
                'message' => "Sorry but there went something wrong. Have you really entered the right URL?"
            ));
            write_error("Classfile $class_name could not be loaded with __autoload");
            return;
        }
    }

    function kickbone_hook() {
        global $url;

        $route = explode('/', rtrim($url, '/'));

        $raw_controller = empty($route) ? default_action() : array_shift($route);
        $str_controller = ucfirst($raw_controller) . 'Controller';
        $str_model = ucfirst($raw_controller) . 'Model';

        $raw_action = empty($route) ? default_action() : array_shift($route);
        $str_action = ucfirst($raw_action) . 'Action';

        if(!class_exists($str_controller)) {
            $ctrl = new ErrorController();
            $ctrl->register('error', 'index');
            $ctrl->IndexAction(array(
                'code' => '404',
                'message' => "The page $raw_controller does not exist"
            ));
            write_error('Couldn\'t find class file for ' . $str_controller . ' in bootstrap.php');
            return;
        }
        if(!class_exists($str_model)) {
            $ctrl = new ErrorController();
            $ctrl->register('error', 'index');
            $ctrl->IndexAction(array(
                'code' => '404',
                'message' => "The data for $raw_controller couldn't be found"
            ));
            write_error('Couldn\'t find class file for ' . $str_model . ' in bootstrap.php');
            return;
        }
        $ctrl = new $str_controller(new $str_model($route));
        $ctrl->register($raw_controller, $raw_action);
        if(!method_exists($ctrl, $str_action)) {
            $ctrl->DefaultAction();
        } else {
            $ctrl->$str_action($route);
        }
    }

    function kickbone_header() {
        Assets::render_styles();
        render_meta();
        render_icon();
    }

    function set_reporting() {
        if (DEV_ENV == true) {
            error_reporting(E_ALL);
            ini_set('display_errors', 'On');
        } else {
            error_reporting(E_ALL);
            ini_set('display_errors', 'Off');
            ini_set('log_errors', 'On');
            ini_set('error_log', KICKBONE_ROOT . 'temp' . DS . 'log' . DS . 'error.log');
        }
    }

    header('X-Kickbone-Version: ' . KICKBONE_VERSION);
