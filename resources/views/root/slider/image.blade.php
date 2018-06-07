@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <form action="{{ $save_url }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" value="{{ $image->title or old('title', '') }}" class="form-control" id="inputTitle">
                </div>
                <div class="form-group">
                    <label for="inputExcerpt">Description</label>
                    <textarea id="inputExcerpt"
                              name="description" class="form-control">{!! $image->description or old('description')  !!} </textarea>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Position</label>
                    <input type="text" name="sort" value="{{ $image->sort or old('sort', '') }}" class="form-control" id="inputTitle">
                </div>
                <div class="form-group">
                    <label for="inputTitle">URL</label>
                    <input type="url" name="url" value="{{ $image->url or old('url', '') }}" class="form-control" id="inputTitle">
                </div>
                <div class="form-group">
                    <label for="inputImg">Image</label>
                    @if(!empty($image) && !empty($image->image))
                        <br />
                        <img src="/upload/thumb/150/{{ $image->image }}" alt="">
                    @endif
                    <input type="file" id="inputImg" name="image" class="" >
                </div>
                <div class="text-right">
                    <a href="{{ route('root-slider-images') }}" class="btn btn-default">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop