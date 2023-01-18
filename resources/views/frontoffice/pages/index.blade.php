@extends('frontoffice.layouts.master')
@section('title', 'Página inicial')
@section('content')

    <div class="body">
        <div role="main" class="main">
            {{-- ==== Header Principal ==== --}}
            <section class="section custom-circles-container section-angled bg-dark border-0 m-0"
                style="background-image:url(/assets/img/demos/digital-agency-2/bg/); background-size: cover; background-position: center;">
                <div class="section-angled-content h-100">
                    <div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5">
                        <div class="row pb-lg-5 mt-5 mb-lg-5">
                            <div class="col-lg-7 pt-5 pt-md-0 pb-lg-5 mt-5 mb-md-5">
                                <h2 class="custom-title-with-icon custom-title-with-icon-primary font-weight-normal text-color-default text-5 mb-0 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                                    Bem vindos à SpicyTecH
                                </h2>
                                <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">
                                    Impulsionando negócios com o poder da tecnologia.
                                </h1>
                                <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                    class="btn btn-outline custom-btn-outline btn-primary rounded-md font-weight-semibold text-color-light bg-color-hover-primary custom-btn-with-arrow text-4 btn-px-4 py-3 mt-2 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                                    Contacte-nos
                                </a>
                            </div>
                        </div>
                        <div class="spacer py-5 mt-lg-5 mb-md-5"></div>
                    </div>
                </div>
            </section>

            <section class="custom-cards p-relative mb-5 pb-5 z-index-2">
                <div class="container">
                    <div class="row">
                        {{-- ==== card info 1 ====  --}}
                        <div class="col-lg-4 col-custom-cards">
                            <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="100">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('/assets/img/demos/digital-agency-2/icons/responsive.svg') }}"
                                        alt="Solution" class="mb-5" style=" max-width: 80px; background-size: cover;">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Responsivo</h4>
                                    <p class="card-text text-center custom-text-4 font-weight-lighter">
                                        Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- ==== card info 2 ====  --}}
                        <div class="col-lg-4 col-custom-cards" data-cursor-effect-hover="point"
                            data-cursor-effect-hover-color="light">
                            <div class="card border-0 bg-color-primary rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="200">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('/assets/img/demos/digital-agency-2/icons/security.svg') }}"
                                        alt="Solution" class="mb-5" style=" max-width: 100px; ">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Seguro</h4>
                                    <p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac
                                        auctor
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- ==== card info 3 ====  --}}
                        <div class="col-lg-4 col-custom-cards">
                            <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                                    <img src="{{ asset('/assets/img/demos/digital-agency-2/icons/stars.svg') }}"
                                        alt="Solution" class="mb-5" style=" max-width: 110px; background-size: cover;">
                                    <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                        Elegante
                                    </h4>
                                    <p class="card-text text-center custom-text-4 font-weight-lighter">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac
                                        auctor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ==== Nossa Abordagem ====  --}}
            <section class="our-approach py-5 mb-4 mb-xl-5 mt-4 mt-xl-0 p-relative z-index-1" id="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 d-flex flex-column justify-content-center align-items-start">
                            <h4 class="custom-text-10 mb-4 pb-2 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                                Nossa abordagem
                            </h4>
                            <p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                A SpicyTecH baseia-se em três pilares fundamentais: Inovaçao, ..
                            </p>
                            <p class="custom-text-3 appear-animation" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="400">
                                Acreditamos que a inovação é essencial para o sucesso de qualquer empresa no mundo.
                            </p>
                            <p class="custom-text-3 appear-animation" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="600">
                                Por isso, estamos sempre á procura de novas formas de ajudar os nossos clientes a
                                destacarem-se na web.
                            </p>
                            <a herf="demo-digital-agency-2-about-us.html"
                                class="btn btn-outline custom-btn-outline btn-light border-0 rounded-0 text-color-primary custom-text-5 font-weight-bold custom-btn-with-arrow bg-transparent p-0 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                                Descubra mais
                            </a>
                        </div>
                        <div class="col-lg-4 py-4 py-lg-0">
                            <div class="approach-img bg-color-dark">
                                <div class="custom-circle custom-circle-1"></div>
                                <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                                <span
                                    class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation"
                                    data-appear-animation="zoomIn" data-appear-animation-delay="100">
                                </span>
                                <span
                                    class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation"
                                    data-appear-animation="zoomIn" data-appear-animation-delay="100">
                                </span>
                                <span
                                    class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation"
                                    data-appear-animation="zoomIn" data-appear-animation-delay="100">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 d-flex align-items-center mt-4 mt-lg-0">
                            <ul class="custom-list list-unstyled ms-xl-2 ps-xl-1">
                                <li class="font-weight-medium custom-text-4 mb-4 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                    INOVAÇÃO
                                </li>
                                <li class="font-weight-medium custom-text-4 mb-4 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    QUALIDADE
                                </li>
                                <li class="font-weight-medium custom-text-4 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                                    EFICIÊNCIA
                                </li>
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
                                            <img src="{{ asset('assets/img/demos/digital-agency-2/bg/proj3.jpeg') }}"
                                                class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-10 font-weight-bold text-decoration-none mb-2">
                                                        Katrina
                                                    </h4>
                                                    <p
                                                        class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">
                                                        Malas e Acessórios
                                                    </p>
                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">
                                                        Ver projeto
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="row w-100 m-0 isotope-item content-marketing email-marketing search-engine-optimize">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                            <img src="{{ asset('assets/img/demos/digital-agency-2/bg/proj2.jpeg') }}"
                                                class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Coliworld
                                                    </h4>
                                                    <p
                                                        class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">
                                                        Help all animals in need
                                                    </p>
                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">
                                                        Ver projeto
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row w-100 m-0 isotope-item ui-design web-development b2b-software">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                            <img src="{{ asset('assets/img/demos/digital-agency-2/bg/proj1.jpeg') }}"
                                                class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        Jorparts
                                                    </h4>
                                                    <p
                                                        class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">
                                                        Peças, Acessórios e Máquinas
                                                    </p>
                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">
                                                        Ver projeto
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row w-100 m-0 isotope-item brand-and-identity content-strategy">
                                    <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                        <a href="demo-digital-agency-2-our-work-detail.html" class="d-block">
                                            <img src="{{ asset('assets/img/demos/digital-agency-2/bg/proj4.jpeg') }}"
                                                class="w-100">
                                            <div
                                                class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                <div class="text-start p-relative z-index-2 mb-3">
                                                    <h4
                                                        class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                        EndlessGlamour
                                                    </h4>
                                                    <p
                                                        class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">
                                                        Estética e Cabeleireiros
                                                    </p>
                                                    <span
                                                        class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">
                                                        Ver projeto
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 bg-color-dark px-xl-0 sticky-container position-relative">
                            <div id="sidebar" class="side-menu-our-work sidebar position-relative">
                                <div data-plugin-sticky
                                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                                    <div class="py-5 my-2 ps-5 pe-0">
                                        <h4
                                            class="text-color-light custom-text-10 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">
                                            Portfólio
                                        </h4>
                                        <ul class="list-unstyled sort-source" data-sort-id="portfolio"
                                            data-option-key="filter">
                                            <li class="nav-item active" data-option-value="*">
                                                <a href="#ourWork" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Ver todos
                                                </a>
                                            </li>
                                            <li class="nav-item" data-option-value=".ui-design">
                                                <a href="#ourWork" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Websites
                                                </a>
                                            </li>
                                            <li class="nav-item" data-option-value=".web-development">
                                                <a href="#ourWork" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    E-commerces
                                                </a>
                                            </li>
                                            <li class="nav-item" data-option-value=".b2b-software">
                                                <a href="#ourWork" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Landing Pages
                                                </a>
                                            </li>
                                            <li class="nav-item" data-option-value=".content-marketing">
                                                <a href="#ourWork" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    Portfólios
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ===== SERVIÇOS ===== --}}
            <section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
                <div class="shape-divider" style="height: 123px;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                        <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                        <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
                    </svg>
                </div>
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-xl-10 text-center">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                                O QUE NÓS FAZEMOS
                            </h2>
                            <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                Nossos Serviços Premium
                            </h3>
                            <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="750">
                                Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel
                                efficitur felis ultrices non. Cras a elit sit amet leo acun
                                volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.
                            </p>
                        </div>
                    </div>

                    <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        {{-- Serviços 1  --}}
                        <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                            <a href="demo-business-consulting-3-services-detail.html"
                                class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card box-shadow-4">
                                    <div class="card-img-top position-relative overlay overlay-show">
                                        <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                            <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                                Desenvolviemnto Web
                                            </h4>
                                            <div class="custom-crooked-line">
                                                <img width="154" height="26"
                                                    src="{{ asset('assets/img/demos/business-consulting-3/icons/infinite-crooked-line.svg') }}"
                                                    alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                    style="width: 154px;" />
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/img/demos/business-consulting-3/services/services-1.jpg') }}"
                                            class="img-fluid" alt="Card Image" />
                                    </div>
                                    <div class="card-body d-flex align-items-center custom-view-more px-4">
                                        <p class="card-text w-100 mb-0">
                                            Criamos e desenvolvemos websites de acordo com as suas necessidades.
                                        </p>
                                        <img width="50" height="50" class="w-auto"
                                            src="{{ asset('assets/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 50px;" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- Serviços 2  --}}
                        <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                            <a href="demo-business-consulting-3-services-detail.html"
                                class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card box-shadow-4">
                                    <div class="card-img-top position-relative overlay overlay-show">
                                        <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                            <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                                Design Logo
                                            </h4>
                                            <div class="custom-crooked-line">
                                                <img width="154" height="26"
                                                    src="{{ asset('assets/img/demos/business-consulting-3/icons/infinite-crooked-line.svg') }}"
                                                    alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                    style="width: 154px;" />
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/img/demos/business-consulting-3/services/services-2.jpg') }}"
                                            class="img-fluid" alt="Card Image" />
                                    </div>
                                    <div class="card-body d-flex align-items-center custom-view-more px-4">
                                        <p class="card-text w-100 mb-0">
                                            Criamos e recriamos o logótipo da sua empresa.
                                        </p>
                                        <img width="50" height="50" class="w-auto"
                                            src="{{ asset('assets/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 50px;" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- Serviços 3  --}}
                        <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                            <a href="demo-business-consulting-3-services-detail.html"
                                class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card box-shadow-4">
                                    <div class="card-img-top position-relative overlay overlay-show">
                                        <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                            <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                                Fotografia e Multimédia
                                            </h4>
                                            <div class="custom-crooked-line">
                                                <img width="154" height="26"
                                                    src="{{ asset('assets/img/demos/business-consulting-3/icons/infinite-crooked-line.svg') }}"
                                                    alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                    style="width: 154px;" />
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/img/demos/business-consulting-3/services/services-3.jpg') }}"
                                            class="img-fluid" alt="Card Image" />
                                    </div>
                                    <div class="card-body d-flex align-items-center custom-view-more px-4">
                                        <p class="card-text w-100 mb-0">
                                            Cras a elit sit amet leo accumsan. Suspendisse hendrerit.
                                        </p>
                                        <img width="50" height="50" class="w-auto"
                                            src="{{ asset('assets/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 50px;" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <a href="demo-business-consulting-3-services.html"
                                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                    <span>Todos os serviços</span>
                                </a>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="section section-height-4 section-with-shape-divider position-relative bg-dark border-0 m-0">
                <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                        <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 " />
                        <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 " />
                    </svg>
                </div>
                <div class="position-absolute top-0 left-0 h-100 d-none d-lg-block overlay overlay-show overlay-color-primary"
                    data-plugin-parallax data-plugin-options="{'speed': 1.5}"
                    data-image-src="{{ asset('assets/img/demos/business-consulting-3/parallax/parallax-1.jpg') }}"
                    style="width: 40%;">
                </div>
                <div class="container position-relative z-index-3 pt-5 mt-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="custom-text-background custom-big-font-size-1 text-9 font-weight-bold float-end clearfix line-height-1 lazyload pe-xl-5 me-3 mb-0 d-none d-lg-block"
                                data-bg-src="{{ asset('assets/img/demos/business-consulting-3/backgrounds/text-background-2.jpg') }}"
                                data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                BENEFÍCIOS
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">PORQUÊ NÓS?</h2>
                            <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Learn Here The
                                Main Reasons Why You Should Choose Us</h3>
                            <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                hendreriast ehicula leo, vel efficitur felis ultrices non. </p>
                            <ul class="list ps-0 pe-lg-5 mb-0">
                                <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                    <i
                                        class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                    <span class="text-3-5 ps-3">We wil identify where you're getting off-track in all areas
                                        and not just</span>
                                </li>
                                <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                                    <i
                                        class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                    <span class="text-3-5 ps-3">We create a program that accelerates your strategic
                                        execution and growth goals.
                                    </span>
                                </li>
                                <li class="d-flex align-items-start appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                                    <i
                                        class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                    <span class="text-3-5 ps-3">Consistently hit strategic objectives and revenue targets,
                                        and grow, year over year.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ==== TESTEMUNHOS ====  --}}
            <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
                <div class="container pb-2">
                    <div class="row">
                        <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                            <h2 class="text-color-dark font-weight-normal text-6 mb-2">
                                Sobre os
                                <strong class="font-weight-extra-bold">Nossos clientes</strong>
                            </h2>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit massa
                                enim. Nullam id varius nunc.
                            </p>
                            <div class="row justify-content-center my-5">
                                <div class="col-8 text-center col-md-4">
                                    <img src="{{ asset('assets/img/logos/katrina.png') }}"
                                        class="img-fluid hover-effect-3" alt="" />
                                </div>
                                <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                    <img src="{{ asset('/assets/img/logos/jorparts.png') }}"
                                        class="img-fluid hover-effect-3" alt="" />
                                </div>
                                <div class="col-8 text-center col-md-4">
                                    <img src="{{ asset('/assets/img/logos/coliworld.png') }}"
                                        class="img-fluid hover-effect-3" alt="" />
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
                                            <img src="{{ asset('assets/img/clients/client-1.jpg') }}"
                                                class="img-fluid rounded-circle mb-0" alt="" />
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
                                                <strong class="font-weight-extra-bold text-2">Fábio
                                                    Joaninho</strong><span>Web Developer</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                        <div class="testimonial-author">
                                            <img src="{{ asset('assets/img/clients/client-1.jpg') }}"
                                                class="img-fluid rounded-circle mb-0" alt="" />
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
                                                <strong class="font-weight-extra-bold text-2">João Peres</strong><span>Web
                                                    Developer</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section
                class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden mt-5"
                style="background-image: url(/assets/img/demos/digital-agency-2/bg/office2.jpeg); background-size: cover;
                background-position: center;">
                <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
                    data-appear-animation-delay="100"></span>
                <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
                    data-appear-animation-delay="100"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                Não tenha medo
                            </p>
                            <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                Nós estamos interessados em falar <br />
                                Sobre o seu negócio.
                            </h4>
                        </div>
                        <div
                            class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                            <a herf="#"
                                class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-5 line-height-2 font-weight-semibold custom-btn-with-arrow appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                                Anda cá Canita!
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


@endsection
