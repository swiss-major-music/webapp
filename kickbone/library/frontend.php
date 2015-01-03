<?php
    $frontend_config = json_decode(file_get_contents(WEBROOT . 'frontend.json'));

    function url($uri = '/', $absolute = false) {
        $http = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $host = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'] == '80' ? '' : $_SERVER['SERVER_PORT'];
        $uri = ($uri[0] == '/') ? substr($uri, 1) : $uri;
        if($absolute) {
            return $http . $host . ':' . $port . '/' . APP_SUBFOLDER . '/' . $uri;
        } else {
            return '/' . APP_SUBFOLDER . '/' . $uri;
        }
    }

    function media($url) {
        return url('app/webroot/media/' . $url);
    }

    function image($url) {
        return media('img/' . $url, false);
    }

    function icon($url) {
        return media('ico/' . $url, false);
    }

    function video($url) {
        return media('vid/' . $url, false);
    }

    function sound($url) {
        return media('sound/' . $url, false);
    }

    function render_meta() {
        global $frontend_config;
        foreach($frontend_config->meta->default as $key => $value) {
            echo Html::tag('meta', array(
                'name' => $key,
                'content' => $value
            ), null, true);
        }
        foreach($frontend_config->meta->custom as $custom => $pair) {
            echo Html::tag('meta', array(
                $custom => $pair->key,
                'content' => $pair->value
            ), null, true);
        }
    }

    function render_icon() {
        global $frontend_config;
        echo Html::tag('link', array(
            'rel' => 'shortcut icon',
            'href' => image($frontend_config->favicon),
            'type' => 'image/png'
        ));
    }

    function render($data, $value) {
        if(isset($data[$value]) && !empty($data[$value])) {
            return $data[$value];
        }
        return '';
    }
