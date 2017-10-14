@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('scripts')

@endsection

@section('content')
      
<div class="inner-head">
    <div class="container">
        <h1 class="entry-title">GALLERY</h1>
        <p class="description">
            A collection of spena gallery
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="#">Home</a></li>
                <li class="ib"><a href="{{ url('gallery') }}">Gallery</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

@foreach($images as $image)
<div class="modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            

    <div class="modal-dialog container">
        <div class="popup-content">
        

            <div class="post portfolio single">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <a href="#" class="close-modal fr" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                        </a>
                         <div class="flexslider modal-slider featured-image">


                            
                            <ul class="slides1">
                                <li class="slide-item">
                                    <div class="image">
                                        <img src="{{ asset($image->image) }}" alt="" class="img-responsive">
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="image">
                                        <img src="{{ asset($image->image) }}" alt="" class="img-responsive">
                                    </div>
                                </li>

                                {{-- <li class="slide-item">
                                    <div class="image">
                                        <img src="{{ asset($image->image) }}" alt="" class="img-responsive">
                                    </div>
                                </li> --}}
                                
                            </ul>
                            
                        </div><!-- End featured image -->
                       
                    </div><!-- End col-md-10 -->
                </div><!-- End main row -->
            </div><!-- End Single Post -->
           
        </div><!-- End Modal Content -->
          
    </div><!-- End Dialog -->
</div><!-- End Portfolio Modal -->
@endforeach

<section class="portfolio-grid latest-courses-section">
    <div class="portfolio-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 portfolio-filter">
                   
                </div><!-- end filter -->
            </div><!-- End filter row -->
            <div class="row">
                <div class="portfolio-items">
                    @foreach($images as $image)
                    <div class="col-md-4 col-sm-6 col-xs-12 nature isotope-item">
                        <div class="course project">
                            <div class="course-image">
                                <div class="details-overlay" title="Click to view">
                                    <div class="overlay-icons">
                                       
                                        <span class="place" title="Click to view">
                                            <a href="{{  $image->image }}" class="link" data-toggle="modal" data-target="#portfolio-modal"><i class="fa fa-search"></i></a>
                                        </span>
                                    </div><!-- End overlay icons -->
                                </div><!-- End Overlay -->
                                <img src="{{ asset($image->image) }}" class="img-responsive" alt="">
                            </div><!-- End Image -->
                            <div class="course-info clearfix">
                                
                                <h3 class="course-title fl">
                                    <a href="#" class="ln-tr">{{ $image->title }}</a>
                                    <span class="cat"><?= $image->description ?> </span>

                                </h3>
                            </div><!-- End info -->
                        </div><!-- End Project -->
                    </div><!-- end col-md-4 col-sm-6 col-xs-12 -->
                   @endforeach
                    
                </div><!-- end portfolio items -->
            </div><!-- end row -->
           
            {{ $images->links() }}
        </div><!-- End Container -->
    </div><!-- End Portfolio Content -->
</section><!-- End Portfolio Section -->

        

@endsection