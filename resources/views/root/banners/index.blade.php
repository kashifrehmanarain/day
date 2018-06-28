@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <br/>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2">
                <div class="sidebar-nav">
                    <a href="{{ route('root-banners-new') }}" class="btn btn-block btn-success">New Banner</a>
                    <br/>
                    <div>
                        <form method="GET" action="{{ route('root-banners') }}">
                            @foreach($url_params as $url_key=>$url_param)
                                <input type="hidden" name="{{ $url_key }}" value="{{ $url_param }}"/>
                            @endforeach
                            <input type="text" name="q" value="{{ $q }}" placeholder="Search Banner..."
                                   class="form-control"/>
                                <input type="submit" value="Search" class="btn btn-block" >
                        </form>
                    </div>
                    <br/>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="{{ $status == 'all' ? 'active' : '' }}">
                            <a href="{{ route('root-banners') }}">All Banners</a>
                        </li>
                        <li class="{{ $status == 'draft' ? 'active' : '' }}">
                            <a href="{{ route('root-banners', ['status' => 'draft']) }}">Drafts</a>
                        </li>
                        {{--
                                                <li class="{{ $status == 'moderation' ? 'active' : '' }}">
                                                    <a href="{{ route('root-banners', ['status' => 'moderation']) }}">Moderation</a>
                                                </li>
                                                <li class="{{ $status == 'refused' ? 'active' : '' }}">
                                                    <a href="{{ route('root-banners', ['status' => 'refused']) }}">Refused</a>
                                                </li>
                                                <li class="{{ $status == 'deleted' ? 'active' : '' }}">
                                                    <a href="{{ route('root-banners', ['status' => 'deleted']) }}">Deleted</a>
                                                </li>
                        --}}
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($banners as $banner)
                            <div class="row">
                                <div class="col-lg-5">
                                    <div><h4>{{ $banner->title }} <span
                                                    class="label label-{{ $banner->num == 0 ? 'danger' : 'success' }}">{{ $banner->num }}</span>
                                        </h4></div>
                                </div>
                                <div class="col-lg-5">
                                    {{$banner->banner_type}}
                                </div>
                                <div class="col-lg-2 text-right">
                                    <a href="{{ route('root-banner-edit', ['banner_id' => $banner->id]) }}"
                                       class="btn btn-primary"><i
                                                class="fa fa-pencil"></i></a>

                                    <a href="{{ route('root-banner-to-deleted', ['banner_id' => $banner->id]) }}"
                                       class="btn btn-danger"
                                       onclick="return confirm('Are you sure?');"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                    </div>
                </div>
                <div>
                    @if($banners->lastPage() > 1)
                        {!! $banners->render() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
