@extends('Frontend.layout.app')

@section('content')


<!-- theme__main__banner start -->
<div class="swiper hero__slider__three">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<section class="main__slider__section2 pt-300 pb-205 pt-md-240 pb-md-105"
				data-background="assets/img/hero/hero-main-8c.jpg">
				<div class="circular__box">
					<img class="circular__text" src="assets/img/hero/circular-text-3c.png" alt="Circular">
					<img class="circular__img" src="assets/img/hero/icon-1c.svg" alt="Icon">
				</div>
				<div class="blur__box"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="theme__content text-center mt-185">
								<h2 class="main__title mb-60">Embracing <span>Renewable</span> Energy
									Solutions</h2>
								<a href="contact.html" class="ht_btn ht_btn2"><span>Explore Now <img
											src="{{asset('assets/img/icon/arrow-black.svg')}}" alt=""></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hero__media">
					<div class="call__box">
						<div class="icon mr-10">
							<img src="assets/img/icon/icon-22c.svg" alt="Phone">
						</div>
						<div class="call__content pt-10">
							<h5 class="call__title">Call For Support</h5>
							<h4 class="call__number">(603) 555-01239</h4>
						</div>
					</div>
				</div>
				<div class="social_media">
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<img class="shapes shapes__1" src="assets/img/shape/hero-half-circle-1c.svg" alt="Shape One">
			</section>
		</div>
		<div class="swiper-slide">
			<section class="main__slider__section2 pt-300 pb-205 pt-md-240 pb-md-105"
				data-background="assets/img/hero/hero-main-9c.jpg">
				<div class="circular__box">
					<img class="circular__text" src="{{asset('assets/img/hero/circular-text-3c.png')}}" alt="Circular">
					<img class="circular__img" src="{{asset('assets/img/hero/icon-1c.svg')}}" alt="Icon">
				</div>
				<div class="blur__box"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="theme__content text-center mt-185">
								<h2 class="main__title mb-60">Embracing <span>Renewable</span> Energy
									Solutions</h2>
								<a href="contact.html" class="ht_btn ht_btn2"><span>Explore Now <img
											src="{{asset('assets/img/icon/arrow-black.svg')}}" alt=""></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hero__media">
					<div class="call__box">
						<div class="icon mr-10">
							<img src="assets/img/icon/icon-22c.svg" alt="Phone">
						</div>
						<div class="call__content pt-10">
							<h5 class="call__title">Call For Support</h5>
							<h4 class="call__number">(603) 555-01239</h4>
						</div>
					</div>
				</div>
				<div class="social_media">
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<img class="shapes shapes__1" src="{{asset('assets/img/shape/hero-half-circle-1c.svg')}}"
					alt="Shape One">
			</section>
		</div>
		<div class="swiper-slide">
			<section class="main__slider__section2 pt-300 pb-205 pt-md-240 pb-md-105"
				data-background="assets/img/hero/hero-main-10c.jpg">
				<div class="circular__box">
					<img class="circular__text" src="{{asset('assets/img/hero/circular-text-3c.png')}}" alt="Circular">
					<img class="circular__img" src="{{asset('assets/img/hero/icon-1c.svg')}}" alt="Icon">
				</div>
				<div class="blur__box"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="theme__content text-center mt-185">
								<h2 class="main__title mb-60">Embracing <span>Renewable</span> Energy
									Solutions</h2>
								<a href="contact.html" class="ht_btn ht_btn2"><span>Explore Now <img
											src="{{asset('assets/img/icon/arrow-black.svg')}}" alt=""></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hero__media">
					<div class="call__box">
						<div class="icon mr-10">
							<img src="assets/img/icon/icon-22c.svg" alt="Phone">
						</div>
						<div class="call__content pt-10">
							<h5 class="call__title">Call For Support</h5>
							<h4 class="call__number">(603) 555-01239</h4>
						</div>
					</div>
				</div>
				<div class="social_media">
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<img class="shapes shapes__1" src="assets/img/shape/hero-half-circle-1c.svg" alt="Shape One">
			</section>
		</div>
	</div>
	<!-- swiper-scrollbar -->
	<div class="swiper-scrollbar d-none d-lg-inline-block"></div>

	<!-- swiper-pagination -->
	<div class="swiper-pagination d-none d-lg-inline-block"></div>

	<!-- swiper-arrow-pagination -->
	<div class="swiper-button-prev d-none d-lg-inline-block"><i class="bi bi-chevron-left"></i></div>
	<div class="swiper-button-next d-none d-lg-inline-block"><i class="bi bi-chevron-right"></i></div>
