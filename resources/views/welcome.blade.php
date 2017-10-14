@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('content')

<section class="full-section features-section alt fancy-shadow white-bg">
    <div class="section-content features-content alt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="feature-box alt">
                        <div class="icon"><img src="assets/img/icons/feature-icon-1.png" class="es-tr" alt=""></div><!-- End Icon -->
                        <h5 class="feature-title">Learn with us Online</h5>
                       <p class="feature-description">
                            We believe in new ideas through discoveries, because discovery plus intelligence that's the new goal of true education
                        </p>
                        <div class="buttons" style="text-align: center;">
                            <a href="{{ url('documents') }}" class="btn grad-btn orange-btn read-btn">Read More</a>
                        </div>
                    </div><!-- End Features Box -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature-box alt">
                        <div class="icon"><img src="assets/img/icons/feature-icon-2.png" class="es-tr" alt=""></div><!-- End Icon -->
                        <h5 class="feature-title">Meet our qualidied Teachers</h5>
                        <p class="feature-description">
                            Education  and change are the result of all true learning, where a problem shared, is a problem solved.
                        </p>
                    </div><!-- End Features Box -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature-box alt">
                        <div class="icon"><img src="assets/img/icons/feature-icon-3.png" class="es-tr" alt=""></div><!-- End Icon -->
                        <h5 class="feature-title">Develop your career with us</h5>
                        <p class="feature-description">
                            We create and develop a passion for learning, and that's why we never cease to grow.
                        </p>
                    </div><!-- End Features Box -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature-box alt">
                        <div class="icon"><img src="assets/img/icons/feature-icon-4.png" class="es-tr" alt=""></div><!-- End Icon -->
                        <h5 class="feature-title">Check for our Location</h5>
                        <p class="feature-description">
                           Successful ideas are developed by genious elites, and their foundation can be discovered
                        </p>
                    </div><!-- End Features Box -->
                </div>
            </div>
        </div>
    </div><!-- End Features Section Content -->
</section><!-- End Features Section -->



<div class="clearfix"></div>


<section class="full-section latest-courses-section">
    <div class="container">
        <h3 class="section-title">Look at Our List of Classes</h3>
        <p class="section-description">
            At St.Peter's Naalya we have enough classes for our students where classes are sub divided  into a number of streams for the different students at different levels, this is to simplify learning of students and provision of a conducive environmnet.
        </p><!-- End Section Description -->
    </div>
    <div class="section-content latest-courses-content alt ">
        <div class="container">
            <div class="row">
                <div id="courses-slider" class="flexslider">
                    <ul class="slides">
                    @include('includes.composers.classes-home')
                    <!-- End 6th Slide -->
                    </ul><!-- End ul Items -->
                </div><!-- End Courses Slider -->
            </div><!-- End 1st row -->
        </div>
    </div>
    <div class="clearfix"></div>
    <section class="full-section features-section alt fancy-shadow white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">          
                <!-- parallax like section-->
                    <section class="testimonials-section">
                        <div class="testimonials-content ">
                            <h4 class="title">Testimonials</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8" style="max-height: 300;">
                                        <div id="testimonials-slider" class="flexslider">
                                            <ul class="slides">
                                                @include('includes.composers.testimonials')
                                            </ul><!-- End ul Items -->
                                        </div>
                                    </div>
                                </div><!-- End row -->
                            </div><!-- End container -->
                        </div><!-- End Testimonials Content -->
                    </section><!-- End Testimonials Section -->
                <!-- end of parallax like section-->
                </div>
                <div class="col-md-4">
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fspenainternational%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>  
        </div>
    </section>

<div class="clearfix"></div>

</section><!-- End MISC Section -->

@endsection