<!DOCTYPE html>
<html class="light">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>SpicyTecH</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

		<!--  Vendor -->
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}/">
		<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-shop.css')}}">


		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/demos/demo-digital-agency-2.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('assets/css/skins/skin-digital-agency-2.css')}}">


		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.min.js')}}"></script>


	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'floatBars'}">
        <!-- ===== PRE LOADER ===== -->
        <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="cssload-float-bars-container">
                    <ul class="cssload-float-bars-flex-container">
                        <li><span class="cssload-float-bars-loading"></span></li>
                    </div>
                </div>
            </div>
        </div>

        @include('frontoffice.layouts.navbar')

        @yield('content')

        @include('frontoffice.layouts.footer')

        <!-- ===== /// SCRIPTS \\\ ===== -->
		<!-- Vendor -->
        <script src="https://kit.fontawesome.com/83f058e5ba.js" crossorigin="anonymous"></script>
		<script src="{{asset('assets/vendor/plugins/js/plugins.js')}}"></script>
		<script src="{{asset('assets/vendor/particles/particles.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('assets/js/views/view.contact.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/js/theme.init.js')}}"></script>
        <!-- Examples -->
		<script src="{{asset('assets/js/examples/examples.particles.js')}}"></script>


	</body>
</html>
