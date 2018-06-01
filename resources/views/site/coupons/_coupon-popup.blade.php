<div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_{{$coupon->id}}">
    <div class="modal-dialog">
        <div class="modal-content panel">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="row row-v-10">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="{{ starts_with($coupon->store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $coupon->store->store_logo }}"
                             alt="{{$coupon->store->title}} Logo">
                        <h3 class="mb-20">{!! highlight_str($coupon->title, $q) !!}</h3>
                        <p class="color-mid">{!! nl2br(highlight_str(strip_tags($coupon->excerpt), $q)) !!}</p>
                    </div>
                    @if($coupon->coupon_type == "code")
                    <div class="col-md-10 col-md-offset-1">
                        <h6 class="color-mid t-uppercase">Below is your coupon code</h6>
                        <div class="input-group">
                            <input id="clip_{{$coupon->id}}" type="text" value="{{$coupon->code}}" class="form-control bg-white mb-10">
                            <button class="btn btn-primary copy-button" data-clipboard-target="#clip_{{$coupon->id}}" type="button">Copy Code</button>
                            <a href="{{ $coupon->url}}" target="_blank" class="btn btn-primary">Go to Store</a>
                        </div>
                    </div>
                    @else
                        <a href="{{ $coupon->url}}" target="_blank" class="btn btn-primary">Go to Store</a>
                    @endif
                </div>
            </div>
            <div class="modal-footer footer-info t-center prl-30">
                <div class="col-md-6">
                    <h4 class="mb-15">Subscribe to Mail</h4>
                    {{--<p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>--}}
                    <form method="post" action="#">
                        <div class="input-group">
                            <input type="text" class="form-control bg-white" placeholder="Your Email Address" required="required">
                            <span class="input-group-btn">
                            <button class="btn" type="submit">Sign Up</button>
                        </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-15">Share this Coupon</h4>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="like-report mb-10">
                            <ul class="list-inline social-icons social-icons--colored mt-10">
                                <li class="social-icons__item">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="social-icons__item">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="social-icons__item">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="social-icons__item">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>