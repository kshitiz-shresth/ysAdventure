@extends('layouts.myapp')


@section('body')

@include('include.page_header',[
    'title'=>'About Us'
])



    <section class="about">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div
                        class="about-img mr-3 image-wrapper float-left "
                        data-aos="fade-right"
                        data-aos-delay="200"
                        
                    >
                        <img
                            src="{{ Voyager::image(setting('about.about_image')) }}"
                            alt=""
                            class="img-fluid"
                            
                        />
                    </div>
                    <div class="single-post-content-wrapper about-item">
                        <h2 class="mt-1 font-secondary">
                            Welcome to {{ setting('site.title') }}
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam repellat tenetur fugit ut. Cum dolorem, hic saepe at facilis minus et quasi aspernatur eaque odit possimus iste sunt magnam. Reiciendis recusandae quae iste. Saepe, nulla consequatur quia commodi possimus impedit perspiciatis hic delectus adipisci assumenda doloremque, quibusdam modi. Est sunt assumenda architecto quibusdam doloribus consequatur doloremque voluptatibus vero repellat.</p>
                        {!! setting('about.about_description') !!}
                    </div>
                </div>

            </div>
        </div>
    </section>

{{-- 
<!-- Section About Start -->
<section class="section about-2 position-relative">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10 text-center">
				<h1 >We create digital ideas that are bigger, bolder, braver and better.</h1>
				<p class="mb-5 lead mt-4 font-weight-normal" >We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0 col-md-6"  data-aos="fade-up" data-aos-delay="600" >
				<img src="/images/about/bg-1.jpg" alt="" class="img-fluid rounded">
				<div class="about-info-item mt-4">
					<h3 class="mb-3">Our Mission</h3>
					<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
				</div>	
			</div>
			<div class="col-lg-4 mb-4 mb-lg-0 col-md-6"  data-aos="fade-up" data-aos-delay="800" > 
				<img src="/images/about/about.jpg" alt="" class="img-fluid rounded">
				<div class="about-info-item mt-4">
					<h3 class="mb-3">Vission</h3>
					<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
				</div>	
			</div>
			<div class="col-lg-4"  data-aos="fade-up" data-aos-delay="1000" >
				<img src="/images/about/home-8.jpg" alt="" class="img-fluid rounded">
				<div class="about-info-item mt-4">
					<h3 class="mb-3">Our Approach</h3>
					<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- section Counter Start -->
<section class="counter bg-counter">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 "  data-aos="fade-up" data-aos-delay="100">
					<i class="ti-check text-white text-md float-left"></i>
					<div class="pl-5 ml-2">
						<h3 class="mt-2 mb-0 text-white"><span class="counter-stat">1730</span></h3>
						<p class="text-white-50 mb-0">Project Done</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 "  data-aos="fade-up" data-aos-delay="200">
					<i class="ti-flag text-white text-md float-left"></i>
					<div class="pl-5 ml-2">
						<h3 class="mt-2 mb-0 text-white"><span class="counter-stat ">125 </span>M </h3>
						<p class="text-white-50 mb-0">User Worldwide</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 "  data-aos="fade-up" data-aos-delay="300">
					<i class="ti-layers text-white text-md float-left"></i>
					<div class="pl-5 ml-2">
						<h3 class="mt-2 mb-0 text-white"><span class="counter-stat">39</span></h3>
						<p class="text-white-50 mb-0">Available Country</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item "  data-aos="fade-up" data-aos-delay="400">
					<i class="ti-medall text-white float-left text-md"></i>
					<div class="pl-5 ml-2">
						<h3 class="mt-2 mb-0 text-white"><span class="counter-stat">14</span></h3>
						<p class="text-white-50 mb-0">Award Winner </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section Counter End  -->

<section class="section team position-relative">
	<div class="container">
		<div class="row justify-content-center">
			 <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2 class="mb-4">Amazing Team</h2>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5" data-aos="fade-left" data-aos-delay="200" >
					<img src="/images/team/team-1.jpg" alt="" class="img-fluid w-100 rounded">
					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">Justin hammer</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5" data-aos="fade-left" data-aos-delay="400" >
					<img src="/images/team/team-2.jpg" alt="" class="img-fluid w-100 rounded">
					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">Mikel emily</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5" data-aos="fade-left" data-aos-delay="600" >
					<img src="/images/team/team-3.jpg" alt="" class="img-fluid w-100 rounded">

					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">David Spensor</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="200" >
					<img src="/images/team/team-4.jpg" alt="" class="img-fluid w-100 rounded">

					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">Jason Roy</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="400" >
					<img src="/images/team/team-1.jpg" alt="" class="img-fluid w-100 rounded">
					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">Peter Odin</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="600"  >
					<img src="/images/team/team-2.jpg" alt="" class="img-fluid w-100 rounded">
					<div class="team-item-content">
						<p class="text-sm mb-0">Project Manager</p>
						<h3 class="mt-0 mb-2 text-capitalize">David Spensor</h3>
						
						<ul class="team-social list-inline ">
							<li class="list-inline-item">
								<a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Testimonial Start -->
<section class="testimonial section bg-gray bg-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="testimonial-wrap text-center">
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-color text-lg"></i>

						<p class="mt-4">Neque ipsa consequuntur excepturi quas repudiandae aliquam iste ab laboriosam id facere ducimus odio sed officia provident doloribus explicabo, magni, corrupti sit.</p>

						<div class="testimonial-author">
							<h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
							<p>Excutive Director</p>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-color text-lg"></i>

						<p class="mt-4">Neque ipsa consequuntur excepturi quas repudiandae aliquam iste ab laboriosam id facere ducimus odio sed officia provident doloribus explicabo, magni, corrupti sit.</p>

						<div class="testimonial-author">
							<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
							<p>Director</p>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-color text-lg"></i>

						<p class="mt-4">Neque ipsa consequuntur excepturi quas repudiandae aliquam iste ab laboriosam id facere ducimus odio sed officia provident doloribus explicabo, magni, corrupti sit.</p>

						<div class="testimonial-author">
							<h5 class="mb-0 text-capitalize">James Watson</h5>
							<p>Designer</p>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-color text-lg"></i>

						<p class="mt-4">Neque ipsa consequuntur excepturi quas repudiandae aliquam iste ab laboriosam id facere ducimus odio sed officia provident doloribus explicabo, magni, corrupti sit.</p>

						<div class="testimonial-author">
							<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
							<p>Developer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Testimonial End -->

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision1.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3col-md-4">
				<img src="/images/about/key-vision2.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision3.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision4.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision3.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision5.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision3.png" alt="" class="img-fluid w-100">
			</div>
			<div class="col-lg-3 col-md-4">
				<img src="/images/about/key-vision4.png" alt="" class="img-fluid w-100">
			</div>
		</div>
	</div>
</section>    
 --}}

@endsection