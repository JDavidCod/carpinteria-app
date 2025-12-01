
@if ($paginator->hasPages())
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
    <ul class="pagination_nav ul_li_right clearfix" data-aos="fade-up" data-aos-delay="300">

        {{-- Enlace anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true"><span><i class="fal fa-angle-double-left"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fal fa-angle-double-left"></i></a></li>
        @endif

        {{-- Elementos de paginación numéricos --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array de enlaces numéricos --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Enlace siguiente --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fal fa-angle-double-right"></i></a></li>
        @else
            <li class="disabled" aria-disabled="true"><span><i class="fal fa-angle-double-right"></i></span></li>
        @endif

    </ul>
</div>
@endif