@extends('layouts.app')
@section('title') 
{{ $alumni->firstname }} {{ $alumni->lastname }}
@endsection

@section('description') 
{{ $alumni->firstname }} {{ $alumni->lastname }}
@endsection

@section('keywords') 
{{ $alumni->firstname }} {{ $alumni->lastname }}
@endsection

@section('content')

<div class="inner-head">
    <div class="container">
        <h1 class="entry-title">{{ $alumni->firstname }} {{ $alumni->lastname }}</h1>
        <p class="description">
           {{ $alumni->occupation }}
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="#">{{ $alumni->firstname }} {{ $alumni->lastname }}</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>
<article class="white-bg">
    <section class="full-section latest-courses-section no-slider">
        <div class="section-content latest-courses-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="course">
                            <div class="featured-badge"><span>Alumnus</span></div>
                            <div class="course-image">
                                <div class="details-overlay">
                                    <span class="place">
                                        <i class="fa fa-map-marker"></i>
                                        <span class="text">Place : {{ $alumni->address }}</span>
                                    </span>
                                    <span class="time">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="text">Time :{{ $alumni->entry_date }} - {{ $alumni->exit_date }}</span>
                                    </span>
                                </div><!-- End Course Overlay -->
                                <img width="100%" style="max-height: 148px;" src="{{ asset($alumni->image) }}" class="img-responsive" alt="">
                            </div><!-- End Course Image -->
                            <div class="course-info">
                                <h3 class="course-title"><a href="#" class="ln-tr">{{ $alumni->firstname }} {{ $alumni->lastname }}</a></h3>
                                <p class="course-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.
                                </p>
                                
                            </div>
                        </div><!-- End Course -->
                    </div><!-- End col-md-3 col-xs-6 -->
                    <div class="col-md-9 col-xs-6">
                        <div class="add-courses top-margin">
                            <img src="{{ asset('assets/img/icons/addcourse-icon.png') }}" alt="" class="fl add-courses-icon">
                            <a href="#" class="add-courses-title ln-tr">You Are an Instructor ? Add Your Courses Now !</a>
                            <p class="add-courses-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                            </p>
                        </div><!-- End Add Courses -->
                    </div>
                </div><!-- End row -->
            </div><!-- End Container -->
        </div><!-- End Latest-Courses Section Content -->
    </section><!-- End Courses Section -->

@endsection