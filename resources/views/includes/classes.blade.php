<ul class="clearfix">
	@foreach( $classes as $class )
    <li class="course-menu-item col-md-3 col-sm-4">
        <div class="single-item">
            <span class="item-icon"><i class="fa fa-tasks"></i></span>
            <a href="{{ url('classes') }}/{{ $class->slug }}" class="ln-tr link">{{ $class->name }}</a>
            <span class="courses-num">({{ $class->streams->count() }}) Streams</span>
        </div>
    </li><!-- end course menu item -->
    @endforeach
</ul><!-- end courses menu -->