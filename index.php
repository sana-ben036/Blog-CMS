<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Blog</title>
    </head>

    <body>

        <?php
include "navbar.php";
?>
        <h2 class='actualités'>Actualités</h2>
        <div class='container'>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xd-12">
                    <div class="card">
                        <img src="img/coronavirus.jpg" class="card-img-top" alt="coronavirus">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Foyer de cas de COVID-19 à Beijing (République populaire de Chine)‎</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xd-12">
                    <div class="card">
                        <img src="img/dexa.jpg" class="card-img-top" alt="test coronavirus">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">L’OMS se réjouit des résultats préliminaires de
                                    l’utilisation de la dexaméthasone pour le traitement des patients COVID-19
                                    gravement malades</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xd-12">
                    <div class="card">
                        <img src="img/coronateam.jpg" class="card-img-top" alt="coronavirus">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">La COVID-19 a de graves répercussions sur les services de
                                    santé soignant les maladies non ‎transmissibles</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xd-12">
                    <div class="card">
                        <img src="img/testcorona.jpg" class="card-img-top" alt="test coronavirus">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">La communauté internationale unie à l’appui d’une
                                    recherche scientifique ouverte pour combattre la COVID-19</h5>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container" id='cont'>
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Foyer de cas de COVID-19 à Beijing (République populaire de Chine)‎</h5>
                    <p class="card-text">L’OMS travaille en lien avec les autorités chinoises pour suivre un foyer de
                        cas de COVID-19 apparu à Beijing, en République populaire de Chine. Aujourd’hui,
                        des fonctionnaires de la Commission nationale de la santé et de la Commission de
                        la santé de Beijing ont tenu une session d’information avec le Bureau de l’OMS
                        en Chine concernant les investigations préliminaires en cours dans la ville. Au
                        13 juin, 41 cas symptomatiques confirmés en laboratoire et 46 cas
                        asymptomatiques confirmés en laboratoire ont été identifiés à Beijing. Le
                        premier cas identifié a présenté des symptômes le 9 juin et l’infection a été
                        confirmée le 11 juin. Plusieurs des cas initiaux ont été identifiés grâce à six
                        centres de dépistage installés à Beijing. Les investigations préliminaires ont
                        révélé que certains cas symptomatiques initiaux avaient un lien avec le marché
                        de Xinfadi à Beijing. Des analyses préliminaires en laboratoire de frottis de
                        gorge réalisés chez des humains et d’échantillons environnementaux du marché de
                        Xinfadi ont permis d’identifier 45 échantillons humains positifs (provenant tous
                        de cas asymptomatiques au moment de la notification) et 40 échantillons
                        environnementaux positifs. Un cas asymptomatique supplémentaire a été identifié
                        ; il s’agissait d’un contact proche d’un cas confirmé. Tous les cas ont été
                        placés en isolement et reçoivent les soins nécessaires ; la recherche des
                        contacts est en cours. Le séquençage générique des échantillons a lui aussi
                        commencé : il faudra en faire rapidement connaître les résultats pour comprendre
                        l’origine du foyer et les liens entre les cas. L’OMS a offert son soutien et son
                        assistance technique et demandé des informations supplémentaires sur le foyer et
                        sur les investigations en cours et prévues.

                    </p>
                
                </div>
            </div>
            <div class="btn btn-info float-right">Précédant</div>
        </div>
        


        <!-- Bootsrap JS -->

        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    </body>
</html>