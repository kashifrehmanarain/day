@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <form action="{{ $save_url }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" value="{{ $store->title or old('title', '') }}" class="form-control" id="inputTitle">
                </div>
                @if(!empty($store))
                    <div class="well well-sm">
                        {{ route('store', ['slug' => $store->slug]) }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="inputSeoTitle">SEO Title</label>
                    <input type="text" name="seo_title" value="{{ $store->seo_title or old('seo_title', '') }}" class="form-control" id="inputSeoTitle">
                </div>
                @if(!empty($store))
                    <div class="checkbox">
                        <label>
                            <input name="update_slug" type="checkbox"> Update URL too
                        </label>
                    </div>
                    <br/>
                @endif
                <div class="form-group">
                    <label for="inputSeoDescription">SEO Description</label>
                    <textarea name="seo_description" id="inputSeoDescription" class="form-control">{{ $store->seo_description or old('seo_description', '') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputSeoKeywords">SEO Keywords</label>
                    <input type="text" name="seo_keywords" value="{{ $store->seo_keywords or old('seo_keywords', '') }}" class="form-control" id="inputSeoKeywords">
                </div>
                <div class="text-right">
                    <a href="{{ route('root-stores') }}" class="btn btn-default">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop