@extends('site.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row" data-equalizer>
                    @foreach($coupons as $coupon)
                        @include('site.coupons._coupon', ['coupon' => $coupon])
                    @endforeach
                </div>
                <div class="text-center">
                    @if($coupons->lastPage() > 1)
                        {!! $coupons->render() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('js-bottom')

@stop