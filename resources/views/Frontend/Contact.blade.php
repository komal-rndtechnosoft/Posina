@extends('Frontend.layout.app')
@section('content')

		<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100"
				data-background="assets/img/page-title/page-title-bg-1a.jpg">
				<img class="page-title-shape shape-one " src="assets/img/shape/line-14d.svg" alt="shape">
				<img class="page-title-shape shape-two" src="assets/img/shape/pattern-1a.svg " alt="shape">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-10">Contact</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Pages</a></li>
										<li class="active" aria-current="page">Contact</li>
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
									<span>(704) 555-0127</span>
								</div>
								<div class="single__info__box">
									<div class="icon">
										<i class="bi bi-geo-alt"></i>
									</div>
									<span>414 Rd. New York,USA</span>
								</div>
								<div class="single__info__box">
									<div class="icon">
										<i class="bi bi-envelope"></i>
									</div>
									<span>Graham@mail.com</span>
								</div>
								<div class="single__info__box mb-40">
									<div class="icon">
										<i class="bi bi-briefcase"></i>
									</div>
									<span>Steel Management</span>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="contact-form-one">
								<h3 class="section__title__one mb-50">Send Us Message</h3>
								<form class="widget-form" action="#">
									<div class="row">
										<div class="col-md-6">
											<label class="label">First Name</label>
											<input type="text" name="fname" placeholder="First Name">
										</div>
										<div class="col-md-6">
											<label class="label">Last Name</label>
											<input type="text" name="lname" placeholder="Last Name">
										</div>
										<div class="col-md-6">
											<label class="label">Email</label>
											<input type="email" name="email" placeholder="Email ID">
										</div>
										<div class="col-md-6">
											<label class="label">Phone No</label>
											<input type="text" name="phone" placeholder="Phone">
										</div>
										<div class="col-md-6">
											<label class="label">Country</label>
											<input type="text" name="country" placeholder="Country Name">
										</div>
										<div class="col-md-6">
											<label class="label">Birthdate</label>
											<input type="date" name="date">
										</div>
										<div class="col-md-12 mb-25">
											<label class="label">Question</label>
											<textarea name="message" placeholder="Write Your Questions"></textarea>
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