</div>
<!-- theme__maina__banner end -->

<!-- brand__area start -->
<div class="brand__area pb-80 pb-lg-60">
	<div class="swiper brand__slider__two">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-6c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-7c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-8c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-9c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-10c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="assets/img/brand/brand-6c.svg" alt="Brand Logo"></a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="brand__img__two">
					<a href="#"><img src="{{asset('assets/img/brand/brand-7c.svg')}}" alt="Brand Logo"></a>
				</div>
			</div>

		</div>
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
						<h4 class="sub__title__one text-theme mb-20">USP</h4>
						<h2 class="section__title__one mb-25">The Benefits of Choosing Our Industrial
							Expertise
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single__process__box mb-40">
						<img class="star-icon" src="assets/img/icon/icon-48d.svg" alt="icon">
						<div class="tag">
							Step 01
						</div>
						<div class="icon mb-25">
							<img src="assets/img/icon/icon-44d.svg" alt="Icon">
						</div>
						<h4 class="single__box__title"><a href="#">Our Domain Expertise</a></h4>
						<p>Electric equipment and goods designing and development are technical task, which is handled
							by.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single__process__box mb-40">
						<img class="star-icon" src="assets/img/icon/icon-48d.svg" alt="icon">
						<div class="tag">
							Step 02
						</div>
						<div class="icon mb-25">
							<img src="assets/img/icon/icon-45d.svg" alt="Icon">
						</div>
						<h4 class="single__box__title"><a href="#">Product Portfolio</a></h4>
						<p>Electric equipment and goods designing and development are technical task, which is handled
							by.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single__process__box mb-40">
						<img class="star-icon" src="assets/img/icon/icon-48d.svg" alt="icon">
						<div class="tag">
							Step 03
						</div>
						<div class="icon mb-25">
							<img src="assets/img/icon/icon-46d.svg" alt="Icon">
						</div>
						<h4 class="single__box__title"><a href="#">Infrastructure</a></h4>
						<p>Electric equipment and goods designing and development are technical task, which is handled
							by.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single__process__box mb-40">
						<img class="star-icon" src="assets/img/icon/icon-48d.svg" alt="icon">
						<div class="tag">
							Step 04
						</div>
						<div class="icon mb-25">
							<img src="assets/img/icon/icon-47d.svg" alt="Icon">
						</div>
						<h4 class="single__box__title"><a href="#">Improvement</a></h4>
						<p>Electric equipment and goods designing and development are technical task, which is handled
							by.</p>

					</div>
				</div>
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
					<h4 class="sub__title__three mb-25">About us</h4>
					<h2 class="section__title__one">Driving Change with Renewable Energy Innovations</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center mb-20">
			<div class="col-lg-6">
				<div class="about__img__wrapper mb-30">
					<img class="about__img__3c" src="assets/img/about/about-img-3c.jpg" alt="About">
					<div class="service__year d-none d-md-inline-block">
						<span class="service__label">Over</span>
						<h2 class="section__title__one text-white">08+</h2>
						<span class="service__label">Great Services</span>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about__counter__wrapper ps-xl-5 ms-xl-4 mb-30">
					<p class="mb-30">Collaboratively optimize wireless communities and transparent
						manufactured products.
						Conveniently morph open-source systems rather to interactive web readiness. Quickly
						synthesize an expanded array of niche.</p>
					<div class="row mb-20">
						<div class="col-md-6">
							<div class="counter__box mb-30">
								<h3 class="counter__number"><span class="counter">20</span></h3>
								<p>Years of<br>Expertise</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30 ps-xxl-4">
								<h3 class="counter__number"><span class="counter">12</span></h3>
								<p>Total of<br>
									Services</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30">
								<h3 class="counter__number"><span class="counter">10</span></h3>
								<p>Worldwide<br>
									Clients</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="counter__box mb-30 ps-xxl-4">
								<h3 class="counter__number"><span class="counter">1</span>k</h3>
								<p>Total of<br>
									Services</p>
							</div>
						</div>
					</div>
					<div class="about__btn text-md-start text-center"><a href="contact.html"
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
					<h4 class="sub__title__three mb-25">Why Choose Us</h4>
					<h2 class="section__title__one">Sustainable Solutions for a Better Tomorrow</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="ht__feature__box text-center mb-30">
					<div class="icon mb-30">
						<img src="assets/img/icon/icon-26c.svg" alt="Icon">
					</div>
					<h4 class="feature__service__title">Trusted & Warranty</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="ht__feature__box text-center mb-30">
					<div class="icon mb-30">
						<img src="assets/img/icon/icon-24c.svg" alt="Icon">
					</div>
					<h4 class="feature__service__title">Trusted & Warranty</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="ht__feature__box text-center mb-30">
					<div class="icon mb-30">
						<img src="assets/img/icon/icon-25c.svg" alt="Icon">
					</div>
					<h4 class="feature__service__title">Trusted & Warranty</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="ht__feature__box text-center mb-30">
					<div class="icon mb-30">
						<img src="assets/img/icon/icon-23c.svg" alt="Icon">
					</div>
					<h4 class="feature__service__title">Trusted & Warranty</h4>
				</div>
			</div>
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
					<h4 class="sub__title__one mb-0">Our Categories</h4>
					<div class="snake-line mb-15">
						<img src="assets/img/shape/snake-line-1a.svg" alt="line">
					</div>
					<h2 class="section__title__one">Transform Your Company with Our <span>Services</span>
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="swiper services__slide__one pb-60">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="assets/img/service/service-1a.jpg" alt="Service">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-5a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="services-detail.html">Industrial
											Automation</a>
									</h4>
									<a href="services-detail.html"><img src="assets/img/icon/long-arrow.svg"
											alt="Arrow"></a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="assets/img/service/service-2a.jpg" alt="Service">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-6a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="services-detail.html">Manufacturing
											System</a>
									</h4>
									<a href="services-detail.html"><img src="assets/img/icon/long-arrow.svg"
											alt="Arrow"></a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="assets/img/service/service-3a.jpg" alt="Service">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-7a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="services-detail.html">Oil
											and
											Gas
											Refinery</a>
									</h4>
									<a href="services-detail.html"><img src="assets/img/icon/long-arrow.svg"
											alt="Arrow"></a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="assets/img/service/service-1a.jpg" alt="Service">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-5a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="services-detail.html">Industrial
											Automation</a>
									</h4>
									<a href="services-detail.html"><img src="assets/img/icon/long-arrow.svg"
											alt="Arrow"></a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="single__services__box mb-60">
								<div class="services__thumb">
									<img class="w-100" src="assets/img/service/service-2a.jpg" alt="Service">
								</div>
								<div class="services__content">
									<div class="services__icon">
										<img src="assets/img/icon/icon-6a.svg" alt="Icon">
									</div>
									<h4 class="single__service__title"><a href="services-detail.html">Manufacturing
											System</a>
									</h4>
									<a href="services-detail.html"><img src="assets/img/icon/long-arrow.svg"
											alt="Arrow"></a>
								</div>
							</div>
						</div>
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
						<h4 class="sub__title__three mb-25">Industry We Serve</h4>
						<h2 class="section__title__one">Turning Visions into Sustainable Power Plants</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-27c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Solar
									Energy</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-28c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Hydro
									Energy</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-29c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Wind
									Power</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-30c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Bio
									Energy</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-31c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Geothermal Solu</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-32c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Energy
									Storage</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-33c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Microgrid</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="single__services__three mb-30" data-background="assets/img/service/service-bg-2c.jpg">
						<div class="services__content">
							<div class="services__icon mb-20">
								<img src="assets/img/icon/icon-34c.svg" alt="Icon">
							</div>
							<h4 class="service__title__three mb-20"><a href="services-detail.html">Off-Grid</a>
							</h4>
							<p>Collaborative optim wireless transparent products.</p>
						</div>
					</div>
				</div>
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
						<h4 class="sub__title__three mb-25">Who We Are</h4>
						<h2 class="section__title__one">For Next Renewable Energy Revolution</h2>
						<p>Phosfluorescently predominate team building leadership and cross-unit
							relationships. Professionally.</p>
					</div>
					<div class="progress__wrapper mb-25">
						<h4 class="progress__title">Trusted Professionals</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<span>90%</span>
							</div>
						</div>
					</div>
					<div class="progress__wrapper progress__two mb-25">
						<h4 class="progress__title">Innovative Solutions</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:80%">
								<span>80%</span>
							</div>
						</div>
					</div>
					<div class="progress__wrapper mb-25">
						<h4 class="progress__title">Security Advices</h4>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:85%">
								<span>85%</span>
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
					<img class="main__img__3c" src="assets/img/chose/chose-img-3c.jpg" alt="Chose">
					<img class="main__img__4c d-none d-xl-inline-block" src="assets/img/chose/chose-img-4c.jpg"
						alt="Chose">
					<div class="chose__video__2c">
						<a class="popup-video" href="https://www.youtube.com/watch?v=lTxn2BuqyzU"><i
								class="bi bi-play-fill"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Who We Are end -->


