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
                            <a class="nav-link blue uppercase" href="ressources_materiel.php">Matériels<span class="sr-only">(current)</span></a>
                            <ul class="">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Salle Curie</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Salle d'enregistrement</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Réalitée augmentée</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Simulation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="#">Outils numériques</a>
                            <ul class="">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Logiciel</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="ressources_supports.php">Supports pédagogiques</a>
                            <ul class="">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link">Diaporama</a>
                                </li>
                            </ul>
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
                    <h2>Diaporama</h2>
                    <p><em>Un outil de communication et d’enseignement important.</em></p>
                    <p class="mb-5">Un diaporama est une présentation sur plusieurs écrans successifs d’informations mises en forme et éventuellement illustrées à destination d’un public cible. Il est efficace pour présenter une somme conséquente d’informations à un auditoire.</p>
                </div>
            </div>

            <section class="row">
                <div class="offset-1 col-10 mt-5 px-5 py-4 background-white">
                    <h4>Collaboration interprofessionnelle</h4>
                    <p>Les transmissions représentent un élément clé de la prise en charge pluriprofessionnelle de patients, surtout en milieu hospitalier.</p>
                </div>
                <div class="z-index1">
                    <a class="download position-relative background-blue"><img class="img-responsive p-4" src="assets/img/download.png"></a>
                </div>
            </section>
            <section class="row">
                <div class="offset-1 col-10 mt-5 px-5 py-4 background-white">
                    <h4>Collaboration interprofessionnelle</h4>
                    <p>Les transmissions représentent un élément clé de la prise en charge pluriprofessionnelle de patients, surtout en milieu hospitalier.</p>
                </div>
                <div class="z-index1">
                    <a class="download position-relative background-blue"><img class="img-responsive p-4" src="assets/img/download.png"></a>
                </div>
            </section>
        </section>
</body>

<?php include('footer.php'); ?>

</html>
