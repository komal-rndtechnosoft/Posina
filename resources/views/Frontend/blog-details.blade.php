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
			<section class="blog__details__area pt-100 pt-lg-120 pb-170 pb-lg-110">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="blog__details__wrapper">
								<h2 class="blog__title__big mb-10">{{$data->title}}</h2>
								<div class="blog__meta mb-25">
								<a class="date__text" >{{ date('F', strtotime($data->created_at)) }}
															{{ date('d', strtotime($data->created_at)) }},
															{{ date('Y', strtotime($data->created_at)) }}
									</a>									
									<a class="meta-author float-end" href="#">{{$data->posted_by}}</span></a>
								</div>
								<img class="w-100 mb-30" src="{{ asset('/Backend/images/blogs/' . $data->banner_image) }}" alt="Blog">
								<p class="mb-30">{!!$data->short_description!!}</p>

						
								<p>{!!$data->long_description!!}</p>
								
							</div>
						</div>
						<div class="col-lg-5">
							<div class="widget-right-section ps-xl-4 ms-xl-3 mb-40">
								
								<div class="grey-bg widget widget-post mb-60">
									<div class="widget-title-box mb-20">
										<h4 class="widget__title__three">Recent Post</h4>
									</div>
									<ul class="post-list">
									
										 @foreach($blogs as $b)
										<li>
										   
											<div class="blog-post mb-20">
												<div class="post-content">
													<span>{{ date('F', strtotime($b->created_at)) }}
															{{ date('d', strtotime($b->created_at)) }},
															{{ date('Y', strtotime($b->created_at)) }}</span>
													<h6 class="mb-10"><a href="{{url('/blogdetails/'.$b->slug)}}">{{$b->title}}</a></h6>
												</div>
												<a href="{{url('/blogdetails/'.$b->slug)}}"><img src="{{ asset('Backend/images/blogs/' . $b->image) }}" alt="{{$b->alt_tag}}" style="width: 101px;"></a>
											</div>
										</li>
										@endforeach
										
									</ul>
								</div>
								<div class="grey-bg widget widget-categories mb-60">
									<div class="widget-title-box mb-25">
										<h4 class="widget__title__three">Categories</h4>
									</div>
									<ul class="list-none service-widget">
									    @foreach($category as $c)
										<li><a href="#">{{$c->name}}<span class="float-end"><i
														class="bi bi-arrow-right-short"></i></span></a></li>
										@endforeach
									
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