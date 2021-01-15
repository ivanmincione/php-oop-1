<!-- è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

    class Movie {
        public $title
        public $originalTitle
        public $year
        public $genre
        public $originalLang


        function __construct($_title, $_year) {
            $this->title = $_title;
            $this->year = $_year;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }

    }

    $title = new Movie("Avengers", "2015");
    echo "<p> Titolo :" . $title->getTitle() . "<p>"
?>
