
<?php
$header=DB::table('headers')->select('*')->first();
    $current_page = request()->path(); // Assuming this retrieves the current page slug
    if ($current_page == '/') {
?>

		<!-- header-area start -->
		<header class="theme-main-menu theme-menu-three">
			<div class="container header-custom-container pt-10 pb-8">
				<div class="row">
					<div class="col-lg-3 d-none d-lg-inline-block">
						<div class="logo-area">
							<a class="front" href="{{url('/')}}"><img src="{{ asset('Backend/images/header/' . $header->image) }}"
									alt="{{$header->alt_tag}}"></a>
						</div>
					</div>
					<div class="col-lg-9 col-12">
						<ul
							class="list-none header-info d-flex align-items-center justify-content-center justify-content-lg-end">
							<li>
								<div class="header-info-box">
									<div class="icon">
										<img src="{{asset('assets/img/icon/phone.svg')}}" alt="Phone">
									</div>
									<div class="text-content">
										<span>Call</span>
										<h6><a href="tel:{{$header->phone}}">{{$header->phone}}</a></h6>
									</div>
								</div>
							</li>
							<li class="d-none d-md-inline-block">
								<div class="header-info-box">
									<div class="icon">
										<img src="{{asset('assets/img/icon/location.svg')}}" alt="Phone">
									</div>
									<div class="text-content">
										<span>Location</span>
										<div class="right-language">
											<div class="dropdown">
												<a  href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714" style="color:white">
													{{$header->address}}
												</a>
											
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="d-none d-lg-inline-block">
								<div class="header-info-box">
									<div class="icon">
										<img src="assets/img/icon/phone.svg" alt="Phone">
									</div>
									<div class="text-content">
										<span>Time</span>
										<h6>{{$header->time}}</h6>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main-header-area pt-10 pb-8">
				<div class="container header-custom-container">
					<div class="row">
						<div class="col-lg-10 col-6">
							<div class="logo-area d-lg-none d-md-inline-block">
								<a class="front" href="index.html"><img src="assets/img/logo/POSINA logo.png"
										alt="Header-logo"></a>
							</div>
							<div class="main-menu d-none d-lg-block">
								<nav id="mobile-menu">
									<ul class="menu-list ps-0">
										<li>
											<a href="{{url('/')}}">Home</a>
										</li>
										<li>
											<a href="{{url('/aboutus')}}">About Us</a>
										</li>
										
										<li>
											<a href="#">Products</a>
											<ul class="sub-menu">
												<li>
													<a href="{{route('productsdetails')}}">Product-details</a>
												</li>
												
											</ul>
										</li>
										<li>
											<a href="{{route('blogs')}}">Blogs</a>
										</li>
										
										<li>
											<a href="{{route('contactus')}}">Contact Us</a>
										</li>
										<li>
											<a href="{{route('products')}}">New Products</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-6">
								<a href="{{url('/contactus')}}" class="ht_btn ht_btn2 butt"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>	
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</header>
		<!-- header-area end -->

<?php }
else{
?>
			<!-- other pages header -->
		<!-- header-area start -->
			<header class="theme-main-menu theme-menu-two black-bg">
			<div class="container header-custom-container pt-10 pb-8">
				<div class="row">
					<div class="col-lg-3 d-none d-lg-inline-block">
						<div class="logo-area">
							<a class="front" href="{{url('/')}}"><img src="{{asset('assets/img/logo/POSINA LOGO white.png')}}"
									alt="Header-logo"></a>
						</div>
					</div>
					<div class="col-lg-9 col-12">
						<ul
							class="list-none header-info d-flex align-items-center justify-content-center justify-content-lg-end">
							<li>
								<div class="header-info-box">
									<div class="icon">
										<img src="{{asset('assets/img/icon/phone.svg')}}" alt="Phone">
									</div>
									<div class="text-content">
										<span>Call</span>
										<h6><a href="tel:{{$header->phone}}">{{$header->phone}}</a></h6>
									</div>
								</div>
							</li>
							<li class="d-none d-md-inline-block">
								<div class="header-info-box">
									<div class="icon">
										<img src="{{asset('assets/img/icon/location.svg')}}" alt="Phone">
									</div>
									<div class="text-content">
										<span>Location</span>
											<div class="right-language">
											<div class="dropdown">
												<a  href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714" style="color:white">
													{{$header->address}}
												</a>
											
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="d-none d-lg-inline-block">
								<div class="header-info-box">
									<div class="icon">
										<img src="{{asset('assets/img/icon/phone.svg')}}" alt="Phone">
									</div>
									<div class="text-content">
                                    	<span>Time</span>
										<h6>{{$header->time}}</h6>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main-header-area pt-10 pb-8">
				<div class="container header-custom-container">
					<div class="row align-items-center">
						<div class="col-lg-10 col-6">
							<div class="logo-area d-lg-none d-md-inline-block">
								<a class="front" href="{{url('/')}}"><img src="{{asset('assets/img/logo/POSINA logo.png')}}"
										alt="Header-logo"></a>
							</div>
							<div class="main-menu d-none d-lg-block">
								<nav id="mobile-menu">
									<ul class="menu-list ps-0">
										<li>
											<a href="{{url('/')}}">Home</a>
										</li>
										<li>
											<a href="{{url('/aboutus')}}">About Us</a>
										</li>
										<li>
											<a href="#">Products</a>
											<ul class="sub-menu">
												<li>
													<a href="{{route('productsdetails')}}">Product-details</a>
												</li>
												
											</ul>
										</li>
										<li>
											<a href="{{route('blogs')}}">Blogs</a>
										</li>
										
										<li>
											<a href="{{route('contactus')}}">Contact Us</a>
										</li>
										<li>
											<a href="{{route('products')}}">New Products</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-6">
						<a href="{{url('/')}}" class="ht_btn hover-bg butt"><span>Catalogue
						<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>	
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</header>
		<!-- header-area end -->
<?php } ?>

