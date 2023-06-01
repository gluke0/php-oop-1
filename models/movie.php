<?php

class Movie{
    public $title;
    public $year;
    public $length;
    public $genre;
    public $IMDBrating;

    public function setIMDBrating(){
        $this-> IMDBrating = rand(0, 10);
    }

    public function __construct($title, $year, $length, array $genre){
        $this-> title = $title;
        $this-> year = $year;
        $this-> length = $length;
        $this-> genre = $genre;
        $this-> setIMDBrating();
    }
}

$inception = new Movie ('Inception', '2010', '148', ['Action','Science Fiction']);
$la_la_land = new Movie ('La La Land', '2016', '128', ['Musical', 'Romance', 'Drama']);
$signore_anelli = new Movie ('Il Signore degli Anelli: Il Ritorno del Re', '2003', '201', ['Fantasy', 'Adventure', 'Action']);
$interstellar = new Movie ('Interstellar', '2014', '169', ['Adventure', 'Science Fiction', 'Drama']);
$pulp_fiction = new Movie ('Pulp Fiction', '1994', '154', ['Thriller', 'Crime', 'Drama']);

$movies = [$inception, $la_la_land, $signore_anelli, $interstellar, $pulp_fiction]

?>