@extends('frontoffice.layouts.master')
@section('title', 'About')
@section('content')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="img/demos/digital-agency-2/bg/page-header-bg.jpg">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-relative z-index-2 mt-0 mt-lg-3 mt-xl-0 pt-0 pt-md-4 pt-lg-5 pb-xl-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
        <div class="row">
            <div class="col-xl-7 py-4 py-xl-0">
                <img class="img-fluid" src="img/demos/digital-agency-2/about-us/about-us-1.jpg" alt="About Us 1">
            </div>
        </div>
        <div class="row justify-content-end p-relative">
            <div class="col-xl-7 position-relative">
                <div class="about-us-featured-block w-100 bg-color-primary p-5 text-end custom-title-with-icon custom-title-with-icon-right custom-title-with-icon-light">
                    <p class="custom-text-7 text-color-light opacity-7">Welcome to the Age of Digital Transformation</p>
                    <h4 class="custom-text-11 text-color-light">Experience Design and<br/>Intelligent Marketing.</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-5 mt-xl-0 mb-lg-4">
            <div class="col-xl-4 d-flex flex-column justify-content-end">
                <p class="custom-font-tertiary custom-text-7 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus.
                </p>
                <p class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
                </p>
                <p class="custom-text-4 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    Sed elementum cursus ante in suscipit. Etiam a arcu consequat, vehicula nisi in, efficitur lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In eu lectus ultricies, pellentesque libero vitae, dictum erat.
                </p>
            </div>
            <div class="col-xl-7 py-4 py-xl-0">
                <img class="img-fluid" src="img/demos/digital-agency-2/about-us/about-us-2.jpg" alt="About Us 2">
                <ul class="custom-list list-unstyled my-3">
                    <li class="font-weight-medium custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Porto Digital Agency Bulding, 2022</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="bg-color-dark mb-5 mt-lg-5">
        <div class="container py-5">
            <div class="row counters py-5">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <strong data-to="35" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">Business Year</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <strong data-to="240" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">Satisfied Clients</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                        <strong data-to="2000" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">Projects Delivery</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <strong data-to="130" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">Team Members</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-approach py-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-xl-4 pb-5 pb-xl-0 ">
                    <div class="approach-img bg-color-dark">
                        <div class="custom-circle custom-circle-1"></div>
                        <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                        <span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                        <span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                        <span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    </div>
                </div>
                <div class="col-xl-8 d-flex flex-column justify-content-center align-items-start ps-5">
                    <p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus.</p>
                    <p class="custom-text-3 mb-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero.</p>
                    <a herf="demo-digital-agency-2-contact-us.html" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-insights bg-color-tertiary p-relative py-5">
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Our Insights</h4>
                </div>
            </div>
            <div class="row">
                <div class="col pb-5">
                    <article>
                        <p class="custom-font-tertiary text-uppercase custom-text-2 mb-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">FEBRUARY 4, 2022</p>
                        <h4 class="text-color-dark custom-text-8 font-weight-bold mb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><a href="demo-digital-agency-2-our-blog-post.html" class="text-color-dark text-color-hover-primary">An Interview With John Paul Doe</a></h4>
                        <p class="custom-text-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero.</p>
                        <a href="demo-digital-agency-2-our-blog-post.html" class="text-color-primary text-color-hover-secondary custom-text-4 font-weight-bold text-decoration-underline appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">Read More...</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col pb-5">
                    <article>
                        <p class="custom-font-tertiary text-uppercase custom-text-2 mb-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">FEBRUARY 4, 2022</p>
                        <h4 class="text-color-dark custom-text-8 font-weight-bold mb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><a href="demo-digital-agency-2-our-blog-post.html" class="text-color-dark text-color-hover-primary">Building An E-Commerce Site With CMS</a></h4>
                        <p class="custom-text-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero.</p>
                        <a href="demo-digital-agency-2-our-blog-post.html" class="text-color-primary text-color-hover-secondary custom-text-4 font-weight-bold text-decoration-underline appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">Read More...</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col pb-5">
                    <article>
                        <p class="custom-font-tertiary text-uppercase custom-text-2 mb-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">FEBRUARY 4, 2022</p>
                        <h4 class="text-color-dark custom-text-8 font-weight-bold mb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><a href="demo-digital-agency-2-our-blog-post.html" class="text-color-dark text-color-hover-primary">How To Design Mobile Apps For Everyone</a></h4>
                        <p class="custom-text-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero.</p>
                        <a href="demo-digital-agency-2-our-blog-post.html" class="text-color-primary text-color-hover-secondary custom-text-4 font-weight-bold text-decoration-underline appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">Read More...</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a herf="demo-digital-agency-2-our-blog.html" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">View More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url('img/demos/digital-agency-2/bg/bg-2.jpg'); background-size: cover; background-position: center;">
        <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
                    <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        We’re interested in talking<br/>
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

@endsection
