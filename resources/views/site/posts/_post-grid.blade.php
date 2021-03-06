<div class="coupon-single panel t-center">
    @if($post->is_pinned == '1')
    <div class="ribbon-wrapper is-hidden-xs-down">
        <div class="ribbon">Featured</div>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center p-20">
                <img class="store-logo" src="/f/assets/images/coupons/coupon_01.jpg" alt="">
            </div>
            <!-- end media -->
        </div>
        <!-- end col -->

        <div class="col-xs-12">
            <div class="panel-body">
                <ul class="deal-meta list-inline mb-10">
                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                </ul>
                <h4 class="color-green mb-10 t-uppercase line-clamp-1">{!! highlight_str($post->title, $q) !!}</h4>
                <h5 class="deal-title mb-10">
                    <a class="line-clamp-2" href="{{ route('view', ['slug' => $post->slug]) }}">{!! nl2br(highlight_str(strip_tags($post->excerpt), $q)) !!}</a>
                </h5>
                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                <div class="showcode">
                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$post->id}}">Get Coupon Code</button>
                    <div class="coupon-hide">X455-17GT-OL58</div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>