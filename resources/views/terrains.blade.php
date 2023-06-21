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
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
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
                                <option value="agricole" @if (request()->get('categorie') == 'agricole')
                                    @selected(true)
                                @endif>agricole</option>
                                
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
                                    @foreach ($terrains as $terrain)
                                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                        <div class="product-hover ltn__product-item-4 ltn__product-item-5 text-center--- products-items ">
                                            <div class="product-img">
                                                <a href="/public/terrain/{{$terrain->id}}">
                                                    <img alt="#"
                                                        @if ($terrain->capt)
                                                            src="{{ asset('storage/' . $terrain->capt) }}"
                                                        @else
                                                            src=" {{ asset('storage/1946488.png') }} "
                                                        @endif >
                                                    </a>
                                                <div class="real-estate-agent">
                                                </div>
                                            </div>
                                            <div class="product-info">
                                            
                                                <h2 class="product-title"><a href="/public/terrain/{{$terrain->id}}">{{ Str::limit($terrain->titre, 20) }}</a></h2>
                                            </div>
                                            <div class="product-info-bottom pt-0 pb-0">
                                                <div class="product-price">
                                                    @if ($terrain->prix_vende)
                                                        <span>{{$terrain->prix_vende}}<label> DH /Vende</label></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{$terrains->links()}}
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
                            <a class="btn btn-effect-3 btn-white" href="{{route('contact.afficherContact')}}">Explore Properties <i
                                    class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection
