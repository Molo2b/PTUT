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
                <h2 class="ml-3"><span class="hightlight">Ressources<span></h2>
                <nav>
                    <ul>
                        <li class="nav-item active">
                            <a class="nav-link blue uppercase" href="DUENES_quiSommesNous.php">Matériels<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="DUENES_concept.php">Outils numériques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="#">Supports pédagogiques</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="col-9 p-nav">
            <div class="row align-items-center">
                <div class=" offset-1 col-4 pr-0 ml-m5 dots-l">
                    <img class="img-responsive mt-3" src="assets/img/quiSommesNous.png" alt="présentation DUENES">
                </div>
                <div class="col-6 background-white p-5 line main-content">
                    <h2>Atelier</h2>
                    <p><em>DUNS à été créé pour réponse à l’augmentation de l’utilisation des outils numériques dans les formations en santé.</em></p>
                    <p class="mb-5">Ces enseignements dédiés aux professionnels de santé sont un véritable atout et favorise et incite la réflexion entre enseignants sur les évolutions pédagogiques</p>
                </div>
            </div>

            <section class="row">
                <div class="col-11 px-0 py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-8 d-flex flex-row mb-5">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <img class="img-responsive" src="assets/img/article1.jpg">
                                </div>
                                <div class="position-absolute z-index-1">
                                    <p class="number">6</p>
                                </div>
                                <div class="col-6 background-white p-5">
                                    <h4>Smart touch</h4>
                                    <p>Smart-touch est un écran interactif tactile qui fonctionne sans supports supplémentaires et un outil collaboratif puissant pensés pour augmenter l’expérience utilisateur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 d-flex flex-row mb-5">
                            <div class="row">
                                <div class="col-6 background-white p-5">
                                    <h4>TBI</h4>
                                    <p>Le TBI vous permet d’intervenir tactilement et d’enregistrer les modifications directement sur votre ordinateur. Il offre un bon niveau d’interactivité et une meilleure implication des étudiants. </p>
                                </div>
                                <div class="position-absolute z-index-1">
                                    <p class="number">4</p>
                                </div>
                                <div class="col-6 p-0">
                                    <img class="img-responsive" src="assets/img/article1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
</body>
<footer>

<?php include 'footer.php' ?>

</footer>
</html>
