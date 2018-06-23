@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-md-8">
                        @include('site.coupons.coupons-area', ['coupons' => $coupons])
                    </div>
                    <div class="page-sidebar col-md-4 col-xs-12">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <!-- Banner Widegt -->
                                @include('site.partials.right-banners', ['banners' => $banners])
                                <!-- End Banner Widegt -->
                                @include('site.partials.right-coupons', ['latest_coupons' => $latest_coupons])
                                {{--<div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Trending Stores</h3>

                                        <div class="widget-body ptb-30">
                                            <div class="row row-tb-5 row-rl-5">
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_01.jpg" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_02.jpg" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_03.jpg" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_04.jpg" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_05.jpg" alt="">
                                                </div>
                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="/f/assets/images/instagram/instagram_06.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
                                </div>--}}

                                <div class="col-xs-12">
                                    <!-- Subscribe Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Subscribe to mail</h3>

                                        <div class="widget-content ptb-30">
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special
                                                Services, Updates, Offers and more!</p>

                                            <form method="post" action="">
                                                <div class="input-group">
                                                    <input type="email" class="form-control"
                                                           placeholder="Your Email Address" required="required">
                                                    <span class="input-group-btn">
                                                      <button class="btn" type="submit">Sign Up</button>
                                                      </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Subscribe Widget -->
                                </div>
                                {{--<div class="col-xs-12">
                                    <!-- Trending Stores -->
                                    <div class="widget trend-store-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Trending Stores</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object pr-10" width="90" src="/f/assets/images/brands/brand_01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="store_single_01.html">Amazon</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="4">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object pr-10" width="90" src="/f/assets/images/brands/brand_02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="store_single_01.html">Ashford</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="4">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object pr-10" width="90" src="/f/assets/images/brands/brand_03.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="store_single_01.html">DELL</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="4">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Trending Stores -->
                                </div>--}}
                                {{--<div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Latest tweets</h3>
                                        <div class="widget-body ptb-20">
                                            <ul class="twitter-list">
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
                                </div>--}}
                                {{--<div class="col-xs-12">
                                    <!-- Latest Reviews -->
                                    <div class="widget posted-reviews-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Recent Reviews</h3>
                                        <div class="widget-body ptb-30">
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-left pr-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="/f/assets/images/avatars/avatar_01.jpg" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="#">John Doe</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="3">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-left pr-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="/f/assets/images/avatars/avatar_02.jpg" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="#">John Doe</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="3">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Nullam porttitor porta augue vel iaculis. Pellentesque a pre...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-left pr-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="/f/assets/images/avatars/avatar_03.jpg" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="#">John Doe</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="3">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Ut consequat eget nulla eu ultrices. Curabitur ac pellentesq...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-left pr-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="/f/assets/images/avatars/avatar_04.jpg" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                                                        <a href="#">John Doe</a>
                                                        <span class="rating">
                                                         <span class="rating-stars" data-rating="3">
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         <i class="fa fa-star-o"></i>
                                                         </span>
                                                         </span>
                                                    </h5>
                                                    <p class="color-mid">Duis eu lectus dictum, placerat quam sed, ornare urna....</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                        </div>
                                    </div>
                                    <!-- End Latest Reviews -->
                                </div>--}}
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Got any questions?</h3>

                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">If you are having any questions, please feel free
                                                to ask.</p>
                                            <a href="contact_us_01.html" class="btn btn-block"><i
                                                        class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                        </div>
                                    </div>
                                    <!-- End Contact Us Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop