<?php
    require_once('../app/webroot/index.php');
    require_once(BASE . 'kickbone' . DS . 'config' . DS . 'path.php');
    require_once(BASE . 'kickbone' . DS . 'library' . DS .'KickbonePlugin.php');

    /**
     * A short description of your plugin
     * @author Your Name <your@name.com>
     * @version 0.0.0
     * @license MIT Licensed
     */
    class PluginTemplate extends KickbonePlugin {
        private $author = 'Your Name';
        private $version = '0.0.0';
        private $description = 'My short description';

        function __construct() {
            parent::__construct($this->author, $this->version, $this->description);
        }
    }
