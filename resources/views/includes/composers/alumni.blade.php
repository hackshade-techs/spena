@foreach($alumnis as $alumni)
@if($alumni->status == 'active')
<div class="col-md-3 col-xs-4">
    <div class="cat-box">
        <div class="cat-image">
            <img width="100%" style="max-height: 148px;" src="{{ $alumni->image }}" class="img-responsive" alt="">
            <span class="cat-icon"><i class="fa fa-user"></i></span>
        </div><!-- End CAT Image -->
        <h4 class="cat-title"><a href="{{ route('alumni-register.show', $alumni->id) }}" class="alumni-center" style="text-align: center;">{{ $alumni->firstname }} {{ $alumni->lastname }}</a></h4>
        <p class="courses-counter alumni-center">{{ $alumni->occupation }}</p>
        <div class="buttons" style="text-align: center;">
            <a href="{{ route('alumni-register.show', $alumni->id) }}" class="btn grad-btn orange-btn read-btn">View Details of alumnus</a>
        </div>
    </div><!-- End Category Box -->
</div><!-- End col-md-3 -->
@endif
@endforeach

<div class="col-md-12 pagination">
        {{ $alumnis->links() }}
</div><!-- End Pagination -->
