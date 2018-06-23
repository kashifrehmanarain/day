

<div class="coupon-single panel t-center t-sm-left">
    @if($coupon->is_pinned == '1')
    <div class="ribbon-wrapper is-hidden-xs-down">
        <div class="ribbon">Featured</div>
    </div>
    @endif
    <div class="row row-sm-cell row-tb-0 row-rl-0">
        <div class="col-sm-4">
            <figure class="p-15">
                <a href="{{ route('store', ['slug' => $coupon->store->slug]) }}">
                @if(!empty($coupon) && !empty($coupon->store->store_logo))
                <img class="store-logo" src="{{ starts_with($coupon->store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/300/' }}{{ $coupon->store->store_logo }}" alt="{{$coupon->store->title}} Logo">
                @else
                    <img src="/f/assets/images/coupons/coupon_02.jpg">
                @endif
                </a>
            </figure>
        </div>
        <!-- end col -->
        <div class="col-sm-8">
            <div class="panel-body">
                <h4 class="color-black mb-10"><a class="fw-500" href="{{ route('view', ['slug' => $coupon->slug]) }}">{!! highlight_str($coupon->title, $q) !!}</a></h4>
                <h5 class="deal-title mb-10">
                    {!! nl2br(highlight_str(strip_tags($coupon->excerpt), $q)) !!}
                </h5>
                <ul class="deal-meta list-inline mb-10">
                    <li title="Verified" class="color-green"><i class="ico lnr lnr-checkmark-circle mr-5"></i>Verifed</li>
                    <li title="Store" class="color-muted"><a href="{{ route('store', ['slug' => $coupon->store->slug]) }}"><i class="ico lnr lnr-cart mr-5"></i>{{$coupon->store->title}}</a></li>
                    @foreach($coupon->tags as $tag)
                        <li title="Tag" class="color-muted"><a href="{{ route('tag', ['slug' => $tag->slug]) }}"><i class="ico lnr lnr-tag mr-5"></i>{{$tag->tag}}</a></li>
                    @endforeach
                    <li title="Expiry" class="color-muted"><i class="ico lnr lnr-clock mr-5"></i>Expires on {{date('jS \of M Y', strtotime($coupon->expiry_date))}}</li>
                    <li title="Used" class="color-muted"><i class="ico lnr lnr-users mr-5"></i>{{$coupon->views}}</li>
                </ul>
                {{--<p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires on {{date('jS \of F Y', strtotime($coupon->expiry_date))}}</p>--}}
                @if($coupon->coupon_type == "code")
                    <div class="showcode" {{--data-toggle-class="coupon-showen" data-toggle-event="click"--}}>
                        <button id="trigger_{{$coupon->id}}" class="show-code btn btn-sm btn-block copy-button" data-toggle="modal" data-target="#coupon_{{$coupon->id}}" data-clipboard-target="#clip_{{$coupon->id}}" data-ref-url="{{$coupon->url}}" data-href="{{url()->current()}}?cp={{$coupon->id}}">Show Code</button>
                        <div class="coupon-hide" id="clip_{{$coupon->id}}">{{$coupon->code}}</div>
                    </div>
                @else
                    <div class="showcode">
                        <button id="trigger_{{$coupon->id}}" class="btn btn-sm btn-block click-button" data-toggle="modal" data-target="#coupon_{{$coupon->id}}" data-ref-url="{{$coupon->url}}" data-href="{{url()->current()}}?cp={{$coupon->id}}">Get Deal</button>
                    </div>
                @endif
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@include('site.coupons._coupon-popup', ['coupon' => $coupon])