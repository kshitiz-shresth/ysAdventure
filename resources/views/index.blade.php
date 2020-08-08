@extends('layouts.myapp')

@section('body')

<!-- Slider Start -->
<section class="slider" style="background:url({{ Voyager::image(setting('home-page.banner')) }}) no-repeat">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-md-12">
				<div class="text-center">
					<h1 class="d-md-none d-sm-block animated fadeInUp mb-5 text-white">The Yellostone Aventure</h1>
					<img src="{{ Voyager::image(setting('admin.icon_image')) }}" alt="" class="animated fadeInUp" style="height: 15rem;">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="mt--6 position-relative slider-cta">
	<div class="container">
		<div class="row align-items-center bg-primary p-4 p-sm-5 rounded">
			<div class="col-lg-8">
				<h3 class="mb-2 text-white">Welcome to the Yellostone Adventure</h3>
				<p class="text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum cupiditate atque itaque vitae alias similique veniam a suscipit labore voluptatum fugit nesciunt maxime reprehenderit est repudiandae, quis nobis dignissimos maiores?</p>
			</div>
			<div class="col-lg-4 text-right">
				<button class="btn btn-white mb-0">Contact Us</button>
			</div>
		</div>
	</div>
</section>

<home-content about-section-data="{{ $aboutSectionData }}" what-we-do="{{ setting('home-page.whatwedo') }}"></home-content>

@endsection