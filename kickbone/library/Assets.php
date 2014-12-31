<?php
    class Assets {
        private static $inited = false;
        private static $asset_path;
        private static $config;

        private static function init() {
            if(self::$inited) {
                return;
            }
            self::$asset_path = WEBROOT . 'assets' . DS;
            self::$config = json_decode(file_get_contents(self::$asset_path . 'assets.json'));
            self::$inited = true;
        }

        public static function render_styles() {
            self::init();
            foreach(self::$config->css as $css) {
                echo Html::tag('link', array(
                    'href' => url('/app/webroot/assets/css/' . $css),
                    'rel' => 'stylesheet'
                ), null, true);
            }
        }

        public static function render_scripts() {
            self::init();
            foreach(self::$config->js as $js) {
                echo Html::tag('script', array(
                    'src' => url('/app/webroot/assets/js/' . $js)
                ), null, false);
            }
        }
    }
