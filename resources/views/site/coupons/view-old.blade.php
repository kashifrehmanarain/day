@extends('site.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="post-body">
                    <img src="{{ starts_with($coupon->img, ['http://', 'https://']) ? '' : '/upload/' }}{{ $coupon->img }}" alt="" style="max-width: 100%;" class="post-image">
                    <article>
                        <div class=" post-content">
                            <div class="">
                                <h1 class="">{{ $coupon->title }}</h1>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="">
                                            {!! $coupon->content !!}
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    <div>
                                        <i class="fa fa-square"></i>

                                        <a href="{{ route('category', ['slug' => $coupon->category->slug]) }}">{{ $coupon->category->title }}</a>
                                    </div>
                                    <div>
                                        <i class="fa fa-clock-o"></i>
                                        Опубликовано: {{ hdate($coupon->published_at) }}
                                        <small class="text-muted">({{ date('d.m.Y', strtotime($coupon->published_at)) }})</small>
                                    </div>
                                    <div>
                                        Автор: {{ $coupon->user->name }}
                                    </div>
                                    <div>
                                        @include('site.partials.tags-list', ['tags' => $coupon->tags])
                                    </div>
                                </div>

                            </div>
                            <div class="">
                                @include('site.partials.related', ['coupon' => $coupon])
                            </div>
                        </div>
                    </article>
                    @include('site.partials.comments')
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3">
                @include('site.partials.categories-menu')
            </div>
        </div>
    </div>
@stop

@section('meta')
    <link rel="author" href="{{ $coupon->user->name or '' }}" />
@stop