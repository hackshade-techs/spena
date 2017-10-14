@foreach($staffs as $staff)
    @if($staff->staffcategory->name == 'Non Teaching Staff')
        <div class="col-md-3 col-xs-4">
            <div class="cat-box">
                <div class="cat-image">
                    <img width="100%"  src="{{ $staff->image }}" class="img-responsive" alt="">
                    <span class="cat-icon"><i class="fa fa-user"></i></span>
                </div><!-- End CAT Image -->
                <h4 class="cat-title"><a href="#" class="alumni-center" style="text-align: center;">{{ $staff->firstname }} {{ $staff->middlename }} {{ $staff->lastname }}</a></h4>
                <p class="courses-counter alumni-center">{{ $staff->designation->name }}</p>
                <p class="courses-counter alumni-center">{{ $staff->contact_one }} / {{ $staff->contact_two }}</p>
                
            </div><!-- End Category Box -->
        </div><!-- End col-md-3 -->
    @endif
@endforeach

<div class="col-md-12 pagination">
        {{ $staffs->links() }}
</div><!-- End Pagination -->
           