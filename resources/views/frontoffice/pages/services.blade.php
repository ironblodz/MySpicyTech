@extends('frontoffice.layouts.master')
@section('title', 'Serviços')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
            data-bg-src="img/demos/digital-agency-2/bg/page-header-bg-dark.jpg">
            <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
            <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="500"></span>
            <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="600"></span>
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                            <li><a href="#">Home</a></li>
                            <li class="active">Our Services</li>
                        </ul>
                        <h1 class="custom-text-10 font-weight-bold">UX Design</h1>
                    </div>
                </div>
            </div>
        </section>


        <section
            class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
            style="background-image: url('img/demos/digital-agency-2/bg/bg-2.jpg'); background-size: cover; background-position: center;">
            <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in
                            Touch</p>
                        <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            We’re interested in talking<br />
                            about your business.
                        </h4>
                    </div>
                    <div
                        class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                        <a herf="#"
                            class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
