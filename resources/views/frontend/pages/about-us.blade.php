@extends('frontend.layouts.master')

@section('title', 'E-SHOP || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Về chúng tôi</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="about-content">
						@php
							$settings = DB::table('settings')->get();
						@endphp
						<h3>Chào mừng đến với <span>Eshop</span></h3>
						<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
						<div class="button">
							<a href="{{route('blog')}}" class="btn">Blog</a>
							<a href="{{route('contact')}}" class="btn primary">Liên hệ</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="about-img overlay">
						{{-- <div class="button">
							<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i
									class="fa fa-play"></i></a>
						</div> --}}
						<img src="@foreach($settings as $data) {{$data->photo}} @endforeach"
							alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Miễn ship</h4>
						<p>Đơn trên 200000đ</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Miễn phí đổi trả</h4>
						<p>Trong vòng 30 ngày</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Thanh toán an toàn</h4>
						<p>100% an toàn khi thanh toán</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Giá tốt nhất</h4>
						<p>Giá đảm bảo</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection