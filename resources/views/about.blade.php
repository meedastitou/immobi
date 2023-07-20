@extends('layout.master')
@section('main')
    {{-- <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Accueill</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END --> --}}

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120 pb-90 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="img/others/7.png" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                            <div class="ltn__video-img ltn__animation-pulse1">
                                <img src="img/others/8.png" alt="video popup bg image">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                    href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"
                                    data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">à Propos de Nous</h6>
                            <h1 class="section-title">Le leader du marché de la location immobilière.<span>.</span></h1>
                            <p>Que vous souhaitiez acheter, vendre ou louer un bien immobilier à Moulay Bousselham et dans ses environs, 
                                notre agence est là pour vous offrir un service personnalisé et adapté à vos besoins. 
                                Nous disposons d'un vaste portefeuille de biens immobiliers de qualité, 
                                comprenant des appartements, des villas, des bureaux, des commerces et des terrains.</p>
                        </div>
                        <ul class="ltn__list-item-half clearfix">
                            <li>
                                <i class="flaticon-home-2"></i>
                                Conception de maison intelligente
                            </li>
                            <li>
                                <i class="flaticon-mountain"></i>
                                Belle scène autour
                            </li>
                            <li>
                                <i class="flaticon-heart"></i>
                                Style de vie exceptionnel
                            </li>
                            <li>
                                <i class="flaticon-secure"></i>
                                Sécurité complète 24h/24 et 7j/7
                            </li>
                        </ul>
                        <div class="ltn__callout bg-overlay-theme-05  mt-30">
                            <p>"Enimad minim veniam quis nostrud exercitation llamco laboris.<br>
                                 Lorem ipsum dolor sit amet" </p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="{{ route("about.afficherAbout") }}" class="theme-btn-1 btn btn-effect-1">NOS SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Notre objectif principal
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12 ">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Acheter une maison
                            </a></h3>
                            <p>Notre agence immobilière vous accompagne dans votre projet d'achat immobilier à Moulay Bousselham et dans ses environs. 
                            </p>
                            <a class="ltn__service-btn" href="#">Trouver une maison
                                <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="img/icons/icon-img/22.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Louer une maison
                            </a></h3>
                            <p>Nous vous offrons un service personnalisé pour trouver la location idéale qui répondra à vos besoins et à votre style de vie.
                            </p>
                            <a class="ltn__service-btn" href="#">Trouver une maison <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src="img/icons/icon-img/23.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Vendre une maison
                            </a></h3>
                            <p>Faites confiance à notre équipe expérimentée pour vous accompagner dans toutes les étapes de la vente et obtenir les meilleurs résultats."
                            </p>
                            <a class="ltn__service-btn" href="service-details.html">Trouver une maison <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->
@endsection