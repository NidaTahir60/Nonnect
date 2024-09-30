@extends('planning_portal.layouts.master')


@section('content')
    <section class="top-space-margin overflow-hidden position-relative p-0 border-radius-10px lg-no-border-radius">
        <div class="container-fluid p-0 h-100">
            <div class="row justify-content-md-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 pt-13 xl-pt-6 lg-pb-17 md-pb-6 sm-pt-40px text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-dark-gray fw-800 xs-fs-65 ls-minus-3px mb-45px d-block"
                        style="    font-size: 3.375rem;
                        line-height: 4rem;">
                        Find Planning and Housing Data That's Easy to
                        Use and Trust</h1>
                    <span class="fs-19 mb-15px d-block text-base-color">Access real-time planning data from across the UK.
                        Make informed decisions with live approvals, rejections, and appeals data.</span>

                </div>
                <div
                    class="col-xxl-7 col-xl-6 col-lg-5 col-md-10 position-relative align-self-end lg-pb-8 md-pb-1 sm-pb-10 xs-pb-30">
                    <div class="w-85px h-85px border-radius-100 d-flex align-items-center justify-content-center position-absolute z-index-9 left-50px lg-left-5px sm-left-30px top-100px lg-top-30px mt-30 translate-middle-y"
                        data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    </div>
                    <figure class="outside-box-right-2 position-relative">
                        <img src="{{ asset('assets/images/hero-section.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>

    </section>
    <!-- end banner -->

    <!-- start section -->
    <section class="pt-0 position-relative mt-5" id="services">


        <div class="col-xl-12 col-lg-12 md-mb-30px"
            data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <h2 class="fw-800 mb-5 text-center text-dark-gray ls-minus-2px">Our Services</h2>


        </div>
        <div
            class="position-absolute top-minus-70px lg-top-minus-50px left-minus-80px xxl-left-minus-40px lg-left-30px lg-w-300px opacity-1 w-350px z-index-1 d-none d-lg-inline-block">
            {{-- <img src="images/demo-medical-pattern.svg" alt="" data-bottom-top="transform: translateY(-50px)"
                data-top-bottom="transform: translateY(50px)"> --}}
        </div>
        <div
            class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 md-pt-50px md-pb-50px overflow-hidden position-relative">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-xl-12 col-lg-7">
                        <div>
                            <div>
                                <div class="row pt-30px pb-20px">
                                    <!-- start slider item -->
                                    <div class="col-md-4">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">

                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Real-Time
                                                        Planning Application Data
                                                    </span>
                                                    <p class="text-light-opacity">Access up-to-date planning application
                                                        data including new approvals, rejections, and appeals across the UK.
                                                        Stay informed with the latest insights from local councils,
                                                        including Scotland.
                                                    </p>

                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="col-md-4">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">

                                                <div class="feature-box-content">
                                                    <span
                                                        class="d-block text-dark-gray fs-19 fw-700 mb-5px">Industry-Specific
                                                        Tools
                                                    </span>
                                                    <p class="text-light-opacity">Builders, architects, structural
                                                        engineers, plumbers, electricians, and other tradespeople can access
                                                        live planning applications with contact details, making it easy to
                                                        submit quotes and win contracts.
                                                    </p>
                                                    {{-- <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a> --}}
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="col-md-4">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">

                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Comprehensive
                                                        Data
                                                    </span>
                                                    <p class="text-light-opacity">Our platform covers all stages of
                                                        planning, from pre-application to final decisions, giving you a
                                                        complete view of opportunities.

                                                    </p>
                                                    {{-- <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a> --}}
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pt-0 position-relative" id="feature">

        <div class="col-xl-12 col-lg-12 md-mb-30px"
            data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <h2 class="fw-800 mb-5 text-center text-dark-gray ls-minus-2px">Key Features</h2>


        </div>
        <div class="container-fluid mt-5">
            <div class="row align-items-center justify-content-center">
                {{-- image section --}}
                <div class="col-lg-6 col-md-10 md-mb-15 xs-mb-20 offset-lg-0 offset-md-1 position-relative">
                    <div class="w-75" data-animation-delay="200" data-shadow-animation="true">
                        <img src="{{ asset('assets/images/feature-1.png') }}" alt=""
                            class="border-radius-6px w-100">

                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                        <img src="{{ asset('assets/images/feature-2.png') }}" alt=""
                            class="border-radius-6px box-shadow-quadruple-large w-100" />
                    </div>
                </div>
                {{-- content section --}}
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-right text-md-start pt-5"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Search by Keyword</h2>
                    <p class="mb-30px w-95 lg-w-100 xs-mb-25px">Filter planning applications by specific areas, timeframes,
                        or relevant keywords to find the projects that matter to you.</p>

                    <div class="d-inline-block mt-40px xs-mt-30px">
                        <a href="#contact"
                            class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px">
                            <span>
                                <span class="btn-double-text" data-text="Contact Us">Contact Us</span>
                            </span>
                        </a>
                        {{-- <a href="demo-medical-timetable.html"
                        class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge xs-mt-15px">
                        <span>
                            <span><i class="feather icon-feather-calendar"></i></span>
                            <span class="btn-double-text" data-text="Check timetable">Check timetable</span>
                        </span>
                    </a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-10">
            <div class="row align-items-center justify-content-center">
                
                {{-- content section --}}
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-right text-md-start pt-5"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Email Alerts</h2>
                    <p class="mb-30px w-95 lg-w-100 xs-mb-25px">Receive new data and updates directly to your inbox based
                        on your saved searches. Stay informed on new projects as soon as they're added.</p>

                    <div class="d-inline-block mt-40px xs-mt-30px">
                        <a href="#contact"
                            class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px">
                            <span>
                                <span class="btn-double-text" data-text="Contact Us">Contact Us</span>
                            </span>
                        </a>
                        {{-- <a href="demo-medical-timetable.html"
                        class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge xs-mt-15px">
                        <span>
                            <span><i class="feather icon-feather-calendar"></i></span>
                            <span class="btn-double-text" data-text="Check timetable">Check timetable</span>
                        </span>
                    </a> --}}
                    </div>
                </div>
                {{-- image section --}}
                <div class="col-lg-6 col-md-10 md-mb-15 xs-mb-20 offset-lg-0 offset-md-1 position-relative">
                    <div class="w-75" data-animation-delay="200" data-shadow-animation="true">
                        <img src="{{ asset('assets/images/feature-5.png') }}" alt=""
                            class="border-radius-6px w-100">

                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                        <img src="{{ asset('assets/images/feature-6.png') }}" alt=""
                            class="border-radius-6px box-shadow-quadruple-large w-100" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->

    <section id="testimonials" class="overflow-hidden big-section">
        <div class="col-xl-12 col-lg-12 md-mb-30px"
            data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <h2 class="fw-800 mb-5 text-center text-dark-gray ls-minus-2px">Testimonials</h2>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 lg-mb-45px xs-mb-30px text-sm-start text-center">
                    
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">What Our Customers Are Saying.</h2>
                </div>
                <div class="col-xl-8">
                    <div class="outside-box-right-45 sm-outside-box-right-0">
                        <div class="swiper magic-cursor swiper-initialized swiper-horizontal swiper-watch-progress  swiper-backface-hidden"
                            data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 60, &quot;loop&quot;: true, &quot;parallax&quot;: true, &quot;speed&quot;: 1200, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-one-slide-pagination&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-2&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 5000, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }"
                            
                            >
                            <div class="swiper-wrapper testimonials-style-13" id="swiper-wrapper-23ff9c2362cb75ca"
                                aria-live="off"
                                style="transition-duration: 1200ms; transform: translate3d(-1387px, 0px, 0px);">

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700" role="group" aria-label="6 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="5">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Customer 1</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        PlanConnect has been a game-changer for our business. We now have direct access to the latest planning applications and contacts, which has helped us secure more projects.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700" role="group" aria-label="7 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="6">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Customer 2</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        As an architect, I rely on real-time data to plan projects effectively. PlanConnect's platform gives me everything I need in one place.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700" role="group" aria-label="8 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="7">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Customer 3</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        We’ve streamlined our workflow thanks to PlanConnect. No more manual searches – the email alerts keep us informed of all the opportunities relevant to us.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin swiper-slide-prev"
                                    data-swiper-parallax="700" role="group" aria-label="1 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="0">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Customer 1</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        PlanConnect has been a game-changer for our business. We now have direct access to the latest planning applications and contacts, which has helped us secure more projects.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin swiper-slide-visible swiper-slide-fully-visible swiper-slide-active"
                                    data-swiper-parallax="700" role="group" aria-label="2 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="1">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Customer 2</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        As an architect, I rely on real-time data to plan projects effectively. PlanConnect's platform gives me everything I need in one place.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin swiper-slide-visible swiper-slide-fully-visible swiper-slide-next"
                                    data-swiper-parallax="700" role="group" aria-label="3 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="2">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Customer 3</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        We’ve streamlined our workflow thanks to PlanConnect. No more manual searches – the email alerts keep us informed of all the opportunities relevant to us.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin swiper-slide-visible swiper-slide-fully-visible"
                                    data-swiper-parallax="700" role="group" aria-label="4 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="3">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Customer 1</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        PlanConnect has been a game-changer for our business. We now have direct access to the latest planning applications and contacts, which has helped us secure more projects.
                                    </p>
                                </div>

                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin swiper-slide-visible swiper-slide-fully-visible"
                                    data-swiper-parallax="700" role="group" aria-label="5 / 8"
                                    style="width: 286.75px; transition-duration: 1200ms; margin-right: 60px;"
                                    data-swiper-slide-index="4">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Customer 2</span>
                                    <p class="fs-22 lh-36 text-dark-gray">
                                        As an architect, I rely on real-time data to plan projects effectively. PlanConnect's platform gives me everything I need in one place.
                                    </p>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="separator-line-5px w-100 bg-extra-medium-gray mt-45px mb-45px xs-mt-30px xs-mb-30px">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 xs-mb-30px">
                            <div class="d-flex justify-content-center justify-content-sm-start">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-2 text-black swiper-button-prev slider-navigation-style-04 h-65px w-65px" style="background-color: #025575"
                                    tabindex="0" role="button" aria-label="Previous slide"
                                    aria-controls="swiper-wrapper-23ff9c2362cb75ca"><i  class="fa-solid text-white fa-arrow-left"></i>
                                </div>
                                <div class="slider-one-slide-next-2 text-black swiper-button-next slider-navigation-style-04 h-65px w-65px" style="background-color: #025575"
                                    tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="swiper-wrapper-23ff9c2362cb75ca"><i
                                        class="fa-solid fa-arrow-right text-white"></i></div>
                                <!-- end slider navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-gradient-solitude-blue-transparent pt-0">
        <div class="col-xl-12 col-lg-12 md-mb-30px"
            data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <h2 class="fw-800 mb-5 text-center text-dark-gray ls-minus-2px">Flexible Pricing Options</h2>

        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-01" style="">
                    <!-- start pricing table --> 
                    <div class="pricing-table text-center p-15">
                        <div class="pricing-header">
                            <div class="d-inline-block alt-font fw-600 text-base-color text-uppercase">Basic</div>
                            <h3 class="text-dark-gray mb-0 fw-600 ls-minus-2px"><sup class="fs-26">£</sup>7</h3>
                            <div class="fs-14 lh-20">Daily billing</div>
                        </div>
                        <div class="pricing-body pb-30px pt-20px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Perfect for those who need quick</li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">one-time access to the data</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-dark-gray btn-medium btn-rounded">Get started</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-01 popular-item" style="">
                    <div class="pricing-table bg-white box-shadow-extra-large border-radius-6px text-center ps-15 pe-15 pt-20 pb-20">
                        <div class="pricing-header">
                            <div class="d-inline-block alt-font fw-600 text-base-color text-uppercase">Standard</div>
                            <h3 class="text-dark-gray mb-0 fw-600 ls-minus-2px"><sup class="fs-26">£</sup>29</h3>
                            <div class="fs-14 lh-20">monthly billing</div>
                        </div>
                        <div class="pricing-body pb-30px pt-20px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Full access to the platform</li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Including unlimited searches</li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Downloads</li>
                                <li class="pt-10px pb-10px">Email alerts</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-base-color btn-large btn-rounded">Get started</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-01" style="">
                    <div class="pricing-table text-center p-15">
                        <div class="pricing-header ">
                            <div class="d-inline-block alt-font fw-600 text-base-color text-uppercase">Premium</div>
                            <h3 class="text-dark-gray mb-0 fw-600 ls-minus-2px"><sup class="fs-26">£</sup>299</h3>
                            <div class="fs-14 lh-20">yearly billing</div>
                        </div>
                        <div class="pricing-body pb-30px pt-20px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Save more with our annual plan</li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Enjoy full access to all features</li>
                                <li class="pt-10px pb-10px">With added savings</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-dark-gray btn-medium btn-rounded">Get started</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
            </div>
        </div>
    </section>

    <section class="position-relative" id="contact">

        <div class="container-fluid">
            <div class="row justify-content-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                <div class="col-md-6 text-center md-mb-50px">
                    <h2 class="fw-800 mb-5 text-dark-gray ls-minus-2px">Get in Touch.</h2>
                    <p class="mb-30px w-95 lg-w-100 xs-mb-25px">Have any questions or need support? Contact our team, and we'll be happy to assist you. Whether you're a builder, architect, or planning consultant, we're here to help you get the most out of our data.
                    </p>
                    
                </div>
                
            </div>

    </div></section>
    <!-- end section -->
@endsection
