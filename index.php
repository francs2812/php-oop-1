
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title> 
</head>
<body>
    <?php 
        include __DIR__ . "/class/movie.php"; 

        $movie1 = new Movie("Arrow 1", "2012 ", "23 puntate","Greg Berlanti", "La prima stagione della serie televisiva Arrow è stata trasmessa sul canale statunitense The CW dal 10 ottobre 2012 al 15 maggio 2013. Nel finale di stagione Colin Donnell esce dal cast della serie. In Italia è stata trasmessa in anteprima assoluta su Italia 1 dall'11 marzo al 27 maggio 2013.");

        $movie2 = new Movie("Arrow 3", "2014 ", "23 puntate","Greg Berlanti", "La terza stagione della serie televisiva Arrow è stata trasmessa in prima visione assoluta negli Stati Uniti d'America da The CW a partire dall'8 ottobre 2014 al 13 maggio 2015. John Barrowman entra nel cast principale della serie, mentre durante questa stagione ne esce Colton Haynes.");

        $movie3 = new Movie("Arrow 4", "2015 ", "23 puntate","Greg Berlanti", "La quarta stagione della serie televisiva Arrow è stata trasmessa in prima visione assoluta negli Stati Uniti d'America da The CW a partire dal 7 ottobre 2015 al 25 maggio 2016. Alla fine di questa stagione John Barrowman e Katie Cassidy lasciano la serie. Colton Haynes riappare come guest star.");

        
    ?>
    <h1>Film</h1>
    <div class="container">
        <img src='img/<?= $movie1->cover_costruct();?>' alt="" >
        <div class="text">
            <h2>
                <?= $movie1->title; ?>
            </h2>
            <p>
                <?= $movie1->years; ?>
            </p>
            <p>
                <?= $movie1->duration; ?>
            </p>
            <p>
                <?= $movie1->author; ?>
            </p>
            <p>
                <?= $movie1->description; ?>
            </p>
        </div>
    </div>

    <div class="container">
        <img src='img/<?= $movie2->cover_costruct();?>' alt="" >
        <div class="text">
            <h2>
                <?= $movie2->title; ?>
            </h2>
            <p>
                <?= $movie2->years; ?>
            </p>
            <p>
                <?= $movie2->duration; ?>
            </p>
            <p>
                <?= $movie2->author; ?>
            </p>
            <p>
                <?= $movie2->description; ?>
            </p>
        </div>
    </div>
    <div class="container">
        <img src='img/<?= $movie3->cover_costruct();?>' alt="" >
        <div class="text">
            <h2>
                <?= $movie3->title; ?>
            </h2>
            <p>
                <?= $movie3->years; ?>
            </p>
            <p>
                <?= $movie3->duration; ?>
            </p>
            <p>
                <?= $movie3->author; ?>
            </p>
            <p>
                <?= $movie3->description; ?>
            </p>
        </div>
    </div>
    

    </body>
</html>