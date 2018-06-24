@if($latest_coupons->count() > 0)
    <div class="col-xs-12">
        <!-- Best Rated Deals -->
        <div class="widget best-rated-deals panel pt-20 prl-20">
            <h3 class="widget-title h-title">Popular Deals & Coupons</h3>

            <div class="widget-body ptb-30">
                @foreach($latest_coupons as $coupon)
                    <div class="media">
                        <div class="media-left">
                            <a href="{{ route('store', ['slug' => $coupon->store->slug]) }}">
                                @if(!empty($coupon->store->store_logo))
                                    <img class="media-object" src="{{ starts_with($coupon->store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $coupon->store->store_logo }}" alt="{{$coupon->store->title}} Logo" width="80">
                                @else
                                    <img class="media-object"
                                         src="/f/assets/images/deals/thumb_01.jpg" alt="Thumb"
                                         width="80">
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-5">
                                <a class="fw-500 line-clamp-1" href="{{ route('view', ['slug' => $coupon->slug]) }}">{{$coupon->title}}</a>
                            </h5>
                            <h6 class="mb-5 line-clamp-2">
                                {{$coupon->title}}
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Best Rated Deals -->
    </div>
@endif