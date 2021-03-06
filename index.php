<?php
require_once "send_mail.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="métallurgiques"/>
    <meta name="description" content="Comptoir casablancais de produits métallurgiques"/>
    <meta name="author" content=""/>

    <!-- Title  -->
    <title>COMAPROM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css"/>

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

<!-- =====================================
==== Start Loading -->

<div class="loading">
    <div class="gooey">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- End Loading ====
======================================= -->


<!-- =====================================
==== Start Navbar -->

<div class="sub-nav hide-md">
    <div class="container">
        <div class="row">
            <div class="info col valign">
                <ul>
                    <li>
                        <span class="icon"><i class="icofont-phone"></i></span>
                        +212 522 355 475/76/77 <br>
                    </li>
                    <li>
                        <span class="icon"><i class="icofont-google-map"></i></span>
                        rte Nationale 1, Km 15 Ain Harrouda, Maroc
                    </li>
                </ul>
            </div>

            <div class="social col">
                <div class="text-right">
                    <!--  <a href="#0" class="icon">
                         <i class="fab fa-linkedin-in"></i>
                     </a> -->
                    <a href="https://www.facebook.com/Comaprom-205407806728333/" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!--  <a href="#0" class="icon">
                         <i class="fab fa-twitter"></i>
                     </a> -->
                    <a href="#0" data-scroll-nav="8" class="butn butn-bg">
                        <span>Obtenir un devis</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Navbar ====
======================================= -->


<!-- =====================================
==== Start Navbar -->

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-scroll-nav="0">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Nos produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="8">Contactez nous</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End Navbar ====
======================================= -->


<!-- =====================================
==== Start Header -->

<!--<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="img/bg.jpg"-->
<!--&gt;-->

<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-lg-10 offset-lg-1 text-center caption mt-50">-->
<!--<h1>Nos Produits</h1>-->
<!--<h4>la réussite de vos projets est aussi importante que la nôtre</h4>-->
<!--<a href="#0" data-scroll-nav="3" class="butn butn-bg mt-30">-->
<!--<span>Découvrir</span>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</header>-->

<!-- End Header ====
======================================= -->

<header class="header slider-fade" data-scroll-index="0">

    <div class="owl-carousel owl-theme">
        <div class="item bg-img" data-background="img/bg.png">
            <!--  <div class="v-middle caption mt-30">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-10 offset-lg-1 text-center caption mt-50">
                             <h1>Nos Produits</h1>
                             <h4>la réussite de vos projets est aussi importante que la nôtre</h4>
                             <a href="#0" data-scroll-nav="3" class="butn butn-bg mt-30">
                                 <span>Découvrir</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div> -->
        </div>
        <div class="item bg-img" data-overlay-dark="5" data-background="img/bg1.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center imgg">
                            <a class="logo" href="#">
                                <img src="img/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-10 offset-lg-1 text-center caption">
                            <h1>Nos Produits</h1>
                            <h4>la réussite de vos projets est aussi importante que la nôtre</h4>
                            <a href="#0" data-scroll-nav="3" class="butn butn-bg mt-30">
                                <span>Découvrir</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- =====================================
==== Start Hero -->

