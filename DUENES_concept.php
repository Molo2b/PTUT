<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DUENES - Concept</title>
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
                <h2 class="ml-3"><span class="hightlight">DUENES<span></h2>
                <nav>
                    <ul>
                        <li class="nav-item active">
                            <a class="nav-link blue uppercase" href="DUENES_quiSommesNous.php">Qui sommes nous<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="DUENES_concept.php">Concept</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="DUENES_equipe.php">Equipe</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="col-9 p-nav">
            <div class="row align-items-center">
                <div class="offset-1 col-6 background-white p-5">
                    <h2>Concept</h2>
                    <p><em>DUNS à été créé pour réponse à l’augmentation de l’utilisation des outils numériques dans les formations en santé.</em></p>
                    <p class="mb-5">Notre objectif est de vous permettre de faire face aux  nouvelles évolutions pédagogiques en cours et aux  nouvelles attentes technologiques des étudiants.  Ainsi que  des conseils dans l’élaboration de vos ressources pédagogiques numériques.</p>
                </div>
                <div class="col-4 mr-auto pl-0 ml-m5 line dots-r">
                    <img class="img-responsive" src="assets/img/quiSommesNous.png" alt="présentation DUENES">
                </div>
            </div>
            <div class="row">
                <div class="offset-1 col-3 background-blue sub-container">
                    <h2>Les + du concept</h2>
                </div>
                <div class="offset-1 col-6">
                    <div class="row pt-4">
                        <div class="col-6 p-3">
                            <img alt="" src="assets/img/cap.svg">
                            <h4>Nouvelle approche auprès des étudiants</h4>
                        </div>
                        <div class="col-6 p-3">
                            <img alt="" src="assets/img/desktop.svg">
                            <h4>Une multitude de ressources numériques.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
<?php include('footer.php'); ?>
</html>
