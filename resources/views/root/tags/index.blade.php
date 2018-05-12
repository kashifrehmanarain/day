@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <br/>
        {{--
                <div class="well well-sm text-right">
                    <a href="{{ route('root-tags-clear-orphaned') }}" onclick="return confirm('Are you sure?');" class="btn btn-info">Clean Orphaned Tags</a>
                </div>
        --}}
        <div class="col-sm-12  col-md-3 col-lg-2">
            <a href="{{ route('root-tags-new') }}" class="btn btn-block btn-success">New Tag</a>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10">
            @foreach($tags as $tag)
                <div class="row">
                    <div class="col-lg-5">
                        <div><h4>{{ $tag->tag }} <span
                                        class="label label-{{ $tag->num == 0 ? 'danger' : 'success' }}">{{ $tag->num }}</span>
                            </h4></div>
                        {{--<div>{{ route('category', ['slug' => $category->slug]) }}</div>--}}
                    </div>
                    <div class="col-lg-5">

                    </div>
                    <div class="col-lg-2 text-right">
                        <a href="{{ route('root-tags-edit', ['tag_id' => $tag->id]) }}" class="btn btn-primary"><i
                                    class="fa fa-pencil"></i></a>

                        <a href="{{ route('root-tags-remove', ['tag_id' => $tag->id]) }}" class="btn btn-danger"
                           onclick="return confirm('Are you sure?');"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>
@stop