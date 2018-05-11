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

<div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content panel">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="row row-v-10">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="/f/assets/images/brands/store_logo.jpg" alt="">
                        <h3 class="mb-20">Save 30% off New Domains Names</h3>
                        <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <a href="#" class="btn btn-link">Visit Our Store</a>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                        <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="like-report mb-10">
                            <span>Share this coupon :</span>
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
            <div class="modal-footer footer-info t-center ptb-40 prl-30">
                <h4 class="mb-15">Subscribe to Mail</h4>
                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                <form method="post" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control bg-white" placeholder="Your Email Address" required="required">
                                                <span class="input-group-btn">
                <button class="btn" type="submit">Sign Up</button>
            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
