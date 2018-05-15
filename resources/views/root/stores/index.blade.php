@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <br />
        <div class="row">
            <div class="col-sm-12  col-md-3 col-lg-2">
                <a href="{{ route('root-stores-new') }}" class="btn btn-block btn-success">New Store</a>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                @foreach($stores as $store)
                    <div class="row">
                        <div class="col-lg-5">
                            <div><h4>{{ $store->title }} <span
                                            class="label label-{{ $store->num == 0 ? 'danger' : 'success' }}">{{ $store->num }}</span>
                                </h4></div>
                            <div>{{ route('store', ['slug' => $store->slug]) }}</div>
                        </div>
                        <div class="col-lg-5">

                        </div>
                        <div class="col-lg-2 text-right">
                            <a href="{{ route('root-stores-edit', ['store_id' => $store->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-trash-o"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('root-stores-remove', ['store_id' => $store->id]) }}" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <li><a href="{{ route('root-stores-remove', ['store_id' => $store->id, 'with_posts' => 1]) }}" onclick="return confirm('Are you sure? Even Posts!?');">Delete With
                                            Posts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr/>
                @endforeach
            </div>
        </div>

    </div>
@stop