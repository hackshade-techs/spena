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
        <h1 class="entry-title">{{ $course->name }}</h1>
        
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="#">{{ $course->name }}</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<article class="post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="single-slider" class="alt flexslider">
                    <ul class="slides">
                        <li><div class="image"><img src="{{ asset($course->image) }}" alt="" class="img-responsive" style="max-height: 400px;"></div></li>
                    </ul><!-- End ul elements -->
                </div><!-- End Single Slider -->
            </div><!-- End col-md-12 -->
            <div class="col-md-4">
                <div class="entry-sidebar">
                    <div class="course-details">
                        <span class="entry-icon"><i class="fa fa-list"></i></span>
                        <h4 class="ib">{{ $course->name }}</h4>
                        
                        <div class="date">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <span class="text"><a href="#">{{ $course->staff->count() }} Teachers</a></span>
                        </div><!-- date icon -->
                        <div class="place">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="text"><a href="#">{{ $course->subjects->count() }} Subjects</a></span>
                        </div><!-- place icon -->
                        <div class="center">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <span class="text"><a href="#">{{ $course->streams->count() }} Streams</a></span>
                        </div><!-- center icon -->

                        <p>
                            {{ substr($course->description, 0,200)  }}
                        </p>

                        <a href="#" class="btn grad-btn orange-btn join-btn">Join Class Now</a>
                    </div><!-- End Course Details -->
                </div><!-- End Sidebar Entry -->
            </div><!-- End col-md-3 -->
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="entry clearfix">
                    <span class="entry-icon"><i class="fa fa-microphone"></i></span>
                    <h4 class="overview ib">Class description</h4>
                    <div class="content">
                        <p>
                            {{ substr($course->description, 201)  }}
                        </p>
                        
                    </div>
                    
                </div><!-- End Entry -->
            </div><!-- End col-md-12 -->
        </div><!-- End row -->
        <div class="row">
            <article class="white-bg" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="container">
                    <section class="full-section categories-section" style="padding-top: 15px; padding-bottom: 10px;">
                        <div class="section-content categories-content" style="margin-top: 0px;" style="">
                            <div class="container">
                                <div class="row">
                                     @foreach($course->staff as $courseTeacher )
                                        <div class="col-md-3 col-xs-4">
                                            <div class="cat-box">
                                                <div class="cat-image">
                                                    <img width="100%"  src="{{ asset($courseTeacher->image) }}" class="img-responsive" alt="">
                                                    <span class="cat-icon"><i class="fa fa-user"></i></span>
                                                </div><!-- End CAT Image -->
                                                <h4 class="cat-title"><a href="#" class="alumni-center" style="text-align: center;">{{ $courseTeacher->firstname }} {{ $courseTeacher->middlename }} {{ $courseTeacher->lastname }}</a></h4>
                                                <p class="courses-counter alumni-center">{{ $courseTeacher->designation->name }}</p>
                                                <p class="courses-counter alumni-center">{{ $courseTeacher->contact_one }} / {{ $courseTeacher->contact_two }}</p>
                                                
                                            </div><!-- End Category Box -->
                                        </div><!-- End col-md-3 -->
                                     @endforeach
                                </div><!-- End row -->
                            </div><!-- End container -->
                        </div><!-- End Categories Content -->
                    </section><!-- End Categories Section -->
                    
                </div><!-- End container -->
            </article><!-- End Instructors Page -->
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="entry clearfix">
                    <div>
                        <h4 class="h4-title">Subjects Studied in the Class</h4>
                        @foreach($course->subjects as $subject)
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 bg-inner">
                                <div class="date">
                                    <span class="icon"><i class="fa fa-book"></i></span>
                                    <span class="text"><a href="#">{{ $subject->name }}</a></span>
                                </div><!-- date icon -->
                            </div>
                        
                        @endforeach
                    </div>
                </div><!-- End Entry -->
            </div><!-- End col-md-12 -->
        </div><!-- End row -->
        
    </div><!-- End Container -->
</article>

<div class="clearfix"></div>




@endsection