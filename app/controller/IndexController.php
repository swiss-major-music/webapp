<?php
    class IndexController extends KickboneController {
        public function IndexAction($args = array()) {
            $this->set('title', 'Home');
        }
    }
