@extends('system.layouts.default')
<style>
    @section('style')
    body {
        width: 100%;
        height: 100%;
    }

    html {
        width: 100%;
        height: 100%;
    }

    @media(min-width:767px) {
        .navbar {
            padding: 5px 0;
            -webkit-transition: background .5s ease-in-out,padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out,padding .5s ease-in-out;
            transition: background .5s ease-in-out,padding .5s ease-in-out;
        }

        .top-nav-collapse {
            padding: 0;
        }
    }

    /* Demo Sections - You can use these as guides or delete them - the scroller will work with any sort of height, fixed, undefined, or percentage based.
    The padding is very important to make sure the scrollspy picks up the right area when scrolled to. Adjust the margin and padding of sections and children
    of those sections to manage the look and feel of the site. */

    .intro-section h1{
        font-size: 5vw;
    }
    .intro-section p{
        font-size: 1.5vw;
    }
    .intro-section {
        margin-top: 80px;
        height: 600px;
        padding-top: 150px;
        background: #fff;
        text-align: center;
        background: url("images/background.png");
        background-size: cover;
        background-position: center center;
        color: #FFFFFF !important;
    }

    .planBase-section {
        /*height: 100%;*/
        padding-top: 50px;
        background: #eee;
    }

    .planFutbol-section {
        /*height: 100%;*/
        padding-top: 50px;
        background: #fff;
    }

    .planCine-section {
        /*height: 100%;*/
        padding-top: 50px;
        background: #eee;
    }
    .planTotal-section {
    /*height: 100%;*/
    padding-top: 70px;
    background: #fff;
        background: url('images/planTotal.png'); background-position: right;background-repeat: no-repeat;
        background-size: contain;
        margin-bottom: 100px;
    }
    .navbar-inverse a.navbar-brand{
        height: 80px;
        margin-right: 150px;
    }
    .navbar-inverse a img{
        height: 100% !important;
    }

    .navbar-inverse .nav.navbar-nav li a{
        height: 80px;
        line-height: 50px;
        width: 180px;
        text-align: center;
    }
    .channels{
        margin-top: 50px;
        width: 100%;
        background: #F8F8F8;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    @endsection
</style>
@section('content')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="">PRONTO</h1>
                    <p>Nuevo Sitio Mira tu TV</p>
                    {{--<a class="btn btn-default page-scroll" href="#planBase">Click Me to Scroll Down!</a>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="planBase" class="planBase-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Plan Base</h2>
                    <p> Nuestro plan base cuenta con un total de 153 Canales de TV.</p>
                    <ul>
                        <li> 10 Canales Nacionales Standard (SD)</li>
                        <li> 80 Canales Standard (SD)</li>
                        <li> 06 Canales Nacionales en Alta Definición (HD)</li>
                        <li> 57 Canales Nacionales en Alta Definición (HD)</li>
                    </ul>
                    <p> <strong>$14.500 *</strong></p>
                    <p> * Incluye 1 decodificador HD</p>
                    <p><a href="">ver detalle de canales.</a></p>
                </div>
            </div>
        </div>
        <div class="channels" >
            <div class="container">
                <img src="images/planBase.png" alt="Plan Base" width="650px">
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section id="planFutbol" class="planFutbol-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Plan Fútbol</h2>
                    <p> El Plan Fútbol cuenta con 160 Canales.</p>
                    <ul>
                        <li> Todos los canales del <strong>Plan Base (153)</strong></li>
                        <li> CDF Premium HD (incluye 2 canales)</li>
                        <li> Fox Sports Premium (Incluye 5 canales)</li>
                    </ul>
                    <p> Con estos 7 canales Premium adicionales, puedes ver todos los partidos del:</p>
                    <ul>
                        <li> Campeonato Nacional</li>
                        <li> Copa Libertadores de America</li>
                        <li> Copa Sudamericana</li>
                        <li> Ligas Europeas</li>
                        <li> Champions League</li>
                        <li> Europa League</li>
                    </ul>
                    <p> <strong>$21.000 *</strong></p>
                    <p> * Incluye 1 decodificador HD</p>
                    <p><a href="">ver detalle de canales.</a></p>
                </div>
            </div>
        </div>
        <div class="channels">
            <div class="container">
                <img src="images/planFutbol.png" alt="Plan Futbol" width="650px">
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="planCine" class="planCine-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Plan Cine</h2>
                    <p> El Plan Cine cuenta con 175 canales.</p>
                    <ul>
                        <li> Todos los canales del <strong>Plan Base (153)</strong></li>
                        <li> Canales de Cine FOX (incluye 08 canales)</li>
                        <li> Canales de Cine HBO (incluye 10 canales)</li>
                        <li> Canales de Cine MAX (incluye 04 canales)</li>
                    </ul>
                    <p> <strong>$20.000 *</strong></p>
                    <p> * Incluye 1 decodificador HD</p>
                    <p><a href="">ver detalle de canales.</a></p>
                </div>
            </div>
        </div>
        <div class="channels" >
            <div class="container">
                <img src="images/planCine.png" alt="Plan Cine" width="650px">
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="planTotal" class="planTotal-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >

                    <h2>  Plan Total</h2>
                    <p> El Plan Total cuenta con 182 Canales.</p>
                    <ul>
                        <li> Todos los canales del <strong>Plan Base (153 Canales)</strong>
                            <ul>
                                <li>63 canales HD​</li>
                                <li>90 Canales SD</li>
                            </ul>
                        </li>
                        <li> Todos los canales Premium de <strong>Plan Futbol (10 Canales)</strong>
                            <ul>
                                <li>2 Canales de CDF Premium​</li>
                                <li>5 Canales de Fox Sports Premium</li>
                            </ul>
                        </li>
                        <li> Todos los canales Premium de <strong>Plan Cine (22 Canales)</strong>
                            <ul>
                                <li>8 Canales de Cine FOX​</li>
                                <li>10 Canales de Cine HBO</li>
                                <li>4 Canales de Cine MAX</li>
                            </ul>
                        </li>

                    </ul>
                    <p> <strong>$25.000 *</strong></p>
                    <p> * Incluye 1 decodificador HD</p>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('script')
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
@endsection