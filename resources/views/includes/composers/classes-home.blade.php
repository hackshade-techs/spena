@foreach($classes as $class)
<li class="course-slide-item clearfix">
    <div class="col-md-12">
        <div class="course">
            <div class="featured-badge"><span>{{  $class->name }}</span></div>
            <div class="course-image">
                <div class="details-overlay">
                    <span class="place">
                        <i class="fa fa-bars"></i>
                        <span class="text">{{ $class->streams->count() }} Streams</span>
                    </span>
                    <span class="time">
                        <i class="fa fa-book"></i>
                        <span class="text">{{ $class->subjects->count() }} Subjects</span>
                    </span>
                </div><!-- End Course Overlay -->
                <img src="{{  $class->image }}" class="img-responsive" alt="">
            </div><!-- End Course Image -->
            <div class="course-info">
                <h3 class="course-title"><a href="{{ url('classes') }}/{{ $class->slug }}" class="ln-tr">SPENA: {{ $class->name }}</a></h3>
                <p class="course-description">
                    {{ substr($class->description, 0, 30)    }}
                </p>
                <div class="buttons" style="text-align: center;">
                    <a href="{{ url('classes') }}/{{ $class->slug }}" class="btn grad-btn orange-btn read-btn">Read More</a>
                </div>
               
            </div>
        </div><!-- End Course -->
    </div><!-- End col-md-12 -->
</li><!-- End 1st Slide -->
@endforeach
