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

$inception = new Movie ('Inception', '2010', '148', 'Action', 'setIMDBrating');

var_dump($inception);

$la_la_land = new Movie ('La La Land', '2016', '128', 'Musical', 'setIMDBrating');

var_dump($la_la_land);

$signore_anelli = new Movie ('Il Signore degli Anelli: Il Ritorno del Re', '2003', '201', 'Fantasy', 'setIMDBrating');

var_dump($signore_anelli);

$interstellar = new Movie ('Interstellar', '2014', '169', 'Adventure', 'setIMDBrating');

var_dump($interstellar);

$pulp_fiction = new Movie ('Pulp Fiction', '1994', '154', 'Thriller', 'setIMDBrating');

var_dump($pulp_fiction);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="container">
            <div class="movie">
                <?php echo $inception -> title, ', ', $inception -> year, ', ', $inception -> length, ', ', $inception -> genre, ', ', $inception -> IMDBrating; ?>
            </div>
            <div class="movie">
                <?php echo $la_la_land -> title, ', ', $la_la_land -> year, ', ', $la_la_land -> length, ', ', $la_la_land -> genre, ', ', $la_la_land -> IMDBrating; ?>
            </div>
            <div class="movie">
                <?php echo $signore_anelli -> title, ', ', $signore_anelli -> year, ', ', $signore_anelli -> length, ', ', $signore_anelli -> genre, ', ', $signore_anelli -> IMDBrating; ?>
            </div>
            <div class="movie">
                <?php echo $interstellar -> title, ', ', $interstellar -> year, ', ', $interstellar -> length, ', ', $interstellar -> genre, ', ', $interstellar -> IMDBrating; ?>
            </div>
            <div class="movie">
                <?php echo $pulp_fiction -> title, ', ', $pulp_fiction -> year, ', ', $pulp_fiction -> length, ', ', $pulp_fiction -> genre, ', ', $pulp_fiction -> IMDBrating; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>