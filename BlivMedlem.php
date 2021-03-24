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

<main role="main" class="container-fluid">
    <!-- Her skal sidens indhold ligge -->
    <img src="./images/pic.png" class="img-fluid" alt="Responsive image">
    <div class="signup">
        <div class="text">
            <h1>Bliv Medlem</h1>
            <p>Når du bliver medlem, betaler du et månedligt kontingent på 99 kr, dette beløb vil gå til LIONS Club.
                Alle disse midler går ubeskåret til velgørende formål, det være både til LIONS Danmark og til lokalklubben.
                Når man er fuldgyldig medlem af klubben, deltager man i bestyrelsesmøderne og kan vælge bestyrelsesmedlemmer på generalforsamlingen.</p>
            <h1>Bliv Medhjælper</h1>
            <p>Som medhjælper tilbyder man sin hjælp ved salg af lotteri, tombola og øvrige aktiviteter, der udløser donationer til klubben.
                Samtidig får man tilbudt at blive medlem af vores aktivitetsudvalg, festudvalg o.lign. BEMÆRK at ingen af vores midler går til administration.</p>
            <h1>Ungeudvalg</h1>
            <p>Som en del af LIONS Danmark, har vi et ungeudvalg, for at blive en del af det skal du være under 40 år og have interesse for velgørenhed.
                Det eneste du skal gøre er at melde dig til som medhjælper, så klare vi resten.</p>
        </div>
        <figure class="multi">
            <section class="choice">
                <p><strong>Medlem:</strong> Du kan blive medlem af LIONS CLUB for 99kr. pr. måned</p>
            </section>
            <section class="choice">
                <p><strong>Medhjælper:</strong> Du kan blive medhjælper helt gratis</p>
            </section>
            <section class="choice">
                <p><strong>Ungeudvalg:</strong> Bliv en del af ungeudvalget</p>
            </section>
            <div class="btns">
                <button type="button" class="btn btn-primary">Bekræft</button>
                <button type="button" class="btn btn-secondary">Afvis</button>
            </div>
        </figure>
        <a href="BlivMedlem.php" class="nodecor">
            <button class="btn btn-info text-black" type="button" >BLIV SPONSOR</button>
        </a>
    </div>
</main>

<?php include 'footer.php'; ?>
</body>

</html>
