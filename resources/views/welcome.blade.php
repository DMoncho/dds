@extends('layouts.app')

@section('content')
    {{--<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                       <a href="/futbol">Futbol</a>
                        <a href="/baloncesto">Baloncesto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <section id="slider" class="slider-parallax swiper_wrapper full-screen force-full-screen clearfix">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <a href="/partidos"><div class="swiper-slide dark" style="background-image: url('images/slider/swiper/fondo2.jpg');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">APUESTA YA</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Todas las apuestas de tus deportes favoritos a un solo click. A que esperas!.</p>
                                </div>
                            </div></a>
                </div>

                {{--<div class="swiper-slide dark">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
                            <source src='images/videos/explore.mp4' type='video/mp4' />
                            <source src='images/videos/explore.webm' type='video/webm' />
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
        </div>
--}}
            </div>

    </section>
@endsection
