@extends('layouts.myapp')


@section('body')
@include('include.page_header',[
    'title'=>'Contact'
])
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row align-items-center bg-gray">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="google-map">
                    <div id="map"></div>
                </div>
                 
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                    <p class="mb-4 mt-2 lead h4">{{ setting('contact.getintouchwithus') }}</p>
                    <h2 class="mb-3">{{ setting('contact.phone') }}</h2>

                   <p>Start the collaboration with us while figuring out the best solution based on your needs.</p>

                    <ul class="social-icons list-inline mt-4">
                        <li class="list-inline-item">
                            <a href="{{ setting('contact.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ setting('contact.twitter') }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ setting('contact.instagram') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 text-center mt-4">
                <form id="contact-form" class="contact__form" method="post" action="http://demo.themefisher.com/enov/mail.php">
             <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <h3 class="text-md ">Contact Us</h3>
                <p class="mb-5">Reach out to the world’s most reliable services.</p>

                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group-2 mb-4">
                    <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-main" name="submit" type="submit">Send Message</button>
            </form>
            </div>  
        </div>
    </div>
</section> 


@endsection