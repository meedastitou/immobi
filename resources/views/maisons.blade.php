@extends('layout.master')

@section('main')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Shop Grid</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Shop Grid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                                class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Default sorting</option>
                                        <!-- <option>Sort by popularity</option> -->
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="showing-product-number text-right">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                    <form action="" method="get" class="ltn__car-dealer-form-box row justify-content-around">

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
                                <option>Default sorting</option>
                                <!-- <option>Sort by popularity</option> -->
                                <option>Sort by new arrivals</option>
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

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">

                                    <div class="col-lg-12 d-none">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30 ">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    @foreach ($maisons as $maison)
                                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                        <div class="product-hover ltn__product-item-4 ltn__product-item-5 text-center--- products-items ">
                                            <div class="product-img">
                                                <a href="/public/maison/{{$maison->id}}">
                                                    <img alt="#"
                                                        @if ($maison->capt)
                                                            src="{{ asset('storage/' . $maison->capt) }}"
                                                        @else
                                                            src=" {{ asset('storage/1946488.png') }} "
                                                        @endif >
                                                    </a>
                                                <div class="real-estate-agent">
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        @if ($maison->prix_vende)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">For SALE</li>
                                                        @endif
                                                        @if ($maison->prix_louer_moin)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">For RENT month</li>
                                                        @endif
                                                        @if ($maison->prix_louer_jour)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">For RENT day</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">{{ Str::limit($maison->titre, 20) }}</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief m-0 mb-1">
                                                    <li class="m-0"><span>{{ $maison->nb_chambre }}</span>
                                                        Bedrooms
                                                    </li>
                                                    <li class="m-0"><span>{{ $maison->nb_douche }}</span>
                                                        Bathrooms
                                                    </li>
                                                    <li class="m-0"><span>{{{$maison->surface_maison}}} </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom pt-0 pb-0">
                                                <div class="product-price">
                                                    @if ($maison->prix_vende)
                                                        <span>{{$maison->prix_vende}}<label>/Vende</label></span>
                                                    @endif
                                                    @if ($maison->prix_louer_moin)
                                                        <span>{{$maison->prix_louer_moin}}<label>/Month</label></span>
                                                    @endif
                                                    @if ($maison->prix_louer_jour)
                                                        <span>{{$maison->prix_louer_jour}}<label>/Jour</label></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="product-hover ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/1.jpg"
                                                        alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <!-- <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge bg-green px-1 pt-1 rounded-3">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment Nice
                                                        View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div
                                            class="product-hover ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/2.jpg"
                                                        alt="#"></a>
                                                <!-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class=" bg-green px-1 pt-1 rounded-3">For Sale</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment Nice
                                                        View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div
                                            class="product-hover ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/3.jpg"
                                                        alt="#"></a>
                                                <!-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class=" bg-green px-1 pt-1 rounded-3">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div
                                            class="product-hover ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/4.jpg"
                                                        alt="#"></a>
                                                <!-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class=" bg-green px-1 pt-1 rounded-3">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div
                                            class="product-hover ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/5.jpg"
                                                        alt="#"></a>
                                                <!-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class=" bg-green px-1 pt-1 rounded-3">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div
                                            class="product-hover ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/6.jpg"
                                                        alt="#"></a>
                                                <!-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class=" bg-green px-1 pt-1 rounded-3">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  --> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search"
                                                    placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/1.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                                Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="img/blog/author.jpg"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/2.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                                Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="img/blog/author.jpg"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/3.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                                Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="img/blog/author.jpg"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/4.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                                Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="img/blog/author.jpg"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product-3/5.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">New Apartment
                                                        Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                                Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="img/blog/author.jpg"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{$maisons->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i
                                    class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection
