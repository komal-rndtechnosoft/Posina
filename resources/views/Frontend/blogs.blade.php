<?php 
    $currentURL = url()->current(); 
    $slug = basename(parse_url($currentURL, PHP_URL_PATH)); 
    $BreadCrumb = Helper::Breadcrumb($slug);
?>
@extends('Frontend.layout.app')
@section('content')


<main>
	<!--page-title-area start-->
	<div class="page-title-area pt-300 pb-160 pt-lg-120 pb-lg-125 pb-md-100"
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




</main>


</div>




@endsection