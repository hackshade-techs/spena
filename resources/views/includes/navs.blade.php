<div class="top-bar clearfix">
    <div class="container">
        <div class="fl top-social-icons">
            <ul class="clearfix">
                <li><a href="#" class="fb-icon ln-tr"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="tw-icon ln-tr"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div><!-- End Social Container -->
        <div class="fr top-contact">
            <ul class="clearfix">
                <li class="fl"><i class="fa fa-phone"></i><span class="text">Call Us: (+256) 702116696</span></li>
                <li class="fl divider"><span>&#124;</span></li>
                <li class="fl"><i class="fa fa-envelope"></i><span class="text">Email Us: <a href="mailto:johnsmith@gmail.com"> info@spena.sc.ug</a></span></li>
            </ul>
        </div><!-- End Top Contact -->
    </div>
</div><!-- End Tob Bar -->
<header class="alt">
    <div class="container">
        <div class="logo-container fl clearfix">
            <a href="#" class="ib">
                <img src="{{ asset('assets/img/transparent.png') }}" class="fl" alt="Logo" style="width:60px;height:60px;" >
                <span class="site-name" style="font-size:23px;margin-top:40px;">St.Peter's  </span><br><hr>
                <span class="site-name" style="font-size:23px;margin-top:40px;">Naalya</span>
            </a>
        </div><!-- End Logo Container -->
        <nav class="main-navigation fr">
            <ul class="clearfix">
                <li class="{{ Request::path()=='/'? 'current_page_item':'' }} parent-item">
                    <a href="{{ url('/') }}" class="ln-tr">Home</a>
                </li>
                <li class="{{ Request::path()=='about'? 'current_page_item':'' }} parent-item">
                    <a href="{{ url('spena-about-us') }}" class="ln-tr">About Us</a>
                </li>
                <li class="parent-item haschild courses-menu">
                    <a href="{{ url('spena-classes') }}" class="ln-tr">Classes</a>
                    @include('includes.classes')
                </li>
                <li class="parent-item haschild">
                    <a href="#" class="ln-tr">Staff</a>
                    <ul class="submenu">
                        <li class="sub-item"><a href="{{ url('spena-teaching-staff') }}" class="ln-tr">Teaching Staff</a></li>
                        <li class="sub-item"><a href="{{ url('spena-non-teaching-staff') }}" class="ln-tr">Non Teaching Staff</a></li>
                        
                    </ul>
                </li>

                <li class="parent-item haschild">
                    <a href="#" class="ln-tr">School</a>
                    <ul class="submenu">
                        <li class="sub-item"><a href="{{ url('spena-news') }}" class="ln-tr">News</a></li>
                        <li class="sub-item"><a href="{{ url('spena-events') }}" class="ln-tr">Events</a></li>
                        <li class="{{ Request::path()=='gallery'? 'current_page_item':'' }} parent-item">
                            <a href="{{ url('spena-gallery') }}" class="ln-tr">Gallery</a>
                        </li>
                    </ul>
                </li>

                <li class="parent-item haschild">
                    <a href="#" class="ln-tr">Alumni</a>
                    <ul class="submenu">
                        <li class="{{ Request::path()=='alumni'? 'current_page_item':'' }} sub-item"><a href="{{ url('spena-alumni') }}" class="ln-tr">Alumni</a></li>
                        <li class="{{ Request::path()=='alumni'? 'current_page_item':'' }} sub-item"><a href="{{ url('alumni-register/create') }}" class="ln-tr">Alumni Register</a></li>
                    </ul>
                </li>
               
                
                <li class="{{ Request::path()=='contact-us'? 'current_page_item':'' }} parent-item">
                    <a href="{{ url('spena-contact') }}" class="ln-tr">Contact Us</a>
                </li>
                <li class="parent-item haschild">
                    <a href="#" class="ln-tr">Resources</a>
                    <ul class="submenu">
                        <li class="sub-item"><a href="{{ url('documents') }}" class="ln-tr">Documents</a></li>
                    </ul>
                </li>
                <li class="parent-item login">
                    <a href="{{ url('payments') }}"class="ln-tr" ><span class="grad-btn">Payments</span></a>
                </li>
            </ul>
        </nav><!-- End NAV Container -->
        <div class="mobile-navigation fr">
            <a href="#" class="mobile-btn"><span></span></a>
            <div class="mobile-container"></div>
        </div><!-- end mobile navigation -->
    </div>
</header><!-- End Main Header Container -->