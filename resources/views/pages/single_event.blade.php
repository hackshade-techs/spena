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



<div class="col-md-4">

<section class="portfolio-grid latest-course-section">
    <div class="portfolio-overlay fadeInDown-animation">
        <div class="container">
           
            <div class="row">
                <div class="portfolioitems">

          

                    <div class="col-md-4 col-sm-6 col-xs-12  isotope-item">
                        <div class="course project">
                            <div class="course-image">
                                <!-- <div class="details-overlay">
                                    <div class="overlay-icons">
                                        <span class="time">
                                            <a href="#" class="link"><i class="fa fa-chain"></i></a>
                                        </span> 
                                        <span class="place">
                                            <a href="#" class="link" data-toggle="modal" data-target="#portfolio-modal"><i class="fa fa-search"></i></a>
                                        </span>
                                    </div>
                                </div>End Overlay -->
                                <img src="{{ asset($event->image) }}" class="img-responsive" alt="">
                            </div><!-- End Image -->
                            <div class="course-info clearfix">
                                <span class="project-icon grad-btn fl"><i class="fa fa-eye"></i></span>
                                <h3 class="course-title fl">
                                    <a href="/events/{{ $event->id }}" class="ln-tr">{{ $event->title }}</a>
                                    <span class="cat">{{$event->start_date}} | {{ $event->end_date }}</span>
                                </h3>
                            </div><!-- End info -->
                        </div><!-- End Project -->
                    </div><!-- end col-md-4 col-sm-6 col-xs-12 -->

               
                </div><!-- end portfolio items -->

            </div><!-- end row -->

          

        </div><!-- End Container -->
    </div><!-- End Portfolio Content -->
   </section><!-- End Portfolio Section -->
 </div>
                                <div class="col-md-5">
    
                               
                                
                                <br><br><br><br><br>
                                <div class="add-courses box">
                                    <br> 
                                <img src="assets/img/icons/addcourse-icon.png" alt="" class="fl add-courses-icon">
                                    <br>
                                <center><a href="#" class="add-courses-title ln-tr">{{ $event->title }} | Description</a></center>
                                <hr><br>
                                <p class="add-courses-description">
                                <center><?= $event->description ?></center>
                                </p>
                            </div><!-- End Add Courses -->

                               </div>
                               
 <div class="col-md-3">
    <div class="sidebar">
        <br><br><br><br><br>
 <div class="sidebar-widget single-widget cats">
                                    <span class="widget-icon"><i class="fa fa-folder"></i></span>
                                    <h5 class="sidebar-widget-title ib">Categories</h5>
                                    <ul class="clearfix">
                                        @foreach($eventcategories as $eventcategory)
                                        <li><a href="{{ $eventcategory->id }}" class="ln-tr">{{ $eventcategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- End Categories Widget -->
</div>
 
</div>


</div>


@endsection