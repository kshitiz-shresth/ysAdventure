<!doctype html>
<html lang="en">
  
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tours and Travel Nepal">
  
  <meta name="author" content="Kshitiz Shrestha">

  <title>Yellow Stone Adventure</title>

    @include('include.stylesheets')

</head>

<body>


	<!-- Header Start --> 

	<header class="navigation ">
		<div class="header-top d-none d-md-block d-lg-block">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-8 col-md-8">
						<div class="header-top-info">
							<a href="tel:{{ setting('contact.phone') }}"><i class="fa fa-phone mr-2"></i><span>{{ setting('contact.phone') }}</span></a>
							<a href="mailto:{{ setting('contact.email') }}" ><i class="fa fa-envelope mr-2"></i><span>{{ setting('contact.email') }}</span></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="header-top-socials text-center text-lg-right">
							<a href="{{ setting('contact.facebook') }}" target="_blank"><i class="ti-facebook"></i></a>
							<a href="{{ setting('contact.twitter') }}" target="_blank"><i class="ti-twitter"></i></a>
							<a href="{{ setting('contact.instagram') }}" target="_blank"><i class="ti-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg  main-nav py-3" id="navbar">
			<div class="container">
			<a class="navbar-brand" href="{{ route('index') }}">
				<img src="{{ Voyager::image(setting('site.logo')) }}" alt="" class="img-fluid" style="height: 51px;"> 
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarsExample09">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
				<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tours</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<li><a class="dropdown-item" href="#">Nepal</a></li>
							<li><a class="dropdown-item" href="#">Thailand</a></li>

						</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
				</ul>

				<a href="{{ route('contact') }}" class="quote-btn ml-4 bg-primary text-white rounded-btn letter-spacing text-uppercase" >GET IN TOUCH <i class="ti-angle-right"></i></a>
			</div>
			</div>
		</nav>
	</header>

	<!-- Header Close --> 

    <div class="main-wrapper ">

        <div id="app">
            @yield('body')
        </div>

        <!-- Section Cta-2  End -->
        @include('include.footer')
   
    </div>

    
    @include('include.scripts')
  </body>
  
</html>
   