<section class="hero section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <style type="text/css">
                .image_full {
                    display: block;
                }

                .image_mobile {
                    display: none;
                }

                @media (max-width: 991px) {
                    .image_full {
                        display: none;
                    }

                    .image_mobile {
                        display: block;
                    }
                }
            </style>
            <div class="col-lg-6">
                <div class="img mb-md50">
                    <img src="img/about.png" class="image_full">
                    <img src="img/bg.png" class="image_mobile">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content">
                    <h6>Qui sommes nous?</h6>
                    <h3>Comaprom: Comptoir casablancais de produits métallurgiques</h3>
                    <p style="text-align: justify;">
                        Le comptoir casablancais de produits métallurgiques est une société spécialisée dans la
                        fabrication des tubes soudés et profilés, ainsi que dans l’importation et commercialisation des
                        produits métallurgiques.<br>
                        Comaprom est installée sur un site de production et de stockage de 50.000 m² dont 30.000 m²
                        couverts, avec une capacité de production de 45 000 tonnes/an.<br>
                        Comaprom propose une gamme de produit très large et diversifiée accompagnée de la meilleure
                        qualité disponible sur le marché marocain, cela revient à l’efficacité de notre équipe de
                        production ainsi qu’aux machines performantes et spéciales dont nous disposons.<br>
                        Nos produits s’étalent sur 4 catégories qui se caractérisent comme suit :
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="our-services">
                                <li>
                                    <span class="icon"><img src="img/tube.png" style="width: 18px;"/></span>
                                    <span>Tubes soudés et profilés</span>
                                </li>
                                <li>
                                    <span class="icon"><img src="img/toles.png" style="width: 18px;"/></span>
                                    <span>Tôles</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="our-services">
                                <li>
                                    <span class="icon"><img src="img/lamines.png" style="width: 18px;"/></span>
                                    <span>Laminés marchands</span>
                                </li>
                                <li>
                                    <span class="icon"><img src="img/poutrelle.png" style="width: 18px;"/></span>
                                    <span>Poutrelles</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Hero ====
======================================= -->


<!-- =====================================
==== Start Video -->

<section class="video numbers section-padding bg-img bg-fixed round" data-overlay-dark="2"
         data-background="img/bg2.png">
    <div class="container">
        <div class="row">

            <div class="offset-md-1 col-md-10 content mb-20 text-center">
                <h2> La qualité de nos produits est reconnue comme la meilleure sur le marché marocain</h2>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="item text-center mb-md50">
                    <span class="icon"><i class="icofont-users-social"></i></span>
                    <h2 class="count">131</h2>
                    <p>Employés</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="item text-center mb-md50">
                    <span class="icon"><i class="icofont-industries-5"></i></span>
                    <h2 class="count">100000</h2>
                    <p>Capacité de Production (T/an)</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="item text-center mb-sm50">
                    <span class="icon"><i class="icofont-money-bag"></i></span>
                    <h2 class="count">90</h2>
                    <p>Capital (MDH)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Video ====
======================================= -->


<!-- =====================================
==== Start Services -->

<section class="services section-padding bg-gray pb-90" data-scroll-index="3">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <h4>Nos produits</h4>
            </div>

            <div class="col-md-6">
                <div class="item">
                    <span class="icon"><img src="img/tube.png" style="width: 50px;"/></span>
                    <h6>Tubes soudés et profilés</h6>
                    <p>Tubes carré, Tubes rond, Tubes rectangulaire et Tubes ovale.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="item">
                    <span class="icon"><img src="img/toles.png" style="width: 50px;"/></span>
                    <h6>Tôles</h6>
                    <p>Tôles LAF et LAC, Tôles nervesco, Tôles striés, Tôles galvanisé, Panneaux Sandwich ISOMUR et
                        ISOTOIT.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="item">
                    <span class="icon"><img src="img/lamines.png" style="width: 50px;"/></span>
                    <h6>Laminés marchands</h6>
                    <p>Cornière, Fer rond et carré, Fer UAC, Fer plat, Fer à T.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="item">
                    <span class="icon"><img src="img/poutrelle.png" style="width: 50px;"/></span>
                    <h6>Poutrelles</h6>
                    <p>Fer UPN, Fer IPE, Fer HEB, Fer HEA.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Services ====
======================================= -->


<!-- =====================================
==== Start Portfolio -->

