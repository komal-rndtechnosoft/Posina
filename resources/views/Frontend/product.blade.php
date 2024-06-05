<?php 
    $currentURL = url()->current();
$slug = basename(parse_url($currentURL, PHP_URL_PATH));
$BreadCrumb = Helper::Breadcrumb($slug);
?>
@extends('Frontend.layout.app')
@section('content')

<style>
	.blog__one {
		height: 400px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.blog__thumb img {
		max-height: 200px;
		object-fit: cover;
	}

	.blog__content__one {
		flex: 1;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
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


	<!-- Products start -->

	<!-- services__area end -->
	<section class="blog__area pt-100 pt-lg-120 pb-90 pb-lg-120">
		<div class="container">
			<div class="section__title text-center mb-50">
				<h4 class="sub__title__one text-theme mb-20">{{$title8->title}}</h4>
				<h2 class="section__title__one">{{$title8->subtitle}}</h2>
			</div>
			<div class="row align-items-center justify-content-center">

				@foreach ($product as $c)

					<div class="col-lg-4 col-md-6">
						<div class="blog__one mb-30 bloo">
							<div class="blog__thumb">
								<a>
									
										<div class="enlarge_pane_contain">
								<div class="enlarge_pane">
									<div class="enlarge">
										<div class="enlarge_contain">
											<img   class="" src="{{ asset('Backend/images/product/' . $c->image) }}"
												srcset="{{ asset('Backend/images/product/' . $c->image) }} 480w, {{ asset('Backend/images/product/' . $c->image) }} 1200w, {{ asset('Backend/images/product/' . $c->image) }} 2000w"
												sizes="100vw" alt="{{$c->alt}}" id="test-img">
										</div>
										<a href="https://peterdoes.it/product-enlarge/needles-canyon.jpg"
											class="enlarge_btn" title="Toggle Zoom">Toggle Zoom</a>
									</div>
								</div>

							</div>
									
							</a>
							</div>
							<div class="blog__content__one">

								<h3 class="blog__title__three">{{$c->name}}
								</h3>
								<div class="row">
											<div class="col-lg-12 col-md-4 col-sm-6">
												<span class="Quantity">Size:&nbsp;{{$c->size}}</span>
											</div>
											<div class="col-lg-12 col-md-4 col-sm-6">
												<span class="old-price">Master Packaging:&nbsp;{{$c->pack}}</span>
											</div>
											
										</div>

								<div style="margin-top: 9px;"></div>
								<div class="row">
									<div class="col-lg-7 col-md-4 col-sm-6">
										<a href="{{$c->id}}" class="ht_btn blog_btn" data-bs-toggle="modal"
											data-bs-target="#exampleModal{{ $c->id }}" data-product-id="{{ $c->id }}">Read
											more</a>

									</div>
									<div class="col-lg-5 col-md-4 col-sm-6">
										<a class="ht_btn blog_btn" data-bs-toggle="modal"
											data-bs-target="#exampleModal1{{$c->id}}">Inquire</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach

			</div>

		</div>
	</section>

</main>
@foreach ($product as $record => $p)
	<div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable dialog1">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">{{$p->name}}</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">

					<div class="scrollable-content">
						<!--product-details-section start-->
						<section class="product-details-section pt-25 pt-lg-90 pb-50">
							<div class="container">
								<div class="swiper product__slider">
									<div class="swiper-wrapper mb-20">
										<div class="swiper-slide product-item">
											<img id="bigImage{{$p->id}}" class="w-100"
												src="{{ asset('/Backend/images/product/' . $p->image) }}" alt="{{$p->alt}}">
										</div>
									</div>

								</div>

								<div class="swiper product__thumbs__slider">
									<div class="swiper-wrapper">
										@php
											$multiImages = explode('|', $p->multiimage);
										@endphp
										@foreach ($multiImages as $index => $image)
											<div class="swiper-slide product__thumb box">
												<img src="{{ asset('/Backend/images/product/' . $image) }}" alt="{{$p->alt1}}"
													style="width:144px;height:150px;"
													onclick="updateBigImage('{{ asset('/Backend/images/product/' . $image) }}', 'bigImage{{$p->id}}')">
											</div>
										@endforeach

									</div>
								</div>

							</div>
						</section>
						<!--product-details-section end-->

						<!--product-review-section start-->
						<div class="product-review-section pb-100 pb-lg-40">
							<div class="container">
								<div class="row align-items-center justify-content-center">
									<div class="col-lg-12">
										<ul class="grey-bg nav nav-tabs product-tab" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
													data-bs-target="#home{{$p->id}}" type="button" role="tab"
													aria-controls="home" aria-selected="true">Product Description</button>
											</li>
											
										</ul>
									</div>
									<div class="col-lg-10">
										<div class="tab-content mt-40 mb-45" id="myTabContent">
											<div class="tab-pane fade show active text-center" id="home{{$p->id}}"
												role="tabpanel" aria-labelledby="home-tab">
												<p class="mb-30">{!!$p->desc1!!}</p>
											</div>
											

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--product-review-section end-->

					</div>
				</div>


			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal1{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Enter Inquiring Requirement Details</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="contact__section pt-10 pb-110 ">
						<div class="container">
							<div class="row">

								<div class="col-lg-12">
									<div class="contact-form-one">
										<form class="widget-form" action="{{ route('store') }}" method="post">
											@csrf
											<div class="row">
												<div class="col-md-6">
													<label class="label">Name</label>
													<input type="text" name="fname" placeholder="First Name">
												</div>

												<div class="col-md-6">
													<label class="label">Email</label>
													<input type="email" name="email" placeholder="Email ID">
												</div>
												<div class="col-md-6">
													<label class="label">Phone No</label>
													<input type="text" name="phone" oninput="validateNumber(this)"
														class="form-control" pattern="\d{10,}" minlength="10" maxlength="10"
														id="userPhone" required placeholder="Your Phone *"
														title="Enter exactly 10 digits">
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
				</div>

			</div>
		</div>
	</div>
@endforeach

</div>


<script>
	function updateBigImage(imageSrc, bigImageId) {
		document.getElementById(bigImageId).src = imageSrc;
	}
</script>


<!-- product page  -->

@endsection