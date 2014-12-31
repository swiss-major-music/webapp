<?php
    if (!defined('DS')) {
    	define('DS', DIRECTORY_SEPARATOR);
    }

    if (!defined('BASE')) {
    	define('BASE', dirname(dirname(dirname(__FILE__))) . DS);
    }

    if(!defined('APPROOT')) {
        define('APPROOT', dirname(dirname(__FILE__)) . DS);
    }

    if(!defined('WEBROOT')) {
        define('WEBROOT', dirname(__FILE__) . DS);
    }

    if(!defined('DEV_ENV')) {
        define('DEV_ENV', true);
    }

    require_once(BASE . 'kickbone' . DS . 'bootstrap.php');
    $url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : 'index/index';


    set_reporting();

    if(ENABLE_TRACE) {
        trace_access();
    }

    kickbone_hook();
