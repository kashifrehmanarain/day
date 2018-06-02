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
                                        @if(!empty($store) && !empty($store->store_logo))
                                            <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $store->store_logo }}" alt="{{$store->title}} Logo">
                                        @else
                                            <img src="/f/assets/images/brands/store_logo.jpg">
                                        @endif
                                    </figure>
                                </div>
                                <div class="col-xs-12">
                                    <div class="store-about ptb-30 prl-10">
                                        <h3 class="mb-10">{{$store->title}}</h3>
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
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Got any questions?</h3>
                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">If you are having any questions, please feel free
                                                to ask.</p>
                                            <a href="{{route('static-page', 'contact')}}" class="btn btn-block"><i
                                                        class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                        </div>
                                    </div>
                                    <!-- End Contact Us Widget -->
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
                                    <li><i class="fa fa-bars"></i>
                                    </li>
                                    <li><i class="fa fa-th"></i>
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
                                @foreach($coupons as $coupon)
                                    <div class="col-xs-12">
                                        @include('site.coupons._coupon-list', ['coupon' => $coupon])
                                    </div>
                                @endforeach
                            </div>
                            @if($coupons->lastPage() > 1)
                                {!! $coupons->render() !!}
                            @endif
                        </section>
                        <!-- End Coupons List-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
@stop