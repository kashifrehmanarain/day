<div class="{{ $coupon->is_pinned == '1' ? 'post-pinned' : 'post-regular' }} post">
    <a href="{{ route('view', ['slug' => $coupon->slug]) }}">
        <img class="post-image" src="{{ starts_with($coupon->img, ['http://', 'https://']) ? '' : '/upload/' }}{{ $coupon->img }}" alt="">
    </a>
    <div class="row">
        <div class="col-lg-12">
            <div class="post-content">
                <h2 class="post-title">
                    <a href="{{ route('view', ['slug' => $coupon->slug]) }}">{!! highlight_str($coupon->title, $q) !!}</a>
                </h2>
                <p class="lead">{!! nl2br(highlight_str(strip_tags($coupon->excerpt), $q)) !!}</p>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <i class="fa fa-square"></i>
                            <a href="{{ route('category', ['slug' => $coupon->category->slug]) }}">{{ $coupon->category->title }}</a>
                        </div>
                        <div>
                            <i class="fa fa-clock-o"></i>
                            <span class="text-muted">Опубликовано:</span>
                            {{ hdate($coupon->published_at) }}
                            <small class="text-muted">({{ date('d.m.Y', strtotime($coupon->published_at)) }})</small>
                        </div>
                        <div>
                            @include('site.partials.tags-list', ['tags' => $coupon->tags])
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
