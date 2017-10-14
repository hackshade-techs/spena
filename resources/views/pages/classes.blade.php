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
                    <h1 class="entry-title">Self Developmental Classes</h1>
                    <p class="description">
                        At SPENA we provide your child what the world requires with a structured curriculum.
                    </p>
                    <div class="breadcrumb">
                        <ul class="clearfix">
                            <li class="ib"><a href="#">Home</a></li>
                            <li class="ib current-page"><a href="#">Classes</a></li>
                        </ul>
                    </div>
                </div><!-- End container -->
            </div><!-- End Inner Page Head -->

            <div class="clearfix"></div>

            <section class="full-section latest-courses-section no-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-courses top-margin">
                                <img src="assets/img/icons/addcourse-icon.png" alt="" class="fl add-courses-icon">
                                <a href="#" class="add-courses-title ln-tr">Are you a Parent? See alist of classes and the associated subjects we teach at SPENA !</a>
                                <p class="add-courses-description">
                                   Education never ends in class because we believe in innovations and discovery that our teachers provide to students.
                                </p>
                            </div><!-- End Add Courses -->
                        </div>
                    </div><!-- End row -->
                </div>
                <div class="section-content latest-courses-content ">
                    <div class="container">
                        <div class="row">
                            @include('includes.composers.classes')
                            
                            
                        </div><!-- End row -->
                    </div><!-- End Container -->
                </div><!-- End Latest-Courses Section Content -->
            </section><!-- End Courses Section -->
@endsection