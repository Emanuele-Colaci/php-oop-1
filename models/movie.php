<?php

    class Movie{
        public $title;
        public $director;
        public $releaseYear;
        public $genres;

        public function __construct($title, $director, $releaseYear, $genres){
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
            $this->genres = $genres;
        }
    }

?>
