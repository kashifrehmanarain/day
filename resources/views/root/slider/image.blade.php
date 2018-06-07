@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <form action="{{ $save_url }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" value="{{ $image->title or old('title', '') }}" class="form-control" id="inputTitle">
                </div>
                <div class="text-right">
                    <a href="{{ route('root-slider-images') }}" class="btn btn-default">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop