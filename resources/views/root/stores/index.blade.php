@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <br/>
        <div class="row">
            <div class="col-sm-12  col-md-3 col-lg-2">
                <div class="sidebar-nav">
                    <a href="{{ route('root-stores-new') }}" class="btn btn-block btn-success">New Store</a>
                    <br/>
                    <div>
                        <form method="GET" action="{{ route('root-stores') }}">
                            @foreach($url_params as $url_key=>$url_param)
                                <input type="hidden" name="{{ $url_key }}" value="{{ $url_param }}"/>
                            @endforeach
                            <input type="text" name="q" value="{{ $q }}" placeholder="Search Store..."
                                   class="form-control"/>
                                <input type="submit" value="Search" class="btn btn-block" >
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($stores as $store)
                            <div class="row">
                                <div class="col-lg-2">
                                    @if(!empty($store) && !empty($store->store_logo))
                                        <img src="/upload/thumb/150/{{ $store->store_logo }}">
                                    @else
                                        <img src="/f/assets/images/brands/store_logo.jpg">
                                    @endif
                                </div>
                                <div class="col-lg-8">
                                    <div><h4><a href="{{route('root-coupons',$store->id)}}">{{ $store->title }} </a><span
                                                    class="label label-{{ $store->num == 0 ? 'danger' : 'success' }}">{{ $store->num }}</span>
                                        </h4></div>
                                    <div><a target="_blank" href="{{ route('store', ['slug' => $store->slug]) }}">{{ route('store', ['slug' => $store->slug]) }}</a></div>
                                </div>
                                <div class="col-lg-2 text-right">
                                    <a href="{{ route('root-stores-edit', ['store_id' => $store->id]) }}"
                                       class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-trash-o"></i> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('root-stores-remove', ['store_id' => $store->id]) }}"
                                                   onclick="return confirm('Are you sure?');">Delete</a></li>
                                            <li>
                                                <a href="{{ route('root-stores-remove', ['store_id' => $store->id, 'with_posts' => 1]) }}"
                                                   onclick="return confirm('Are you sure? Even Posts!?');">Delete With
                                                    Posts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                    </div>
                </div>
                <div>
                    @if($stores->lastPage() > 1)
                        {!! $stores->render() !!}
                    @endif
                </div>
            </div>
        </div>

    </div>
@stop