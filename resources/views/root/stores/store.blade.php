@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div>
            <form action="{{ $save_url }}" method="POST" enctype="multipart/form-data">
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
                    <label for="inputExcerpt">Description</label>
                    <textarea id="inputExcerpt"
                              name="description" class="form-control">{!! $store->description or old('description')  !!} </textarea>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Store URL</label>
                    <input type="url" name="store_url" value="{{ $store->store_url or old('store_url', '') }}" class="form-control" id="inputTitle">
                </div>
                 <div class="form-group">
                     <label for="inputImg">Store Logo</label>
                     @if(!empty($store) && !empty($store->store_logo))
                         <br />
                         <img src="/upload/thumb/222/{{ $store->store_logo }}" alt="">
                     @endif
                     <input type="file" id="inputImg" name="store_logo" class="" >
                 </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_pinned" value="1" {{ isset($store->is_pinned) && $store->is_pinned==1 ? 'checked' : '' }}> Featured?
                    </label>
                </div>

                <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="active" {{ (!empty($store) && $store->status == 'active') ? 'selected' : '' }}>Active</option>
                        <option value="deactive" {{ (!empty($store) && $store->status == 'deactive') ? 'selected' : '' }}>Deactive</option>
                    </select>
                </div>

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
                <div class="form-group">
                    <label for="inputFacebookUrl">Facebook</label>
                    <input type="url" name="facebook_url" value="{{ $store->facebook_url or old('facebook_url', '') }}" class="form-control" id="inputFacebookUrl">
                </div>
                <div class="form-group">
                    <label for="TwitterUrl">Twitter</label>
                    <input type="url" name="twitter_url" value="{{ $store->twitter_url or old('twitter_url', '') }}" class="form-control" id="TwitterUrl">
                </div>
                <div class="form-group">
                    <label for="GoogleUrl">Google</label>
                    <input type="url" name="google_url" value="{{ $store->google_url or old('google_url', '') }}" class="form-control" id="GoogleUrl">
                </div>
                <div class="form-group">
                    <label for="InstagramUrl">Instagram</label>
                    <input type="url" name="instagram_url" value="{{ $store->instagram_url or old('instagram_url', '') }}" class="form-control" id="InstagramUrl">
                </div>
                <div class="form-group">
                    <label for="PinterestUrl">Pinterest</label>
                    <input type="url" name="pinterest_url" value="{{ $store->pinterest_url or old('pinterest_url', '') }}" class="form-control" id="PinterestUrl">
                </div>
                <div class="text-right">
                    <a href="{{ route('root-stores') }}" class="btn btn-default">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop