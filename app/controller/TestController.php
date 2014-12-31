<?php
    class TestController extends KickboneController {
        public function IndexAction() {
            $this->render(array(
                'title' => 'Test > Home'
            ));
        }

        public function TestAction($param = array()) {
            $this->render(array(
                'title' => 'Testpage > Test'
            ));
        }
    }
