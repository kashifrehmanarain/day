<div class="coupon-single panel t-center t-sm-left">
    @if($post->is_pinned == '1')
    <div class="ribbon-wrapper is-hidden-xs-down">
        <div class="ribbon">Featured</div>
    </div>
    @endif
    <div class="row row-sm-cell row-tb-0 row-rl-0">
        <div class="col-sm-5">
            <figure class="p-15">
                <img class="store-logo" src="/f/assets/images/coupons/coupon_01.jpg" alt="">
            </figure>
        </div>
        <!-- end col -->
        <div class="col-sm-7">
            <div class="panel-body">
                <ul class="deal-meta list-inline mb-10">
                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                </ul>
                <h4 class="color-green mb-10 t-uppercase line-clamp-1">{!! highlight_str($post->title, $q) !!}</h4>
                <h5 class="deal-title mb-10">
                    <a class="line-clamp-2" href="{{ route('view', ['slug' => $post->slug]) }}">{!! highlight_str($post->excerpt, $q) !!}</a>
                </h5>
                <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                <div class="showcode">
                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$post->id}}">Show Code</button>
                    <div class="coupon-hide">X455-17GT-OL58</div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@include('site.posts._post-popup', ['post' => $post])