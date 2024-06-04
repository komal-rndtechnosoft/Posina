<?php
$header = DB::table('headers')->select('*')->first();
$footer = DB::table('footers')->select('*')->first();
$category = DB::table('categories')->select('*')->get();
$current_page = request()->path(); // Assuming this retrieves the current page slug
if ($current_page == '/') {
?>
<style>
	.c1{
  position: sticky;
  top: 0; /* Ensures the header sticks to the top of the viewport */
  z-index: 10; /* Sets the stacking order to keep the header on top during overlaps */
}



	li a.active {
		color: #d8292d !important;
	}

	.cate a.active {
		color: white !important;
	}
</style>


		<header class="theme-main-menu theme-menu-three">
			<div class="container header-custom-container pt-10 pb-2 cust">
				<div class="row">
					<div class="col-lg-3 d-none d-lg-inline-block">
					<a class="front" href="{{url('/')}}">
					<div class="logo-area">
						<img src="{{ asset('Backend/images/header/' . $header->image) }}" alt="{{$header->alt_tag}}">
					</div>
					</a>
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
										<a href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714"
											target="_blank">
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
								<!-- <img src="{{asset('assets/img/icon/phone.svg')}}" alt="Phone"> -->
							</div>
							<div class="text-content">
							<a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt"
								download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>
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
							<a class="front" href="{{url('/')}}">
									<div class="logo-area">
										<img src="{{ asset('Backend/images/header/' . $header->image) }}" alt="{{$header->alt_tag}}">
									</div>
								</a>
							</div>
							<div class="main-menu d-none d-lg-block">
								<nav id="mobile-menu">
								<ul class="menu-list ps-0">
								<li  class="@if(Route::is('index')) active @endif">
									<a href="{{url('/')}}">Home</a>
								</li>
								<li class="@if(Route::is('about')) active @endif">
									<a href="{{url('/aboutus')}}">About Us</a>
								</li>

								<li>
									<a style="color:white;">Products</a>
									<ul class="sub-menu">
										@foreach($category as $p)
											<li class="cate">
												<a href="{{url('/productdetails/' . $p->slug)}}"
													>{{$p->name}}</a>
											</li>
										@endforeach

									</ul>
								</li>
								<li class="@if(Route::is('blogs')) active @endif">
									<a href="{{route('blogs')}}">Blogs</a>
								</li>

								<li class="@if(Route::is('contactus')) active @endif">
									<a href="{{route('contactus')}}">Contact Us</a>
								</li>
								<li class="@if(Route::is('products')) active @endif">
									<a href="{{route('products')}}">New Products</a>
								</li>
								<a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt d1"
								download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>
							</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
								<div class="search-area me-4">
									<!-- home page navbar button  -->
								<!-- <a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt"
								download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a> -->
								</div>
								<div class="hamburger-menu">
									<a class="round-menu" href="javascript:void(0);">
										<i class="far fa-bars"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</header>
		<?php }else{
?>


<header class="theme-main-menu theme-menu-two black-bg  ">
	<div class="container header-custom-container pt-10 pb-8 ">
		<div class="row">
			<div class="col-lg-3 d-none d-lg-inline-block">
				<a class="front" href="{{url('/')}}">

					<div class="logo-area">
						<img src="{{ asset('Backend/images/header/' . $header->image) }}" alt="{{$header->alt_tag}}">
					</div>
				</a>

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
										<a href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714"
											target="_blank">
											{{$header->address}}
										</a>

									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="d-none d-lg-inline-block">
						<div class="header-info-box">
							
							<div class="text-content">
							<a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt"
								download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main-header-area pt-15 pb-10">
		<div class="container header-custom-container">
			<div class="row align-items-center">
				<div class="col-lg-10 col-6">
					<div class="logo-area d-lg-none d-md-inline-block">
						<a class="front" href="{{url('/')}}"><img
								src="{{ asset('Backend/images/header/' . $header->image) }}"
								alt="{{$header->alt_tag}}"></a>
					</div>
						<div class="main-menu d-none d-lg-block">
						<nav id="mobile-menu">
							<ul class="menu-list ps-0">
								<li  class="@if(Route::is('index')) active @endif">
									<a href="{{url('/')}}">Home</a>
								</li>
								<li class="@if(Route::is('about')) active @endif">
									<a href="{{url('/aboutus')}}">About Us</a>
								</li>

								<li>
									<a style="color:white;">Products</a>
									<ul class="sub-menu">
										@foreach($category as $p)
											<li class="cate">
												<a href="{{url('/productdetails/' . $p->slug)}}"
													>{{$p->name}}</a>
											</li>
										@endforeach

									</ul>
								</li>
								<li class="@if(Route::is('blogs')) active @endif">
									<a href="{{route('blogs')}}">Blogs</a>
								</li>

								<li class="@if(Route::is('contactus')) active @endif">
									<a href="{{route('contactus')}}">Contact Us</a>
								</li>
								<li class="@if(Route::is('products')) active @endif">
									<a href="{{route('products')}}">New Products</a>
								</li>
								<!-- desktop -->
								<a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt d1"
								download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
						
						<div class="hamburger-menu">
							<a class="round-menu" href="javascript:void(0);">
								<i class="far fa-bars"></i>
							</a>
						</div>
						<div class="search-area me-4">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.theme-main-menu -->
</header>
<?php } ?>

<!-- mobile view -->
<aside class="slide-bar">
	<div class="close-mobile-menu">
		<a href="javascript:void(0);">
			<i class="fas fa-times"></i>
		</a>
	</div>
	<!-- offset-sidebar start -->
	<div class="offset-sidebar">
		<div class="offset-widget offset-logo mb-30">
			<a  href="{{url('/')}}"><img
								src="{{ asset('Backend/images/header/' . $header->image) }}"
								alt="{{$header->alt_tag}}" style="width: 89px;"></a>
		</div>
		<div class="mobile-menu mean-container">
			<div class="mean-bar"><a  class="meanmenu-reveal"
					style="right: 0px; left: auto; display: inline;"><span></span><span></span><span></span></a>
				
			</div>
		</div>
	
		
	</div>
	<!-- offset-sidebar end -->

</aside>
<!-- other pages header -->
<!-- header-area start -->

<!-- header-area end -->
