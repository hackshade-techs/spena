@foreach($classes as $class)
<div class="col-md-4 col-xs-6">
    <div class="course">
        <div class="course-image">
            <div class="details-overlay">
                <span class="place">
                    <i class="fa fa-list"></i>
                    <span class="text">{{ $class->name }}</span>
                </span>
                <span class="time">
                    <i class="fa fa-bars"></i>
                    <span class="text">{{ $class->streams->count() }} Streams</span>
                </span>
                <span class="place">
                    <i class="fa fa-book"></i>
                    <span class="text">{{ $class->subjects->count() }} Subjects</span>
                </span>
            </div><!-- End Course Overlay -->
            <img src="{{ $class->image }}" class="img-responsive" alt="">
        </div><!-- End Course Image -->
        <div class="course-info">
            <h3 class="course-title"><a href="{{ url('classes') }}/{{ $class->slug }}" class="ln-tr">{{ $class->name }}</a></h3>
            <p class="course-description">
                {{ substr($class->description, 0, 80) }} ...
            </p>
            <div class="buttons">
                <a href="{{ url('classes') }}/{{ $class->slug }}" class="btn grad-btn orange-btn read-btn">Read More</a>
            
            </div>
        </div>
    </div><!-- End Course -->
</div><!-- End col-md-3 col-xs-6 -->
@endforeach