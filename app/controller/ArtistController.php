<?php
class ArtistController extends KickboneController {
    public function IndexAction($args = array()) {

    }

    public function ViewAction($args = array()) {
        $artist = $this->model->get('artist');
        if($artist == null) {
            $this->ErrorAction();
            $this->set('status', '404');
            $this->set('description', "The artist $args[0] was not found.");
            return;
        }
        $this->template('details');
        $this->set('title', $artist['artistname']);
        $this->set('artistname', $artist['artistname']);
        $this->set('bio', $artist['description']);
    }
}
