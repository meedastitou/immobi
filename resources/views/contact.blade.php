@extends('layout.master')

@section('main')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Contactez-nous</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                    Accueill</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>adresse e-mail</h3>
                        <p>Moulay-Bousselham@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>Numéro de téléphone</h3>
                        <p>+212 66666666 <br> +212 00000000</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>Adresse de bureau</h3>
                        <p>Moulay-Bousselham<br>
                            MOROCCO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map mb-120">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3892.2924080557414!2d-6.291823241108571!3d34.88097634731266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0a2f821bd13e67%3A0x79751aab0baae7f4!2sMoulay-Bousselham!5e0!3m2!1sfr!2sma!4v1686652766075!5m2!1sfr!2sma"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3892.2924080557414!2d-6.291823241108571!3d34.88097634731266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0a2f821bd13e67%3A0x79751aab0baae7f4!2sMoulay-Bousselham!5e0!3m2!1sfr!2sma!4v1686652766075!5m2!1sfr!2sma"
        width="100%" height="100%" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd"
            width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->

    </div>
    <!-- GOOGLE MAP AREA END -->

  
@endsection
