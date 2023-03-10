@extends('frontoffice.layouts.master')
@section('content')
    <div role="main" class="main">

        <section
            class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
            style=" background-image: url(/assets/img/demos/digital-agency-2/contact-us/contactus.jpeg); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Contactos</h1>
                        <span class="sub-title">Não economize tempo com as suas dúvidas, fale connosco!</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Contactos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Estamos presentes,
                            perto de si<span class="text-color-primary">.</span></h4>
                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-center mb-4 pb-3">
                            <span
                                class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 mb-4 mb-md-0 align-items-center custom-text-5 font-weight-medium appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><i
                                    class="far fa-envelope text-color-primary text-4 me-2"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"></i> <a
                                    href="mailto:mail@domain.com"
                                    class="text-color-default">porto@digitalagency.com</a></span>
                            <span
                                class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 align-items-center custom-text-5 font-weight-medium appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"><i
                                    class="far fa-clock text-color-primary text-4 ms-md-4 me-md-2"></i>Aberto de segunda a
                                sabádo, desde 9:00 às 18:00
                                / Domingo - Fechado</span>
                        </div>
                        <p class="custom-text-4 text-center appear-animation" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="800">
                            Forneça alguns detalhes sobre a natureza de sua solicitação ou pergunta para que possamos
                            fornecer a melhor resposta possível.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 pt-lg-5 mt-4 p-relative where-you-are-postal-cards appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="100">
                        <span class="custom-circle custom-circle-2 bg-color-tertiary appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
                        <span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"></span>
                        <span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800"></span>
                        <div class="row px-3">
                            <div class="col-xl-6 me-0 overflow-hidden col-where-you-are-postal">
                                <div class="row justify-content-end p-relative h-100">
                                    <img src="{{ asset('assets/img/leiria.jpg') }}" class="img-fluid">
                                    <div
                                        class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
                                        <h4 class="text-color-light custom-text-9">Leiria</h4>
                                        <p class="mb-1 text-color-light custom-text-4">Avenida Marquês de Pombal</p>
                                        <p class="mb-1 text-color-light custom-text-4">2400, Leiria</p>
                                        <p class="mb-0 text-color-light custom-text-4"><a href="tel:+1234567890"
                                                class="text-color-light">(351) 919846123</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 ms-0 overflow-hidden col-where-you-are-postal">
                                <div class="row justify-content-end p-relative h-100">
                                    <img src="{{ asset('assets/img/leiriapraia.jpg') }}" class="img-fluid img-thumbnail">
                                    <div
                                        class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
                                        <h4 class="text-color-light custom-text-9">Coimbra</h4>
                                        <p class="mb-1 text-color-light custom-text-4">Rua da Graça</p>
                                        <p class="mb-1 text-color-light custom-text-4">3000, Coimbra</p>
                                        <p class="mb-0 text-color-light custom-text-4"><a href="tel:+1234567890"
                                                class="text-color-light">(351) 919846124</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Contactos --}}
                    <div class="col-xl-12 order-1 order-lg-2 mt-5">

                        <div class="overflow-hidden mb-1 text-center">
                            <h2 class="font-weight-normal text-9 mb-0">
                                <strong class="font-weight-extra-bold">
                                    Contacte-nos
                                </strong>
                            </h2>
                        </div>
                        <div class="overflow-hidden mb-4 pb-3 text-center">
                            <p class="mb-0">
                                Sinta-se à vontade para pedir detalhes, não economize nenhuma pergunta!
                            </p>
                        </div>

                        <form id="contactForm" class="contact-form-recaptcha-v3" action="{{ route('recaptcha-v3') }}"
                            method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-dark">Full Name</label>
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-dark">Email Address</label>
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold text-dark">Subject</label>
                                    <input type="text" value="" data-msg-required="Please enter the subject."
                                        maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="required font-weight-bold text-dark">Message</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control"
                                        name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-modern"
                                        data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <section
            class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
            style="background-image: url('assets/img/demos/digital-agency-2/bg/bg-2.jpg'); background-size: cover; background-position: center;">
            <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            Contate-nos
                        </p>
                        <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">

                            Transforme suas ideias
                            <br />
                            em negócios online<br>
                        </h4>
                    </div>
                    <div
                        class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                        <a herf="#"
                            class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                            Converse connosco!
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
