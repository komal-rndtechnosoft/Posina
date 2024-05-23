<?php 
    $currentURL = url()->current(); 
    $slug = basename(parse_url($currentURL, PHP_URL_PATH)); 
    $BreadCrumb = Helper::Breadcrumb($slug);
?>
@extends('Frontend.layout.app')
@section('content')
<style>
	/* certifficate */
	.modal-content 
	{
		width:83%;
	}
</style>

		<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-60 pb-30 pt-lg-60 pb-lg-105 pb-md-50"
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

	
			
			<!-- about__area start -->
<section class="about__area pt-130 pb-60 pt-lg-60 pb-lg-20">
	<div class="container">
		
		<div class="row align-items-center mb-20">
			<div class="col-lg-6">
				<div class="about__img__wrapper mb-30">
					<img class="about__img__3c" src="{{ asset('Backend/images/about/' . $about->image) }}" alt="{{$about->alt_tag}}">
					<div class="service__year d-none d-md-inline-block">
						<span class="service__label">Since</span>
						<h2 class="section__title__one text-white">2015</h2>
						<span class="service__label">Established</span>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about__counter__wrapper ps-xl-5 ms-xl-4 mb-30">
				    <h4 class="sub__title__one text-theme mb-20">{{$about->title}}</h4>
										<h2 class="section__title__one mb-25">{{$about->subtitle}}
										</h2>
					<p class="mb-30">{!!$about->description1!!}</p>
				

				</div>
			</div>
		</div>
	</div>
</section>
<!-- about__area end -->

	  <!-- mission vision start -->
	  <section class="feature__area pt-20 pb-100 pt-lg-40 pb-lg-20">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="single__box feat__border mb-30">
								<div class="icon mb-35">
									<img class="front-icon" src="{{ asset('/Backend/images/miss/' . $miss->image) }}" alt="{{$miss->alt_tag}}">
									<img class="back-icon" src="{{ asset('/Backend/images/miss/' . $miss->image2) }}" alt="{{$miss->alt_tag}}">
								</div>
								<h3 class="single__box__title">{{$miss->about_title}}</a></h3>
								<p class="single__box__desc">{{$miss->about_description}}</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single__box feat__border mb-30">
								<div class="icon mb-35">
									<img class="front-icon" src="{{ asset('/Backend/images/miss/' . $miss->image1) }}" alt="{{$miss->alt_tag1}}">
									<img class="back-icon" src="{{ asset('/Backend/images/miss/' . $miss->image3) }}" alt="{{$miss->alt_tag1}}">
								</div>
								<h3 class="single__box__title">{{$miss->about_title1}}</a></h3>
								<p class="single__box__desc"> {{$miss->about_description1}}</p>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- mission vision end -->
			<!-- testimonial__area start -->
			<section class="testimonial__area">
				<div class="grey-bg testimonial__section__wrapper pt-100 pb-80 pt-lg-60 pb-lg-60">
					<img class="shapes__1" src="assets/img/shape/star-2a.svg" alt="Star">
					<img class="shapes__2" src="assets/img/shape/line-6a.svg" alt="Star">
					<img class="testimonial-bg" src="assets/img/testimonial/testimonial-bg-1a.jpg" alt="Testimonial">
					<div class="container">
						<div class="row justify-content-center justify-content-xl-end">
							<div class="col-xxl-5 col-lg-6">
								<div class="section__title text-center text-xl-start mb-50">
									<h4 class="sub__title__one mb-0">{{$title5->title}}</h4>
									<div class="snake-line mb-15">
										<img src="assets/img/shape/snake-line-1a.svg" alt="line">
									</div>
									<h2 class="section__title__one">{{$title5->subtitle}}
									</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="offset-xl-2 col-xl-10 col-lg-12">
								<div class="swiper testimonial__slider__one">
									<div class="swiper-wrapper">
									    @foreach($testi as $t)
										<div class="swiper-slide">
											<div class="testimonial__wrapper">
												<p class="mb-15">{!! $t->description !!}</p>
												<div class="author d-flex align-items-center">
													<div class="author__img mr-20">
														<img src="{{ asset('Backend/images/testimonial/' . $t->image) }}" alt="{{$t->alt_tag}}">
													</div>
													<div class="auhtor__content">
														<h3 class="author__name">{{ $t->name }}</h3>
														<h5 class="author__designation">{{ $t->designation }}</h5>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonial__area end -->

	


				<!-- certificates start -->
			<section class="teams__area pt-100 pt-lg-60 pb-70 pb-lg-30">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section__title text-center mb-60">
								<h4 class="sub__title__one text-theme mb-20">{{$title6->title}}</h4>
								<h2 class="section__title__one mb-25">{{$title6->subtitle}}</h2>
							</div>
						</div>
					</div>
					<div class="swiper teams__slider__one">
						<div class="swiper-wrapper pb-90 pb-md-10">
							
							@foreach($certi as $data)
							<div class="swiper-slide">
								<div class="teams__two mb-30">
									<div class="teams__thumb mb-20">
									<a class="room-img" style="cursor:pointer;">  
									<img src="{{ asset('Backend/images/certificate/' . $data->image) }}" alt="{{$data->alt_tag}}" class="w-100 i2" >
									</a>
									</div>
								</div>
							</div>
							@endforeach
						
						</div>
					
				</div>
			</section>


			
			<!-- team__area end -->
		</main>


		<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all room images
        const roomImages = document.querySelectorAll('.i2');

        // Attach click event listener to each room image
        roomImages.forEach(roomImage => {
            roomImage.addEventListener('click', function(event) {
                // Prevent the default behavior of the anchor tag
                event.preventDefault();
                
                // Get the image URL
                const imageUrl = this.src;

                // Create a modal container
                const modalContainer = document.createElement('div');
                modalContainer.classList.add('modal', 'image-modal'); // Adding 'modal' class for Bootstrap modal styling

                // Create the modal dialog
                const modalDialog = document.createElement('div');
                modalDialog.classList.add('modal-dialog');

                // Create the modal content
                const modalContent = document.createElement('div');
                modalContent.classList.add('modal-content');

                // Create the modal body
                const modalBody = document.createElement('div');
                modalBody.classList.add('modal-body');

                // Create the image element
                const previewImage = document.createElement('img');
                previewImage.src = imageUrl;
                previewImage.classList.add('img-fluid'); // Adding 'img-fluid' class for Bootstrap responsive images

                // Append the image to the modal body
                modalBody.appendChild(previewImage);

                // Append the modal body to the modal content
                modalContent.appendChild(modalBody);

                // Append the modal content to the modal dialog
                modalDialog.appendChild(modalContent);

                // Append the modal dialog to the modal container
                modalContainer.appendChild(modalDialog);

                // Append the modal container to the body
                document.body.appendChild(modalContainer);

                // Show the modal
                $('.image-modal').modal('show');

                // Close the modal when clicking outside the image or pressing escape key
                $(modalContainer).on('hidden.bs.modal', function() {
                    modalContainer.remove();
                });
            });
        });
    });
</script>
	</div>


	
	
@endsection