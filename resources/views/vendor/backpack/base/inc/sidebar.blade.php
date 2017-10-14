@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('user.png') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('blogger'))
          <li class="treeview">
              <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/comment') }}"><i class="fa fa-comment"></i> <span>Comments</span></a></li>
              </ul>
          </li>
          
          @endif

          @hasrole('admin')
          <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/contacts') }}"><i class="fa fa-phone"></i> <span>Contact Feedback</span></a></li>
          @endhasrole

          @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('teacher'))
          <li class="treeview">
            <a href="#">
              <i class="fa fa-university"></i> <span>School</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              @endif
              @hasrole('admin')
              <li class="treeview">
                <a href="#"><i class="fa fa-cube"></i> Classes
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/klass') }}"><i class="fa fa-cube"></i> <span>Classes</span></a></li>
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/stream') }}"><i class="fa fa-list"></i> <span>Streams</span></a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#"><i class="fa fa-users"></i> Staff
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/designation') }}"><i class="fa fa-clone"></i> <span>Designation  </span></a></li>
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/staffcategory') }}"><i class="fa fa-bars"></i> <span>Category</span></a></li>
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/staff') }}"><i class="fa fa-users"></i> <span>Staff</span></a></li>
                </ul>
              </li>
              @endhasrole

              @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('teacher'))
              <li class="treeview">
                <a href="#"><i class="fa fa-file-text"></i> Documents
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/documenttype') }}"><i class="fa fa-list"></i> <span>Document Type </span></a></li>
                  <li><a href="{{ url(config('backpack.base.route_prefix').'/document') }}"><i class="fa fa-file-text"></i> <span>Documents </span></a></li>
                </ul>
              </li>
              @endif

              @hasrole('admin')
              <li><a href="{{ url(config('backpack.base.route_prefix').'/subject') }}"><i class="fa fa-book"></i> Subjects</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/alumni') }}"><i class="fa fa-user-times"></i> Alumni</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/studentlife') }}"><i class="fa fa-paw"></i> <span>Student Life  </span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/testimonial') }}"><i class="fa fa-file"></i> <span>Testimonials  </span></a></li>
              
              @endhasrole
            </ul>
          </li>

          @hasrole('admin')
          <li class="treeview">
            <a href="#"><i class="fa fa-calendar"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/eventcategory') }}"><i class="fa fa-bars"></i> <span>Category</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/event') }}"><i class="fa fa-calendar"></i> <span>Events</span></a></li>

            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-file-photo-o"></i> <span>Gallery</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/gallerycategory') }}"><i class="fa fa-bars"></i> <span>Albums</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/gallery') }}"><i class="fa fa-file-photo-o"></i> <span>Photos</span></a></li>
            </ul>
          </li>
          
          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>
          <!-- categories-->

          <!-- end of categories-->

          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li>

          @endhasrole

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
