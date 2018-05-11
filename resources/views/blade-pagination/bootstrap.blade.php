<!-- Page Pagination -->
<div class="page-pagination text-center mt-30 p-10 panel">
    <nav>
        <ul class="page-pagination">
            @if ($previous)
                <li><a class="page-numbers previous" href="{{ $previous }}">Previous</a></li>
            @else
                <li><a class="page-numbers previous" href="javascript:void(0)">Previous</a></li>
            @endif
            @foreach ($links as $page => $url)
                @if ($page == $current)
                    <li><span class="page-numbers current">{{ $page }}</span></li>
                @elseif($url)
                    <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                @else
                    <li><span class="page-numbers dots">...</span></li>
                @endif
            @endforeach
            @if ($next)
                <li><a href="{{ $next }}" class="page-numbers next">Next</a></li>
            @else
                <li><a class="page-numbers previous" href="javascript:void(0)">Next</a></li>
            @endif
        </ul>
    </nav>
</div>
<!-- End Page Pagination -->