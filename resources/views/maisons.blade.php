@extends('layout.master')

@section('main')
    {{-- <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Shop Grid</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                    Accueill</a></li>
                                <li>Shop Grid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END --> --}}

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
 
                    <form action="" method="get" class="ltn__car-dealer-form-box row justify-content-around">

                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-5 col-md-6">
                            <select class="nice-select" name="categorie">
                                <option >Statut de la propriété
                                </option>
                                <option value="sale" @if (request()->get('categorie') == 'sale')
                                    @selected(true)
                                @endif>Vender</option>
                                <option value="rent_month" @if (request()->get('categorie') == 'rent_month')
                                    @selected(true)
                                @endif>Louer par Moins</option>
                                <option value="rent_day" @if (request()->get('categorie') == 'rent_day')
                                    @selected(true)
                                @endif>Louer par Jours</option>
                            </select>
                        </div>
                        <div
                            class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-4 col-md-6">
                            <select class="nice-select" name="sorting">
                                <option disabled>Tri par défaut
                                </option>
                                <!-- <option>Sort by popularity</option> -->
                                <option value="arrivals" @if (request()->get('sorting') == 'arrivals')
                                    @selected(true)
                                @endif>Trier par nouveautés
                            </option>
                                <option value="price_low" @if (request()->get('sorting') == 'price_low')
                                    @selected(true)
                                @endif>Trier par prix : du plus bas au plus élevé
                            </option>
                                <option value="price_hight" @if (request()->get('sorting') == 'price_hight')
                                    @selected(true)
                                @endif>Trier par prix : décroissant
                            </option>
                            </select>
                        </div>
                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                            <div class="btn-wrapper text-center mt-0">
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Rechercher</button>
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
                                                    <img alt="alt"
                                                        @if ($maison->capt)
                                                            src="{{ asset('upload/' . $maison->capt) }}"
                                                        @else
                                                            src=" {{ asset('upload/1946488.png') }} "
                                                        @endif >
                                                    </a>
                                                <div class="real-estate-agent">
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        @if ($maison->prix_vende)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">Vende</li>
                                                        @endif
                                                        @if ($maison->prix_louer_moin)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">Moins</li>
                                                        @endif
                                                        @if ($maison->prix_louer_jour)
                                                            <li class="sale-badge bg-green px-1 rounded-3 f-size-2">Jours</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="/public/maison/{{$maison->id}}">{{ Str::limit($maison->titre, 20) }}</a></h2>

                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief m-0 mb-1">
                                                    <li class="m-0"><span>{{ $maison->nb_chambre }}</span>
                                                        Chambres
                                                    </li>
                                                    <li class="m-0"><span>{{ $maison->nb_douche }}</span>
                                                        Salles de bain
                                                    </li>
                                                    <li class="m-0"><span>{{{$maison->surface_maison}}} </span>
                                                        surface 
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="product-info-bottom pt-0 pb-0">
                                                <div class="product-price">
                                                    @if ($maison->prix_vende)
                                                        <span>{{$maison->prix_vende}}<label> DH /Vende</label></span>
                                                    @endif
                                                    @if ($maison->prix_louer_moin)
                                                        <span>{{$maison->prix_louer_moin}}<label> DH /Month</label></span>
                                                    @endif
                                                    @if ($maison->prix_louer_jour)
                                                        <span>{{$maison->prix_louer_jour}}<label> DH /Jour</label></span>
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
                    {{$maisons->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    
@endsection
