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
        
        public function getInfo(){
            // Utilizziamo implode() per unire gli elementi dell'array dei generi in una stringa
            return "Titolo: " . $this->title . ", Direttore: " . $this->director . ", Anno di pubblicazione: " . $this->releaseYear. ", Generi: " . implode(", ", $this->genres);
        }
        
    }
    
    // Istanzia il primo oggetto Movie
    $movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, ["Mafia", "Giallo", "Drammatico"]);
    
    // Istanzia il secondo oggetto Movie
    $movie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Commedia", "Thriller", "Drammatico"]);

    // Stampa le proprietà del primo oggetto Movie
    echo "Proprietà del primo film:<br>";
    echo $movie1->getInfo() . "<br>";

    // Stampa le proprietà del secondo oggetto Movie
    echo "Proprietà del secondo film:<br>";
    echo $movie2->getInfo() . "<br>";

?>