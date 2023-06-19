<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IMMOBILIER, Moulay-Bousselham</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="/img/badre-logo.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>

    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i
                                                class="icon-mail"></i> info@webmail.com</a></li>
                                    <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower,
                                            NYC</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>

                                                    <li><a href="#" title="Instagram"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- header-top-btn -->
                                            <div class="header-top-btn">
                                                <a href="add-listing.html">Add Listing</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->

            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="/"><img src="/img/badre-logo.png" class="logo" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-flex justify-content-center">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li class=""><a href="/">Home</a>
                                            </li>
                                            <li class="menu-icon"><a href="{{route('maisons.allMaisons')}}">Houses </a>
                                                <ul>
                                                    <li><a href="shop.html">Houses for Rent<span class="float-end">>></span></a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('maisons.allMaisons', ['categorie'=>'rent_day', 'sorting'=>'price_hight'] )}}">for day</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('maisons.allMaisons', ['categorie'=>'rent_month', 'sorting'=>'price_hight'] )}}">for month</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{route('maisons.allMaisons', ['categorie'=>'sale', 'sorting'=>'price_hight'] )}}" >Houses for Buy</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="index.html">Activities</a>
                                            </li>
                                            <li class=""><a href="/about">About</a>
                                            </li>
                                            <li><a href="/contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get" action="#">
                                        <input type="text" name="search" value="" placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path
                                            d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                            id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path
                                            d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                            id="bottom"
                                            transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head flex-column ">
                    <button class="ltn__utilize-close">×</button>
                    <div class="site-logo">
                        <a href="/"><img src="img/logo-badree.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="/">Home</a>
                        </li>
                        <li class="menu-icon"><a href="{{route('maisons.allMaisons')}}">Houses</a>
                            <ul>
                                <li><a href="shop.html">Houses for Rent<span class="float-end">>></span></a>
                                    <ul>
                                        <li><a href="cart.html">for day</a></li>
                                        <li><a href="wishlist.html">for month</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-left-sidebar.html">Houses for Buy</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="index.html">Activities</a>
                        </li>
                        <li><a href="{{ route("contact.afficherAbout")}}">About</a></li>

                        <li><a href="{{ route("contact.afficherContact")}}">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>