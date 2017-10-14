@if ($paginator->hasPages())
    <ul class="clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled ib"><span>&laquo;</span></li>
        @else
            <li class="ib"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled ib"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active ib"><span>{{ $page }}</span></li>
                    @else
                        <li class="ib"><a href="{{ $url }}" class="ln-tr">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="ib"><a href="{{ $paginator->nextPageUrl() }}" class="ln-tr" rel="next">&raquo;</a></li>
        @else
            <li class="disabled ib"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
