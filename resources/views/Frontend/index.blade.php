@extends('Frontend.layout.app')

@section('content')


<!-- theme__main__banner start -->
<div class="swiper hero__slider__three">
	<div class="swiper-wrapper">
		@foreach($banners as $b)
			<div class="swiper-slide">
				<section class="main__slider__section2 pt-300 pb-205 pt-md-240 pb-md-105"
					data-background="{{ asset('/Backend/images/banners/' . $b->banner_image) }}">
					<!--<div class="circular__box">-->
					<!--	<img class="circular__text" src="{{asset('assets/img/hero/circular-text-3c.png')}}" alt="Circular">-->
 				<!--		<img class="circular__img" src="{{asset('assets/img/hero/icon-1c.svg')}}" alt="Icon">-->
					<!--</div>-->
					<div class="blur__box"></div>
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-10">
								<div class="theme__content text-center mt-185">
									<!--<h2 class="main__title mb-60 red-second-letter">{{$b->title}}</h2>-->
									<!--<a href="{{url('aboutus')}}" class="ht_btn ht_btn2"><span>Explore Now <img-->
									<!--			src="{{asset('assets/img/icon/arrow1.svg')}}" alt=""></span></a>-->
								</div>
							</div>
						</div>
					</div>
					<!--<div class="hero__media">-->
					<!--	<div class="call__box">-->
					<!--		<div class="icon mr-10">-->
					<!--			<img src="assets/img/icon/icon-22c.svg" alt="Phone">-->
					<!--		</div>-->
					<!--		<div class="call__content pt-10">-->
					<!--			<h5 class="call__title">Call For Support</h5>-->
					<!--			<h4 class="call__number"><a href="tel:{{$header->phone}}">{{$header->phone}}</a></h4>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<!--<div class="social_media">-->
					<!--<a href="{{ $footer->facebook_link }}" style="cursor:pointer;" target="_blank">-->
     <!--                <i class="fab fa-facebook-f"></i>-->
     <!--                </a>-->
					<!--	<a href="{{ $footer->twitter_link }}" style="cursor:pointer;" target="_blank">-->
					<!--	<i class="fab fa-twitter"></i>-->
					<!--	</a>-->
				 <!--   	<a href="{{ $footer->instagram_link }}" style="cursor:pointer;" target="_blank">-->
					<!--	<i class="fab fa-instagram"></i>-->
					<!--	</a>-->
					<!--</div>-->
					<img class="shapes shapes__1" src="{{asset('assets/img/shape/hero-half-circle-1c.svg')}}"
						alt="Shape One">
				</section>
			</div>
		@endforeach
	</div>
	<!-- swiper-scrollbar -->
	<!--<div class="swiper-scrollbar d-none d-lg-inline-block"></div>-->
	<!-- swiper-pagination -->
	<!--<div class="swiper-pagination d-none d-lg-inline-block"></div>-->
	<!-- swiper-arrow-pagination -->
	<div class="swiper-button-prev d-none d-lg-inline-block"><i class="bi bi-chevron-left"></i></div>
	<div class="swiper-button-next d-none d-lg-inline-block"><i class="bi bi-chevron-right"></i></div>
</div>
<!-- theme__maina__banner end -->

<!-- brand__area start -->
<div class="brand__area pb-80 pb-lg-60">
	<div class="swiper brand__slider__two">
		<div class="swiper-wrapper">

			@foreach($brands as $b)
				<div class="swiper-slide">
					<div class="brand__img__two">
						<a><img src="{{ asset('Backend/images/brands/' . $b->image) }}" alt="{{$b->alt_tag}}"></a>
					</div>
				</div>
			@endforeach
	</div>
</div>
<!-- brand__area end -->



<!--usp__area start -->
<section class="working__process__area">
	<div class="grey-bg process__wrapper__about pt-180 pt-lg-60 pb-320 pb-lg-80 pb-md-90">
		<img class="shapes__1" src="assets/img/shape/about-line-2a.svg" alt="shape">
		<img class="shapes__2" src="assets/img/shape/faq-line-5a.svg" alt="shape">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section__title text-center mb-60 pe-xxl-4">
						<h4 class="sub__title__one text-theme mb-20">{{$usptitle->title}}</h4>
						<h2 class="section__title__one mb-25">{{$usptitle->subtitle}}
						</h2>
					</div>
				</div>
			</div>
			<div class="row">

				@foreach($usp as $u)
					<div class="col-lg-3 col-md-6">
						<div class="single__process__box mb-40 " style="height: 451px;">
							<img class="star-icon" src="assets/img/icon/icon-48d.svg" alt="icon">
							<div class="tag">
								Step 0{{$loop->index + 1}}
							</div>
							<div class="icon mb-25">
								<img src="{{ asset('Backend/images/usp/' . $u->icon) }}" alt="{{$u->alt_tag}}" style="width:60px;">
							</div>
							<h4 class="single__box__title"><a>{{$u->title}}</a></h4>
							<p>{!!$u->description!!}</p>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>
</section>
<!-- usp end -->

<!-- about__area start -->
<section class="about__area pt-300 pb-60 pt-lg-60 pb-lg-20">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="section__title text-lg-start text-center mb-60">
					<h4 class="sub__title__three mb-25">{{$about->title}}</h4>
					<h2 class="section__title__one">{{$about->subtitle}}</h2>
				</div>
			</div>
		</div>
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
					<p class="mb-30">{!!$about->description!!}</p>
					<div class="row mb-20">
						<div class="col-md-6">
							<div class="counter__box mb-30">
								<h3 class="counter__number"><span class="counter">{{$about->counter1}}</span></h3>
								<p>{{$about->countertitle1}}</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30 ps-xxl-4">
							<h3 class="counter__number"><span class="counter">{{$about->counter2}}</span></h3>
								<p>{{$about->countertitle2}}</p>
									</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30">
							<h3 class="counter__number"><span class="counter">{{$about->counter3}}</span></h3>
								<p>{{$about->countertitle3}}</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30 ps-xxl-4">
							<h3 class="counter__number"><span class="counter">{{$about->counter4}}</span></h3>
								<p>{{$about->countertitle4}}</p>
							</div>
						</div>
					</div>
					<div class="about__btn text-md-start text-center"><a href="{{url('aboutus')}}"
							class="ht_btn ht_btn2"><span>Explore Now
								<img src="assets/img/icon/arrow1.svg" alt=""></span></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about__area end -->

<!-- Why Choose Us start -->
<section class="who__we__area pt-80 pb-60 pt-lg-60 pb-lg-30">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section__title text-center mb-55">
					<h4 class="sub__title__three mb-25">{{$wcstitle->title}}</h4>
					<h2 class="section__title__one">{{$wcstitle->subtitle}}</h2>
				</div>
			</div>
		</div>
		<div class="row">
			
			@foreach($wcs as $w)
			<div class="col-lg-3 col-md-6">
				<div class="ht__feature__box text-center mb-30"  style="height:317px">
					<div class="icon mb-30">
						<img src="{{ asset('Backend/images/wcs/' . $w->icon) }}" alt="{{$w->alt_tag}}" style="width:60px;height:60px;">
					</div>
					<h4 class="feature__service__title">{{$w->title}}</h4>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>
<!-- who__we__area end -->



<!-- Category start -->
<section class="services__area pt-80 pb-45 pt-lg-60 pb-lg-40">
	<div class="big-style-text">Category</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section__title text-center mb-50">
					<h4 class="sub__title__one mb-0">{{$title7->title}}</h4>
					<div class="snake-line mb-15">
						<img src="assets/img/shape/snake-line-1a.svg" alt="line">
					</div>
					<h2 class="section__title__one">{{$title7->subtitle}}
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="swiper services__slide__one pb-60">
					<div class="swiper-wrapper">
						
						@foreach($category as $c)
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="{{ asset('Backend/images/banners/' . $c->image) }}" alt="{{$c->alt_tag}}">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-5a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="{{url('/productdetails/'.$c->slug)}}">{{$c->name}}</a>
									</h4>
									<a ><img src="assets/img/icon/long-arrow.svg" alt="Arrow"></a>
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
<!-- Category end -->


<!-- Industry start -->
<section class="services__area">
	<div class="grey-bg services__bg__three pt-120 pb-90 pt-lg-60 pb-lg-30">
		<img class="shapes__1" src="assets/img/shape/line-13c.svg" alt="line">
		<img class="shapes__2" src="assets/img/shape/bio-electricity-1c.svg" alt="Bio">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section__title text-center mb-30">
						<h4 class="sub__title__three mb-25">{{$title3->title}}</h4>
						<h2 class="section__title__one">{{$title3->subtitle}}</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($serve as $s)
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="{{ asset('Backend/images/serve/' . $s->image) }}">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="{{ asset('Backend/images/serve/' . $s->icon) }}" alt="{{$s->alt_tag}}">
							</div>
							<h4 class="service__title__three mb-20"><a>{{$s->title}}</a>
							</h4>
							<p>{!!$s->description!!}</p>
						</div>
					</div>
				</div>
				@endforeach
			
			</div>
		</div>
	</div>
</section>
<!-- Industry end -->

<!-- Who We Are start -->
<section class="chose__us__area pt-120 pt-lg-60 pb-85 pb-lg-30">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-6">
				<div class="chose__text__wrapper pe-xl-5 mb-30">
					<div class="section__title mb-30">
						<h4 class="sub__title__three mb-25">{{$whoweare->title}}</h4>
						<h2 class="section__title__one">{{$whoweare->subtitle}}</h2>
						<p>{!!$whoweare->description!!}</p>
					</div>
					<div class="progress__wrapper mb-25">
						<h4 class="progress__title">{{$whoweare->countertitle1}}</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<span>{{$whoweare->counter1}}%</span>
							</div>
						</div>
					</div>
					<div class="progress__wrapper progress__two mb-25">
						<h4 class="progress__title">{{$whoweare->countertitle2}}</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:80%">
								<span>{{$whoweare->counter2}}%</span>
							</div>
						</div>
					</div>
					<div class="progress__wrapper mb-25">
						<h4 class="progress__title">{{$whoweare->countertitle3}}</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:85%">
								<span>{{$whoweare->counter3}}%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6">
				<div class="chose__img__wrapper text-center text-lg-end mb-30">
					<div class="service__year text-start d-none d-md-inline-block">
						<span class="service__label">Over</span>
						<h2 class="section__title__one text-white mb-1">08+</h2>
						<span class="service__label">Years Services</span>
					</div>
					<img class="main__img__3c" src="{{ asset('Backend/images/about/' . $whoweare->image) }}" alt="{{$whoweare->alt_tag}}">
					<img class="main__img__4c d-none d-xl-inline-block" src="{{ asset('Backend/images/about/' . $whoweare->image1) }}"
						alt="{{$whoweare->alt_tag1}}">
					<div class="chose__video__2c">
						<a class="popup-video" href="{{ asset('/Backend/images/about/'.$whoweare->video) }}"><i
								class="bi bi-play-fill"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Who We Are end -->



	<!-- blog__area start -->
	<section class="blog__area pt-100 pt-lg-120 pb-90 pb-lg-120">
		<div class="container">
			<div class="section__title text-center mb-50">
				<h4 class="sub__title__one text-theme mb-20">{{$title4->title}}</h4>
				<h2 class="section__title__one">{{$title4->subtitle}}</h2>
			</div>
			<div class="row align-items-center justify-content-center">

				@foreach($blogs as $b)
					<div class="col-lg-4 col-md-6">
						<div class="blog__one mb-30">
							<div class="blog__thumb">
								<a href="{{url('/blogdetails/' . $b->slug)}}"><img class="w-100"
										src="{{ asset('Backend/images/blogs/' . $b->image) }}" alt="{{$b->alt_tag}}"></a>
							</div>
							<div class="blog__content__one">
								<div class="blog__meta mb-15">
									<a>{{$b->posted_by}} ~ </a>
									<a class="date-text">{{ date('F', strtotime($b->created_at)) }}
										{{ date('d', strtotime($b->created_at)) }},
										{{ date('Y', strtotime($b->created_at)) }}</a>
								</div>
								<h3 class="blog__title__three"><a href="{{url('/blogdetails/' . $b->slug)}}">{{$b->title}}</a>
								</h3>

							</div>
						</div>
					</div>
				@endforeach

			</div>

		</div>
	</section>
	<!-- blog__area end -->



@endsection