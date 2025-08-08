@extends('master')
@section('content')
        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                          style="background-image: url({{ asset('bcorz-html/assets/images/backgrounds/man.jpg')}});"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__shape-4 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-4.png" alt="">
                        </div>
                        <div class="main-slider__shape-5 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-5.png" alt="">
                        </div>
                        <div class="main-slider__shape-6 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-6.png" alt="">
                        </div>
                        <div class="main-slider__shape-7"></div>
                        <div class="main-slider__shape-8"></div>
                        <div class="main-slider__shape-9 float-bob-x"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Hi there, <br> we're & why</h2>
                                        <p class="main-slider__text">We are committed to providing reliablle and securing
                                    shipping solutions..</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Creative Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide">
                        <div class="image-layer"
                             style="background-image: url({{ asset('bcorz-html/assets/images/shapes/plane.jpg')}});"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__shape-4 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-4.png" alt="">
                        </div>
                        <div class="main-slider__shape-5 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-5.png" alt="">
                        </div>
                        <div class="main-slider__shape-6 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-6.png" alt="">
                        </div>
                        <div class="main-slider__shape-7"></div>
                        <div class="main-slider__shape-8"></div>
                        <div class="main-slider__shape-9 float-bob-x"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Hi there, <br> we're & why</h2>
                                        <p class="main-slider__text"We are committed to providing reliablle and securing
                                    shipping solutions..></p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Creative Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('bcorz-html/assets/images/backgrounds/van.png')}});">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__shape-4 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-4.png" alt="">
                        </div>
                        <div class="main-slider__shape-5 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-5.png" alt="">
                        </div>
                        <div class="main-slider__shape-6 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-6.png" alt="">
                        </div>
                        <div class="main-slider__shape-7"></div>
                        <div class="main-slider__shape-8"></div>
                        <div class="main-slider__shape-9 float-bob-x"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Hi there, <br> we're & why</h2>
                                        <p class="main-slider__text">We are committed to providing reliablle and securing
                                    shipping solutions..</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Creative Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('bcorz-html/assets/images/backgrounds/ships.jpg')}});">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__shape-4 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-4.png" alt="">
                        </div>
                        <div class="main-slider__shape-5 zoominout">
                            <img src="assets/images/shapes/main-slider-shape-5.png" alt="">
                        </div>
                        <div class="main-slider__shape-6 float-bob-y">
                            <img src="assets/images/shapes/main-slider-shape-6.png" alt="">
                        </div>
                        <div class="main-slider__shape-7"></div>
                        <div class="main-slider__shape-8"></div>
                        <div class="main-slider__shape-9 float-bob-x"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Hi there, <br> we're & why</h2>
                                        <p class="main-slider__text">We are committed to providing reliablle and securing
                                    shipping solutions..</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Creative Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow-1"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-left-arrow-1"></i>
                    </div>
                </div>

            </div>
        </div>

        </section>
        <!--Main Slider End-->


        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-1 float-bob-x"
             style="background-image: url({{ asset('bcorz-html/assets/images/shapes/')}});"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">ABOUT COMPANY</span>
                                <h2 class="section-title__title">We solve your shipping challenges using our specialized approach.
                                </h2>
                            </div>
                            <div class="about-one__img">
                                <img src="{{  asset('bcorz-html/assets/images/shapes/plane.jpg')}}" alt="">
                                <div class="about-one__experience">
                                    <div class="about-one__experience-icon">
                                        <span class="icon-earth-alt"></span>
                                    </div>
                                    <p class="about-one__experience-text">We have service in 30
                                        countries of the world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__digital-agency">
                                <div class="about-one__digital-agency-left">
                                    <div class="about-one__digital-agency-icon">
                                        <span class="icon-megaphone"></span>
                                    </div>
                                    <h3 class="about-one__digital-agency-title">Victoria & Vivian Company
                                    </h3>
                                </div>
                                <div class="about-one__digital-agency-right">
                                    <ul class="about-one__digital-agency-points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Shipping Solutions solves your Shipping Challenges</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>We are here for you!</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="about-one__since">
                                        <div class="about-one__since-title">
                                            <h2>Since</h2>
                                        </div>
                                        <div class="about-one__experience-subtitle">
                                            <p>1997 from our experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="about-one__digital-agency-text">We are a shipping company that helps businesses set the standard in logistics.
                                We deliver shipping experiences that cut through delays and reliably become a trusted part of people’s lives</p>
                            <div class="about-one__digital-agency-creativity">
                                <div class="icon">
                                    <span class="icon-bulb-business-idea"></span>
                                </div>
                                <div class="text">
                                    <h3>We combine strategy with <br> creativity to deliver as expected</h3>
                                </div>
                            </div>
                            <div class="about-one__global-solutions">
                                <h3 class="about-one__global-solutions-title">We are a global workforce solutions</h3>
                                <p class="about-one__global-solutions-text-1">To simplify trade and cargo movement in and out of Nigeria, with professionalism,
                                    transparency, and speed</p>
                                <p class="about-one__global-solutions-text-2">Our goal is to inspire and challenge to
                                    get the best result.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->


                <div class="service-one__bottom text-center">

                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one__shape-4 float-bob-x"
                {{--  style="background-image: url({{ asset('bcorz-html/assets/images/shapes/flag.jpg')}});"></div>  --}}
            <div class="why-choose-one__shape-2 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
            </div>
            <div class="why-choose-one__shape-3 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
            </div>
            <div class="why-choose-one__shape-5 float-bob-x"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left">
                            <div class="why-choose-one__img-1 wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                              <img src="{{  asset('bcorz-html/assets/images/shapes/man.jpg')}}" alt="">
                                <div class="why-choose-one__img-2">
                                 <img src="{{  asset('bcorz-html/assets/images/shapes/man.jpg')}}" alt="">
                                </div>
                                <div class="why-choose-one__shape-1 zoominout">
                                 {{--  <img src="{{  asset('bcorz-html/assets/images/shapes/flag.jpg')}}" alt="">  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">WHY CHOOSE</span>
                                <div class="section-title-shape">
                                    {{--  <img src="{{  asset('bcorz-html/assets/images/shapes/flag.jpg')}}" alt="">  --}}
                                </div>
                                <h2 class="section-title__title">Why Choose Our
                                    Shipping agency</h2>
                            </div>
                            <p class="why-choose-one__text">Because we deliver more than packages ,
                                 we deliver peace of mind. With our fast, reliable, and cost‑effective services, your shipment is always in safe hands. We provide real‑time tracking, transparent pricing, and personalized customer care so you’re informed every step of the way. Whether it’s across town or across the globe,
                                we handle every delivery with precision, care, and a commitment to excellence.</p>
                            <div class="why-choose-one__progress">
                                <h3 class="why-choose-one__progress-title">Domestic Shipping</h3>
                                <p class="why-choose-one__progress-text">Our domestic shipping service offers fast transit times, competitive rates, and door‑to‑door convenience, ensuring your packages arrive safely and on schedule. We handle everything from small parcels to large freight,
                                     using a network of trusted routes and carriers to cover every region efficiently</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="78%">
                                        <div class="count-text">78%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-choose-one__progress">
                                <h3 class="why-choose-one__progress-title">Freight & Logistics</h3>
                                <p class="why-choose-one__progress-text">Our freight and logistics services are designed to handle everything from single pallets to full container loads, covering land, sea, and air transport.
                                     We combine deep industry expertise with advanced tracking technology to optimize routes, reduce transit times, and keep costs under control.
                                      Whether you’re moving raw materials to a factory, distributing finished products to retailers, or fulfilling large-scale eCommerce orders, we ensure your cargo arrives on time,
                                    intact, and with total transparency.</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="85%">
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Consulting One Start-->
        <section class="consulting-one">
            <div class="consulting-one__shape-1 zoom-fade-2"></div>
            <div class="consulting-one__bg"
                style="background-image: url({{ asset('bcorz-html/assets/images/backgrounds/plane.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="consulting-one__left">
                            <h3 class="consulting-one__title">We breathe logistics and exhale deliveries.</h3>
                            <p class="consulting-one__text"> We navigate routes, track timelines, and coordinate every step seamlessly so that all you see is a flawless delivery at your doorstep.
                                 It’s not just about moving goods; it’s about transforming complexity into simplicity, distance into connection, and promises into reality.

 </p>
                            <div class="consulting-one__bottom">
                                <div class="consulting-one__Strategy">
                                    <div class="icon">
                                        <span class="icon-chart-diagram-pie"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Consulting & Strategy</h3>
                                    </div>
                                </div>
                                <div class="consulting-one__count-box">
                                    <div class="consulting-one__count">
                                        <h3 class="odometer" data-count="863">00</h3>
                                        <span class="consulting-one__count-plus">+</span>
                                    </div>
                                    <div class="consulting-one__count-text">
                                        <p>Our Worlds <br> Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="consulting-one__right">
                            <div class="consulting-one__right-form-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <p class="consulting-one__form-sub-title">Get More Updates</p>
                                <h3 class="consulting-one__form-title">Free Consultation</h3>
                                <form action="https://themazine.com/mr/bcorz-html/index.html" method="post" class="consulting-one__right-form">
                                    <div class="consulting-one__input-box">
                                        <input type="text" placeholder="Name" name="Name">
                                    </div>
                                    <div class="consulting-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                    <div class="consulting-one__input-box">
                                        <input type="text" placeholder="Phone Number" name="Phone">
                                    </div>
                                    <div class="consulting-one__input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Subject</option>
                                            <option value="1">Subject 1</option>
                                            <option value="2">Subject 2</option>
                                            <option value="3">Subject 3</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="thm-btn consulting-one__btn">Consultation</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Consulting One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__shape-1 float-bob-x">
                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
            </div>
            <div class="testimonial-one__shape-2">
                <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
            </div>
            <div class="testimonial-one__shape-3 float-bob-y">
                <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow-1\"></span>","<span class=\"icon-right-arrow-1\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-img-box">
                                        <div class="testimonial-one__client-img">
                                            <img src="{{  asset('bcorz-html/assets/images/shapes/man.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__icon">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info-box">
                                        <p class="testimonial-one__text">“Working with this shipping company has been an absolutely game changer.They are reliable and transparent.”</p>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Michael Ogunsanya</h3>
                                            <p>Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-img-box">
                                        <div class="testimonial-one__client-img">
                                        <img src="{{  asset('bcorz-html/assets/images/shapes/project.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__icon">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info-box">
                                        <p class="testimonial-one__text">“I’ve used a lot of shipping companies over the years,
                                            but this one stands out for its speed and consistency.
                                            ”</p>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-one__client-name">John </h3>
                                            <p>Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-img-box">
                                        <div class="testimonial-one__client-img">
                                             <img src="{{  asset('bcorz-html/assets/images/shapes/ship.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__icon">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info-box">
                                        <p class="testimonial-one__text">“From booking to delivery, the process was seamless.
                                            The support team answered all my questions quickly,
                                             and they even went the extra mile to help me with customs paperwork”</p>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Ayodeji Samuel</h3>
                                            <p>Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-img-box">
                                        <div class="testimonial-one__client-img">
                                             <img src="{{  asset('bcorz-html/assets/images/shapes/plane.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__icon">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info-box">
                                        <p class="testimonial-one__text">“I ship fragile items regularly, and every package has arrived in perfect condition.
                                             They clearly take great care in handling shipments, which gives me peace of mind.”</p>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-one__client-name">Jonathan Oyeniyi</h3>
                                            <p>Brand Strategy Data Analytics</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        {{--  <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="blog-one__top">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="blog-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Our Blog Post</span>
                                    <div class="section-title-shape">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <h2 class="section-title__title">Latest post from the blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="blog-one__top-right">
                                <div class="blog-one__btn-box">
                                    <a href="blog.html" class="thm-btn">More News<i class="icon-right-arrow1"></i></a>
                                    <p>Our weekly post See more grounds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>12</p>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="icon-user-1"></i>By Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="icon-folder-1"></i>Marketing</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">What a Digital Marketing Agency
                                        Should Do</a>
                                </h3>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__btn">
                                        <a href="blog-details.html">Read more<i class="icon-right-arrow1"></i></a>
                                    </div>
                                    <div class="blog-one__comment">
                                        <a href="blog-details.html"><i class="icon-image-comment"></i>10 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>12</p>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="icon-user-1"></i>By Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="icon-folder-1"></i>Marketing</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Curabitur id nisi at nulla
                                        volutpat vulputate</a>
                                </h3>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__btn">
                                        <a href="blog-details.html">Read more<i class="icon-right-arrow1"></i></a>
                                    </div>
                                    <div class="blog-one__comment">
                                        <a href="blog-details.html"><i class="icon-image-comment"></i>10 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>12</p>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="icon-user-1"></i>By Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="icon-folder-1"></i>Marketing</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Fusce non quam nec nibh condimentum iaculis</a>
                                </h3>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__btn">
                                        <a href="blog-details.html">Read more<i class="icon-right-arrow1"></i></a>
                                    </div>
                                    <div class="blog-one__comment">
                                        <a href="blog-details.html"><i class="icon-image-comment"></i>10 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->  --}}

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__shape-1 zoominout">
                <img src="assets/images/shapes/site-footer-shape-1.png" alt="">
            </div>
            <div class="site-footer__shape-2 zoominout">
                <img src="assets/images/shapes/site-footer-shape-2.png" alt="">
            </div>
            <div class="site-footer__top">
                <div class="site-footer__shape-3 float-bob-x">
                    <img src="assets/images/shapes/site-footer-shape-3.png" alt="">
                </div>
                <div class="site-footer__shape-4 float-bob-y">
                    <img src="assets/images/shapes/site-footer-shape-4.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo-box">
                                    <div class="footer-widget__logo">
                                        <a href="#"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                                    </div>
                                </div>
                                <p class="footer-widget__text">Sounds good to you? We are committed to providing reliablle and securing
                                    shipping solutions.
                                   </p>
                                <ul class="footer-widget__social-box list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__quick-links">
                                <h4 class="footer-widget__title">Quick Links</h4>
                                <ul class="footer-widget__quick-links-list list-unstyled">
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="about.html">About us</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__get-in-touch">
                                <h4 class="footer-widget__title">Get In Touch</h4>
                                <p class="footer-widget__get-in-touch-text">Office Nos 5 , Adeyemi street, Agulejika Road, Ijeshatedo, Lagos, Nigeria
                                    City</p>

                                <div class="footer-widget__contact">
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <a href="tel:+17133406628">+17133406628</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__newsletter">
                                <h4 class="footer-widget__title">Newsletter</h4>
                                <p class="footer-widget__newsletter-text">Subscribe our Newletter & get updates in
                                    inbox.</p>
                                <form class="footer-widget__subscribe-box">
                                    <div class="footer-widget__subscribe-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__subscribe-btn">Signup</button>
                                    </div>
                                </form>
                                <div class="footer-widget__bottom-text">
                                    <p>Get every week update from airvice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-text">
                                    <p>Copyright© 2025 All Rights Reserved</p>
                                </div>
                                <ul class="site-footer__bottom-menu list-unstyled">
                                    <li>
                                        <a href="about.html">Privacy & Terms</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->
@endsection
