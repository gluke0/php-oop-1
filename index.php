<?php

class Movie{
    public $title;
    public $year;
    public $length;
    public $genre;
    public $IMDBrating;

    function __construct($title, $year, $length, $genre, $IMDBrating,){
        $this-> title = $title;
        $this-> year = $year;
        $this-> length = $length;
        $this-> genre = $genre;
        $this-> IMDBrating = $IMDBrating;

    }

}

$gladiatore = new Movie ('gladiatore', '2000', '300min', 'action', '4/5');

var_dump($gladiatore);

?>