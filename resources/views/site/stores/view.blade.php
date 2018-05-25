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