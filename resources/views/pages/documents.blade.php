@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('content') 

				<br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 basic-slider-box">
                            <div class="blog-posts">
                                <h6 class="head-title">Spena Documents</h6>
                                <div class="basic-slider flexslider">
                                    <ul class="lides">
                                    <br>
                                    @include('includes.success')

                                    	<!-- start of  resource slide item-->
                                    	@foreach($documents as $document)
                                        <li class="post-slide-item">

                                            <div class="post clearfix">
                                                <div class="image-post fl">
                                                    <img src="assets/img/content/posts-slider-img-1-172x126.jpg" alt="">
                                                    <div class="post-date">
                                                        <span class="day">{{ $document->id }}</span>
                                                        <span class="month">Doc</span>
                                                    </div>
                                                </div><!-- End Post Image/Date -->
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="#" class="ln-tr">{{ $document->title }}</a></h3>
                                                    <div class="meta">
                                                        <div class="author ib">
                                                            <span class="author-icon"><i class="fa fa-user"></i></span>
                                                            <span>Posted By : </span><a href="#" class="ln-tr">Admin</a>
                                                        </div><!-- End Author -->
                                                       
                                                    </div><!-- End Meta -->
                                                    <p class="post-description">
                                                        <?=  $document->description ?>
                                                    </p>

                                                    <a href="download/{{ $document->file }}" class="read-more ln-tr">Download Resource</a><br>
                                                    <span>{{ asset($document->file) }}</span>
                                                </div><!-- End Post Content -->
                                            </div><!-- End 1st Post -->

                                            

                                        </li>
                                        @endforeach
                                        <!-- End 1st Resource Slide Item -->

                                    </ul><!-- End ul Items -->
                                </div><!-- End Posts Slider -->
                                <!-- pagination of documents-->
                                <center>{{ $documents->links() }}</center>
                                <!-- eNd of document pagination-->
                            </div><!-- End Blog Posts/Latest News -->
                        </div><!-- end latest news slider -->


                        <div class="col-md-6">
                            <div id="accordion-container" class="accordion">
                                <h6 class="head-title">How to access the documents</h6>
                                <h4 class="accordion-header ln-tr">What Documents are here?</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        This page contains documens that have content of the sylabus at St Peter's sss Naalya.
                                    </p>
                                </div><!-- End 1st Item -->
                                <h4 class="accordion-header ln-tr">Why Should Download it?</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        If you want to go an extra mile and read the things that are meant to be taught in class or any related field, it is the best option to read some of the resources in this page.
                                    </p>
                                </div><!-- End 2nd Item -->
                                <h4 class="accordion-header ln-tr">Who uploads these documents</h4> 
                                <div class="accordion-content"> 
                                    <p>
                                        These documents in this page are uploaded by the Teaching staff, and every document uploaded has been verified by the top level academic department of spena
                                    </p>
                                </div><!-- End 3rd Item -->
                            </div><!-- End Accordion Container -->
                        </div><!-- end accordion -->
                    </div><!-- end Latest News/Accordion row -->
                </div><!-- end Latest News/Accordion container -->
<br><br>

@endsection