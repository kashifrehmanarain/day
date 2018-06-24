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
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop