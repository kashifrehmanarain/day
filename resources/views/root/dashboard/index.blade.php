@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Logged in as
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><span class="text-muted">Name: </span> <span>{{ auth()->user()->name }}</span></li>
                            <li><span class="text-muted">Registered: </span> <span>{{ auth()->user()->created_at }}</span></li>
                            <li><span class="text-muted">Your IP: </span> <span>{{ Request::ip() }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('root-coupons') }}">Coupons</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                                <span class="text-muted"><a href="{{ route('root-coupons') }}">Active</a>:</span>
                                <span class="label label-success">{{ $coupons_active }}</span>
                            </li>
                            <li>
                                <span class="text-muted">
                                    <a href="{{ route('root-coupons', ['status' => 'moderation']) }}">Moderation</a>:</span>
                                <span class="label label-{{ ($coupons_moderation > 0) ? 'danger' : 'success' }}">{{ $coupons_moderation }}</span>
                            </li>
                            <li>
                                <span class="text-muted">
                                    <a href="{{ route('root-coupons', ['status' => 'draft']) }}">Draft</a>:</span>
                                <span class="label label-success">{{ $coupons_draft }}</span>
                            </li>
                            <li><span class="text-muted">Total:</span> <span class="label label-success">{{ $coupons_total }}</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('root-users') }}">Users</a>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><span class="text-muted">Active:</span> <span class="label label-success">{{ $users_active }}</span></li>
                            <li><span class="text-muted">Inactive:</span> <span class="label label-success">{{ $users_inactive }}</span></li>
                            <li><span class="text-muted">Total:</span> <span class="label label-success">{{ $users_total }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{ route('root-coupons') }}">Latest Coupons</a></div>
                        <ul class="list-group">
                            @foreach($latest_coupons as $latest)
                                <li class="list-group-item">
                                    <a href="{{ route('root-coupon-edit', ['coupon_id' => $latest->id]) }}" class="badge">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{{ route('view', ['slug' => $latest->slug]) }}" target="_blank">
                                        {{ $latest->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{ route('root-coupons') }}">Popular Coupons</a></div>
                        <ul class="list-group">
                            @foreach($popular_coupons as $popular)
                                <li class="list-group-item">
                                    <a href="{{ route('root-coupon-edit', ['coupon_id' => $popular->id]) }}" class="badge">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <span class="label label-danger">{{ $popular->views }}</span>
                                    <a href="{{ route('view', ['slug' => $popular->slug]) }}" target="_blank">
                                        {{ $popular->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>

    </div>
@stop