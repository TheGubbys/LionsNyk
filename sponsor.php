<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sponsor</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
<?php include 'header.php'; ?>
<div class="container">
    <!-- Content here -->
    <div class="row">
        <img src="images/main.PNG" alt="main">
    </div>
    <div class="row">
        <div class="col-12">
            <img src="images/white.PNG" alt="white">
        </div>
    </div>
    <div class="row">
        <div class="col-5">

        </div>
        <div class="col-2">
           <div>
               <input type="submit" value="        BLIV   SPONSOR        ">
           </div>
        </div>
        <div class="col-5">

        </div>


    </div>

    <div class="row">
        <div class="col-12">
            <img src="images/white.PNG" alt="white">
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-md-6 col-xl-6">
           <div class="">
               <p>Som sponsor kan du selv bestemme hvor meget du vil donere til klubben,
                   der vil ikke ses forskelligt på sponsorerne udfra hvor meget de hjælper til med donationer.
                   Alt er sat pris på og betyder meget for os. </p>

           </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <img src="images/sponsor.PNG" alt="sponsor">
        </div>
    </div>



    <div class="row">
        <div class="col-5 col-md-1 col-xl-1">

        </div>
        <div class="col-2">
            <div>
                <input type="submit" value="        Doner        ">
            </div>
        </div>
        <div class="col-5 col-md-1 col-xl-1">

        </div>


        <div class="col-5 col-md-1 col-xl-1">

        </div>
        <div class="col-2">
            <div>
                <input type="submit" value="        Respons    ">
            </div>
        </div>
        <div class="col-5 col-md-1 col-xl-1">

        </div>




    </div>


<!-- den før
    <div class="row">


        <div class="col-12 col-md-3 col-xl-3">
            <div>
                <input type="submit" value="        Doner        ">
            </div>
        </div>

        <div class="col-12 col-md-1 col-xl-1">

        </div>




        <div class="col-12 col-md-3 col-xl-3">
            <div>
                <input type="submit" value="        Respons        ">
            </div>
        </div>




    </div> -->





</div>



</body>
</html>
