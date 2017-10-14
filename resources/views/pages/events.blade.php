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
        <h1 class="entry-title">School Events</h1>
        <p class="description">
            At <i>SPENA</i> we have a number of events held at school in different terms and we have a list of them. 
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib"><a href="{{ url('events') }}">Events</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<section class="portfolio-grid latest-courses-section">
    <div class="portfolio-overlay fadeInDown-animation">
        <div class="container">
           
            <div class="row">
                <div class="portfolio-items">

                @foreach($events as $event)

                    <div class="col-md-4 col-sm-6 col-xs-12  isotope-item">
                        <div class="course project">
                            <div class="course-image">
                                <div class="details-overlay" title="click to view more">

                                    <div class="overlay-icons">
                                        <span class="time" title="click to view more">
                                            <a href="/events/{{ $event->id }}" class="link"><i class="fa fa-chain"></i></a>
                                        </span> 
                                        <!-- <span class="place">
                                            <a href="/events/{{ $event->id }}" class="link" data-toggle="modal" data-target="#portfolio-modal"><i class="fa fa-search"></i></a>
                                        </span> -->
                                    </div><!-- End overlay icons -->
                                </div><!-- End Overlay -->
                                <img src="{{ $event->image }}" class="img-responsive" alt="{{ $event->title }} image">
                            </div><!-- End Image -->
                            <div class="course-info clearfix">
                                <span class="project-icon grad-btn fl"><i class="fa fa-home"></i></span>
                                <h3 class="course-title fl">
                                    <a href="/events/{{ $event->id }}" class="ln-tr">{{ $event->title }}</a>
                                   
                                    <span class="cat">STARTS: {{ $event->start_date }}  | ENDS: {{ $event->end_date }} </span>

                                </h3>
                            </div><!-- End info -->
                        </div><!-- End Project -->
                    </div><!-- end col-md-4 col-sm-6 col-xs-12 -->

                @endforeach
                </div><!-- end portfolio items -->

            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12 pagination">
                    <ul class="clearfix">
                        <li class="ib arrow"><a class="ln-tr" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="ib"><a class="ln-tr" href="#">{{ $events->links() }}</a></li>
                        
                        <li class="ib arrow"><a class="ln-tr" href="#"><i class="fa fa-angle-right"></i></a></li>


                    </ul>
                </div><!-- End Pagination -->

            </div><!-- end pagination row -->

        </div><!-- End Container -->
    </div><!-- End Portfolio Content -->
</section><!-- End Portfolio Section -->

@endsection