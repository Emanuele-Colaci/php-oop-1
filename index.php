<?php 
    class Movie{ 
        public $title;
        public $director;
        public $releaseYear;

        public function __construct($title, $director, $releaseYear) {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
        }

    }

?>