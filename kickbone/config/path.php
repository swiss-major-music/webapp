<?php
    if(!defined('APP_CONFIG_PATH')) {
        define('APP_CONFIG_PATH', APPROOT . 'config' . DS);
    }

    if(!defined('APP_CONTROLLER_PATH')) {
        define('APP_CONTROLLER_PATH', APPROOT . 'controller' . DS);
    }

    if(!defined('APP_MODEL_PATH')) {
        define('APP_MODEL_PATH', APPROOT . 'model' . DS);
    }

    if(!defined('APP_VIEW_PATH')) {
        define('APP_VIEW_PATH', APPROOT . 'view' . DS);
    }

    if(!defined('APP_TEMP_PATH')) {
        define('APP_TEMP_PATH', APPROOT . 'temp' . DS);
    }

    if(!defined('APP_LOG_PATH')) {
        define('APP_LOG_PATH', APP_TEMP_PATH . 'log' . DS);
    }

    if(!defined('APP_ASSET_PATH')) {
        define('APP_ASSET_PATH', WEBROOT . 'assets' . DS);
    }

    if(!defined('APP_MEDIA_PATH')) {
        define('APP_MEDIA_PATH', WEBROOT . 'media' . DS);
    }
