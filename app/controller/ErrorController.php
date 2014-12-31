<?php
    class ErrorController extends KickboneController {
        public function IndexAction($args = array()) {
            $this->render(array(
                'title' => 'Oops...',
                'status' => $args['code'],
                'description' => $args['message']
            ));
        }
    }
