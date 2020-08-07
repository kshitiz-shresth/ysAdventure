<!doctype html>
<html lang="en">
  
<!-- Mirrored from demo.themefisher.com/enov/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 02:51:22 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Enov,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Enov| Bootstrap & HTML5 Business template by Themefisher</title>

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
						<a href="tel:+23-345-67890"><i class="fa fa-phone mr-2"></i><span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="header-top-socials text-center text-lg-right">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  main-nav py-3" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	<img src="logo.png" alt="" class="img-fluid" style="height: 51px;"> 
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
			  	<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			   <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tours</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-grid.html">Nepal</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Thailand</a></li>

					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>

			<a href="#" class="quote-btn ml-4 bg-primary text-white rounded-btn letter-spacing text-uppercase" >GET IN TOUCH <i class="ti-angle-right"></i></a>
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
  
<!-- Mirrored from demo.themefisher.com/enov/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 02:51:56 GMT -->
</html>
   