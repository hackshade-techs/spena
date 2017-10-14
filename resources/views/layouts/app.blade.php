@include('includes.header')
<div id="entire">
    @include('includes.navs')

    @if(Request::path()=='/')
    @include('includes.slider')
    @endif

    <div class="clearfix"></div>

    @yield('content')

    <div class="clearfix"></div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget about-widget">
                        <h6 class="widget-title">About Spena</h6>
                        <p class="about-text">
                            The school has a complete brass band unit whose members are full time students. We hold an annual cultural day featuring music, dance and drama inter-house competitions. Games and sports include football, Rugby, Basketball, Volleyball name it. 
                        </p>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#" class="ln-tr">About Us</a></li>
                                <li><a href="#" class="ln-tr">Proffesors</a></li>
                                <li><a href="#" class="ln-tr">Contact Us</a></li>
                            </ul>
                        </div><!-- End Footer Links -->
                    </div><!-- End About Widget -->
                </div><!-- End col-md3 -->
                <div class="col-md-3">
                    <div class="widget twitter-widget">
                        <h6 class="widget-title">Latest Tweets</h6>
                        <div id="tweets-slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@innocents</a> i love this school, .
                                        <div class="date">Dec. 2, 2017</div>
                                    </div><!-- End Single Tweet -->
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@cindy</a> information i got from this school has helped me alot.
                                        <div class="date">May. 6, 2017</div>
                                    </div><!-- End Single Tweet -->
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@brian</a> Best school i have seen,.
                                        <div class="date">Dec. 6, 2014</div>
                                        
                                    </div><!-- End Single Tweet -->
                                </li><!-- End 1st Tweet Slide Item -->
                                <li>
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@matovu</a> i like it that i got a first grade in this.
                                        <div class="date">Jan. 1, 2017</div>
                                    </div><!-- End Single Tweet -->
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@brian</a> Best school i have seen,.
                                        <div class="date">Dec. 6, 2014</div>

                                    </div><!-- End Single Tweet -->
                                    <div class="tweet">
                                        <a href="#" class="ln-tr">@brian</a> Best school i have seen,.
                                        <div class="date">Dec. 6, 2014</div>
                                        
                                    </div><!-- End Single Tweet -->
                                </li><!-- End 2nd Tweet Slide Item -->

                            </ul><!-- End ul Items -->
                        </div><!-- End Tweets Slider -->
                    </div><!-- End Twitter Widget -->
                </div><!-- End col-md3 -->
                <div class="col-md-4">
                    <div class="widget courses-widget">
                        <h6 class="widget-title">Latest Subjects</h6>
                        <div id="footer-courses-slider" class="flexslider">
                            <ul class="slides">
                                <li class="clearfix">
                                    <div class="course-icon fl">
                                        <span class="icon grad-btn"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End Course Icon -->
                                    <div class="course-info">
                                        <h4 class="footer-course-title"><a href="#" class="ln-tr">Biology</a></h4>
                                        <p class="footer-course-description">We are introducing a new sylabus of biology,</p>
                                        <span class="course-date">Dec 8, 2017</span>
                                    </div><!-- End Course Info -->
                                    <div class="course-icon fl">
                                        <span class="icon"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End Course Icon -->
                                    <div class="course-info">
                                        <h4 class="footer-course-title"><a href="#" class="ln-tr">information Technology</a></h4>
                                        <p class="footer-course-description">We provide our students with  ICT resources</p>
                                        <span class="course-date">Dec 8, 2015</span>
                                    </div><!-- End Course Info -->
                                </li><!-- End 1st Slide Item -->
                                <li class="clearfix">
                                    <div class="course-icon fl">
                                        <span class="icon grad-btn"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End Course Icon -->
                                    <div class="course-info">
                                        <h4 class="footer-course-title"><a href="#" class="ln-tr">Geography</a></h4>
                                        <p class="footer-course-description">We have Geography tours that we are introducing on the campus.</p>
                                        <span class="course-date">Dec 8, 2015</span>
                                    </div><!-- End Course Info -->
                                    <div class="course-icon fl">
                                        <span class="icon"><i class="fa fa-bookmark"></i></span>
                                    </div><!-- End Course Icon -->
                                    <div class="course-info">
                                        <h4 class="footer-course-title"><a href="#" class="ln-tr">Technical Drawing</a></h4>
                                        <p class="footer-course-description">Technical drawing is a new trending subject we are introducing in the campus</p>
                                        <span class="course-date">Dec 8, 2015</span>
                                    </div><!-- End Course Info -->
                                </li><!-- End 2nd Slide Item -->
                            </ul><!-- End ul Items -->
                        </div><!-- End Footer Scourses Slider -->
                    </div><!-- End Courses Widget -->
                </div><!-- End col-md4 -->
                <div class="col-md-2">
                    <div class="widget links-widget">
                        <h6 class="widget-title">Quick Links</h6>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#" class="ln-tr">Home</a></li>
                                <li><a href="#" class="ln-tr">About</a></li>
                                <li><a href="#" class="ln-tr">Contact</a></li>
                                <li><a href="#" class="ln-tr">subjects</a></li>
                                <li><a href="#" class="ln-tr">Gallery</a></li>
                                <li><a href="#" class="ln-tr">Teachers</a></li>
                                <li><a href="#" class="ln-tr">Proffesors</a></li>
                            </ul>
                        </div><!-- End Footer Links -->
                    </div><!-- End Links Widget -->
                </div><!-- End col-md2 -->
            </div>
        </div>
        <div id="bottom">
            <div class="container">
                <div class="fl copyright">
                    <p>All Rights Reserved &copy; Developed | By <a target="_blank" href="http://iseada.com/" class="ln-tr">Hackshade</a> & <a target="_blank" href="#" class="ln-tr">Techs</a></p>
                </div><!-- End Copyright -->
                <div class="fr footer-social-icons">
                    <ul class="clearfix">
                        <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gp-icon ln-tr"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="in-icon ln-tr"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="yt-icon ln-tr"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#" class="rss-icon ln-tr"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div><!-- End Social Media Icons -->
            </div><!-- End container -->
        </div><!-- End Bottom Footer -->
    </footer><!-- End Footer -->
