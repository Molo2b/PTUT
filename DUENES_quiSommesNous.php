<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DUENES - Qui sommes nous</title>
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
                            <a class="nav-link blue uppercase" href="#">Equipe</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="col-9 p-nav">
            <div class="row align-items-center">
                <div class="offset-1 col-6 background-white p-5">
                    <h2>Qui sommes-nous</h2>
                    <p><em>DUNS à été créé pour réponse à l’augmentation de l’utilisation des outils numériques dans les formations en santé.</em></p>
                    <p class="mb-5">DUNS est le Département Universitaire Numérique en Santé qui s’est mis en place en 2014 afin d’accompagner l’ensemble des professionnels du secteur santé à l’Université de Paris et de simplifier la création de 
projets pédagogiques et numériques dans ce domaine.</p>
                </div>
                <div class="col-4 mr-auto pl-0 ml-m5 line dots">
                    <img class="img-responsive" src="assets/img/quiSommesNous.png" alt="présentation DUENES">
                </div>
            </div>
        </section>
</body>
<?php include('footer.php'); ?>
</html>
