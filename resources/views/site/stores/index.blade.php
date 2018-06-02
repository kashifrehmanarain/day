@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <section class="stores-area stores-area-v1">
                    <h3 class="mb-40 t-uppercase">View deals by stores</h3>
                    <div class="row row-rl-15 row-tb-15 t-center">
                        @foreach($stores as $store)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <a href="{{ route('store', ['slug' => $store->slug]) }}" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            @if(!empty($store) && !empty($store->store_logo))
                                                <img src="{{ starts_with($store->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $store->store_logo }}" alt="{{$store->title}} Logo">
                                            @else
                                                <img src="/f/assets/images/brands/brand_01.jpg">
                                            @endif
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">{{$store->title}}</h6>
                                </a>
                            </div>
                        @endforeach
                        {{--
                            <div class="row row-rl-15 row-tb-15 t-center">
                                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                        <a href="store_single_01.html" class="panel is-block">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div class="store-logo">
                                                    <img src="/f/assets/images/brands/brand_01.jpg" alt="">
                                                </div>
                                            </div>
                                            <h6 class="store-name ptb-10">Amazon</h6>
                                        </a>
                                    </div>
                                </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <a href="store_single_01.html" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="/f/assets/images/brands/brand_02.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">Ashford</h6>
                                </a>
                            </div>
                        --}}
                    </div>
                    <div>
                        @if($stores->lastPage() > 1)
                            {!! $stores->render() !!}
                        @endif
                    </div>
                </section>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
@stop