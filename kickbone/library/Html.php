<?php
    class Html {
        private static $inited = false;

        private static function init() {
            if(self::$inited) {
                return;
            }
            self::$inited = true;
        }

        public static function comment($text) {
            return "<!-- $text -->";
        }

        public static function tag($element, $attributes = array(), $content = '', $self_closing = false) {
            $start = '<' . $element;
            $end = $self_closing ? ' />' : '</' . $element . '>';
            $attr = ' ';
            foreach($attributes as $key => $value) {
                $attr .= $key . '="' . $value . '" ';
            }
            if($self_closing) {
                return $start . $attr . $end;
            } else {
                return $start . $attr . '>' . $content . $end;
            }

        }

    }
