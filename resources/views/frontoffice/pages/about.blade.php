@extends('frontoffice.layouts.master')
@section('title', 'About')
@section('content')

    <div role="main" class="main">

        <section
            class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
            style=" background-image: url(/assets/img/demos/digital-agency-2/about-us/about.jpeg); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-12 font-weight-bold">Sobre Nós</h1>
                        <span class="sub-title">A escolha perfeita para o teu proximo projeto</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Sobre Nós</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                                    data-appear-animation="maskUp">
                                    <span>Nós</span>
                                    <span class="word-rotator-words bg-primary">
                                        <b class="is-visible">Criamos</b>
                                        <b>Construímos</b>
                                        <b>Desenvolvemos</b>
                                    </span>
                                    <span> Soluções</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce elementum, nulla vel pellentesque consequat, ante
                                    nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Fusce elementum, nulla vel pellentesque consequat, ante
                                nulla hendrerit arcu.
                            </p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeIn"
                            data-appear-animation-delay="600">
                            <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Fusce nulla vel pellentesque consequat, ante nulla hendrerit
                                arcu.
                            </p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Fusce elementum, nulla vel consequat, ante nulla hendrerit
                                arcu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
            data-plugin-options="{'accY': -150}">
            <div class="container">
                <div class="row counters counters-sm pb-4 pt-3">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="45000"
                                data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
                            <label class="text-4 mt-1 text-color-light">Years In Business</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <i class="icons icon-graph text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="178">0</strong>
                            <label class="text-4 mt-1 text-color-light">High Score</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <i class="icons icon-cup text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="352">0</strong>
                            <label class="text-4 mt-1 text-color-light">Cups of Coffee</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">
                            Who <strong class="font-weight-extra-bold">We Are</strong>
                        </h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit massa
                            enim. Nullam id varius nunc.
                        </p>
                        <p class="pe-5 me-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus blandit massa enim. Nullam id varius nunc. Vivamus
                            bibendum magna ex, et faucibus lacus venenatis eget
                        </p>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5"
                        style="top: 1.7rem">
                        <img src="img/generic/generic-corporate-3-1.jpg"
                            class="img-fluid position-absolute d-none d-sm-block appear-animation"
                            data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%"
                            alt="" />
                        <img src="img/generic/generic-corporate-3-2.jpg"
                            class="img-fluid position-absolute d-none d-sm-block appear-animation"
                            data-appear-animation="expandIn" style="top: -33%; left: -29%" alt="" />
                        <img src="img/generic/generic-corporate-3-3.jpg"
                            class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn"
                            data-appear-animation-delay="600" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-3 pb-5 mt-4 mb-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                        Os melhores profissionais para o teu negócio.
                    </h2>
                    <p class="text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus
                        laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices.
                    </p>
                </div>
            </div>
            <div id="john" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="750">
                <div class="col">
                    <div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
                        <div class="position-relative lazyload col-12 col-md-4"
                            data-bg-src="img/demos/business-consulting-3/team/team-1.jpg"
                            style="background-position: center; background-size: cover; min-height: 320px;">
                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                <div class="custom-crooked-line">
                                    <img width="154" height="26"
                                        src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 154px;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 p-5">
                            <div class="d-flex justify-content-between justify-content-md-start mb-4">
                                <div>
                                    <h2 class="font-weight-semibold text-6 line-height-1 mb-0">Fábio Joaninho</h2>
                                    <p class="text-3-5 mb-0">CEO and Founder</p>
                                </div>
                                <div class="bg-color-grey ms-4 me-1 d-none d-md-block" style="width: 8px;"></div>
                                <ul
                                    class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    <li class="social-icons-instagram">
                                        <a href="http://www.instagram.com/" target="_blank" class="text-4"
                                            title="Instagram" data-cursor-effect-hover="fit">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter"
                                            data-cursor-effect-hover="fit">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" class="text-4"
                                            title="Facebook" data-cursor-effect-hover="fit">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="custom-read-more-style-1" data-plugin-readmore
                                data-plugin-options="{
                                    'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
                                    'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
                                    'maxHeight': 160
                                }">
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit.
                                </p>
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus
                                    vulputate. Cras laoreet pretium blandit.
                                </p>
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit.
                                </p>
                                <div class="readmore-button-wrapper d-none">
                                    <a href="#" class="text-decoration-none">
                                        Ver mais
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="robert" class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="250">
                <div class="col">
                    <div class="d-flex flex-wrap bg-light box-shadow-4 custom-link-hover-effects">
                        <div class="position-relative lazyload col-12 col-md-4"
                            data-bg-src="img/demos/business-consulting-3/team/team-2.jpg"
                            style="background-position: center; background-size: cover; min-height: 320px;">
                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                <div class="custom-crooked-line">
                                    <img width="154" height="26"
                                        src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 154px;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 p-5">
                            <div class="d-flex justify-content-between justify-content-md-start mb-4">
                                <div>
                                    <h2 class="font-weight-semibold text-6 line-height-1 mb-0">João Peres</h2>
                                    <p class="text-3-5 mb-0">CEO and Founder</p>
                                </div>
                                <div class="bg-color-grey ms-4 me-1 d-none d-md-block" style="width: 8px;"></div>
                                <ul
                                    class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    <li class="social-icons-instagram">
                                        <a href="http://www.instagram.com/" target="_blank" class="text-4"
                                            title="Instagram" data-cursor-effect-hover="fit">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter"
                                            data-cursor-effect-hover="fit">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" class="text-4"
                                            title="Facebook" data-cursor-effect-hover="fit">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="custom-read-more-style-1" data-plugin-readmore
                                data-plugin-options="{
                                    'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
                                    'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
                                    'maxHeight': 160
                                }">
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit.
                                </p>
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus
                                    vulputate. Cras laoreet pretium blandit.
                                </p>
                                <p class="text-3-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit.
                                </p>
                                <div class="readmore-button-wrapper d-none">
                                    <a href="#" class="text-decoration-none">
                                        View More
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container pb-2">
                <div class="row">
                    <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">
                            About
                            <strong class="font-weight-extra-bold">Our Clients</strong>
                        </h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit massa
                            enim. Nullam id varius nunc.
                        </p>
                        <div class="row justify-content-center my-5">
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                <img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-style-1 stage-margin"
                            data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <div
                                    class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0"
                                            alt="" />
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Morbi vitae metus tellus. Curabitur non lorem at
                                            odio tempus consectetur vel eu lacus. Morbi.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-extra-bold text-2">John
                                                Smith</strong><span>Okler</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div
                                    class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0"
                                            alt="" />
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Morbi vitae metus tellus. Curabitur non lorem at
                                            odio tempus consectetur vel eu lacus. Morbi.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-extra-bold text-2">John
                                                Smith</strong><span>Okler</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
