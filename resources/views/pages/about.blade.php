@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('content')
<div id="entire">
          
           
    <div class="inner-head">
        <div class="container">
            <h1 class="entry-title">About St.Peter's Naalya</h1>
            <p class="description">
                St.Peter's Naalya is a mixed day and boarding school located in Namugongo.
            </p>
            <div class="breadcrumb">
                <ul class="clearfix">
                    <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                    <li class="ib current-page"><a href="{{ url('about-us') }}">About Spena</a></li>
                </ul>
            </div>
        </div><!-- End container -->
    </div><!-- End Inner Page Head -->

    <div class="clearfix"></div>

    <article class="post alt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="single-slider" class="alt flexslider">
                        <ul class="slides">
                            <li><div class="image"><img src="assets/img/new/cont/about1.jpg" alt="" class="img-responsive"></div></li>
                            <li><div class="image"><img src="assets/img/new/cont/about2.jpg" alt="" class="img-responsive"></div></li>
                        </ul><!-- End ul elements -->
                    </div><!-- End Single Slider -->
                </div><!-- End col-md-6 -->
                <br><br>
                <div class="col-md-6">
                    <div class="entry clearfix">
                        <span class="entry-icon"><i class="fa fa-file-text"></i></span>
                        <h4 class="overview ib">About St.Peter's Naalya</h4>
                        <div class="content">
                        <!-- content for about us spena-->
                            <p>
                                <?= $page->withFakes()->content ?>
                         <!-- end of content for about us spena-->

                            </p>
                        </div>
                    </div><!-- End Entry -->
                </div><!-- End col-md-6 -->
            </div><!-- End row -->
        </div><!-- End container -->
    </article>

    <div class="clearfix"></div>

    <section class="full-section features-section alt fancy-shadow white-bg">
        <div class="section-content features-content alt ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="feature-box alt">
                            <div class="icon"><img src="assets/img/icons/feature-icon-1.png" class="es-tr" alt=""></div><!-- End Icon -->
                            <h5 class="feature-title">Learn with us Online</h5>
                           <p class="feature-description">
                                We believe in new ideas through discoveries, because discovery plus intelligence that's the new goal of true education
                            </p>
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
                
<!-- parallax like section-->
    
    <section class="testimonials-section">
        <div class="testimonials-content ">
            <h4 class="title">Testimonials</h4>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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

    <div class="clearfix"></div>

</div><!-- End Entire Wrap -->
@endsection