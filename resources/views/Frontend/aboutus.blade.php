@extends('Frontend.layout.app')
@section('content')


		<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-80 pb-100 pt-lg-120 pb-lg-125 pb-md-50"
				data-background="assets/img/page-title/page-title-bg-1a.jpg">
				<img class="page-title-shape shape-one " src="assets/img/shape/line-14d.svg" alt="shape">
				<img class="page-title-shape shape-two" src="assets/img/shape/pattern-1a.svg " alt="shape">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-10">About Us</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="{{url('/')}}">Home</a></li>
										<li class="active" aria-current="page">About Us</li>
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
					<img class="about__img__3c" src="{{ asset('Backend/images/about/' . $about->image) }}" alt="{{$about->alt_tag}}" style="width:610px;height:637px;">
					<div class="service__year d-none d-md-inline-block">
						<span class="service__label">Over</span>
						<h2 class="section__title__one text-white">08+</h2>
						<span class="service__label">Great Services</span>
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
			<section class="services__area2 pt-100 pb-70 pb-lg-95">
				<div class="services__bg__wrapper pt-100 pb-250" data-background="assets/img/service/service-bg-1b.jpg">
					<div class="big-style-text">Certificates</div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="section__title text-center mb-60">
									<h4 class="sub__title__one text-theme mb-20">{{$title6->title}}</h4>
									<h2 class="section__title__one text-white">{{$title6->subtitle}}
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container services__slider__wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="swiper services__slider__two pb-60">
								<div class="swiper-wrapper">
									
									@foreach($certi as $data)
									<div class="swiper-slide">
										<div class="single__services__two mb-60">
											<div class="services__thumb">
												<img class="w-100" src="{{ asset('Backend/images/certificate/' . $data->image) }}"
													alt="{{$data->alt_tag}}">
											</div>
											<div class="services__content">
												<img class="traingle__shape" src="assets/img/shape/traingle-1b.png"
													alt="Triangle">
												<img class="traingle__shape tri__2"
													src="assets/img/shape/traingle-2b.png" alt="Triangle">
												<h4 class="service__title__two mb-0"><span class="icon"><img
															src="assets/img/icon/icon-12b.svg" alt="Icon"></span>
													<a>{{ $data->name }}</a>
												</h4>
											</div>
										</div>
									</div>
									@endforeach
								
								
								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- certificates end -->


		


		</main>


	</div>


	
	
@endsection