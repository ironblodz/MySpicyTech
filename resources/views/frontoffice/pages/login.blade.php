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
                        <h1 class="text-9 font-weight-bold">Login</h1>
                        <span class="sub-title">Regista-te para nao perderes as nossas mais recentes novidades!</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4 mt-5">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                    <form action="/" id="frmSignIn" method="post" class="needs-validation">
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Email address <span
                                        class="text-color-danger">*</span></label>
                                <input type="text" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Password <span
                                        class="text-color-danger">*</span></label>
                                <input type="password" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="form-group col-md-auto">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="form-label custom-control-label cur-pointer text-2"
                                        for="rememberme">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group col-md-auto">
                                <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"
                                    href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit"
                                    class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                    data-loading-text="Loading...">Login</button>
                                <div class="divider">
                                    <span
                                        class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
                                </div>
                                <a href="#"
                                    class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3"
                                    data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i>
                                    Login With Facebook
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="font-weight-bold text-5 mb-0">Register</h2>
                    <form action="/frontoffice/login" id="frmSignUp" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Username or email address <span
                                        class="text-color-danger">*</span></label>
                                <input type="text" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Password <span
                                        class="text-color-danger">*</span></label>
                                <input type="password" value="" class="form-control form-control-lg text-4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <p class="text-2 mb-2">Your personal data will be used to support your experience throughout
                                    this website, to manage access to your account, and for other purposes described in our
                                    <a href="#" class="text-decoration-none">privacy policy.</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit"
                                    class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                    data-loading-text="Loading...">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>


    </div>

@endsection
