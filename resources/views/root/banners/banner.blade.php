@extends('root.main')

@section('body')

    <div class="container">
        <h1>{{ $title }}</h1>

        <form action="{{ $save_url }}" enctype="multipart/form-data" method="post">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
{{--
                    <div class="form-group">
                        <label for="inputCategory">Banner Type</label>
                        <select name="banner_type" id="inputType" class="form-control">
                            <option value="iframe" {{ (!empty($banner) && $banner->banner_type == "iframe") ? 'selected' : '' }}>iFrame</option>
                        </select>
                    </div>
--}}
                    <div class="form-group">
                        <label for="inputCategory">Banner Position</label>
                        <select name="banner_position" id="inputType" class="form-control">
                            <option value="right" {{ (!empty($banner) && $banner->banner_position == "right") ? 'selected' : '' }}>Right</option>
                            <option value="bottom" {{ (!empty($banner) && $banner->banner_position == "bottom") ? 'selected' : '' }}>Bottom</option>
                            <option value="top" {{ (!empty($banner) && $banner->banner_position == "top") ? 'selected' : '' }}>Top</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input id="inputTitle" type="text" value="{{ $banner->title or old('title') }}" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="inputCode">iFrame Code</label>
                        <textarea id="inputCode"
                                  name="iframe_code" rows="12" class="form-control">{!! $banner->iframe_code or old('iframe_code')  !!} </textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="form-group">
                        <label for="inputCategory">Store</label>
                        <select name="store_id" id="inputStore" class="form-control">
                            <option value="" selected>None</option>
                            @foreach($stores as $store)
                                <option value="{{ $store->id }}"
                                        {{ (!empty($banner) && $banner->store_id == $store->id) ? 'selected' : '' }}>
                                    {{ $store->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory">Category</label>
                        <select name="category_id" id="inputCategory" class="form-control">
                            <option value="" selected>None</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        {{ (!empty($banner) && $banner->category_id == $category->id) ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputTag">Tag</label>
                        <select name="tag_id" id="inputTag" class="form-control">
                            <option value="" selected>None</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}"
                                        {{ (!empty($banner) && $banner->tag_id == $tag->id) ? 'selected' : '' }}>
                                    {{ $tag->tag }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select name="status" id="inputStatus" class="form-control">
                            <option value="active" {{ (!empty($banner) && $banner->status == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="draft" {{ (!empty($banner) && $banner->status == 'draft') ? 'selected' : '' }}>Draft</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPublishedAt">Published Date</label>

                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text"
                                   id="inputPublishedAt"
                                   value="{{ (!empty($banner) ? $banner->published_at : date('Y-m-d H:i:s')) }}"
                                   name="published_at"
                                   class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPublishedAt">Expiry Date</label>

                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text"
                                   id="inputExpiryDate"
                                   value="{{ (!empty($banner) ? $banner->expiry_date : date('Y-m-d H:i:s')) }}"
                                   name="expiry_date"
                                   class="form-control">
                        </div>

                    </div>
                    <hr/>
                    <div>
                        <input type="submit" value="Save" class="btn btn-block btn-success" >
                    </div>
                    <div class="text-center">
                        <a href="{{ route('root-banners') }}" class="btn btn-default btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
@section('js-bottom')
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/plugins/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
    <script src="/t/site/js/posts/post.js"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-tokenfield/css/bootstrap-tokenfield.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-tokenfield/css/tokenfield-typeahead.min.css">
@stop
