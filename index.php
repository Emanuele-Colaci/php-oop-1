<?php 

    include './models/movie.php';

    include './db.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Movie</title>
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4">Lista dei film</h1>
            
            <div class="row">
                <?php foreach ($movies as $movie){ ?>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->title; ?></h5>
                                <p class="card-text"><strong>Direttore:</strong> <?php echo $movie->director; ?></p>
                                <p class="card-text"><strong>Anno di pubblicazione:</strong> <?php echo $movie->releaseYear; ?></p>
                                <!-- Utilizziamo implode() per unire gli elementi dell'array dei generi in una stringa -->
                                <p class="card-text"><strong>Generi:</strong> <?php echo implode(", ", $movie->genres); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </body>
</html>