<section class="portfolio section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <h4>Galerie</h4>
            </div>

            <!-- filter links -->
            <div class="filtering text-center full-width">
                <div class="filter">
                    <span data-filter='*' class="active">Tous</span>
                    <span data-filter='.Tubes'>Tubes</span>
                    <span data-filter='.Tôles'>Tôles</span>
                    <span data-filter='.Laminés'>Laminés marchands</span>
                    <span data-filter='.Poutrelles'>Poutrelles</span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery full-width">

                <!-- gallery item -->
                <div class="col-lg-3 col-md-6 items Tubes">
                    <div class="item-img">
                        <img src="img/portfolio/tube-rond.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tube Rond</h6>
                                </div>
                                <a href="img/portfolio/tube-rond.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tubes">
                    <div class="item-img">
                        <img src="img/portfolio/tube-rectangular.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tube Rectangulaire</h6>
                                </div>
                                <a href="img/portfolio/tube-rectangular.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tubes">
                    <div class="item-img">
                        <img src="img/portfolio/tube-oval.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tube Ovale</h6>
                                </div>
                                <a href="img/portfolio/tube-oval.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tubes">
                    <div class="item-img">
                        <img src="img/portfolio/tube-carre.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tube Carré</h6>
                                </div>
                                <a href="img/portfolio/tube-carre.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-lg-3 col-md-6 items Poutrelles">
                    <div class="item-img">
                        <img src="img/portfolio/poutrelle-upn.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer UPN</h6>
                                </div>
                                <a href="img/portfolio/poutrelle-upn.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Poutrelles">
                    <div class="item-img">
                        <img src="img/portfolio/poutrelle-ipe.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer IPE</h6>
                                </div>
                                <a href="img/portfolio/poutrelle-ipe.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Poutrelles">
                    <div class="item-img">
                        <img src="img/portfolio/poutrelle-heb.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer HEB</h6>
                                </div>
                                <a href="img/portfolio/poutrelle-heb.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Poutrelles">
                    <div class="item-img">
                        <img src="img/portfolio/poutrelle-hea.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer HEA</h6>
                                </div>
                                <a href="img/portfolio/poutrelle-hea.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/tole-lac.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tôles LAC</h6>
                                </div>
                                <a href="img/portfolio/tole-lac.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/tole-stries.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tôles Striés</h6>
                                </div>
                                <a href="img/portfolio/tole-stries.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/tole-laf.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tôles LAF</h6>
                                </div>
                                <a href="img/portfolio/tole-laf.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/tole-galvanisees.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Tôles galvanisé</h6>
                                </div>
                                <a href="img/portfolio/tole-galvanisees.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/nervesco.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Nervesco</h6>
                                </div>
                                <a href="img/portfolio/nervesco.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/Panneaux Sandwich ISOMUR.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Panneaux Sandwich ISOMUR</h6>
                                </div>
                                <a href="img/portfolio/Panneaux Sandwich ISOMUR.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Tôles">
                    <div class="item-img">
                        <img src="img/portfolio/tole-dalakit.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Panneaux Sandwich ISOTOIT</h6>
                                </div>
                                <a href="img/portfolio/tole-dalakit.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- gallery item -->
                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-rond.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer Rond</h6>
                                </div>
                                <a href="img/portfolio/lamines-rond.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-plat.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer Plat</h6>
                                </div>
                                <a href="img/portfolio/lamines-plat.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-carre.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer Carré</h6>
                                </div>
                                <a href="img/portfolio/lamines-carre.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-corniere.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Corniére</h6>
                                </div>
                                <a href="img/portfolio/lamines-corniere.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-Fer-T.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer T</h6>
                                </div>
                                <a href="img/portfolio/lamines-Fer-T.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 items Laminés">
                    <div class="item-img">
                        <img src="img/portfolio/lamines-uac.jpg" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <div class="cont">
                                    <h6>Fer UAC</h6>
                                </div>
                                <a href="img/portfolio/lamines-uac.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>

<!-- End Portfolio ====
======================================= -->


<!-- =====================================
==== Start Testimonials -->

<!--<section class="testimonials section-padding" data-scroll-index="5">-->
<!--<div class="container">-->
<!--<div class="row">-->

