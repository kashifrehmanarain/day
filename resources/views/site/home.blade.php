@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <div class="page-container ptb-10">
            <div class="container">
{{--
                <div class="section deals-header-area ptb-30">
                    <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-4 col-lg-3">
                            <aside>
                                <ul class="nav-coupon-category panel">
                                    @foreach($categories_with_count as $category)
                                        <li><a href="{{ route('category', ['slug' => $category->slug]) }}"><i class="fa {{ $category->category_icon }}"></i>{{ $category->title }}<span>{{ $category->num }}</span></a></li>
                                    @endforeach
                                    <li class="all-cat">
                                        <a class="font-14" href="{{ route('categories')}}">All Categories</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xs-12 col-md-8 col-lg-9">
                            <div class="header-deals-slider flexslider" id="header-deals-slider">
                                <ul class="slides">
                                    @foreach($slider as $image)
                                        <li>
                                            <div class="deal-single panel item">
                                                <a target="_blank" href="{{ $image->url}}" class="color-light color-h-lighter">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{ starts_with($image->image, ['http://', 'https://']) ? '' : '/upload/thumb/800/' }}{{ $image->image }}">

--}}
{{--
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
--}}{{--

                                                    <div class="deal-about p-20 pos-a bottom-0 left-0">
--}}
{{--
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
--}}{{--

                                                        <h3 class="deal-title mb-10 ">
                                                            {{$image->title}}
                                                        </h3>
                                                    </div>
                                                </figure>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
--}}

                <section class="section stores-area stores-area-v1 ptb-10">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Popular Stores</h3>
                        <a href="{{ route('stores')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                    </header>
                    <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                        @foreach($featured_stores as $store)
                        <div class="store-item t-center">
                            <a href="{{ route('store', ['slug' => $store->slug]) }}" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        @if(!empty($store) && !empty($store->store_logo))
                                        <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $store->store_logo }}" alt="{{$store->title}} Logo">
                                        @else
                                            <img src="/f/assets/images/brands/store_logo.jpg">
                                        @endif
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">{{$store->title}}</h6>
                            </a>
                        </div>
                        @endforeach
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

            </div>
        </div>


    </main>
@stop