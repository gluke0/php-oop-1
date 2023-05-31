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

    function __construct($title, $year, $length, array $genre, $IMDBrating,){
        $this-> title = $title;
        $this-> year = $year;
        $this-> length = $length;
        $this-> genre = $genre;
        $this-> setIMDBrating();

    }

}

$inception = new Movie ('Inception', '2010', '148', ['Action','Science Fiction'], 'setIMDBrating');

$la_la_land = new Movie ('La La Land', '2016', '128', ['Musical', 'Romance', 'Drama'], 'setIMDBrating');

$signore_anelli = new Movie ('Il Signore degli Anelli: Il Ritorno del Re', '2003', '201', ['Fantasy', 'Adventure', 'Action'], 'setIMDBrating');

$interstellar = new Movie ('Interstellar', '2014', '169', ['Adventure', 'Science Fiction', 'Drama'], 'setIMDBrating');

$pulp_fiction = new Movie ('Pulp Fiction', '1994', '154', ['Thriller', 'Crime', 'Drama'], 'setIMDBrating');

// var_dump($inception, $la_la_land, $signore_anelli, $interstellar, $pulp_fiction);

$movies = [$inception, $la_la_land, $signore_anelli, $interstellar, $pulp_fiction]

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

    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie): {?>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $movie->title; ?></h4>
                            <p class="card-text"><strong> Year: </strong> <?php echo $movie-> year; ?> </p>
                            <p class="card-text"><strong> Duration: </strong> <?php echo $movie-> length; ?> minutes </p>
                            <p class="card-text"><strong> Genre: </strong> <?php echo implode(', ', $movie-> genre); ?></p>
                            <p class="card-text"><strong> IMDB Rating: </strong> <?php echo $movie-> IMDBrating; ?> </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>