<?php
    function write_error($str) {
        $error_logger = new Logger(APP_LOG_PATH . 'error.log');
        $error_logger->write($str);
    }
