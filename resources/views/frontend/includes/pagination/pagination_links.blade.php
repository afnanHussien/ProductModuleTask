@if ($paginator->hasPages())
    <div class="pagination col-sm-7">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="fa fa-angle-double-left"></i> previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-double-left"></i> previous</a></li>
        @endif
 
        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- "Three Dots" Separator -->
            @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
            @endif
 
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
 
        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">next <i class="fa fa-angle-double-right"></i></a></li>
        @else
            <li class="disabled"><span>next <i class="fa fa-angle-double-right"></i></span></li>
        @endif
    </div>
@endif