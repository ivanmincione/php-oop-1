<!-- è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

    class Movie {
        public $title;
        public $originalTitle;
        public $year;
        public $genre;
        public $originalLang;


        function __construct($_title, $_year, $_originalLang) {
            $this->title = $_title;
            $this->year = $_year;
            $this->originalLang = $_originalLang;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }

        public function getLang() {
            return $this->originalLang;
        }

    }


    $padrino = new Movie("Il Padrino", "1972", "English");
    echo "<h1> Titolo : " . $padrino->getTitle() . "</h1>";
    echo "<p> Anno produzione : " . $padrino->getYear() . "</p>";
    echo "<p> Lingua originale : " . $padrino->getLang() . "</p>";

    $avengers = new Movie("Avengers", "2015", "English");
    echo "<h1> Titolo : " . $avengers->getTitle() . "</h1>";
    echo "<p> Anno produzione : " . $avengers->getYear() . "</p>";
    echo "<p> Lingua originale : " . $avengers->getLang() . "</p>";

?>
