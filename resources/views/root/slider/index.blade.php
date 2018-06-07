@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <br/>
        <div class="row">
            <div class="col-sm-12  col-md-3 col-lg-2">
                <a href="{{ route('root-slider-images-new') }}" class="btn btn-block btn-success">New Image</a>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($slider as $image)
                            <div class="row">
                                <div class="col-lg-2">
                                    @if(!empty($image->image))
                                        <img src="/upload/thumb/150/{{ $image->image }}">
                                    @endif
                                </div>
                                <div class="col-lg-8">
                                    <div><h4>{{ $image->title }}</h4></div>
                                </div>
                                <div class="col-lg-2 text-right">
                                    <a href="{{ route('root-slider-images-edit', ['image_id' => $image->id]) }}"
                                       class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a onclick="return confirm('Are you sure?');"
                                       href="{{ route('root-slider-images-remove', ['image_id' => $image->id]) }}"
                                       class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop