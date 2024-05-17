@extends('Frontend.layout.app')
@section('content')


<main>
	<!--page-title-area start-->
	<div class="page-title-area pt-80 pb-100 pt-lg-120 pb-lg-125 pb-md-50"
		data-background="{{asset('assets/img/page-title/page-title-bg-1a.jpg')}}">
		<img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">
		<img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}} " alt="shape">

		<div class="container">
			<div class="row gx-4 gx-xxl-5 align-items-center">
				<div class="col-xl-6 col-md-6">
					<div class="page-title-wrapper text-md-start text-center">
						<h2 class="page-title mb-10">Our Products</h2>
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
								<li><a href="index.html">Home</a></li>
								<li class="active" aria-current="page">Our Products</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page-title-area end-->


	<!--products-section start-->
	<section class="products-section pt-180 pb-165 pt-lg-120 pb-lg-105">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-first order-last">
					<div class="grey-bg widget widget-categories mb-60">
						<div class="widget-title-box mb-25">
							<h4 class="widget__title__three">Categories</h4>
						</div>
						<ul class="list-none service-widget">
							@foreach($cat as $c)
								<li><a href="{{url('/productdetails/'.$c->slug)}}">{{$c->name}}<span class="float-end"><i
									class="bi bi-arrow-right-short"></i></span></a></li>
							@endforeach
						</ul>
					</div>
				</div>

				
				<div class="col-lg-7">

					<div class="row">
						@foreach($product as $p)
							<div class="col-lg-6 col-md-4 col-sm-6">
								<figure class="product-wrapper white-bg mb-45">
									<div class="product-thumb">
										<a href="product-details.html"><img
												src="{{ asset('/Backend/images/product/' . $p->image) }}"
												class="figure-img w-100" alt="{{$p->alt}}" style=""></a>

									</div>
									<figcaption class="figure-caption">
										<h4 class="product-title"><a>
												{{$p->name}}
											</a></h4>
										<div class="price">
											<span class="old-price">Rs.{{$p->price}}</span>
										</div>
										<div class="row">
											<div class="col-lg-7 col-md-4 col-sm-6">
												<a href="{{$p->id}}" class="ht_btn blog_btn" data-bs-toggle="modal"
													data-bs-target="#exampleModal{{ $p->id }}"
													data-product-id="{{ $p->id }}">Read
													more</a>

											</div>
											<div class="col-lg-5 col-md-4 col-sm-6">
												<a href="blog-details.html" class="ht_btn blog_btn">Inquire</a>
											</div>
										</div>
									</figcaption>
								</figure>
							</div>
						@endforeach


					</div>
				</div>
			</div>
		</div>

		</div>
	</section>
	<!--products-section end-->
</main>

<!-- Modal -->
@foreach ($product1 as $record => $p)
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
						<section class="product-details-section pt-30 pt-lg-90 pb-50">
					<div class="container">
						<div class="swiper product__slider">
							<div class="swiper-wrapper mb-20">
								<div class="swiper-slide product-item">
									<img id="bigImage" class="w-100" src="{{ asset('/Backend/images/product/' . $p->image) }}"
										alt="{{$p->alt}}">
								</div>
							</div>
							
						</div>
						
						<div class="swiper product__thumbs__slider">
							<div class="swiper-wrapper">
								@php
									$multiImages = explode('|', $p->multiimage);
								@endphp
								@foreach ($multiImages as $index => $image)
									<div class="swiper-slide product__thumb">
										<img src="{{ asset('/Backend/images/product/' . $image) }}" alt="{{$p->alt1}}"
											style="width:150px;height:150px;" onclick="updateBigImage('{{ asset('/Backend/images/product/' . $image) }}')">
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
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
													data-bs-target="#profile{{$p->id}}" type="button" role="tab"
													aria-controls="profile" aria-selected="false">Product Include</button>
											</li>

										</ul>

									</div>
									<div class="col-lg-10">
										<div class="tab-content mt-40 mb-45" id="myTabContent">
											<div class="tab-pane fade show active text-center" id="home{{$p->id}}"
												role="tabpanel" aria-labelledby="home-tab">
												<p class="mb-30">{!!$p->desc1!!}</p>
											</div>
											<div class="tab-pane fade show  text-center" id="profile{{$p->id}}"
												role="tabpanel" aria-labelledby="home-tab">
												<table class="table table-hover">
													<thead class="table-dark">
														<tr>
															<th>Item</th>
															<th>Weight in with Handle</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
														<tr>
															<td> PBS- 1</td>
															<td>1 Way Empty Box</td>
														</tr>
													</tbody>
												</table>
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
@endforeach
</div>
<!-- Add this script in your HTML file -->
<script>
    function updateBigImage(imageSrc) {
        document.getElementById('bigImage').src = imageSrc;
    }
</script>

@endsection