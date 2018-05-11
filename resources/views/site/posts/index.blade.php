@extends('site.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row" data-equalizer>
                    @foreach($posts as $post)
                        @include('site.posts._post', ['post' => $post])
                    @endforeach
                </div>
                <div class="text-center">
                    @if($posts->lastPage() > 1)
                        {!! $posts->render() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('js-bottom')

@stop