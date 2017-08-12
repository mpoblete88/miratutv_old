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
        /*margin-top: 50px;*/
        padding: 10px;
        width: 100%;
        background: #F8F8F8;
        padding-top: 0px;
        padding-bottom: 50px;
    }
    #triangle-down {
        margin: 0 0 0 30em;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;

    }

    .plans
    {
        padding: 0 0 50px 0;
    }



    {{--#pricing-table {--}}
        {{--margin: 100px auto;--}}
        {{--text-align: center;--}}
        {{--width: 892px; /* total computed width = 222 x 3 + 226 */--}}
    {{--}--}}

    {{--#pricing-table .plan {--}}
        {{--font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;--}}
        {{--text-shadow: 0 1px rgba(255,255,255,.8);--}}
        {{--background: #fff;--}}
        {{--border: 1px solid #ddd;--}}
        {{--color: #333;--}}
        {{--padding: 20px;--}}
        {{--width: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px */--}}
        {{--float: left;--}}
        {{--position: relative;--}}
    {{--}--}}

    {{--#pricing-table #most-popular {--}}
        {{--z-index: 2;--}}
        {{--top: -13px;--}}
        {{--border-width: 3px;--}}
        {{--padding: 30px 20px;--}}
        {{---moz-border-radius: 5px;--}}
        {{---webkit-border-radius: 5px;--}}
        {{--border-radius: 5px;--}}
        {{---moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);--}}
        {{---webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);--}}
        {{--box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);--}}
    {{--}--}}

    {{--#pricing-table .plan:nth-child(1) {--}}
        {{---moz-border-radius: 5px 0 0 5px;--}}
        {{---webkit-border-radius: 5px 0 0 5px;--}}
        {{--border-radius: 5px 0 0 5px;--}}
    {{--}--}}

    {{--#pricing-table .plan:nth-child(4) {--}}
        {{---moz-border-radius: 0 5px 5px 0;--}}
        {{---webkit-border-radius: 0 5px 5px 0;--}}
        {{--border-radius: 0 5px 5px 0;--}}
    {{--}--}}

    {{--/* --------------- */--}}

    {{--#pricing-table h3 {--}}
        {{--font-size: 20px;--}}
        {{--font-weight: normal;--}}
        {{--padding: 20px;--}}
        {{--margin: -20px -20px 50px -20px;--}}
        {{--background-color: #eee;--}}
        {{--background-image: -moz-linear-gradient(#fff,#eee);--}}
        {{--background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));--}}
        {{--background-image: -webkit-linear-gradient(#fff, #eee);--}}
        {{--background-image: -o-linear-gradient(#fff, #eee);--}}
        {{--background-image: -ms-linear-gradient(#fff, #eee);--}}
        {{--background-image: linear-gradient(#fff, #eee);--}}
    {{--}--}}

    {{--#pricing-table #most-popular h3 {--}}
        {{--background-color: #ddd;--}}
        {{--background-image: -moz-linear-gradient(#eee,#ddd);--}}
        {{--background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));--}}
        {{--background-image: -webkit-linear-gradient(#eee, #ddd);--}}
        {{--background-image: -o-linear-gradient(#eee, #ddd);--}}
        {{--background-image: -ms-linear-gradient(#eee, #ddd);--}}
        {{--background-image: linear-gradient(#eee, #ddd);--}}
        {{--margin-top: -30px;--}}
        {{--padding-top: 30px;--}}
        {{---moz-border-radius: 5px 5px 0 0;--}}
        {{---webkit-border-radius: 5px 5px 0 0;--}}
        {{--border-radius: 5px 5px 0 0;--}}
    {{--}--}}

    {{--#pricing-table .plan:nth-child(1) h3 {--}}
        {{---moz-border-radius: 5px 0 0 0;--}}
        {{---webkit-border-radius: 5px 0 0 0;--}}
        {{--border-radius: 5px 0 0 0;--}}
    {{--}--}}

    {{--#pricing-table .plan:nth-child(4) h3 {--}}
        {{---moz-border-radius: 0 5px 0 0;--}}
        {{---webkit-border-radius: 0 5px 0 0;--}}
        {{--border-radius: 0 5px 0 0;--}}
    {{--}--}}

    {{--#pricing-table h3 span {--}}
        {{--display: block;--}}
        {{--font: bold 25px/100px Georgia, Serif;--}}
        {{--color: #777;--}}
        {{--background: #fff;--}}
        {{--border: 5px solid #fff;--}}
        {{--height: 100px;--}}
        {{--width: 100px;--}}
        {{--margin: 10px auto -65px;--}}
        {{---moz-border-radius: 100px;--}}
        {{---webkit-border-radius: 100px;--}}
        {{--border-radius: 100px;--}}
        {{---moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;--}}
        {{---webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;--}}
        {{--box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;--}}
    {{--}--}}

    {{--/* --------------- */--}}

    {{--#pricing-table ul {--}}
        {{--margin: 20px 0 0 0;--}}
        {{--padding: 0;--}}
        {{--list-style: none;--}}
    {{--}--}}

    {{--#pricing-table li {--}}
        {{--border-top: 1px solid #ddd;--}}
        {{--padding: 10px 0;--}}
    {{--}--}}

    {{--/* --------------- */--}}

    {{--#pricing-table .signup {--}}
        {{--position: relative;--}}
        {{--padding: 8px 20px;--}}
        {{--margin: 20px 0 0 0;--}}
        {{--color: #fff;--}}
        {{--font: bold 14px Arial, Helvetica;--}}
        {{--text-transform: uppercase;--}}
        {{--text-decoration: none;--}}
        {{--display: inline-block;--}}
        {{--background-color: #72ce3f;--}}
        {{--background-image: -moz-linear-gradient(#72ce3f, #62bc30);--}}
        {{--background-image: -webkit-gradient(linear, left top, left bottom, from(#72ce3f), to(#62bc30));--}}
        {{--background-image: -webkit-linear-gradient(#72ce3f, #62bc30);--}}
        {{--background-image: -o-linear-gradient(#72ce3f, #62bc30);--}}
        {{--background-image: -ms-linear-gradient(#72ce3f, #62bc30);--}}
        {{--background-image: linear-gradient(#72ce3f, #62bc30);--}}
        {{---moz-border-radius: 3px;--}}
        {{---webkit-border-radius: 3px;--}}
        {{--border-radius: 3px;--}}
        {{--text-shadow: 0 1px 0 rgba(0,0,0,.3);--}}
        {{---moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);--}}
        {{---webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);--}}
        {{--box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);--}}
    {{--}--}}

    {{--#pricing-table .signup:hover {--}}
        {{--background-color: #62bc30;--}}
        {{--background-image: -moz-linear-gradient(#62bc30, #72ce3f);--}}
        {{--background-image: -webkit-gradient(linear, left top, left bottom, from(#62bc30), to(#72ce3f));--}}
        {{--background-image: -webkit-linear-gradient(#62bc30, #72ce3f);--}}
        {{--background-image: -o-linear-gradient(#62bc30, #72ce3f);--}}
        {{--background-image: -ms-linear-gradient(#62bc30, #72ce3f);--}}
        {{--background-image: linear-gradient(#62bc30, #72ce3f);--}}
    {{--}--}}

    {{--#pricing-table .signup:active, #pricing-table .signup:focus {--}}
        {{--background: #62bc30;--}}
        {{--top: 2px;--}}
        {{---moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;--}}
        {{---webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;--}}
        {{--box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;--}}
    {{--}--}}

    {{--/* --------------- */--}}

    {{--.clear:before, .clear:after {--}}
        {{--content:"";--}}
        {{--display:table--}}
    {{--}--}}

    {{--.clear:after {--}}
        {{--clear:both--}}
    {{--}--}}

    {{--.clear {--}}
        {{--zoom:1--}}
    {{--}--}}
    {{--@endsection--}}
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



    {{--<section>--}}
        {{--<div id="pricing-table" class="clear">--}}
            {{--<div class="plan">--}}
                {{--<h3>Plan Base<span>$14.500</span></h3>--}}
                {{--<a class="signup" href="">Sign up</a>--}}
                {{--<ul>--}}
                    {{--<li><b>10GB</b> Disk Space</li>--}}
                    {{--<li><b>100GB</b> Monthly Bandwidth</li>--}}
                    {{--<li><b>20</b> Email Accounts</li>--}}
                    {{--<li><b>Unlimited</b> subdomains</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="plan" id="most-popular">--}}
                {{--<h3>Plan Fútbol<span>$29</span></h3>--}}
                {{--<a class="signup" href="">Sign up</a>--}}
                {{--<ul>--}}
                    {{--<li><b>5GB</b> Disk Space</li>--}}
                    {{--<li><b>50GB</b> Monthly Bandwidth</li>--}}
                    {{--<li><b>10</b> Email Accounts</li>--}}
                    {{--<li><b>Unlimited</b> subdomains</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="plan">--}}
                {{--<h3>Plan Cine<span>$17</span></h3>--}}
                {{--<a class="signup" href="">Sign up</a>--}}
                {{--<ul>--}}
                    {{--<li><b>3GB</b> Disk Space</li>--}}
                    {{--<li><b>25GB</b> Monthly Bandwidth</li>--}}
                    {{--<li><b>5</b> Email Accounts</li>--}}
                    {{--<li><b>Unlimited</b> subdomains</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="plan">--}}
                {{--<h3>Plan Total<span>$9</span></h3>--}}
                {{--<a class="signup" href="">Sign up</a>--}}
                {{--<ul>--}}
                    {{--<li><b>1GB</b> Disk Space</li>--}}
                    {{--<li><b>10GB</b> Monthly Bandwidth</li>--}}
                    {{--<li><b>2</b> Email Accounts</li>--}}
                    {{--<li><b>Unlimited</b> subdomains</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <!-- About Section -->
    <section id="planBase" class="planBase-section">
        <div class="container plans">
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
                    <a onclick="subTr(this)"> .</a>
                    <button class="btn btn-default" type="button" onclick="subTr(this)">
                        ver detalle de canales <span class="badge">156</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="channels" style="display: none" >
            <div id="triangle-down" style=" border-top: 30px solid #eee;"></div>
            <div class="container">
                <img src="images/planBase.png" alt="Plan Base" width="650px">
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section id="planFutbol" class="planFutbol-section">
        <div class="container plans">
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
                    <button class="btn btn-default" type="button" onclick="subTr(this)">
                        ver detalle de canales <span class="badge">160</span>
                    </button>

                </div>
            </div>
        </div>
        <div class="channels" style="display: none" style="display: none">
            <div id="triangle-down" style=" border-top: 30px solid #fff;"></div>

            <div class="container">
                <img src="images/planFutbol.png" alt="Plan Futbol" width="650px">
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="planCine" class="planCine-section">
        <div class="container plans">
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

                    <button class="btn btn-default" type="button" onclick="subTr(this)">
                        ver detalle de canales <span class="badge">175</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="channels" style="display: none" >
            <div id="triangle-down" style=" border-top: 30px solid #eee;"></div>

            <div class="container">
                <img src="images/planCine.png" alt="Plan Cine" width="650px">
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="planTotal" class="planTotal-section">
        <div class="container plans">
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

    <script>


        function subTr(value){


            $(value).closest('.container').next().toggle();

        }


    </script>
@endsection