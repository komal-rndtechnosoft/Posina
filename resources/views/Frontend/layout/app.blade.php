<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from html.creativegigstf.com/factry/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 05:25:42 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="keywords"
		content="Construction, Factory, elementor, engineering, Technology, online bussines, Ecommerce, Shop">
	<meta name="description"
		content="Factry - Factory and Industry Service HTML5 Template for all kinds of Construction,Factory,elementor, engineering, Technology, online bussines, Ecommerce, Shop,website">
	<title>Factry - Factory and Industry Service HTML5 Template</title>
	<meta property="og:site_name" content="Factry">
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Factry - Factory and Industry Service HTML5 Template">
	<meta name='og:image' content='images/assets/ogg.html'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#913BFF">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#913BFF">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

	<!-- <link rel="manifest" href="site.webmanifest" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.html" />
	<!-- Place favicon.ico in the root directory -->
    @include('Frontend.layout.head')
    </head>   
    <body>
	<div class="main-page-wrapper">

    @include('Frontend.layout.nav')

    <div class="body-overlay"></div>
		<!-- slide-bar end -->

		<main>
        @yield('content')
        </main>
        @include('Frontend.layout.footer')
        </div>
        @include('Frontend.layout.script')
        </body>
    </html>