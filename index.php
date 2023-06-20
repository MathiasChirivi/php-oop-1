<?php 

include "./db.php"

// $movie1 = new Movie("Tyler Rake", ["Azione, fantascienza"], 2020);
// echo $movie1->filmMovie() . "<br>";

// $movie2 = new Movie("Inception", ["Fantascienza, Azione"], 2015);
// echo $movie2->filmMovie() . "<br>";
// var_dump($movie)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
    <div class="container">
            <div class="row">
                <div class="col-auto m-auto p-4">
                    <h1 class="text-primary">Movies</h1>
                </div>
            </div>
        </div>
    </header>
    <main class="d-flex gap-3 p-3">
        <?php
        foreach ($movies as $movie) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo($movie->getCover()) ?>" class="card-img-top h-75">
                    <div class="card-body">
                        <h5 class="card-title"><strong> Nome FIlm:</strong> <?php echo ($movie->getName()) ?></h5>
                        <p class="card-text"><strong>Genere:</strong> <?php echo ($movie->getGenere()) ?> </p>
                        <p class="card-text"><strong>Anno Uscita:</strong> <?php echo ($movie->getYear()) ?> </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>