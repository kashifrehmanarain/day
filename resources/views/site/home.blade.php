@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <div class="page-container ptb-10">
            <div class="container">
                <div class="section deals-header-area ptb-30">
                    <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-4 col-lg-3">
                            <aside>
                                <ul class="nav-coupon-category panel">
                                    @foreach($categories_with_count as $category)
                                        <li><a href="{{ route('category', ['slug' => $category->slug]) }}"><i class="fa {{ $category->category_icon }}"></i>{{ $category->title }}<span>{{ $category->num }}</span></a></li>
                                    @endforeach
                                    <li class="all-cat">
                                        <a class="font-14" href="#">All Categories</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xs-12 col-md-8 col-lg-9">
                            <div class="header-deals-slider flexslider" id="header-deals-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="deal-single panel item">
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/f/assets/images/deals/deal_01.jpg">
                                                <div class="label-discount top-10 right-10">-50%</div>
                                                <ul class="deal-actions top-10 left-10">
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
                                                <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                    <div class="rating mb-10">
                                                            <span class="rating-stars" data-rating="5">
                                                                <i class="fa fa-star-o star-active"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        <span class="rating-reviews color-light">
                                                                ( <span class="rating-count">241</span> Reviews )
                                                            </span>
                                                    </div>
                                                    <h3 class="deal-title mb-10 ">
                                                        <a href="deal_single.html" class="color-light color-h-lighter">The Crash Bad Instant Folding Twin Bed</a>
                                                    </h3>
                                                </div>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deal-single panel item">
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9"  data-bg-img="/f/assets/images/deals/deal_01.jpg">
                                                <div class="label-discount top-10 right-10">-30%</div>
                                                <ul class="deal-actions top-10 left-10">
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
                                                <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                    <div class="rating mb-10">
                                                            <span class="rating-stars" data-rating="5">
                                                                <i class="fa fa-star-o star-active"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        <span class="rating-reviews color-light">
                                                            ( <span class="rating-count">132</span> Reviews )
                                                            </span>
                                                    </div>
                                                    <h3 class="deal-title mb-10 ">
                                                        <a href="deal_single.html" class="color-light color-h-lighter">Western Digital USB 3.0 Hard Drives</a>
                                                    </h3>
                                                </div>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deal-single panel item">
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9"  data-bg-img="/f/assets/images/deals/deal_03.jpg">
                                                <div class="label-discount top-10 right-10">-30%</div>
                                                <ul class="deal-actions top-10 left-10">
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
                                                <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                    <div class="rating mb-10">
                                                            <span class="rating-stars" data-rating="5">
                                                                <i class="fa fa-star-o star-active"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        <span class="rating-reviews color-light">
                                                            ( <span class="rating-count">160</span> Reviews )
                                                            </span>
                                                    </div>
                                                    <h3 class="deal-title mb-10 ">
                                                        <a href="deal_single.html" class="color-light color-h-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                                                    </h3>
                                                </div>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section stores-area stores-area-v1 ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Popular Stores</h3>
                        <a href="stores_01.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                    </header>
                    <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_01.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Amazon</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_02.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Ashford</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_03.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">DELL</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_04.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Card Cash</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_05.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Finish Line</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_06.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">JC Penny</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_07.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Callaway Golf</h6>
                            </a>
                        </div>
                        <div class="store-item t-center">
                            <a href="store_single_01.html" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="/f/assets/images/brands/brand_08.jpg" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">Car Toys</h6>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="section latest-coupons-area ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Featured Deals</h3>
                        <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>

                    <div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
                        @foreach($featured_coupons as $coupon)
                            <div class="coupon-item">
                                @include('site.coupons._coupon-grid', ['coupon' => $coupon])
                            </div>
                        @endforeach
                    </div>
                    @foreach($featured_coupons as $coupon)
                        @include('site.coupons._coupon-popup', ['coupon' => $coupon])
                    @endforeach
                </section>
                <section class="section latest-deals-area ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Latest Deals</h3>
                        <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>

                    <div class="row row-masnory row-tb-20">
                        @foreach($coupons as $coupon)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                @include('site.coupons._coupon-grid', ['coupon' => $coupon])
                            </div>
                        @endforeach
                    </div>
                    @foreach($coupons as $coupon)
                        @include('site.coupons._coupon-popup', ['coupon' => $coupon])
                    @endforeach
                </section>
                <section class="section subscribe-area ptb-40 t-center">
                    <div class="newsletter-form">
                        <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                        <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                        <form method="post" action="#">
                            <div class="input-group mb-10">
                                <input type="email" class="form-control bg-white" placeholder="Email Address" required="required">
                                <span class="input-group-btn">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </span>
                            </div>
                        </form>
                        <p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
                    </div>
                </section>
            </div>
        </div>


    </main>
@stop