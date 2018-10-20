@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-20">
            <div class="container">
                <section class="stores-area stores-area-v2">
                    <h3 class="mb-40 t-uppercase">View Deals by Categories</h3>
                    <div class="letters-toolbar p-10 panel mb-40">
                        @foreach($categories as $key => $category)
                            <span><a href="#{{$key}}">{{$key}}</a></span>
                        @endforeach
                    </div>
                    @foreach($categories as $key => $category)
                        <div class="stores-cat panel mb-40" id="{{$key}}">
                        <h3 class="stores-cat-header">{{$key}}</h3>
                        <ul class="row stores-cat-body">
                            @foreach($category as $single)
                                <li class="col-sm-4">
                                    <ul>
                                        <li><a href="{{ route('category', ['slug' => $single->slug]) }}">{{$single->title}}</a></li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
@stop