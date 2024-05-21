
<?php
$header=DB::table('headers')->select('*')->first();
$footer=DB::table('footers')->select('*')->first();
$category = DB::table('categories')->select('*')->get();

?>
<style>
 li a.active{
    color: #d8292d;
}
.cate.active{
    color: white !important;
}

</style>

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
												<a  href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714" target="_blank">
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
					<div class="row">
						<div class="col-lg-10 col-6">
							<div class="logo-area d-lg-none d-md-inline-block">
								<a class="front" href="{{url('/')}}"><img src="{{ asset('Backend/images/header/' . $header->image) }}"
									alt="{{$header->alt_tag}}"></a>
							</div>
							<div class="main-menu d-none d-lg-block">
								<nav id="mobile-menu">
									<ul class="menu-list ps-0">
										<li>
											<a href="{{url('/')}}">Home</a>
										</li>
										<li  class="@if(Route::is('about')) active @endif">
											<a href="{{url('/aboutus')}}">About Us</a>
										</li>
										
										<li>
											<a style="color:white;">Products</a>
											<ul class="sub-menu">
											@foreach($category as $p)
												<li class="cate">
													<a href="{{url('/productdetails/'.$p->slug)}}" style="color:black">{{$p->name}}</a>
												</li>
												@endforeach
												
											</ul>
										</li>
										<li  class="@if(Route::is('blogs')) active @endif">
											<a href="{{route('blogs')}}">Blogs</a>
										</li>
										
										<li class="@if(Route::is('contactus')) active @endif">
											<a href="{{route('contactus')}}">Contact Us</a>
										</li>
										<li class="@if(Route::is('products')) active @endif">
											<a href="{{route('products')}}">New Products</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-6 catlog">
		
								<a href="POSINA CATALOGUE 1MAY2024 VER15.pdf" class="ht_btn ht_btn2 butt" download="POSINA CATALOGUE 1MAY2024 VER15.pdf"><span>Catalogue
									<img src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>	
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</header>
		<!-- header-area end -->

			<!-- other pages header -->
		<!-- header-area start -->
		
		<!-- header-area end -->


