<?php 
    $currentURL = url()->current(); 
    $slug = basename(parse_url($currentURL, PHP_URL_PATH)); 
    $BreadCrumb = Helper::Breadcrumb($slug);
?>
@extends('Frontend.layout.app')
@section('content')
<?php
$contact = DB::table("footers")->first();
?>
<style>


.bl
{
    color:black !important;
}
	.single__info__box:hover a {
		color: white;
	}

</style>
<main>
	<!--page-title-area start-->
	<div class="page-title-area pt-300 pb-160 pt-lg-120 pb-lg-125 pb-md-100"
				data-background="{{ asset('Backend/images/menu/' . $menu1->banner_image) }}">
				<img class="page-title-shape shape-one " src="assets/img/shape/line-14d.svg" alt="shape">
				<img class="page-title-shape shape-two" src="assets/img/shape/pattern-1a.svg " alt="shape">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-10">{{$menu1->page_name}}</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="{{url('/')}}">Home</a></li>
										<li class="active" aria-current="page">{{$menu1->page_name}}</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!--page-title-area end-->

	<!--contact__section start-->
	<div class="contact__section pt-180 pb-140 pt-lg-120 pb-lg-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact__info__wrapper me-xxl-4 pe-xxl-5 mb-45">
						<div class="single__info__box">
							<div class="icon">
								<i class="bi bi-telephone"></i>
							</div>
							<span><a href="tel:{{$contact->phone1}}" class="bl">{{$contact->phone1}}</a></span>
						</div>
						<div class="single__info__box">
							<div class="icon">
								<i class="bi bi-geo-alt"></i>
							</div>
							<span><a target="_blank" href="{{$contact->location}}"  class="bl">{{$contact->address}}</a></span>
						</div>
						<div class="single__info__box">
							<div class="icon">
								<i class="bi bi-envelope"></i>
							</div>
							<span><a href="mailto:{{$contact->email1}}"  class="bl">{{$contact->email1}}</a></span>
						</div>

					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-one">
						<h3 class="section__title__one mb-50">Send Us Message</h3>
						<form id="contact-form4" action="{{ route('store') }}" method="post" class="widget-form">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<label class="label">Name</label>
									<input type="text" name="fname" placeholder="Name">
								</div>

								<div class="col-md-6">
									<label class="label">Email</label>
									<input type="email" name="email" placeholder="Email ID">
								</div>
								<div class="col-md-6">
									<label class="label">Phone No</label>
									<input type="text" name="phone" oninput="validateNumber(this)" class="form-control"
										pattern="\d{10,}" minlength="10" maxlength="10" id="userPhone" required
										placeholder="Your Phone *" title="Enter exactly 10 digits">
								</div>
								<div class="col-md-6">
									<label class="label">Product Name</label>
									<input type="text" name="pname" placeholder="Enter your Product Name">
								</div>
								<div class="col-md-12">
									<label class="label">Company Name</label>
									<input type="text" name="cname" placeholder="Enter your Company Name">
								</div>
								<div class="col-md-12 mb-25">
									<label class="label">Address</label>
									<textarea name="address" placeholder="Enter your Address Name"></textarea>
								</div>
								<div class="col-12">
									<button class="ht_btn hover-bg border-0">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--contact__section end-->



</main>

</div>




@endsection