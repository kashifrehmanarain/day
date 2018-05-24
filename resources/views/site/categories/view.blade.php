@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-sidebar col-sm-4 col-md-3">
                        <aside class="store-header-area panel t-center">
                            <div class="row">
                                <div class="col-xs-12">
                                    <figure class="pt-10 pl-10">
                                        <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/222/' }}{{ $store->store_logo }}" alt="{{$store->title}}">
                                    </figure>
                                </div>
                                <div class="col-xs-12">
                                    <div class="store-about ptb-30 prl-10">
                                        <h3 class="mb-10">{{$store->title}}</h3>
                                        <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="3">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o star-active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                            <span class="rating-reviews">
                                        ( <span class="rating-count">205</span> rates )
                                                </span>
                                        </div>
                                        <p class="mb-15">{{$store->description}}</p>
                                        <a class="btn btn-info" target="_blank" href="{{!empty($store->store_url)?$store->store_url:"#"}}">Go To Store</a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="store-splitter-left">
                                        <header class="left-splitter-header prl-10 ptb-20 bg-lighter">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h2>282</h2>
                                                    <p>Deals</p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h2>122</h2>
                                                    <p>Coupons</p>
                                                </div>
                                            </div>
                                        </header>
                                        <footer class="left-splitter-social prl-20 ptb-20">
                                            <ul class="list-inline social-icons social-icons--colored t-center">
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
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="page-content col-sm-8 col-md-9">
                        <!-- Coupons List-->
                        <section class="section coupons-area coupons-area-list">
                            <!-- Page Control -->
                            <header class="page-control panel ptb-15 prl-20 pos-r mb-30">
                                <!-- List Control View -->
                                <ul class="list-control-view list-inline">
                                    <li><a href="coupons_list.html"><i class="fa fa-bars"></i></a>
                                    </li>
                                    <li><a href="coupons_grid.html"><i class="fa fa-th"></i></a>
                                    </li>
                                </ul>
                                <!-- End List Control View -->
                                <div class="right-10 pos-tb-center">
                                    <select class="form-control input-sm">
                                        <option>SORT BY</option>
                                        <option>Newest items</option>
                                        <option>Best sellers</option>
                                        <option>Best rated</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </header>
                            <!-- End Page Control -->
                            <div class="row row-masnory row-tb-20">
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
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
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off select XPS & Alienware laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_0">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_01">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_02.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">15% off 2 select Amazon Fire cases</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_1">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_02">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_03.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_2">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_03">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_04.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_3">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_04">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_05.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off $399+ refurbished laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_4">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_05">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_06.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_5">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_06">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_07.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off select XPS & Alienware laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_0">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_07">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_08.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">15% off 2 select Amazon Fire cases</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_1">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_08">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_09.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_2">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_09">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_10.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_3">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_10">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_11.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off $399+ refurbished laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_4">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_11">
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
                                </div>
                                <div class="col-xs-12">
                                    <div class="coupon-single panel t-center t-sm-left">
                                        <div class="row row-sm-cell row-tb-0 row-rl-0">
                                            <div class="col-sm-5">
                                                <figure class="p-15">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_12.jpg" alt="">
                                                </figure>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-7">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires in 1 day 30 hours</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_5">Show Code</button>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_12">
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
                                </div>
                            </div>
                            <!-- Page Pagination -->
                            <div class="page-pagination text-center mt-30 p-10 panel">
                                <nav>
                                    <!-- Page Pagination -->
                                    <ul class="page-pagination">
                                        <li><a class="page-numbers previous" href="#">Previous</a>
                                        </li>
                                        <li><a href="#" class="page-numbers">1</a>
                                        </li>
                                        <li><span class="page-numbers current">2</span>
                                        </li>
                                        <li><a href="#" class="page-numbers">3</a>
                                        </li>
                                        <li><a href="#" class="page-numbers">4</a>
                                        </li>
                                        <li><span class="page-numbers dots">...</span>
                                        </li>
                                        <li><a href="#" class="page-numbers">20</a>
                                        </li>
                                        <li><a href="#" class="page-numbers next">Next</a>
                                        </li>
                                    </ul>
                                    <!-- End Page Pagination -->
                                </nav>
                            </div>
                            <!-- End Page Pagination -->
                        </section>
                        <!-- End Coupons List-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
@stop