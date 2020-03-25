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
                <h2 class="ml-3"><span class="hightlight">Formation<span></h2>
                <nav>
                    <ul>
                        <li class="nav-item active">
                            <a class="nav-link blue uppercase" href="formation_atelier.php">Ateliers<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="formation_seminaires.php">Séminaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link blue uppercase" href="formation_preceptorats.php">Préceptorats</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="col-9 p-nav">
            <div class="row align-items-center">
                <div class="offset-1 col-6 background-white p-5">
                    <h2>Seminaires</h2>
                    <p><em>Lors de nos séminaires, nous proposons un large choix de sujets médicaux pour élargir vos connaissances.</em></p>
                    <p class="mb-5">Grâce à différents travaux pratiques, nous donnons la possibilité aux professionnels de santé d’enrichir leurs connaissances et de favoriser l’apprentissage de nouvelles techniques pédagogiques. </p>
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
                            <img class="icon-formation" src="assets/img/cap.svg">
                            <h4>Nouvelle approche auprès des étudiants</h4>
                        </div>
                        <div class="col-6 p-3">
                            <img class="icon-formation" src="assets/img/desktop.svg">
                            <h4>Une multitude de ressources numériques.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <section class="row">
                <div class="col-11 px-0 py-5">
                    <div class="row justify-content-between">
                        <div class="offset-1 col-5">
                            <h2><span class="hightlight">Les ateliers</span> à venir</h2>
                        </div>
                        <div class="col-4">
                            <a class="a-button m-auto">Voir tous les articles</a>
                        </div>
                    </div>
                    <div class="row justify-content-center py-5">
                        <div class="col-8 d-flex flex-row mb-5">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <img class="img-responsive" src="assets/img/article1.jpg">
                                </div>
                                <div class="position-relative z-index-1">
                                    <time class="background-blue atelier"><span>13 JAN 2020</span></time>
                                </div>
                                <div class="col-6 background-white p-5">
                                    <p>Grâce à cet atelier, vous pourrez facilement dynamiser vos espaces de cours Moodle à l’aide d’évalution en ligne et de quiz d’entrainement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 d-flex flex-row mb-5">
                            <div class="row">
                                <div class="col-6 background-white p-5">
                                    <p>Grâce à cet atelier, vous pourrez facilement dynamiser vos espaces de cours Moodle à l’aide d’évalution en ligne et de quiz d’entrainement.</p>
                                </div>
                                <div class="position-relative z-index-1">
                                    <time class="background-blue atelier"><span>13 JAN 2020</span></time>
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
<?php include('footer.php'); ?>
</html>
