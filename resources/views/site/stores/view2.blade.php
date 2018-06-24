@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container store-page ptb-60">
            <div class="container">
                <section class="store-header-area panel t-xs-center t-sm-left">
                    <div class="row row-rl-10">
                        <div class="col-sm-3 col-md-3 t-center">
                            <figure class="pt-30 pb-30 pl-20">
                                @if(!empty($store) && !empty($store->store_logo))
                                    <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/300/' }}{{ $store->store_logo }}"
                                         alt="{{$store->title}} Logo">
                                @else
                                    <img src="/f/assets/images/brands/store_logo.jpg">
                                @endif
                            </figure>
                        </div>
                        <div class="col-sm-5 col-md-9">
                            <div class="store-about ptb-30">
                                <h2 class="mb-10 fw-1000">{{$store->title}} Coupons & Promo Codes</h2>

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
                                    <!-- Banner Widegt -->
                                    @include('site.partials.right-banners', ['banners' => $banners])
                                    <!-- End Banner Widegt -->
                                    @include('site.partials.right-coupons', ['latest_coupons' => $latest_coupons])
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