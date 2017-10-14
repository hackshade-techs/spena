@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('content')

<article class="post single fadeInDown-animation">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-content">
                <div class="row">
                    <div class="col-md-12">
                        @include('includes.success')
                        <div class="featured-image">
                            <img src="{{ asset($article->image) }}" alt="" class="img-responsive">
                        </div><!-- End featured image -->
                        <div class="entry clearfix">
                            <h3 class="single-title fl">
                                <span class="post-type-icon"><i class="fa fa-comment"></i></span>
                                <a href="#" class="ln-tr">{{ $article->title }}</a>
                            </h3><!-- End Title -->
                            <div class="meta fr pull-left">
                                <div class="date ib">
                                    <span class="icon"><i class="fa fa-clock-o"></i></span>
                                    <span class="text">{{ $article->created_at->toFormattedDateString()  }}</span>
                                </div><!-- date icon -->
                                
                                <div class="comments ib">
                                    <span class="icon"><i class="fa fa-comments"></i></span>
                                    <span class="text">Comments : <a class="ln-tr" href="#">{{ $article->comments }}</a></span>
                                </div><!-- comments icon -->
                            </div><!-- End Meta -->
                            <div class="clearfix"></div>
                            <div class="content">
                                <?= $article->content ?>
                            </div>
                            <div class="share-post clearfix">
                                <p class="text fl">Share This Article If You Liked It :)</p>
                                <div class="icons fr">
                                    <ul class="clearfix">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/home?status=" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/share?url=" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- End Entry -->
                        <div>
                            <div class="entry clearfix">
                                <div class="fb-comments" width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                            </div><!-- End Entry -->
                        </div>
                        

                        <ol class="comments-list">
                            <li class="comment haschild">
                                <div class="comment-body clearfix">
                                    <div class="avatar fl">
                                        <img src="assets/img/content/instructor-avatar-6-72x72.jpg" alt="">
                                    </div><!-- end avatar -->
                                    <div class="content">
                                        <div class="author clearfix">
                                            <div class="meta fl">
                                                <a href="#" class="name">Ibrahim</a>
                                                <span class="date">Dec 26, 2013 - 10:07 pm</span>
                                            </div>
                                            <div class="reply fr">
                                                <a href="#" class="ln-tr grad-btn">Reply</a>
                                            </div>
                                        </div><!-- end author details -->
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div><!-- end text -->
                                    </div><!-- end content -->
                                </div><!-- End main comment -->
                                <ul class="children">
                                    <li class="comment">
                                        <div class="comment-body clearfix">
                                            <div class="avatar fl">
                                                <img src="assets/img/content/instructor-avatar-2-72x72.jpg" alt="">
                                            </div><!-- end avatar -->
                                            <div class="content">
                                                <div class="author clearfix">
                                                    <div class="meta fl">
                                                        <a href="#" class="name">Begha</a>
                                                        <span class="date">Dec 26, 2013 - 10:17 pm</span>
                                                    </div>
                                                    <div class="reply fr">
                                                        <a href="#" class="ln-tr grad-btn">Reply</a>
                                                    </div>
                                                </div><!-- end author details -->
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                                </div><!-- end text -->
                                            </div><!-- end content -->
                                        </div><!-- End main comment -->
                                    </li><!-- End child comment item/tree -->
                                </ul><!-- End child comments -->
                            </li><!-- End Comment item/tree -->
                            <li class="comment">
                                <div class="comment-body clearfix">
                                    <div class="avatar fl">
                                        <img src="assets/img/content/instructor-avatar-3-72x72.jpg" alt="">
                                    </div><!-- end avatar -->
                                    <div class="content">
                                        <div class="author clearfix">
                                            <div class="meta fl">
                                                <a href="#" class="name">Ibrahim</a>
                                                <span class="date">Dec 28, 2013 - 10:17 pm</span>
                                            </div>
                                            <div class="reply fr">
                                                <a href="#" class="ln-tr grad-btn">Reply</a>
                                            </div>
                                        </div><!-- end author details -->
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div><!-- end text -->
                                    </div><!-- end content -->
                                </div><!-- End main comment -->
                            </li><!-- End 2nd comment item/tree -->
                        </ol><!-- End comments list -->
                        <div class="comment-form">
                            <div class="addcomment-title">
                                <span class="icon"><i class="fa fa-comments-o"></i></span>
                                <span class="text">Add Your Comment</span>
                            </div><!-- End Title -->
                            
                            <form method="post" action="{{ route('comment.store') }}" id="comment-form">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input">
                                            <input type="text" name="name" id="name" class="name-input" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input">
                                            <input type="email" name="email" id="email" class="email-input" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input">
                                            <textarea name="comment" id="comment-area" placeholder="Comment"></textarea>
                                            <input type="submit" id="comment-submit" class="submit-input grad-btn ln-tr" value="Send">
                                        </div>
                                    </div>
                                </div>
                            </form><!-- End form -->
                        </div><!-- End comment form -->
                    </div><!-- End col-md-12 -->
                </div><!-- End main content row -->
            </div><!-- End Main Content - LEFT -->
            <div class="col-md-4 sidebar">
                <div class="search">
                    <form action="#" id="search">
                        <input type="search" id="search" class="search-input" placeholder="Search Here ...">
                        <input type="submit" id="submit" class="submit-btn ln-tr fr" value="&#xf002;">
                    </form><!-- End Search form -->
                </div><!-- End Search bar -->
                @include('includes.composers.categories')
                
                <div class="sidebar-widget sidebar-twitter-widget">
                    <h5 class="sidebar-widget-title">Latest from Twitter</h5>
                    <div id="sidebar-tweets" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="status">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation quat.</p>
                                </div>
                                <div class="date">2 mins ago</div>
                            </li><!-- End tweet item -->
                            <li>
                                <div class="status">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                </div>
                                <div class="date">8 mins ago</div>
                            </li><!-- End tweet item -->
                        </ul><!-- End li items -->
                    </div><!-- end tweets slider -->
                </div><!-- End twitter widget -->
            </div><!-- End Sidebar - RIGHT -->
        </div><!-- End main row -->
    </div><!-- End container -->
</article><!-- End Single Article -->

@endsection

@section('scripts')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection