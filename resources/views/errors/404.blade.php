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
        <h1 class="entry-title">404</h1>
        <p class="description">
            
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="#">404</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="not-found">
                    <span class="num">404</span>
                    <span class="text">Page not found.</span>
                </div><!-- end 404 circle -->
                <div class="error-message">We're sorry, but the page you were looking for doesn't exist.</div><!-- end error msg -->
                <div class="share-icons clearfix">
                    <p class="text fl">We Are Fixing The Error At This Moment</p>
                    <div class="icons fr">
                            <a href="{{ url('/') }}" class="fb-icon ln-tr"><i class="fa fa-home"></i> Click Here to go back Home</a>
                            
                    </div>
                </div><!-- end share page -->
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end 404 section -->

@endsection