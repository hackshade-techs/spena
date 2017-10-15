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
        <h1 class="entry-title">Meet Our Alumni</h1>
        <p class="description">
            An environment that provides a foundation to achild, we believe that our Old Boys and Girls have reputed us across the country and cross borders. We warmly appreciate your reputation towards the school background.
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="{{ url('alumni') }}">Alumni</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<article class="white-bg" style="margin-top: 10px;">
    <div class="container">
        <section class="full-section categories-section" style="padding-top: 15px;">
            <div class="section-content categories-content" style="margin-top: 0px;">
                <div class="container">
                    <div class="row">
                        @include('includes.composers.alumni') 
                    </div><!-- End row -->
                </div><!-- End container -->
            </div><!-- End Categories Content -->
        </section><!-- End Categories Section -->
        
    </div><!-- End container -->
</article><!-- End Instructors Page -->



@endsection