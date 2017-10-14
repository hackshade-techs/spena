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
        <h1 class="entry-title">Blog</h1>
        <p class="description">
           Have the latest news in and out of SPENA campus that is treanding you can't keep an eye off.
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{url('/')}}">Home</a></li>
                <li class="ib current-page"><a href="{{url('/news')}}">Blog </a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<section class="blog three-col">
    <div class="container">
        <div class="row">
            @include('includes.composers.news')
            
        </div><!-- End row -->
    </div><!-- End container -->
</section><!-- End Blog 1 Listview -->

@endsection