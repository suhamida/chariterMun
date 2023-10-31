@extends('frontend.master')

@section('title')
Home
@endsection



@section('body')
    <main>

        <div class="slider-area position-relative">
            <div class="slider-active dot-style">

                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-10">
                                <div class="hero-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Support a causes you care about</h1>
                                    <p data-animation="fadeInUp" data-delay=".4s">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet
                                        pulvinar ante tempor etiam lacus eros</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInUp" data-delay=".8s">Active Cases</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-slider hero-overly01  slider-height slider-bg2 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-10">
                                <div class="hero-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Support a causes you care about</h1>
                                    <p data-animation="fadeInUp" data-delay=".4s">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet
                                        pulvinar ante tempor etiam lacus eros</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInUp" data-delay=".8s">Active Cases</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-slider hero-overly slider-height slider-bg3 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-10">
                                <div class="hero-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Support a causes you care about</h1>
                                    <p data-animation="fadeInUp" data-delay=".4s">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet
                                        pulvinar ante tempor etiam lacus eros</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInUp" data-delay=".8s">Active Cases</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area1 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-11">

                        <div class="section-tittle text-center mb-60">
                            <h2>Causes we are serving</h2>
                        </div>
                    </div>
                </div>
                <div class="services1-active">
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="#"><img src="{{ asset('/') }}front/assets/img/gallery/services-img1.jpg" alt=""></a>

                                    <div class="single-skill">
                                        <div class="bar-progress">
                                            <div id="bar1" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="65"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wrap-wrapper">
                                    <div class="properties-caption">
                                        <h3><a href="#">Help the ecosystems</a></h3>
                                        <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                    </div>
                                    <div class="properties-footer d-flex justify-content-between align-items-center">
                                        <div class="class-day">
                                            <a href="#" class="btn">Donate</a>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font2">$67,845</span>
                                            <p>Goal</p>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font1">$48,845</span>
                                            <p>Raised</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="#"><img src="{{ asset('/') }}front/assets/img/gallery/services-img2.jpg" alt=""></a>

                                    <div class="single-skill">
                                        <div class="bar-progress">
                                            <div id="bar2" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="65"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wrap-wrapper">
                                    <div class="properties-caption">
                                        <h3><a href="#">Sponsor a child</a></h3>
                                        <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                    </div>
                                    <div class="properties-footer d-flex justify-content-between align-items-center">
                                        <div class="class-day">
                                            <a href="#" class="btn">Donate</a>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font2">$67,845</span>
                                            <p>Goal</p>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font1">$48,845</span>
                                            <p>Raised</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="#"><img src="{{ asset('/') }}front/assets/img/gallery/services-img3.jpg" alt=""></a>

                                    <div class="single-skill">
                                        <div class="bar-progress">
                                            <div id="bar3" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="65"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wrap-wrapper">
                                    <div class="properties-caption">
                                        <h3><a href="#">Help senior citizens</a></h3>
                                        <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                    </div>
                                    <div class="properties-footer d-flex justify-content-between align-items-center">
                                        <div class="class-day">
                                            <a href="#" class="btn">Donate</a>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font2">$67,845</span>
                                            <p>Goal</p>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font1">$48,845</span>
                                            <p>Raised</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="properties pb-30">
                            <div class="properties-card">
                                <div class="properties-img">
                                    <a href="#"><img src="{{ asset('/') }}front/assets/img/gallery/services-img2.jpg" alt=""></a>

                                    <div class="single-skill">
                                        <div class="bar-progress">
                                            <div id="bar4" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="65"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wrap-wrapper">
                                    <div class="properties-caption">
                                        <h3><a href="#">Help the ecosystems</a></h3>
                                        <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                    </div>
                                    <div class="properties-footer d-flex justify-content-between align-items-center">
                                        <div class="class-day">
                                            <a href="#" class="btn">Donate</a>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font2">$67,845</span>
                                            <p>Goal</p>
                                        </div>
                                        <div class="class-day">
                                            <span class="color-font1">$48,845</span>
                                            <p>Raised</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="support-company-area section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="support-location-img">
                            <img src="{{ asset('/') }}front/assets/img/gallery/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="right-caption">

                            <div class="section-tittle">
                                <h2>Who we are?</h2>
                            </div>
                            <div class="support-caption">
                                <p class="mb-10">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet
                                    pulvinar ante tempor etiam lacus eros</p>
                                <p class="pera-top">The legal definition of a charitable organization (and of charity) varies between countries and in some instances regions of the country. The regulation, the tax treatment, and the way in which charity law affects charitable organizations also vary.</p>
                                <a href="about.html" class="btn about-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="count-down-area pt-25 section-img-bg2" data-background="{{ asset( '/') }}front/assets/img/gallery/section-bg1.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-counter d-flex align-items-center">
                                        <div class="counter-img">
                                            <img src="{{ asset('/') }}front/assets/img/icon/count-icon1.svg" alt="">
                                        </div>
                                        <div class="captions">
                                            <span class="counter">35</span>
                                            <span class="plus">+</span>
                                            <p class="color-green">Active Cases</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-counter d-flex align-items-center">
                                        <div class="counter-img">
                                            <img src="{{ asset('/') }}front/assets/img/icon/count-icon2.svg" alt="">
                                        </div>
                                        <div class="captions">
                                            <span class="counter">12</span>
                                            <span class="plus">m</span>
                                            <p class="color-green">People Joined</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-counter d-flex align-items-center">
                                        <div class="counter-img">
                                            <img src="{{ asset('/') }}front/assets/img/icon/count-icon3.svg" alt="">
                                        </div>
                                        <div class="captions">
                                            <span class="counter">200</span>
                                            <span class="plus">m</span>
                                            <p class="color-green">Cases every Year</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-counter d-flex align-items-center">
                                        <div class="counter-img">
                                            <img src="{{ asset('/') }}front/assets/img/icon/count-icon4.svg" alt="">
                                        </div>
                                        <div class="captions">
                                            <span class="counter">1200</span>
                                            <p class="color-green">People get help from us</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="our-services section-padding position-relative">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-xl-7 col-lg-8 col-md-11">

                        <div class="section-tittle text-center mb-70">
                            <h2>We serve for peoples</h2>
                            <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet <br>pulvinar ante.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <img src="{{ asset('/') }}front/assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Pure Food & Water</a></h5>
                                <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <img src="{{ asset('/') }}front/assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Health & Medicine</a></h5>
                                <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <img src="{{ asset('/') }}front/assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Education</a></h5>
                                <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="emargency-care section-img-bg2" data-background="{{asset('/')}}front/assets/img/gallery/section-bg2.jpg">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-8 col-md-9 col-sm-12">
                        <div class="single-emargency">
                            <div class="emargency-cap">
                                <h5><a href="#">They need your help</a></h5>
                                <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet pulvinar ante tempor etiam lacus eros</p>
                                <p class="emargenc-cap">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet pulvinar ante tempor etiam lacus eros</p>
                                <a href="#" class="btn loan-btn">Donate in a Case</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="join-us-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-10">
                        <div class="joing-details">
                            <div class="section-tittle">
                                <h2>Join with Us</h2>
                            </div>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries and in some instances regions of the country. The regulation, the tax treatment, and the way.</p>
                            <a href="about.html" class="btn about-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-4 col-lg-4 col-md-7 col-sm-7">
                        <div class="joning-img">
                            <img src="{{ asset('/') }}front/assets/img/gallery/joining1.jpg" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                        <div class="joning-img">
                            <img src="{{ asset('/') }}front/assets/img/gallery/joining2.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
