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
                                        <img src="/f/assets/images/brands/store_logo.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-xs-12">
                                    <div class="store-about ptb-30 prl-10">
                                        <h3 class="mb-10">Amazon Store</h3>
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
                                        <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis at accusantium ducimus excepturi cumque ad commodi libero nihil rem voluptatibus veniam ipsa ullam esse quia quae fuga, quidem iusto.</p>
                                        <button class="btn btn-info">FOLLOW</button>
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
                                        <div class="left-splitter-body prl-20 ptb-20">
                                            <div class="row row-rl-10 row-tb-10">
                                                <div class="col-md-6 col-sm-4 col-xs-6">
                                                    <img src="/f/assets/images/products/thumb_01.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-4 col-xs-6">
                                                    <img src="/f/assets/images/products/thumb_02.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-4 col-xs-6">
                                                    <img src="/f/assets/images/products/thumb_03.jpg" alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-4 col-xs-6">
                                                    <img src="/f/assets/images/products/thumb_04.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
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
                        <!-- Coupons Grid-->
                        <section class="section coupons-area coupons-area-grid">

                            <!-- Page Control -->
                            <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                                <!-- List Control View -->
                                <ul class="list-control-view list-inline">
                                    <li><a href="deals_list.html"><i class="fa fa-bars"></i></a>
                                    </li>
                                    <li><a href="deals_grid.html"><i class="fa fa-th"></i></a>
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
                            <!-- Row -->
                            <div class="row row-masnory row-tb-20">
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
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
                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off select XPS & Alienware laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_02.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">15% off 2 select Amazon Fire cases</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">Show Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_03.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">See Sale</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_04.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">Print Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_05.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off $399+ refurbished laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">Show Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_06.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">Show Coupon</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_07.jpg" alt="">
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
                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off select XPS & Alienware laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_07">Get Coupon Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_08.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">15% off 2 select Amazon Fire cases</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_08">Show Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_09.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_09">See Sale</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_10.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_10">Print Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                            <div class="ribbon">Featured</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_11.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">10% off $399+ refurbished laptops</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_11">Show Code</button>
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
                                <div class="col-sm-6">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_12.jpg" alt="">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                    </ul>
                                                    <h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
                                                    <h5 class="deal-title mb-10">
                                                        <a href="#">There is no place like home 25% off</a>
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                    <div class="showcode">
                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_12">Show Coupon</button>
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
                            <!-- End Row -->

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
                        <!-- End Coupons Grid-->

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

                        <!-- Store Tabs Area -->
                        <div class="section store-tabs-area">
                            <div class="tabs tabs-v1">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs panel" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#deals" aria-controls="deals" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-comment mr-10"></i>Deals</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#coupons" aria-controls="coupons" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-star mr-10"></i>Coupons</a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-user mr-10"></i>Reviews</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane ptb-20 active" id="deals">
                                        <section class="section deals-area">
                                            <div class="row row-masnory row-tb-20">
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_01.jpg">
                                                            <div class="label-discount left-20 top-15">-50%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_01.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="5">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">241</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">The Crash Bad Instant Folding Twin Bed</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_02.jpg">
                                                            <div class="label-discount left-20 top-15">-30%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_02.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">132</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Western Digital USB 3.0 Hard Drives</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>42 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$150.00</span>$100.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_03.jpg">
                                                            <div class="label-discount left-20 top-15">-30%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_03.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="4">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">160</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>Australia</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>75 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_04.jpg">
                                                            <div class="label-discount left-20 top-15">-15%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_04.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="2">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">100</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Timberland Men's Thorton Waterproof Boots</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$380.00</span>$340.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_05.jpg">
                                                            <div class="label-discount left-20 top-15">-60%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_05.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">32</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">New and Refurbished Lenovo Laptops</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>65 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$700.00</span>$576.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_06.jpg">
                                                            <div class="label-discount left-20 top-15">-60%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_06.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="5">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">29</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Buying a TV Is Easy When You Know These Terms</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$250.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_07.jpg">
                                                            <div class="label-discount left-20 top-15">-50%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_01.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="5">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">241</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">The Crash Bad Instant Folding Twin Bed</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_08.jpg">
                                                            <div class="label-discount left-20 top-15">-30%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_02.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">132</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Western Digital USB 3.0 Hard Drives</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>42 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$150.00</span>$100.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_09.jpg">
                                                            <div class="label-discount left-20 top-15">-30%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_03.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="4">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">160</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>Australia</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>75 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_10.jpg">
                                                            <div class="label-discount left-20 top-15">-15%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_04.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="2">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">100</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Timberland Men's Thorton Waterproof Boots</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$380.00</span>$340.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_11.jpg">
                                                            <div class="label-discount left-20 top-15">-60%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_05.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">32</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">New and Refurbished Lenovo Laptops</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>65 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$700.00</span>$576.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <div class="deal-single panel">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_12.jpg">
                                                            <div class="label-discount left-20 top-15">-60%</div>
                                                            <ul class="deal-actions top-15 right-20">
                                                                <li class="like-deal">
                                                                        <span>
                                                            <i class="fa fa-heart"></i>
                                                        </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                        <span>
                                                            <i class="fa fa-camera"></i>
                                                        </span>
                                                                </li>
                                                            </ul>
                                                            <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span>
                                                        <i class="ico fa fa-clock-o mr-10"></i>
                                                        <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                                    </span>
                                                            </div>
                                                            <div class="deal-store-logo">
                                                                <img src="/f/assets/images/brands/brand_06.jpg" alt="">
                                                            </div>
                                                        </figure>
                                                        <div class="bg-white pt-20 pl-20 pr-15">
                                                            <div class="pr-md-10">
                                                                <div class="rating mb-10">
                                                                        <span class="rating-stars rate-allow" data-rating="5">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                                    <span class="rating-reviews">
                                                            ( <span class="rating-count">29</span> rates )
                                                                        </span>
                                                                </div>
                                                                <h3 class="deal-title mb-10">
                                                                    <a href="deal_single.html">Buying a TV Is Easy When You Know These Terms</a>
                                                                </h3>
                                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                                    <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
                                                                </ul>
                                                                <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                                            </div>
                                                            <div class="deal-price pos-r mb-15">
                                                                <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$250.00</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div role="tabpanel" class="tab-pane ptb-20" id="coupons">
                                        <section class="section coupons-area coupons-area-grid">
                                            <div class="row row-masnory row-tb-20">
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_07.jpg" alt="">
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
                                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">10% off select XPS & Alienware laptops</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_07">Get Coupon Code</button>
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
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_08.jpg" alt="">
                                                                </div>
                                                                <!-- end media -->
                                                            </div>
                                                            <!-- end col -->

                                                            <div class="col-xs-12">
                                                                <div class="panel-body">
                                                                    <ul class="deal-meta list-inline mb-10">
                                                                        <li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
                                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                                    </ul>
                                                                    <h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">15% off 2 select Amazon Fire cases</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_08">Show Code</button>
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
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_09.jpg" alt="">
                                                                </div>
                                                                <!-- end media -->
                                                            </div>
                                                            <!-- end col -->

                                                            <div class="col-xs-12">
                                                                <div class="panel-body">
                                                                    <ul class="deal-meta list-inline mb-10">
                                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                                    </ul>
                                                                    <h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_09">See Sale</button>
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
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_10.jpg" alt="">
                                                                </div>
                                                                <!-- end media -->
                                                            </div>
                                                            <!-- end col -->

                                                            <div class="col-xs-12">
                                                                <div class="panel-body">
                                                                    <ul class="deal-meta list-inline mb-10">
                                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                                    </ul>
                                                                    <h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">There is no place like home 25% off</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_10">Print Code</button>
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
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_11.jpg" alt="">
                                                                </div>
                                                                <!-- end media -->
                                                            </div>
                                                            <!-- end col -->

                                                            <div class="col-xs-12">
                                                                <div class="panel-body">
                                                                    <ul class="deal-meta list-inline mb-10">
                                                                        <li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
                                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                                    </ul>
                                                                    <h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">10% off $399+ refurbished laptops</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_11">Show Code</button>
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
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="text-center p-20">
                                                                    <img class="store-logo" src="/f/assets/images/coupons/coupon_12.jpg" alt="">
                                                                </div>
                                                                <!-- end media -->
                                                            </div>
                                                            <!-- end col -->

                                                            <div class="col-xs-12">
                                                                <div class="panel-body">
                                                                    <ul class="deal-meta list-inline mb-10">
                                                                        <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                                    </ul>
                                                                    <h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
                                                                    <h5 class="deal-title mb-10">
                                                                        <a href="#">There is no place like home 25% off</a>
                                                                    </h5>
                                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                                    <div class="showcode">
                                                                        <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_12">Show Coupon</button>
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
                                    </div>
                                    <div role="tabpanel" class="tab-pane ptb-20" id="reviews">
                                        <div class="posted-review panel p-30">
                                            <h3 class="h-title">16 Review</h3>
                                            <div class="review-single pt-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object mr-10 radius-4" src="/f/assets/images/avatars/avatar_01.jpg" width="90" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="review-wrapper clearfix">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <span class="review-holder-name h5">John Doe</span>
                                                                </li>
                                                                <li>
                                                                    <div class="rating">
                                                                            <span class="rating-stars" data-rating="5">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p class="review-date mb-5">September 9, 2016</p>
                                                            <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-single pt-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object mr-10 radius-4" src="/f/assets/images/avatars/avatar_02.jpg" width="90" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="review-wrapper clearfix">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <span class="review-holder-name h5">John Doe</span>
                                                                </li>
                                                                <li>
                                                                    <div class="rating">
                                                                            <span class="rating-stars" data-rating="2">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p class="review-date mb-5">September 9, 2016</p>
                                                            <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-single pt-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object mr-10 radius-4" src="/f/assets/images/avatars/avatar_03.jpg" width="90" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="review-wrapper clearfix">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <span class="review-holder-name h5">John Doe</span>
                                                                </li>
                                                                <li>
                                                                    <div class="rating">
                                                                            <span class="rating-stars" data-rating="3">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p class="review-date mb-5">September 9, 2016</p>
                                                            <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-single pt-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object mr-10 radius-4" src="/f/assets/images/avatars/avatar_04.jpg" width="90" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="review-wrapper clearfix">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <span class="review-holder-name h5">John Doe</span>
                                                                </li>
                                                                <li>
                                                                    <div class="rating">
                                                                            <span class="rating-stars" data-rating="4">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p class="review-date mb-5">September 9, 2016</p>
                                                            <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-single pt-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object mr-10 radius-4" src="/f/assets/images/avatars/avatar_05.jpg" width="90" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="review-wrapper clearfix">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <span class="review-holder-name h5">John Doe</span>
                                                                </li>
                                                                <li>
                                                                    <div class="rating">
                                                                            <span class="rating-stars" data-rating="5">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p class="review-date mb-5">September 9, 2016</p>
                                                            <p class="copy">Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Store Tabs Area -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
@stop