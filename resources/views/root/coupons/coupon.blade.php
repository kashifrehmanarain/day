@extends('root.main')

@section('body')

    <div class="container">
        <h1>{{ $title }}</h1>

        <form action="{{ $save_url }}" enctype="multipart/form-data" method="post">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input id="inputTitle" type="text" value="{{ $coupon->title or old('title') }}" class="form-control" name="title">
                    </div>
                    @if(!is_null($coupon))
                        <div class="well">
                            <div>
                                <span class="text-muted">URL:</span>
                                <a href="{{ route('view', ['slug' => $coupon->slug]) }}" target="_blank">
                                    {{ route('view', ['slug' => $coupon->slug]) }}
                                </a>
                            </div>
                            {{--<div>
                                <hr />
                                <div class="post-options">
                                    <a href="{{ route('view', ['slug' => $coupon->slug]) }}" target="_blank"
                                       class="brown-text">View</a>
                                    <a href="{{ route('root-coupon-edit', ['coupon_id' => $coupon->id]) }}"
                                       class="brown-text">Edit</a>
                                    @if($coupon->status == 'active')
                                        <a href="{{ route('root-coupon-to-draft', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">To Draft</a>
                                    @else
                                        <a href="{{ route('root-coupon-to-active', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">Publish</a>
                                    @endif
                                    @if($coupon->status != 'deleted')
                                        <a href="{{ route('root-coupon-to-deleted', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">Delete</a>
                                    @else
                                        <a href="{{ route('root-coupon-to-draft', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">Recover</a>
                                    @endif
                                    @if($coupon->is_pinned)
                                        <a href="{{ route('root-coupon-unpin', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">Unpin</a>
                                    @else
                                        <a href="{{ route('root-coupon-pin', ['coupon_id' => $coupon->id]) }}"
                                           class="brown-text">Pin</a>
                                    @endif
                                </div>
                            </div>--}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="inputExcerpt">Description</label>
                        <textarea id="inputExcerpt"
                                  name="excerpt" class="form-control">{!! $coupon->excerpt or old('excerpt')  !!} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory">Coupon Type</label>
                        <select name="coupon_type" id="inputType" class="form-control">
                            <option value="code" {{ (!empty($coupon) && $coupon->coupon_type == "code") ? 'selected' : '' }}>Code</option>
                            <option value="deal" {{ (!empty($coupon) && $coupon->coupon_type == "deal") ? 'selected' : '' }}>Deal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Code</label>
                        <input id="inputCodeTitle" type="text" value="{{ $coupon->code or old('code') }}" class="form-control" name="code">
                    </div>
                    <div class="form-group">
                        <label for="inputContent">URL</label>
                        <input id="inputUrlTitle" type="text" value="{{ $coupon->url or old('url') }}" class="form-control" name="url">
                    </div>

                    <div class="form-group">
                        <label for="inputSEOTitle">SEO Title</label>
                        <input id="inputSEOTitle" type="text" value="{{ $coupon->seo_title or old('seo_title') }}" class="form-control" name="seo_title">
                    </div>
                    @if(!is_null($coupon))
                        <div class="checkbox">
                            <label>
                                <input name="update_slug" type="checkbox"> Update URL too
                            </label>
                        </div>
                        <br/>
                    @endif
                    <div class="form-group">
                        <label for="inputSEODescription">SEO Description</label>
                        <textarea id="inputSEODescription" name="seo_description" class="form-control">{{ $coupon->seo_description or old('seo_description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputSEOKeywords">SEO Keywords</label>
                        <input id="inputSEOKeywords" type="text" class="form-control"
                               value="{{ $coupon->seo_keywords or old('seo_keywords') }}" name="seo_keywords">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="form-group">
                        <label for="inputCategory">Store</label>
                        <select name="store_id" id="inputStore" class="form-control">
                            @foreach($stores as $store)
                                <option value="{{ $store->id }}"
                                        {{ (!empty($coupon) && $coupon->store_id == $store->id) ? 'selected' : '' }}>
                                    {{ $store->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory">Category</label>
                        <select name="category_id" id="inputCategory" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        {{ (!empty($coupon) && $coupon->category_id == $category->id) ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                   {{-- <div class="form-group">
                        <label for="inputImg">Miniature</label>
                        @if(!empty($coupon) && !empty($coupon->img))
                            <br />
                            <img src="/upload/{{ $coupon->img }}" alt="">
                        @endif
                        <input type="file" id="inputImg" name="img" class="" >
                    </div>--}}
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select name="status" id="inputStatus" class="form-control">
                            <option value="active" {{ (!empty($coupon) && $coupon->status == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="draft" {{ (!empty($coupon) && $coupon->status == 'draft') ? 'selected' : '' }}>Draft</option>
{{--
                            <optgroup label="Additional">
                                <option value="moderation" {{ (!empty($coupon) && $coupon->status == 'moderation') ? 'selected' : '' }}>Moderation</option>
                                <option value="deleted" {{ (!empty($coupon) && $coupon->status == 'deleted') ? 'selected' : '' }}>Deleted</option>
                                <option value="refused" {{ (!empty($coupon) && $coupon->status == 'refused') ? 'selected' : '' }}>Refused</option>
                            </optgroup>
--}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPublishedAt">Published Date</label>

                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text"
                                   id="inputPublishedAt"
                                   value="{{ (!empty($coupon) ? $coupon->published_at : date('Y-m-d H:i:s')) }}"
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
                                   value="{{ (!empty($coupon) ? $coupon->expiry_date : date('Y-m-d H:i:s')) }}"
                                   name="expiry_date"
                                   class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputTags">Tags</label>
                        <input type="text"
                               id="inputTags"
                               name="tags"
                               value="{{ (!empty($coupon) ? $coupon->tags->implode('tag', ', ') : old('tags'))  }}"
                               class="form-control">

                        <div class="well well-sm tags-list">
                            <a class="btn btn-link" onclick="$('#popularTags').slideToggle(100);">Select Tags</a>
                            <div id="popularTags" style="display:none;">
                                @foreach($tags as $tag)
                                    <a href="#{{ $tag->tag }}" class="add-tag" data-tag="{{ $tag->tag }}">{{ $tag->tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="is_pinned" value="1" {{ isset($coupon->is_pinned) && $coupon->is_pinned==1 ? 'checked' : '' }}> Featured?
                        </label>
                    </div>
{{--                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ping" value="1"> Ping Blog Services
                        </label>
                    </div>
--}}
                    <hr/>
                    <div>
                        <input type="submit" value="Save" class="btn btn-block btn-success" >
                    </div>
                    <div class="text-center">
                        <a href="{{ route('root-coupons') }}" class="btn btn-default btn-block">Cancel</a>
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
    <script src="/plugins/bootstrap-file-input/js/fileinput.min.js"></script>
    <script src="/plugins/trumbowyg/trumbowyg.min.js"></script>
    <script src="/plugins/trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>
    {{--<script src="/plugins/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>--}}
    <script src="/plugins/trumbowyg/plugins/base64/trumbowyg.base64.min.js"></script>
    <script src="/t/site/js/posts/post.js"></script>

@stop

@section('css')
    <link rel="stylesheet" href="/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-tokenfield/css/bootstrap-tokenfield.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-tokenfield/css/tokenfield-typeahead.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-file-input/css/fileinput.min.css">
    <link rel="stylesheet" href="/plugins/trumbowyg/ui/trumbowyg.min.css">
    {{--<link rel="stylesheet" href="/plugins/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">--}}
@stop
