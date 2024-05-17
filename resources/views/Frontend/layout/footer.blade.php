<?php $header=DB::table('headers')->select('*')->first();
 $footer=DB::table('footers')->select('*')->first();
?>
	<!-- cta__area start -->
	<section class="cta__area">
				<div class="container">
					<div class="row gx-md-0">
						<div class="col-xl-5 col-lg-6">
							<div class="cta__wrapper black-bg pt-85 pb-80 pl-50">
								<img class="shapes__1" src="{{asset('assets/img/shape/line-12b.svg')}}" alt="Line">
								<h2 class="section__title__one text-white mb-50">Get in touch with us about anything.
								</h2>
								<a href="{{url('/contactus')}}" class="ht_btn"><span>Contact Us <img
											src="assets/img/icon/arrow1.svg" alt=""></span></a>
							</div>
						</div>
						<div class="col-xl-7 col-lg-6">
							<div class="map__area">
							
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.958855554432!2d72.98369217389215!3d20.30197011234667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cc6a76412adf%3A0x156393ff293c4872!2sPARSHVANATH%20INDUSTRIES!5e0!3m2!1sen!2sin!4v1715863310680!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- cta__area end -->
<!--footer-area start-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/{{$header->phone}}" class="float f" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<style>
    .float{
    margin-left: 14px;
	position:fixed;
	width:60px;
	height:60px;
	bottom:14px;
	/*right:40px;*/
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    font-size:30px;
	box-shadow: 2px 2px 3px #999;
    z-index:100;
}

.my-float{
	margin-top:16px;
}

 
}
</style>
<footer class="footer-area">
			<div class="footer-bg-two pt-95 pb-50" data-background="assets/img/footer/footer-bg-1a.jpg">
				<img class="shapes__1" src="assets/img/shape/star-3a.svg" alt="">
				<img class="shapes__2" src="assets/img/shape/line-7a.svg" alt="">
				<div class="blur__shape"></div>
				<div class="container pt-200 pt-lg-10">
					<div class="row mb-25">
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30 px-xxl-3">
								<a href="{{url('/')}}"><img src="{{ asset('/Backend/images/blogs/' . $footer->image) }}" alt="{{$footer->alt_tag}}" style="width: 107px;"></a>
								<p class="footer__description mt-40">{!!$footer->news_description !!}</p>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30">
								<ul class="fot-list">
									<li>
										<a href="{{url('/aboutus')}}">About Us</a>
									</li>
									<li>
										<a href="{{url('/blogs')}}">Blogs</a>
									</li>
									<li>
										<a href="{{url('/contactus')}}">Contact Us</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-4 col-md-6">
							<div class="footer__widget mb-30">
								<div class="footer__contact">
									<h3 class="phone__nimber mb-25"><a href="tel:{{$footer->phone1}}">{{$footer->phone1}}</a></h3>
									<p class="mb-0"><a  href="https://www.google.com/maps?ll=20.301965,72.986267&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=1541238221608601714" style="color:white">
													{{$footer->address}}
												</a></p>
									<div class="social_media">
										
										 <a href="{{ $footer->facebook_link }}" style="cursor:pointer;" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
										<a href="{{ $footer->twitter_link }}" style="cursor:pointer;" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="{{ $footer->instagram_link }}" style="cursor:pointer;" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
									
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
				<div class="container copyright__border">
					<div class="copyright__area pt-75">
						<div class="row align-items-center">
							<div class="col-lg-12 text-center ">
								<div class="copyright__text mb-30">
									<p>
										<a class="fw-bold" href="#">Creative Gigs</a>
										© 2023 Factry. All rights reserved.</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--footer-area end-->