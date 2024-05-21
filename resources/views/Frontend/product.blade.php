@extends('Frontend.layout.app')
@section('content')


<main>
	<!--page-title-area start-->
	<div class="page-title-area pt-80 pb-100 pt-lg-120 pb-lg-125 pb-md-50"
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


	<!-- Products start -->

	<!-- services__area end -->
	<section class="blog__area pt-100 pt-lg-120 pb-90 pb-lg-120">
		<div class="container">
			<div class="section__title text-center mb-50">
				<h4 class="sub__title__one text-theme mb-20">New Products</h4>
				<h2 class="section__title__one">New Products</h2>
			</div>
			<div class="row align-items-center justify-content-center">

				@foreach ($product as $c)

					<div class="col-lg-4 col-md-6">
						<div class="blog__one mb-30 bloo">
							<div class="blog__thumb">
								<a><img class="w-100" src="{{ asset('Backend/images/product/' . $c->image) }}"
										alt="{{$c->alt}}"></a>
							</div>
							<div class="blog__content__one">
								
								<h3 class="blog__title__three">{{$c->name}}
								</h3>
								<div class="row">
											<div class="col-lg-7 col-md-4 col-sm-6">
												<span class="Quantity">Min Order Qty:{{$c->qty}}</span>
											</div>
											<div class="col-lg-5 col-md-4 col-sm-6">
												<span class="old-price">Price: Rs.{{$c->price}}</span>

											</div>
										</div>

							</div>
						</div>
					</div>
				@endforeach

			</div>

		</div>
	</section>

</main>


</div>




@endsection