<div class="coupon-single panel t-center">
    @if($coupon->is_pinned == '1')
    <div class="ribbon-wrapper is-hidden-xs-down">
        <div class="ribbon">Featured</div>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center p-20">
                <a href="{{ route('store', ['slug' => $coupon->store->slug]) }}">
                @if(!empty($coupon) && !empty($coupon->store->store_logo))
                    <img class="store-logo" src="{{ starts_with($coupon->store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/300/' }}{{ $coupon->store->store_logo }}" alt="{{$coupon->store->title}} Logo">
                @else
                    <img src="/f/assets/images/coupons/coupon_02.jpg">
                @endif
                </a>
            </div>
            <!-- end media -->
        </div>
        <!-- end col -->

        <div class="col-xs-12">
            <div class="panel-body">
                <ul class="deal-meta list-inline mb-10">
                    @if(Auth::check() && Auth::User()->hasRole('admin'))
                        <li title="Edit"><a target="_blank" href="{{route('root-coupon-edit', $coupon->id)}}"><i class="ico lnr lnr-pencil mr-5"></i>Edit</a></li>
                    @endif
                    <li><i class="ico lnr lnr-checkmark-circle mr-5"></i>Verifed</li>
                    <li><a href="{{ route('store', ['slug' => $coupon->store->slug]) }}"><i class="ico lnr lnr-cart mr-5"></i>{{str_limit($coupon->store->title, 8)}}</a></li>
                    {{--<li><i class="ico lnr lnr-users mr-5"></i>125 Used</li>--}}
                </ul>
                <h4 class="color-black mb-10 line-clamp-1"><a class="fw-700" href="{{ route('view', ['slug' => $coupon->slug]) }}">{!! highlight_str($coupon->title, $q) !!}</a></h4>
                <p class="deal-title mb-10 line-clamp-2">
                    {!! nl2br(highlight_str(strip_tags($coupon->excerpt), $q)) !!}
                </p>
                <p class="mb-15 mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{date('jS \of M Y', strtotime($coupon->expiry_date))}}</p>
                @if($coupon->coupon_type == "code")
                    <div class="showcode" {{--data-toggle-class="coupon-showen" data-toggle-event="click"--}}>
                        <button id="trigger_{{$coupon->id}}" class="show-code btn btn-sm btn-block copy-button" data-toggle="modal" data-target="#coupon_{{$coupon->id}}" data-clipboard-target="#clip_{{$coupon->id}}" data-ref-url="{{$coupon->url}}" data-href="{{url()->current()}}?cp={{$coupon->id}}">Get Coupon Code</button>
                        <div class="coupon-hide" id="clip_{{$coupon->id}}">{{$coupon->code}}</div>
                    </div>
                @else
                    <div class="showcode">
                        <button id="trigger_{{$coupon->id}}" class="btn btn-sm btn-block click-button" data-toggle="modal" data-target="#coupon_{{$coupon->id}}" data-ref-url="{{$coupon->url}}" data-href="{{url()->current()}}?cp={{$coupon->id}}" data-id="{{$coupon->id}}">Get Deal</button>
                    </div>
                @endif
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>