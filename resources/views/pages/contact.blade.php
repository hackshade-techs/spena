@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('content')

<div class="inner-head">
    <div class="container">
        <h1 class="entry-title">We Would Like To  Hear From You!</h1>
        <p class="description">
            We would like to hear from you so that we can keep in touch
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>
<br>

<article class="contact fadeInDown-animation">
    
    <div class="contact-container container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 33px;">
                <div class="contact-left">
                    <span class="contact-form-icon"><i class="fa fa-envelope"></i></span>
                    <h5 class="contact-title ib">Contact Form</h5>
                    <div class="contact-text">
                        <h1 class="lead"><center>LEAVE US A MESSAGE</center></h1>
                        <BR>
                    </div><!-- End text -->
                    @include('includes.success')
                    @include('includes.errors')
                    <div class="contact-form">
                        <form method="post" action="{{ url('contact') }}" id="contact-form">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input">
                                        <input type="text" name="name" id="name" class="name-input" placeholder="Your Name" required>
                                    </div>
                                </div><!-- end name -->
                                <div class="col-md-6">
                                    <div class="input">
                                        <input type="email" name="email" id="email" class="email-input" placeholder="Email" required>
                                    </div>
                                </div><!-- end email -->
                                <div class="col-md-6">
                                    <div class="input">
                                        <input type="text" name="phone" id="tel" class="tel-input" placeholder="Phone" required>
                                    </div>
                                </div><!-- end phone -->
                                <div class="col-md-6">
                                    <div class="input">
                                        <input type="text" name="subject" id="subject" class="subject-input" placeholder="Subject" required>
                                    </div>
                                </div><!-- end phone -->
                                <div class="col-md-12">
                                    <div class="input">
                                        <textarea name="message" id="comment-area" placeholder="Message" required></textarea>
                                        <input type="submit" id="comment-submit" class="submit-input grad-btn ln-tr" value="Send">
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </form><!-- end form tag -->
                    </div><!-- end contact form -->
                </div><!-- End contact left -->
            </div><!-- end col-md-8 -->
             <br><br>
            <div class="col-md-4">
                <div class="contact-right sidebar">
                    <div class="sidebar-widget contact-info">
                        <span class="widget-icon"><i class="fa fa-book"></i></span>
                        <h5 class="sidebar-widget-title ib">CONTACT INFORMATION</h5>
                        <div class="info-text">
                          
                        </div><!-- end text info -->
                        <div class="call">
                            <p>Contact: (+256) 702116696</p>
                            <p>Email &nbsp;&nbsp;&nbsp;: info@spena.sc.ug</p>
                            <p>Website : www.spena.sc.ug</p>
                            <p>P. O. BOX: 40188</p>
                        </div><!-- end call info -->
                    </div><!-- end 1st block -->
                    <div class="sidebar-widget follow-us">
                        <span class="widget-icon"><i class="fa fa-share-alt"></i></span>
                        <h5 class="sidebar-widget-title ib">Follow US</h5>
                        <div class="follow-icons clearfix">
                            <div class="icons">
                                <ul class="clearfix">
                                    <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- end social icons -->
                    </div><!-- end 2nd block -->
                </div><!-- End contact right -->
            </div><!-- end col-md-4 -->
        </div><!-- end row -->
    </div><!-- end contact container -->

    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="big-map" >
                    <div id="contact-map" class="fixed-map">
                        <iframe
                        width="100%"
                        height="350px;"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJrdvpwe25fRcRdR2YVpX0fdI&key=AIzaSyCPF64q6d58PRia4rdGytz0G-ABBo5Say0" allowfullscreen>
                        </iframe>
                    </div>
                </div><!-- End Big Map -->
            </div><!-- End col-md-12 -->
        </div><!-- End main row -->
    </div><!-- End map container -->
</article><!-- End Single Article -->

@endsection