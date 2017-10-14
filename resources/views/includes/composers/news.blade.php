@foreach($articles as $article)
<div class="col-md-4 col-sm-6" style="min-height: 500px;">
    <div class="blogpost clearfix ">
        <div class="blogpost-image">
            <img src="{{ asset($article->image) }}" class="img-responsive" alt="">
            <div class="meta fl">
                <div class="date ib">
                    <span class="icon"><i class="fa fa-clock-o"></i></span>
                    <span class="text">{{ $article->created_at->toFormattedDateString()  }}</span>
                </div><!-- date icon -->
                
                <div class="comments ib">
                    <span class="icon"><i class="fa fa-comments"></i></span>
                    <span class="text">Comments : <a class="ln-tr" href="{{ url('articles') }}/{{ $article->slug }}">22</a></span>
                </div><!-- comments icon -->
            </div><!-- End Meta -->
        </div><!-- End Post Image -->
        <div class="blogpost-info clearfix">
            <h3 class="blogpost-title">
                <span class="post-type-icon"><i class="fa fa-comment"></i></span>
                <a href="{{ url('articles') }}/{{ $article->slug }}" class="ln-tr">{{ substr($article->title, 0, 25) }}...</a>
            </h3>
            <p class="blogpost-description">
                <?=  substr($article->content, 0, 120) ?> @if ( strlen($article->content))
                   .... 
                @endif
            </p>
            <div class="buttons fr">
                <a href="{{ url('articles') }}/{{ $article->slug }}" class="btn grad-btn orange-btn read-btn">Read More</a>
            </div>
        </div>
    </div><!-- End post -->
</div><!-- End col-md-4 col-sm-6 -->
@endforeach

<div class="col-md-12 pagination">
    {{ $articles->links() }}
</div><!-- End Pagination -->
