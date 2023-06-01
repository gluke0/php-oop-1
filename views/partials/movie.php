<?php

include_once __DIR__ . '/../../models/movie.php'

?>

<main>

<div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) {?>
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

</main>