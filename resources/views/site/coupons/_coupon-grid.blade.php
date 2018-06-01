<div class="coupon-single panel t-center">
    @if($coupon->is_pinned == '1')
    <div class="ribbon-wrapper is-hidden-xs-down">
        <div class="ribbon">Featured</div>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center p-20">
                <img class="store-logo" src="{{ starts_with($coupon->store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/222/' }}{{ $coupon->store->store_logo }}" alt="{{$coupon->store->title}} Logo">
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
                <h4 class="color-green mb-10 t-uppercase line-clamp-1">{!! highlight_str($coupon->title, $q) !!}</h4>
                <h5 class="deal-title mb-10">
                    <a class="line-clamp-2" href="{{ route('view', ['slug' => $coupon->slug]) }}">{!! nl2br(highlight_str(strip_tags($coupon->excerpt), $q)) !!}</a>
                </h5>
                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{date('jS \of F Y', strtotime($coupon->expiry_date))}}</p>
                @if($coupon->coupon_type == "code")
                    <div class="showcode" {{--data-toggle-class="coupon-showen" data-toggle-event="click"--}}>
                        <button id="trigger_{{$coupon->id}}" class="show-code btn btn-sm btn-block copy-button" data-toggle="modal" data-target="#coupon_{{$coupon->id}}" data-clipboard-target="#clip_{{$coupon->id}}">Get Coupon Code</button>
                        <div class="coupon-hide" id="clip_{{$coupon->id}}">{{$coupon->code}}</div>
                    </div>
                @else
                    <div class="showcode">
                        <button id="trigger_{{$coupon->id}}" class="btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$coupon->id}}">Get Deal</button>
                    </div>
                @endif
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>