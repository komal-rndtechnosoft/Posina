<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">

				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{asset('admin/assets/images/user/avatar-2.jpg')}}"
							alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Admin <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i
										class="feather icon-user m-r-5"></i>View Profile</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item">
						<a href="{{url('home')}}" class="nav-link "><span class="pcoded-micon"><i
									class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>


					<li class="pcoded-hasmenu">
						<a class="waves-effect waves-dark">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Home</span>
						</a>
						<ul class="pcoded-submenu">
							<li class="">
								<a href="{{url('banner')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Banners</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('brands')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Brands</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('usp')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">USP</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('wcs')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Why Choose Us</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('serve')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Industry We Serve</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('whoweare')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Who We Are</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="pcoded-hasmenu">
						<a class="waves-effect waves-dark">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">About Us</span>
						</a>
						<ul class="pcoded-submenu">
							<li class="">
								<a href="{{url('About')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">About Us</span>
								</a>
							</li>
							
							<li class="">
								<a href="{{url('testimonials')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Testimonials</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('Certificate')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Certificate</span>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="pcoded-hasmenu">
						<a class="waves-effect waves-dark">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Category</span>
						</a>
						<ul class="pcoded-submenu">
							<li class="">
								<a href="{{url('category')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Category</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('product')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Products</span>
								</a>
							</li>
							
							
						</ul>
					<li class="">
						<a href="{{url('Blog')}}" class="waves-effect waves-dark">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Blogs</span>
						</a>
					</li>
					<li class="pcoded-hasmenu">
						<a class="waves-effect waves-dark">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Menu Setting</span>
						</a>
						<ul class="pcoded-submenu">
							<li class="">
								<a href="{{url('menu')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Menus</span>
								</a>
							</li>
							<li class="">
								<a href="{{url('header')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Header Setting</span>
								</a>
							</li>
								<li class="">
								<a href="{{url('footer')}}" class="waves-effect waves-dark">
									<span class="pcoded-mtext">Footer Setting</span>
								</a>
							</li>
							
						</ul>
				</ul>


			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<!-- <img src="admin/assets/images/logo.png" alt="" class="logo"> -->
				<!-- <img src="admin/assets/images/logo-icon.png" alt="" class="logo-thumb"> -->
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
					<div class="search-bar">
						<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
						<button type="button" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="{{asset('admin/assets/images/user/avatar-1.jpg')}}" class="img-radius"
									alt="User-Profile-Image">
								<span>Admin</span>
							</div>
							<ul class="pro-body">
								@guest
									@if (Route::has('login'))
										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
									@endif

									@if (Route::has('register'))
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									@endif
								@else

									<a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<div class="dropdown" aria-labelledby="navbarDropdown">

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>

								@endguest
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>


	</header>
	<!-- [ Header ] end -->