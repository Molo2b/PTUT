<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DUNS - Article</title>
    <meta name="description" content="Description site DUENES">
    <meta name="keywords" content="mots clef associe a duenes">
    <link rel="stylesheet" type="text/css" href="public/reset.css">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <script src="public/bundle.js"></script>
</head>

<body>

<?php include('nav.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="left-nav col-3">
            <div class="ml-3">
                <h2 class="ml-3"><span class="hightlight">Article<span></h2>
                <nav>
                    <ul>
                        <li class="nav-item active">
                            <a class="nav-link blue uppercase" href="#">Actualités<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="#">Publication</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="ml-5 col-8 p-nav">
            <div class="row no-gutters mb-5 justify-content-around">
                <h2 class="filter mr-3">Toutes</h2>
                <h2 class="filter mr-3">Conférences</h2>
                <h2 class="filter mr-3">Simulation</h2>
            </div>

            <div class="row no-gutters justify-content-between">
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article1.jpg">
                        <div class="position-relative">
                            <time class="background-white "><span>13 JAN 2020</span></time>
                        </div>
                    <h4 class="mt-5">Outil Screenshot pour effectuer des captures d’écrans </h4>
                </article>
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article2.jpg">
                    <div class="position-relative">
                            <time class="background-white "><span>02 FEV 2020</span></time>
                        </div>
                    <h4 class="mt-5">Modèle de ponction lombaire</h4>
                </article>
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article3.jpg">
                        <div class="position-relative">
                            <time class="background-white "><span>21 oct 2020</span></time>
                        </div>
                    <h4 class="mt-5">Séminaire de pédagogie médicale CCA-AHU </h4>
                </article>
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article1.jpg">
                        <div class="position-relative">
                            <time class="background-white "><span>13 JAN 2020</span></time>
                        </div>
                    <h4 class="mt-5">Outil Screenshot pour effectuer des captures d’écrans </h4>
                </article>
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article2.jpg">
                    <div class="position-relative">
                            <time class="background-white "><span>02 FEV 2020</span></time>
                        </div>
                    <h4 class="mt-5">Modèle de ponction lombaire</h4>
                </article>
                <article class="col-4 mb-5">
                    <img class="w-100" alt="image article" src="assets/img/article3.jpg">
                        <div class="position-relative">
                            <time class="background-white "><span>21 oct 2020</span></time>
                        </div>
                    <h4 class="mt-5">Séminaire de pédagogie médicale CCA-AHU </h4>
                </article>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 text-center">
                    <a class="a-txt m-auto blue">1</a>
                    <a class="a-txt m-auto blue">2</a>
                    <a class="a-txt m-auto blue">3</a>
                </div>    
            </div>
        </section>
</body>
<?php include('footer.php'); ?>
</html>