<!--<div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">-->
<!--<div class="owl-carousel owl-theme text-center">-->
<!--<div class="item">-->
<!--<div class="client-area">-->
<!--<div class="img">-->
<!--<span class="icon"><img src="img/left-quote.svg" alt=""></span>-->
<!--<span class="icon"><img src="img/right-quote.svg" alt=""></span>-->
<!--<div class="author">-->
<!--<img src="img/clients/1.jpg" alt="">-->
<!--</div>-->
<!--</div>-->
<!--<h6>Alex Smith</h6>-->
<!--<span>Client 1</span>-->
<!--</div>-->
<!--<p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum-->
<!--velit class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>-->
<!--</div>-->
<!--<div class="item">-->
<!--<div class="client-area">-->
<!--<div class="img">-->
<!--<span class="icon"><img src="img/left-quote.svg" alt=""></span>-->
<!--<span class="icon"><img src="img/right-quote.svg" alt=""></span>-->
<!--<div class="author">-->
<!--<img src="img/clients/2.jpg" alt="">-->
<!--</div>-->
<!--</div>-->
<!--<h6>Sam Smith</h6>-->
<!--<span>Client 2</span>-->
<!--</div>-->
<!--<p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum-->
<!--velit class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>-->
<!--</div>-->
<!--<div class="item">-->
<!--<div class="client-area">-->
<!--<div class="img">-->
<!--<span class="icon"><img src="img/left-quote.svg" alt=""></span>-->
<!--<span class="icon"><img src="img/right-quote.svg" alt=""></span>-->
<!--<div class="author">-->
<!--<img src="img/clients/3.jpg" alt="">-->
<!--</div>-->
<!--</div>-->
<!--<h6>Alex Martin</h6>-->
<!--<span>Client 3</span>-->
<!--</div>-->
<!--<p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum-->
<!--velit class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

<!--</div>-->
<!--</div>-->
<!--</section>-->

<!-- End Testimonials ====
======================================= -->


<!-- =====================================
==== Start Video -->

<section class="video section-padding bg-img bg-fixed" data-overlay-dark="6" data-background="img/bg4.jpg">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-9 content">
                <h6>En cours de réalisation</h6>

            </div>

            <div class="offset-lg-2 offset-md-1 col-md-2 valign">
                <a class="vid" href="#">
                            <span class="vid-butn">
                                <i class="icofont-ui-play"></i>
                            </span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- End Video ====
======================================= -->


<!-- =====================================
==== Start Clients -->

<!--<div class="clients text-center" data-scroll-index="7">-->
<!--<div class="container">-->
<!--<div class="row">-->

<!--<div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">-->
<!--<h6>Ils nous en fait confiance</h6>-->
<!--<h3>Nos clients</h3>-->
<!--</div>-->

<!--<div class="col-md-12 owl-carousel owl-theme">-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/1.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/2.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/3.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/4.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/5.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/6.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/7.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--<div class="client-logo">-->
<!--<a href="#0">-->
<!--<img src="img/clients-logo/8.png" alt="">-->
<!--</a>-->
<!--</div>-->
<!--</div>-->

<!--</div>-->
<!--</div>-->
<!--</div>-->

<!-- End Clients ====
======================================= -->


<!-- =====================================
==== Start Contact -->

