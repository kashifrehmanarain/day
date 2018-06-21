@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container store-page ptb-60">
            <div class="container">
                <section class="store-header-area panel t-xs-center t-sm-left">
                    <div class="row row-rl-10">
                        <div class="col-sm-3 col-md-4 t-center">
                            <figure class="pt-30 pb-30">
                                @if(!empty($store) && !empty($store->store_logo))
                                    <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/300/' }}{{ $store->store_logo }}"
                                         alt="{{$store->title}} Logo">
                                @else
                                    <img src="/f/assets/images/brands/store_logo.jpg">
                                @endif
                            </figure>
                        </div>
                        <div class="col-sm-5 col-md-8">
                            <div class="store-about ptb-30">
                                <h3 class="mb-10">{{$store->title}}</h3>
                                <p class="mb-15">{{$store->description}}</p>
                                <div class="col-md-4 mb-15 pl-0">
                                    <a class="btn btn-info" target="_blank"
                                       href="{{!empty($store->store_url)?$store->store_url:"#"}}">Go To Store</a>
                                </div>
                                <div class="col-md-8 mt-5 mb-15">
                                    <ul class="list-inline social-icons social-icons--colored">
                                        @if(!empty($store->facebook_url))
                                            <li class="social-icons__item">
                                                <a target="_blank" href="{{$store->facebook_url}}"><i
                                                            class="fa fa-facebook"></i></a>
                                            </li>
                                        @endif

                                        @if(!empty($store->twitter_url))
                                            <li class="social-icons__item">
                                                <a target="_blank" href="{{$store->twitter_url}}"><i
                                                            class="fa fa-twitter"></i></a>
                                            </li>
                                        @endif

                                        @if(!empty($store->google_url))
                                            <li class="social-icons__item">
                                                <a target="_blank" href="{{$store->google_url}}"><i
                                                            class="fa fa-google-plus"></i></a>
                                            </li>
                                        @endif

                                        @if(!empty($store->pinterest_url))
                                            <li class="social-icons__item">
                                                <a target="_blank" href="{{$store->pinterest_url}}"><i
                                                            class="fa fa-pinterest"></i></a>
                                            </li>
                                        @endif

                                        @if(!empty($store->instagram_url))
                                            <li class="social-icons__item">
                                                <a target="_blank" href="{{$store->instagram_url}}"><i
                                                            class="fa fa-instagram"></i></a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section deals-area ptb-30">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-md-8">
                            @include('site.coupons.coupons-area', ['coupons' => $coupons])
                        </div>
                        <div class="page-sidebar col-md-4 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    @if($banners->count()>0)
                                        <div class="col-xs-12">
                                            <!-- Banner Widegt -->
                                            <div class="widget latest-deals-widget panel prl-20">
                                                <div class="widget-body ptb-20">
                                                    <div class="owl-slider"
                                                         @if($banners->count()>1) data-loop="true" data-autoplay="true"
                                                         data-autoplay-timeout="10000" data-smart-speed="1000"
                                                         data-nav-speed="false" data-nav="true" data-xxs-items="1"
                                                         data-xxs-nav="true" data-xs-items="1" data-xs-nav="true"
                                                         data-sm-items="1" data-sm-nav="true" data-md-items="1"
                                                         data-md-nav="true" data-lg-items="1" data-lg-nav="true"
                                                         @else data-loop="false" @endif>
                                                        @foreach($banners as $banner)
                                                            @if($banner->banner_type == "custom")
                                                                <a target="_blank" href="{{$banner->custom_url}}">
                                                                    <div class="latest-deals__item item">
                                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3"
                                                                                data-bg-img="/upload/thumb/300/{{$banner->custom_image}}">
                                                                            {{--<div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                                <h5 class="deal-title mb-10">
                                                                                    <a href="{{$banner->custom_url}}" class="color-lighter">{{$banner->title}}</a>
                                                                                </h5>
                                                                            </div>--}}
                                                                        </figure>
                                                                    </div>
                                                                </a>
                                                            @else
                                                                <div class="latest-deals__item item">
                                                                    {!! $banner->html_code !!}
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Banner Widegt -->
                                        </div>
                                    @endif
                                    {{--<div class="col-xs-12">
                                        <!-- Best Rated Deals -->
                                        <div class="widget best-rated-deals panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Best Rated Deals</h3>
                                            <div class="widget-body ptb-30">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object"
                                                                 src="/f/assets/images/deals/thumb_01.jpg" alt="Thumb"
                                                                 width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                                                            <a href="#">Aenean ut orci vel massa</a>
                                                        </h6>
                                                        <div class="mb-5">
    <span class="rating">
 <span class="rating-stars" data-rating="4">
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 </span>
    </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span
                                                                    class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object"
                                                                 src="/f/assets/images/deals/thumb_02.jpg" alt="Thumb"
                                                                 width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                                                            <a href="#">Aenean ut orci vel massa</a>
                                                        </h6>
                                                        <div class="mb-5">
    <span class="rating">
 <span class="rating-stars" data-rating="4">
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 </span>
    </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span
                                                                    class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object"
                                                                 src="/f/assets/images/deals/thumb_03.jpg" alt="Thumb"
                                                                 width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                                                            <a href="#">Aenean ut orci vel massa</a>
                                                        </h6>
                                                        <div class="mb-5">
    <span class="rating">
 <span class="rating-stars" data-rating="4">
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 </span>
    </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span
                                                                    class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object"
                                                                 src="/f/assets/images/deals/thumb_04.jpg" alt="Thumb"
                                                                 width="80">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-5">
                                                            <a href="#">Aenean ut orci vel massa</a>
                                                        </h6>
                                                        <div class="mb-5">
    <span class="rating">
 <span class="rating-stars" data-rating="4">
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 <i class="fa fa-star-o"></i>
 </span>
    </span>
                                                        </div>
                                                        <h4 class="price font-16">$60.00 <span
                                                                    class="price-sale color-muted">$200.00</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Best Rated Deals -->
                                    </div>--}}
                                    <div class="col-xs-12">
                                        <!-- Subscribe Widget -->
                                        <div class="widget subscribe-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Subscribe to mail</h3>
                                            <div class="widget-content ptb-30">
                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special
                                                    Services, Updates, Offers and more!</p>
                                                <form method="post" action="#">
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
                                    <div class="col-xs-12">
                                        <!-- Contact Us Widget -->
                                        <div class="widget contact-us-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Got any questions?</h3>
                                            <div class="widget-body ptb-30">
                                                <p class="mb-20 color-mid">If you are having any questions, please feel
                                                    free to ask.</p>
                                                <a href="contact_us_01.html" class="btn btn-block"><i
                                                            class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a
                                                    Line</a>
                                            </div>
                                        </div>
                                        <!-- End Contact Us Widget -->
                                    </div>
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
@stop