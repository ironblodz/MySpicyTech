@extends('frontoffice.layouts.master')
@section('title', 'Página inicial')
@section('content')

<div class="body">
    <div role="main" class="main">
        <!-- ==== Header Principal ==== -->
        <section class="section custom-circles-container section-angled bg-dark border-0 m-0">
            <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"></div>
            <div class="section-angled-content h-100">
                <div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5" >
                    <div class="row pb-lg-5 mt-5 mb-lg-5">
                        <div class="col-lg-7 pt-5 pt-md-0 pb-lg-5 mt-5 mb-md-5">
                            <h2 class="custom-title-with-icon custom-title-with-icon-primary font-weight-normal text-color-default text-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Bem vindos à SpicyTecH</h2>
                            <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">Transforme ideias em Websites  -> <span class="text-style">S</span>picy<span class="text-style">T</span>ecH.</h1>
                            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-outline custom-btn-outline btn-primary rounded-0 font-weight-semibold text-color-light bg-color-hover-primary custom-btn-with-arrow text-4 btn-px-4 py-3 mt-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">Contacte-nos</a>
                        </div>
                    </div>
                    <div class="spacer py-5 mt-lg-5 mb-md-5"></div>
                </div>
            </div>
        </section>

        <!-- ===== CARDS INFO ===== -->
        <section class="custom-cards p-relative mb-5 pb-5 z-index-2">
            <div class="container">
                <div class="row">
                    <!-- ==== card info 1 ==== -->
                    <div class="col-lg-4 col-custom-cards">
                        <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                <img src="/assets/img/demos/digital-agency-2/icons/responsive.svg" alt="Solution" class="mb-5"  style=" max-width: 80px; background-size: cover;">
                                <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">Responsivo</h4>
                                <p class="card-text text-center custom-text-4 font-weight-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor</p>
                            </div>
                        </div>
                    </div>
                    <!-- ==== card info 2 ==== -->
                    <div class="col-lg-4 col-custom-cards">
                        <div class="card border-0 bg-color-primary rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                <img src="/assets/img/demos/digital-agency-2/icons/security.svg" alt="Solution" class="mb-5" style=" max-width: 100px; "">
                                <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">Seguro</h4>
                                <p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor</p>
                            </div>
                        </div>
                    </div>
                    <!-- ==== card info 3 ==== -->
                    <div class="col-lg-4 col-custom-cards">
                        <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                <img src="/assets/img/demos/digital-agency-2/icons/stars.svg" alt="Solution" class="mb-5" style=" max-width: 110px; background-size: cover;">
                                <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">Elegante</h4>
                                <p class="card-text text-center custom-text-4 font-weight-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==== Nossa Abordagem ==== -->
        <section class="our-approach py-5 mb-4 mb-xl-5 mt-4 mt-xl-0 p-relative z-index-1" id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-4 d-flex flex-column justify-content-center align-items-start">
                        <h4 class="custom-text-10 mb-4 pb-2 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Nossa abordagem</h4>
                        <p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus.</p>
                        <p class="custom-text-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a herf="demo-digital-agency-2-about-us.html" class="btn btn-outline custom-btn-outline btn-light border-0 rounded-0 text-color-primary custom-text-5 font-weight-bold custom-btn-with-arrow bg-transparent p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Descubra mais</a>
                    </div>
                    <div class="col-lg-4 py-4 py-lg-0">
                        <div class="approach-img bg-color-dark">
                            <div class="custom-circle custom-circle-1"></div>
                            <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                            <span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                            <span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                            <span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 d-flex align-items-center mt-4 mt-lg-0">
                        <ul class="custom-list list-unstyled ms-xl-2 ps-xl-1">
                            <li class="font-weight-medium custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Pellentesque ultricies nibh lorem ipsum</li>
                            <li class="font-weight-medium custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Ultricies nibh pellen</li>
                            <li class="font-weight-medium custom-text-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Pellentesque ultricies nibh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-work overflow-hidden" id="ourWork">
            <div class="container-fluid">
                <div class="row bg-color-dark">
                    <div class="col-xl-9 px-0">
                        <div class="sort-destination w-100" data-sort-id="portfolio">
                            <div class="row w-100 m-0 isotope-item search-engine-optimize social-media-ads">
                                <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                    <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                        <img src="{{ asset('assets/img/demos/digital-agency-2/bg/bg-5.jpg') }}" class="w-100">
                                        <div class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                            <div class="text-start p-relative z-index-2 mb-3">
                                                <h4 class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">Okler Campaing</h4>
                                                <p class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">search engine optimize, social media ads</p>
                                                <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver projeto</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row w-100 m-0 isotope-item content-marketing email-marketing search-engine-optimize">
                                <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                    <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                        <img src="{{ asset('assets/img/demos/digital-agency-2/bg/bg-6.jpg') }}" class="w-100">
                                        <div class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                            <div class="text-start p-relative z-index-2 mb-3">
                                                <h4 class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">Porto Dashboard</h4>
                                                <p class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">content marketing, email marketing, search engine optimize</p>
                                                <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver projeto</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row w-100 m-0 isotope-item ui-design web-development b2b-software">
                                <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                    <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                        <img src="{{ asset('assets/img/demos/digital-agency-2/bg/bg-7.jpg') }}" class="w-100">
                                        <div class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                            <div class="text-start p-relative z-index-2 mb-3">
                                                <h4 class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">Okler Responsive Photos</h4>
                                                <p class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">ui design, web development, b2b software</p>
                                                <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver projeto</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row w-100 m-0 isotope-item brand-and-identity content-strategy">
                                <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                    <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                        <img src="{{ asset('assets/img/demos/digital-agency-2/bg/bg-8.jpg') }}" class="w-100">
                                        <div class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                            <div class="text-start p-relative z-index-2 mb-3">
                                                <h4 class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">Okler Mobile App</h4>
                                                <p class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">brand and identity, content strategy</p>
                                                <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver projeto</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 bg-color-dark px-xl-0 sticky-container position-relative">
                        <div id="sidebar" class="side-menu-our-work sidebar position-relative">
                            <div data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                                <div class="py-5 my-2 ps-5 pe-0">
                                    <h4 class="text-color-light custom-text-10 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">Portfólio</h4>
                                    <ul class="list-unstyled sort-source" data-sort-id="portfolio" data-option-key="filter">
                                        <li class="nav-item active" data-option-value="*">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">View All</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".ui-design">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">UI Design</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".web-development">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Web Development</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".b2b-software">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">B2B Software</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".content-marketing">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Content Marketing</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".email-marketing">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Email Marketing</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".search-engine-optimize">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Search Engine Optimize</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".social-media-ads">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Social Media Ads</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".brand-and-identity">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Brand and Identity</a>
                                        </li>
                                        <li class="nav-item" data-option-value=".content-strategy">
                                            <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Content Strategy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services p-relative py-5 my-5">
            <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Nós ajudamos com:</h4>
                </div>
                <div class="row">
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                                UX Design
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                                Web Development
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                                Marca e Entidade
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                                Content Marketing
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                                Email Marketing
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                                Search Engine Optimize
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <a href="demo-digital-agency-2-our-services-detail.html" class="text-decoration-none">
                            <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                                Social Media Ads
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <p class="custom-text-4 mt-4 mb-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==== TESTEMUNHOS ==== -->
        <section class="section section-height-3 bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                        <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-dark nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100, 'autoHeight': true}">
                            <div>
                                <div class="testimonial testimonial-style-2 mb-0">
                                    <div class="testimonial-author">
                                        <img src="/assets/img/clients/profile1.jpeg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden mt-5" style="background-image: url('assets/img/demos/digital-agency-2/bg/...); background-size: cover; background-position: center;">
            <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
            <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
                        <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            Where interested in talking<br/>
                            about your business.
                        </h4>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                        <a herf="#" class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>


@endsection
