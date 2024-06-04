<?php 
    $currentURL = url()->current();
$slug = basename(parse_url($currentURL, PHP_URL_PATH));
$BreadCrumb = Helper::CategorySEo($slug);
?>
@extends('Frontend.layout.app')
@section('content')
<style>
 li a.active{
    background: #d8292d;
}
.active-category {
   background: #d8292d !important;
   color:white !important;
}
@media screen and(min-width: 1200px)
{
.container{
    max-width: 1275px;
}
}


</style>

<main>
	<!--page-title-area start-->
	<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100"
				data-background="{{ asset('Backend/images/menu/' . $menu1->banner_image) }}">
				<img class="page-title-shape shape-one " src="{{asset('assets/img/shape/line-14d.svg')}}" alt="shape">
				<img class="page-title-shape shape-two" src="{{asset('assets/img/shape/pattern-1a.svg')}} " alt="shape">

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


	<!--products-section start-->
	<section class="products-section pt-90 pb-125 pt-lg-120 pb-lg-105">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 order-lg-first order-last">
					<div class="grey-bg widget widget-categories mb-60">
						<div class="widget-title-box mb-25">
							<h4 class="widget__title__three">Categories</h4>
						</div>
						<ul class="list-none service-widget">
						@foreach($cat as $c)
							<li>
								<a class="category-link {{ Request::url() == url('/productdetails/' . $c->slug) ? 'active-category' : '' }}" href="{{ url('/productdetails/' . $c->slug) }}" data-slug="{{ $c->slug }}">
									{{ $c->name }}<span class="float-end"><i class="bi bi-arrow-right-short"></i></span>
								</a>
							</li>
						@endforeach
					</ul>

					</div>
					<div class="grey-bg mt-60">
						<h3 class="widget__title__two mb-15 pt-20" style="text-align:center">Contact Us</h3>
						
						<form class="widget-form" action="{{ route('store') }}" method="post">
						@csrf
							<input type="text" placeholder="Enter Name" name="fname">
							<input type="email" placeholder="Email" name="email">
							<input type="text" placeholder="Company Name" name="cname">
							<input type="text" placeholder="Product Name" name="pname">
							<input type="text" name="phone" oninput="validateNumber(this)" class="form-control" pattern="\d{10,}" minlength="10"
								maxlength="10" id="userPhone" required placeholder="Your Phone Number *" title="Enter exactly 10 digits">						
							<textarea name="address" placeholder="Enter Your Address" spellcheck="false"></textarea>
							<button class="widget-btn mt-20">Contact Now</button>

						</form>
						
					</div>
						</div>
				
				<div class="col-lg-8" id="product-list">
					<div class="row" id="product-container">
						@foreach($product as $p)
							<div class="col-lg-5 col-md-4 col-sm-6">
								<figure class="product-wrapper white-bg mb-45" >
									<div class="product-thumb" id="loader">
										<a  id="zoom">
											<img
												src="{{ asset('/Backend/images/product/' . $p->image) }}"
												class="figure-img w-100" alt="{{$p->alt}}" style="height:280px;"></a>
										</div>
									
									<figcaption class="figure-caption">
										<h4 class="product-title"><a>
												{{$p->name}}
											</a></h4>

										<div class="row">
											<div class="col-lg-12 col-md-4 col-sm-6">
												<span class="Quantity">Size:&nbsp;{{$p->size}}</span>
											</div>
											<div class="col-lg-12 col-md-4 col-sm-6">
												<span class="old-price">Master Packaging:&nbsp;{{$p->pack}}</span>
											</div>
											
										</div>
										<div style="margin-top: 9px;"></div>
										<div class="row">
											<div class="col-lg-12 col-md-4 col-sm-6">
												<a  style="width:100%" href="{{$p->id}}" class="ht_btn blog_btn" data-bs-toggle="modal"
													data-bs-target="#exampleModal{{ $p->id }}"
													data-product-id="{{ $p->id }}">Read
													more</a>

											</div>
											
										</div>
									</figcaption>
								</figure>
							</div>
						@endforeach
                   
                    <div class="row">
                        <div class="col-lg-12 mt-15">
                            <div class="page-navigation">
                                <ul class="pagination justify-content-center">
                                    <!-- Previous Page Link -->
                                    @if ($product->previousPageUrl())
                                        <li class="page-item"><a class="page-link" href="{{ $product->previousPageUrl() }}"><i class="bi bi-arrow-left-short"></i></a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link"><i class="bi bi-arrow-left-short"></i></span></li>
                                    @endif
                    
                                    <!-- Pagination Elements -->
                                    @for ($i = 1; $i <= $product->lastPage(); $i++)
                                        <li class="page-item {{ $i === $product->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $product->url($i) }}">{{ $i }}</a></li>
                                    @endfor
                    
                                    <!-- Next Page Link -->
                                    @if ($product->nextPageUrl())
                                        <li class="page-item"><a class="page-link" href="{{ $product->nextPageUrl() }}"><i class="bi bi-arrow-right-short"></i></a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link"><i class="bi bi-arrow-right-short"></i></span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>


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
						<section class="product-details-section pt-25 pt-lg-90 pb-50">
							<div class="container">
								<div class="swiper testimonial__slider__three">
									<div class="swiper-wrapper mb-20">
									    	@php
	$multiImages = explode('|', $p->multiimage);
										@endphp
										@foreach ($multiImages as $index => $image)
										<div class="swiper-slide product-item">
											<img id="bigImage{{$p->id}}" class="w-100"
												src="{{ asset('/Backend/images/product/' . $image) }}" alt="{{$p->alt}}">
										</div>
										@endforeach
										
									</div>
										
                     <!--   <div class="swiper-button-prev"><i class="bi bi-chevron-left"></i></div>-->
                    	<!--<div class="swiper-button-next"><i class="bi bi-chevron-right"></i></div>-->
								</div>

								<div class="swiper product__thumbs__slider"id="thumbnailSlider">
									<div class="swiper-wrapper">
										@php
	$multiImages = explode('|', $p->multiimage);
										@endphp
										@foreach ($multiImages as $index => $image)
									<div class="swiper-slide product__thumb box">
										<img src="{{ asset('/Backend/images/product/' . $image) }}" alt="{{$p->alt1}}"
											style="width:144px;height:150px;cursor:pointer;"
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
											<!-- <li class="nav-item" role="presentation">
												<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
													data-bs-target="#profile{{$p->id}}" type="button" role="tab"
													aria-controls="profile" aria-selected="false">Technical
													Specification</button>
											</li> -->

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
												<table class="table table-hover" style="border: 1px;">
													<tbody>
														@if(isset($tech[$p->id]))
															@foreach($tech[$p->id] as $t)
																<tr>
																	<th>{{ $t->name }}</th>
																	<td>{{ $t->subtitle }}</td>
																</tr>
															@endforeach
														@endif
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




<!-- show big image when i click on small  -->
<script>
    function updateBigImage(imageSrc, bigImageId) {
        // Disable slider movement temporarily
        var thumbnailSlider = document.getElementById('thumbnailSlider');
        
        // Check if swiper instance exists
        if (thumbnailSlider && thumbnailSlider.swiper && thumbnailSlider.swiper.autoplay) {
            thumbnailSlider.swiper.autoplay.stop();

            // Update the big image
            document.getElementById(bigImageId).src = imageSrc;

            // Re-enable slider movement after 5 seconds
            setTimeout(function() {
                thumbnailSlider.swiper.autoplay.start();
            }, 3000); // 5000 milliseconds = 5 seconds
        } else {
            console.error('Swiper instance not found or autoplay not configured.');
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.category-link').on('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            var slug = $(this).data('slug'); // Get the slug from the data attribute
            var url = '/productdetails/' + slug;

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('#product-container').html($(data).find('#product-container').html()); // Update the product container with new content
                    window.history.pushState(null, null, url); // Update the URL without reloading the page
                },
                error: function() {
                    alert('An error occurred while loading the content.');
                }
            });
        });

        // Handle back/forward navigation
        $(window).on('popstate', function() {
            location.reload();
        });
    });
</script>



@endsection