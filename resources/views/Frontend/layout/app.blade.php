<?php
$header = DB::table('headers')->select('*')->first();
$about = DB::table('abouts')->select('*')->first();
$stat = DB::table('staticseos')->select('*')->first();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	@if($BreadCrumb && !empty($BreadCrumb->meta_title))

	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="keywords"
		content="{{$BreadCrumb->meta_keyword}}">
	<meta name="description"
		content="{{$BreadCrumb->meta_description}}">
		<title>{{$BreadCrumb->meta_title}}</title>
		<meta property="og:site_name" content="{{$BreadCrumb->meta_title}}">
    	<meta property="og:url" content="{{$BreadCrumb->meta_canonical}}">
    	@if(request()->route()->getName() == 'blogs')
    	<meta property="og:type" content="article">
    	@else
        <meta property="og:type" content="website">
        @endif
        <meta property="og:title" content="{{$BreadCrumb->meta_title}}">
        @if(request()->route()->getName() == 'index')
    	<meta name='og:image' content='{{ asset('Backend/images/header/' . $header->image1) }}'>
    	@elseif(request()->route()->getName() == 'contactus' || request()->route()->getName() == 'aboutus')
        <meta name='og:image' content='{{ asset('/Backend/images/about/'.$about->image) }}'>
        @else
        <meta name='og:image' content='{{ asset('/Backend/images/about/'.$about->image) }}'>
        @endif
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
	@elseif($stat)
    	<meta http-equiv="x-ua-compatible" content="ie=edge" />
    	<meta name="keywords" content="{{$stat->meta_keyword}}">
    	<meta name="description" content="{{$stat->meta_description}}">
    	<title>{{$stat->meta_title}}</title>
    	<meta property="og:site_name" content="{{$stat->meta_title}}">
    	<meta property="og:url" content="{{$stat->meta_canonical}}">
    	@if(request()->route()->getName() == 'blogs')
    	<meta property="og:type" content="article">
    	@else
        <meta property="og:type" content="website">
        @endif
        <meta property="og:title" content="{{$stat->meta_title}}">
        @if(request()->route()->getName() == 'index')
    	<meta name='og:image' content='{{ asset('/Backend/images/headers/'.$header->image1) }}'>
    	@elseif(request()->route()->getName() == 'contact-us' || request()->route()->getName() == 'aboutus' || request()->route()->getName() == 'blogs')
        <meta name='og:image' content='{{ asset('/Backend/images/about/'.$about->image) }}'>
        @else
        <meta name='og:image' content='{{ asset('/Backend/images/about/'.$about->image) }}'>
        @endif
		@endif
	<!-- <link rel="manifest" href="site.webmanifest" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('Backend/images/header/' . $header->image1) }}"  alt="{{$header->alt_tag}}"/>
	<!-- Place favicon.ico in the root directory -->
    @include('Frontend.layout.head')
    </head>   
    <body>
	<div class="main-page-wrapper">

    @include('Frontend.layout.nav')

    <div class="body-overlay"></div>
		<!-- slide-bar end -->

		<main>
		<!-- preloader -->
				<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- preloader end  -->
		
        @yield('content')
        </main>
        @include('Frontend.layout.footer')
        </div>
        @include('Frontend.layout.script')
        </body>
    </html>