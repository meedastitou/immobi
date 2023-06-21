@extends('layout.master')

@section('main')
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                                data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i
                                                    class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="about.html" class="theme-btn-1 btn btn-effect-1">Make An
                                                Enquiry</a>
                                            <a class="ltn__video-play-btn bg-white"
                                                href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0"
                                                data-rel="lightcase">
                                                <i class="icon-play  ltn__secondary-color"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="img/slider/21.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title white-color--- animated"><span><i
                                                    class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">The Right Place <br>of House Finding</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR
                                                SERVICES</a>
                                            <a href="about.html" class="btn btn-transparent btn-effect-3">LEARN
                                                MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img slide-img-left">
                                    <img src="img/slider/21.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- CAR DEALER FORM AREA START -->
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="{{route('maisons.allMaisons')}}" method="get" class="ltn__car-dealer-form-box row justify-content-around">

                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-5 col-md-6">
                                            <select class="nice-select" name="categorie">
                                                <option >Property Status</option>
                                                <option value="sale" @if (request()->get('categorie') == 'sale')
                                                    @selected(true)
                                                @endif>Sale</option>
                                                <option value="rent_month" @if (request()->get('categorie') == 'rent_month')
                                                    @selected(true)
                                                @endif>Rent MONTH</option>
                                                <option value="rent_day" @if (request()->get('categorie') == 'rent_day')
                                                    @selected(true)
                                                @endif>Rent DAY</option>
                                            </select>
                                        </div>
                                        <div
                                            class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-4 col-md-6">
                                            <select class="nice-select" name="sorting">
                                                <option disabled>Default sorting</option>
                                                <!-- <option>Sort by popularity</option> -->
                                                <option value="arrivals" @if (request()->get('sorting') == 'arrivals')
                                                    @selected(true)
                                                @endif>Sort by new arrivals</option>
                                                <option value="price_low" @if (request()->get('sorting') == 'price_low')
                                                    @selected(true)
                                                @endif>Sort by price: low to high</option>
                                                <option value="price_hight" @if (request()->get('sorting') == 'price_hight')
                                                    @selected(true)
                                                @endif>Sort by price: high to low</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                            <div class="btn-wrapper text-center mt-0">
                                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button>
                                                {{-- <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Find
                                                    Now</a> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CAR DEALER FORM AREA END -->

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
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title">Le leader du marché de la location immobilière.<span>.</span></h1>
                            <p>Plus de 39 000 personnes travaillent pour nous dans plus de 70 pays à travers le monde Cette étendue de couverture mondiale,
                                 associée à des services spécialisés</p>
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
    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
                        <h1 class="section-title">Annonces en vedette</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach ($maisons as $maison)
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="/public/maison/{{ $maison->id }}">
                                    <img alt="#"
                                        @if ($maison->capt) src="{{ asset('storage/' . $maison->capt) }}"
                                @else
                                    src=" {{ asset('storage/1946488.png') }} " @endif>
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        @if ($maison->prix_vende)
                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">À vendre</li>
                                        @endif
                                        @if ($maison->prix_louer_moin)
                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">À LOUER mois</li>
                                        @endif
                                        @if ($maison->prix_louer_jour)
                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">À LOUER jour</li>
                                        @endif
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            @if ($maison->prix_vende)
                                            <span>{{$maison->prix_vende}}<label> DH /Vende</label></span>
                                            @endif
                                            @if ($maison->prix_louer_moin)
                                                <span>{{$maison->prix_louer_moin}}<label> DH /Moins</label></span>
                                            @endif
                                            @if ($maison->prix_louer_jour)
                                                <span>{{$maison->prix_louer_jour}}<label> DH /Jour</label></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h2 class="product-title"><a href="/public/maison/{{$maison->id}}">{{ Str::limit($maison->titre, 20) }}</a>
                                </h2>
                                <div class="product-description">
                                    <p>{{ Str::limit($maison->titre, 40) }}</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>{{ $maison->nb_chambre }} <i class="flaticon-bed"></i></span>
                                        Chambres
                                    </li>
                                    <li><span>{{ $maison->nb_douche }} <i class="flaticon-clean"></i></span>
                                        Salles de bain
                                    </li>
                                    <li><span>{{{$maison->surface_maison}}} <i
                                                class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        Surface de Maison
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90"
    data-bs-bg="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pralognan.com%2Factivites%2Factivites-ete%2F&psig=AOvVaw2cZX_zhAcugPgyWL75A5ac&ust=1687431691461000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCIjwgYib1P8CFQAAAAAdAAAAABAE">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color">Les Activités à Faire ...</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">NOS Services</h6>
                        <h1 class="section-title">Notre objectif principal</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="#">Buy a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house you will want to call home.</p>
                            <a class="ltn__service-btn" href="{{route("maisons.allMaisons")}}" >Find A Home <i
                                    class="flaticon-right-arrow"></i></a>
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
                            <h3><a href="#">Rent a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house you will want to call home.</p>
                            <a class="ltn__service-btn" href="{{route("maisons.allMaisons")}}">Find A Home <i
                                    class="flaticon-right-arrow"></i></a>
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
                            <h3><a href="#">Sell a home</a></h3>
                            <p>over 1 million+ homes for sale available on the website, we can match you with a
                                house you will want to call home.</p>
                            <a class="ltn__service-btn" href="{{route("maisons.allMaisons")}}">Find A Home <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-290 pb-110 plr--9 d-none">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>A la recherche d'une maison de rêve?</h1>
                            <p>Nous pouvons vous aider à réaliser votre rêve d'une nouvelle maison</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{route('contact.afficherContact')}}">Explorer les propriétés <i
                                    class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection
