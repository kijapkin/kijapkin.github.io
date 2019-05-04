@if ($paginator->hasPages())
<div class="paginations-wrap">
    <div class="container">
        <nav class="paginations">
            <ul class="navigation_pages">
                 @if ($paginator->onFirstPage())
                    <li>
                        <a href="#" rel="pre">
                            <img src="{{ asset('/images/nav_pointer.svg') }}" alt="">
                        </a>
                    </li>
                 @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="pre">
                            <img src="{{ asset('/images/nav_pointer.svg') }}" alt="">
                        </a>
                    </li>          
                 @endif

                 @foreach ($elements as $element)
                    @if (is_string($element))
                        <li><span>{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li data-n="{{ $page }}" class="active"><a href="#">{{ $page }}</a></li>
                            @else
                                <li data-n="{{ $page }}"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif

                    @if ($paginator->hasMorePages())
                        <li data-n="">
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                                <img src="{{ asset('/images/nav_pointer.svg') }}" alt="">
                            </a>
                        </li>
                    @else
                        <li data-n="">
                            <a href="#" rel="next">
                                <img src="{{ asset('/images/nav_pointer.svg') }}" alt="">
                            </a>
                        </li>
                    @endif
                 @endforeach
            </ul>
        </nav>
    </div>
</div>
@endif