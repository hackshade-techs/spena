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
        <h1 class="entry-title">Meet Our Instructors</h1>
        <p class="description">
           Since we are a big school, we are therefore supported by anumber of employees and of these are the non teaching staff that help us fulfill other objectives of our school.
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="{{ url('non-teaching-staff') }}">Non Teaching Staff</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<article class="white-bg" style="margin-top: 10px;">
    <div class="container">
        <section class="full-section categories-section" style="padding-top: 15px;">
            <div class="section-content categories-content" style="margin-top: 0px;">
                <div class="container">
                    <div class="row">
                        @include('includes.composers.non-teaching-staff') 
                    </div><!-- End row -->
                </div><!-- End container -->
            </div><!-- End Categories Content -->
        </section><!-- End Categories Section -->
        
    </div><!-- End container -->
</article><!-- End Instructors Page -->

@endsection