<section class="contact section-padding" data-scroll-index="8">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <h6>Pour plus d'informations?</h6>
                <h4>Contactez Nous</h4>
            </div>

            <div class="col-lg-7">
                <form class="form mb-md50" id="contact-form" method="post" action="index.php#contact-form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Raison sociale"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="phone" placeholder="Télephone"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" placeholder="Sujet">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                              required="required"></textarea>
                                </div>
                            </div>

                            <?php
                            if (isset($err)) {
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p style="color:red;"><?php echo $err; ?></p>
                                    </div>
                                </div>
                                <?php
                            } else if (isset($success)) {
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p style="color:green;"><?php echo $success; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <div class="col-md-12">
                                <button type="submit" name="submited" class="butn butn-bg">
                                    <span>Envoyer le message</span></button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                <div class="contact-info">
                    <div class="fork">
                        <div class="fork-title">
                            <h5>Casablanca</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div style="display: inline-flex;">
                                    <i class="icon icofont-google-map"
                                       style="margin-top: 5px;margin-right: 5px;color: #2159ba;"></i>
                                    <p>rte Nationale 1, Km 15 Ain Harrouda, Maroc</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="display: inline-flex;">
                                    <i class="icon icofont-phone"
                                       style="margin-top: 5px;margin-right: 5px;color: #2159ba;"></i>
                                    <p>+212 522 35 54 75/76/77</p>
                                </div>
                                <div style="display: inline-flex;">
                                    <i class="icon icofont-phone"
                                       style="margin-top: 5px;margin-right: 5px;color: #2159ba;"></i>
                                    <p>+212 522 35 24 94/95</p>
                                </div>
                                <div style="display: inline-flex;">
                                    <i class="icon icofont-fax"
                                       style="margin-top: 5px;margin-right: 5px;color: #2159ba;"></i>
                                    <p>022 35 54 80</p>
                                </div>
                                <div style="display: inline-flex;">
                                    <i class="icon icofont-email"
                                       style="margin-top: 5px;margin-right: 5px;color: #2159ba;"></i>
                                    <p>contact@comaprom.co.ma</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Contact ====
======================================= -->


<!-- =====================================
==== Start Footer -->

<footer class="footer bg-img" data-overlay-dark="9" data-background="img/bg3.jpg">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="about mb-md50">
                    <div class="title">
                        <h5>À propos de nous.</h5>
                    </div>
                    <p style="text-align: justify;">Le comptoir casablancais de produits métallurgiques est une société
                        spécialisée dans la fabrication des tubes soudés et profilés, ainsi que dans l’importation et
                        commercialisation des produits métallurgiques.
                    </p>
                    <!-- <div class="social">
                        <span>Social : </span>
                         <a href="#0" class="icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a> 
                        <a href="https://www.facebook.com/Comaprom-205407806728333/" class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                         <a href="#0" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a> 
                    </div> -->
                </div>
            </div>

            <div class="col-md-6">
                <div class="info">
                    <div class="title">
                        <h5>Contact Info.</h5>
                    </div>

                    <div class="item">
                        <i class="icon icofont-google-map"></i>
                        <h6>rte Nationale 1, Km 15 Ain Harrouda, Maroc</h6>
                    </div>
                    <div class="item">
                        <i class="icon icofont-phone"></i>
                        <h6>
                            <span>Télephone : </span>
                            <span>+212 522 35 54 75/76/77</span>
                            <br>
                            <span style="float: right">+212 522 35 24 94/95</span>
                        </h6>
                    </div>
                    <div class="item">
                        <i class="icon icofont-fax"></i>
                        <h6><span>Fax : </span> 022 35 54 80</h6>
                    </div>
                    <div class="item">
                        <i class="icon icofont-email"></i>
                        <h6><a href="#0">
                                <span>Email : </span> contact@comaprom.co.ma
                            </a></h6>
                    </div>
                    <!-- <div class="item mb-20">
                        <i class="icon icofont-clock-time"></i>
                        <h6><span>Horaire : </span> Lun-Sam : 08:00 - 12:00 | 14:00 - 18:00</h6>
                    </div> -->
                </div>
            </div>

        </div>
    </div>

    <div class="sub-footer text-center">
        <div class="container">
            <p>&copy; 2018 <b>COMAPROM</b>. Tous les droits sont réservés.</p>
            <p>Développé par <a href="http://www.tiecoders.com">TieCoders</a></p>
        </div>
    </div>
</footer>

<!-- End Footer ====
======================================= -->


<!-- jQuery -->
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>

<!-- popper.min -->
<script src="js/popper.min.js"></script>

<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- scrollIt -->
<script src="js/scrollIt.min.js"></script>

<!-- jquery.waypoints.min -->
<script src="js/jquery.waypoints.min.js"></script>

<!-- jquery.counterup.min -->
<script src="js/jquery.counterup.min.js"></script>

<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- jquery.magnific-popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- stellar js -->
<script src="js/jquery.stellar.min.js"></script>

<!-- isotope.pkgd.min js -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- YouTubePopUp.jquery -->
<script src="js/YouTubePopUp.jquery.js"></script>

<!-- validator js -->
<script src="js/validator.js"></script>

<!-- custom scripts -->
<script src="js/scripts.js"></script>

</body>
</html>
