@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <form action="{{ $save_url }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inputTitle">Tag</label>
                    <input type="text" name="tag" value="{{ $tag->tag or old('tag', '') }}" class="form-control" id="inputTitle">
                </div>
                <div class="text-right">
                    <a href="{{ route('root-categories') }}" class="btn btn-default">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop