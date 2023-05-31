<?php

class Movie{
    public $title;
    public $year;
    public $length;
    public $genre;
    public $IMDBrating;

    public function setIMDBrating(){
        $this-> IMDBrating = rand(0, 5);
    }

    function __construct($title, $year, $length, $genre, $IMDBrating,){
        $this-> title = $title;
        $this-> year = $year;
        $this-> length = $length;
        $this-> genre = $genre;
        $this-> setIMDBrating();

    }

}

$gladiatore = new Movie ('gladiatore', '2000', '300min', 'action', 'setIMDBrating');

var_dump($gladiatore);

$pokemon = new Movie ('Pokemon', '1992', '120min', 'cartoon', 'setIMDBrating');

var_dump($pokemon);
?>