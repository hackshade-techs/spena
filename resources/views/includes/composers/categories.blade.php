
<div class="sidebar-widget cats">
    <span class="widget-icon"><i class="fa fa-folder"></i></span>
    <h5 class="sidebar-widget-title ib">Categories</h5>
    <ul class="clearfix">
	@foreach($categories as $category)
    <li><a href="{{ url('articles/categories') }}/{{ $category->slug }}" class="ln-tr">{{ $category->name }}</a></li>
    @endforeach
</ul>
</div><!-- End Categories Widget -->
<div class="sidebar-widget last-posts">
    <span class="widget-icon"><i class="fa fa-comments"></i></span>
    <h5 class="sidebar-widget-title ib">Latest Posts</h5>
    <ul class="clearfix">
    	@foreach($articles as $article)
        <li>
            <a href="{{ url('articles') }}/{{ $article->slug }}" class="ln-tr">{{ $article->title }}</a>
            <span class="date">{{ $article->created_at->toFormattedDateString() }}</span>
        </li>
        @endforeach
    </ul>
</div><!-- End Latest Posts Widget -->