</div><!-- End Entire Wrap -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog container">
        <div class="popup-content">
            <div class="login-page">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-form">
                            <div class="login-title">
                                <span class="icon"><i class="fa fa-group"></i></span>
                                <span class="text">Login Area</span>
                                <a href="#" class="close-modal fr" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </a>
                            </div><!-- End Title -->
                            <form method="post" action="#" id="login-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input">
                                            <input type="text" name="email" id="login_username" class="username-input" placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input">
                                            <input type="password" name="password" id="login_password" class="password-input" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input clearfix">
                                            <input type="submit" id="login_submit" class="submit-input grad-btn ln-tr" value="Login">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 clearfix">
                                        <div class="custom-checkbox fl">
                                            <input name="rember" type="checkbox" id="login_remember" class="checkbox-input" checked>
                                            <label for="login_remember">Remember Password</label>
                                        </div>
                                    </div><!-- end remember -->
                                    <div class="col-md-6 col-sm-6 clearfix">
                                        <div class="forgot fr">
                                            <a href="#" class="new-user">Create New Account</a> / <a href="#" class="reset">Forget Password ?</a>
                                        </div>
                                    </div><!-- end forgot password -->
                                </div><!-- end row -->
                            </form><!-- End form -->
                        </div><!-- end login form -->
                        
                    </div><!-- end col-md-12 -->
                </div><!-- end row -->
            </div><!-- End Login Page -->
        </div><!-- End Modal Content -->
    </div><!-- End Dialog -->
</div><!-- End Login Modal -->



@include('includes.footer')