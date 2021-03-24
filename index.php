<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Lions Nykøbing</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/memberstyles.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'header.php'; ?>

<main role="main" class="container-fluid w-75">
    <!-- Her skal sidens indhold ligge -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slideshow1.jpg" class="d-block w-100" alt="slideshow images 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TOGETHER</h5>
                    <p>WE SERVE</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slideshow2.jpg" class="d-block w-100" alt="slideshow images 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TOGETHER</h5>
                    <p>WE HELP</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slideshow3.jpg" class="d-block w-100" alt="slideshow image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TOGETHER</h5>
                    <p>WE LIVE</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="text">
        <h1>Vi er Lions Nykøbing</h1>
        <p>Ønsker du at lære mere om hvem vi er, så klik her</p>
        <a href="om%20lions.php" class="nodecor">
            <button class="btn btn-info text-black" type="button" >Om Lions</button>
        </a>
        <h1>Bliv Medlem</h1>
        <p>Ønsker du at blive medlem, og støtte Lions samt det vi står for, så klik her.</p>
        <a href="BlivMedlem.php" class="nodecor">
            <button class="btn btn-info text-black" type="button" >Bliv Medlem</button>
        </a>
    </div>
</main>

<?php include 'footer.php'; ?>
</body>

</html>
