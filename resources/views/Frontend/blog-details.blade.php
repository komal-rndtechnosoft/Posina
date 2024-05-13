@extends('Frontend.layout.app')
@section('content')


			<main>
			<!--page-title-area start-->
			<div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-50"
				data-background="assets/img/page-title/page-title-bg-1a.jpg">
				<img class="page-title-shape shape-one " src="assets/img/shape/line-14d.svg" alt="shape">
				<img class="page-title-shape shape-two" src="assets/img/shape/pattern-1a.svg " alt="shape">

				<div class="container">
					<div class="row gx-4 gx-xxl-5 align-items-center">
						<div class="col-xl-6 col-md-6">
							<div class="page-title-wrapper text-md-start text-center">
								<h2 class="page-title mb-10">Blog-Details</h2>
								<nav aria-label="breadcrumb">
									<ul class="breadcrumb list-none justify-content-center justify-content-md-start">
										<li><a href="{{url('/')}}">Home</a></li>
										<li><a  href="{{url('/blogs')}}">Blogs</a></li>
										<li class="active" aria-current="page">Blog-Details</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--page-title-area end-->

			<!-- blog__details__area start -->
			<section class="blog__details__area pt-180 pt-lg-120 pb-170 pb-lg-110">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="blog__details__wrapper">
								<h2 class="blog__title__big mb-10">Designing Iconic Structures with Strength and
									Elegance</h2>
								<div class="blog__meta mb-25">
									<a class="text-theme" href="#">Nature Care </a>
									<a class="date-text text-body" href="#">/ 25 Jan 2023</a>
									<a class="meta-author float-end" href="#">By <span class="text-heding fw-semi">Jason
											Momoa</span></a>
								</div>
								<img class="w-100 mb-30" src="assets/img/blog/blog-18c.jpg" alt="Blog">
								<p class="mb-30">Quickly integrate client-centered users through vertical data.
									Holisticly repurpose
									interactive expertise after distinctive resources. Collaboratively engineer
									prospective imperatives with transparent .</p>
								
								<p>Assertively synergize emerging e-business through dynamic expertise. Objectively
									pursue vertical e-markets rather than multifunctional e-markets. Intrinsicly seize
									enterprise-wide growth strategies rather than 24/365 deliverables. Conveniently
									integrate revolutionary internal.</p>

								<h3 class="service__title__three mb-30 mt-60">The Versatility of Steel in Architecture
								</h3>
								<p>Seamlessly negotiate multifunctional solutions after high-payoff internal or
									"organic" sources. Phosfluorescently incentivize customized web services via
									superior services. Synergistically empower progressive imperatives with wireless
									metrics. Monotonectally formulate high-payoff meta-services through business
									innovation. Compellingly empower dynamic initiatives through enterprise
									deliverables.</p>
								<h3 class="service__title__three mb-30 mt-60">The Aesthetic Appeal of Steel</h3>
								<p>Seamlessly negotiate multifunctional solutions after high-payoff internal or
									"organic" sources. Phosfluorescently incentivize customized web services via
									superior services. Synergistically empower progressive imperatives with wireless
									metrics.</p>
								<h3 class="service__title__three mb-30 mt-60">Iconic Steel Structures Across the Globe
								</h3>
								<p>Seamlessly negotiate multifunctional solutions after high-payoff internal or
									"organic" sources. Phosfluorescently incentivize customized web services via
									superior services. Synergistically empower progressive imperatives with wireless
									metrics.</p>
								<h3 class="service__title__three mb-30 mt-60">Advancements in Steel Technology</h3>
								<p>Seamlessly negotiate multifunctional solutions after high-payoff internal or
									"organic" sources. Phosfluorescently incentivize customized web services via
									superior services. Synergistically empower progressive imperatives with wireless
									metrics. Monotonectally formulate high-payoff meta-services through business
									innovation. Compellingly empower dynamic initiatives through enterprise
									deliverables.</p>
								
								
								<h3 class="service__title__three mb-30">Conclusion</h3>
								<p>Seamlessly negotiate multifunctional solutions after high-payoff internal or
									"organic" sources. Phosfluorescently incentivize customized web services via
									superior services. Synergistically empower progressive imperatives with wireless
									metrics.</p>
								
							</div>
						</div>
						<div class="col-lg-5">
							<div class="widget-right-section ps-xl-4 ms-xl-3 mb-40">
								
								<div class="grey-bg widget widget-post mb-60">
									<div class="widget-title-box mb-20">
										<h4 class="widget__title__three">Recent Post</h4>
									</div>
									<ul class="post-list">
										<li>
											<div class="blog-post mb-20">
												<div class="post-content">
													<span>21 Jan 2023</span>
													<h6 class="mb-10"><a href="blog-details.html">Ensuring Excellence in
															Every Product</a></h6>
												</div>
												<a href="blog-details.html"><img src="assets/img/blog/thumb-1a.jpg"
														alt="Post Img"></a>
											</div>
										</li>
										<li>
											<div class="blog-post mb-20">
												<div class="post-content">
													<span>21 Jan 2023</span>
													<h6 class="mb-10"><a href="blog-details.html">Empowering Communitie
															Beyond the Grid</a></h6>
												</div>
												<a href="blog-details.html"><img src="assets/img/blog/thumb-2a.jpg"
														alt="Post Img"></a>
											</div>
										</li>
										<li>
											<div class="blog-post mb-20">
												<div class="post-content">
													<span>23 Feb 2023</span>
													<h6 class="mb-10"><a href="blog-details.html">Make The Planet Great
															Again & Live More</a></h6>
												</div>
												<a href="blog-details.html"><img src="assets/img/blog/thumb-3a.jpg"
														alt="Post Img"></a>
											</div>
										</li>
										<li>
											<div class="blog-post">
												<div class="post-content">
													<span>02 Mar 2023</span>
													<h6 class="mb-10"><a href="blog-details.html">Change The Future With
															Clean Energy</a></h6>
												</div>
												<a href="blog-details.html"><img src="assets/img/blog/thumb-4a.jpg"
														alt="Post Img"></a>
											</div>
										</li>
									</ul>
								</div>
								<div class="grey-bg widget widget-categories mb-60">
									<div class="widget-title-box mb-25">
										<h4 class="widget__title__three">Categories</h4>
									</div>
									<ul class="list-none service-widget">
										<li><a href="#">Industrial Automation <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
										<li><a href="#">Manufacturing System <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
										<li><a href="#">Oil and Gas Refinery <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
										<li><a href="#">Energy Management <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
										<li><a href="#">Smart Factory Solution <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a>
										</li>
										<li><a href="#">Lean Manufacturing <span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
									</ul>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- blog__details__area end -->


		</main>
	</div>


	
	
@endsection