<!-- blog__area start -->
<section class="blog__area pt-100 pt-lg-60 pb-170 pb-lg-60">
	<div class="section__title text-center mb-55">
		<h4 class="sub__title__three mb-25">Latest News</h4>
		<h2 class="section__title__one">Our Recent Articles</h2>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="grey-bg blog__three mb-30">
					<div class="blog__thumb">
						<a href="blog-details.html"><img class="w-100" src="assets/img/blog/blog-8c.jpg" alt="Blog"></a>
					</div>
					<div class="blog__content">
						<span class="min__read">5 Min Read</span>
						<h3 class="blog__title__two mb-15"><a href="blog-details.html">Strategy for Improve
								Efficiency
								&
								Flexibility</a></h3>
						<p>Seamlessly grow to client into the portal rather global customer.</p>
						<div class="blog__meta d-flex align-items-center mt-20">
							<div class="blog__author mr-10">
								<a href="blog-details.html"><img src="assets/img/blog/blog-author-2c.jpg"
										alt="Author"></a>
							</div>
							<div class="blog__meta__content">
								<a href="#">Kristin Watson</a>
								<a class="date-text" href="#">21 Jan 2023</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="grey-bg blog__three mb-30">
					<div class="blog__thumb">
						<a href="blog-details.html"><img class="w-100" src="assets/img/blog/blog-9c.jpg" alt="Blog"></a>
					</div>
					<div class="blog__content">
						<span class="min__read">5 Min Read</span>
						<h3 class="blog__title__two mb-15"><a href="blog-details.html">Strategy for Improve
								Efficiency
								&
								Flexibility</a></h3>
						<p>Seamlessly grow to client into the portal rather global customer.</p>
						<div class="blog__meta d-flex align-items-center mt-20">
							<div class="blog__author mr-10">
								<a href="blog-details.html"><img src="assets/img/blog/blog-author-3c.jpg"
										alt="Author"></a>
							</div>
							<div class="blog__meta__content">
								<a href="#">Kristin Watson</a>
								<a class="date-text" href="#">21 Jan 2023</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="grey-bg blog__three mb-30">
					<div class="blog__thumb">
						<a href="blog-details.html"><img class="w-100" src="assets/img/blog/blog-10c.jpg"
								alt="Blog"></a>
					</div>
					<div class="blog__content">
						<span class="min__read">5 Min Read</span>
						<h3 class="blog__title__two mb-15"><a href="blog-details.html">Strategy for Improve
								Efficiency
								&
								Flexibility</a></h3>
						<p>Seamlessly grow to client into the portal rather global customer.</p>
						<div class="blog__meta d-flex align-items-center mt-20">
							<div class="blog__author mr-10">
								<a href="blog-details.html"><img src="assets/img/blog/blog-author-4c.jpg"
										alt="Author"></a>
							</div>
							<div class="blog__meta__content">
								<a href="#">Kristin Watson</a>
								<a class="date-text" href="#">21 Jan 2023</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="grey-bg blog__three mb-30">
					<div class="blog__thumb">
						<a href="blog-details.html"><img class="w-100" src="assets/img/blog/blog-7c.jpg" alt="Blog"></a>
					</div>
					<div class="blog__content">
						<span class="min__read">5 Min Read</span>
						<h3 class="blog__title__two mb-15"><a href="blog-details.html">Strategy for Improve
								Efficiency
								&
								Flexibility</a></h3>
						<p>Seamlessly grow to client into the portal rather global customer.</p>
						<div class="blog__meta d-flex align-items-center mt-20">
							<div class="blog__author mr-10">
								<a href="blog-details.html"><img src="assets/img/blog/blog-author-1c.jpg"
										alt="Author"></a>
							</div>
							<div class="blog__meta__content">
								<a href="#">Kristin Watson</a>
								<a class="date-text" href="#">21 Jan 2023</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="more__btn__box text-center mt-30">
			<a href="contact.html" class="ht_btn ht_btn2"><span>Load More <img src="assets/img/icon/arrow1.svg"
						alt=""></span></a>
		</div>
	</div>
</section>
<!-- blog__area end -->


@endsection