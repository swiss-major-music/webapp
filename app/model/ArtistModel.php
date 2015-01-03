<?php
    class ArtistModel extends KickboneModel {
        private $database;
        public $data;

        function __construct($args) {
            $this->database = new KickboneDatabase();
            
            $this->database->where('artistname', $args[0]);
            $artist = $this->database->getOne('artists');

            $this->set('artist', $artist);
        }
    }
