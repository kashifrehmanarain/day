<section class="section coupons-area coupons-area-list">
    <!-- Page Control -->
{{--
    <header class="page-control panel ptb-15 prl-20 pos-r mb-30">
        <!-- List Control View -->
        <ul class="list-control-view list-inline">
            <li><a href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-th"></i></a>
            </li>
        </ul>
        <!-- End List Control View -->
        <div class="right-10 pos-tb-center">
            <select class="form-control input-sm">
                <option>SORT BY</option>
                <option>Newest items</option>
                <option>Best sellers</option>
                <option>Best rated</option>
            </select>
        </div>
    </header>
--}}
    <!-- End Page Control -->
    <div class="row row-masnory row-tb-20">
        @foreach($coupons as $coupon)
            <div class="col-xs-12 pb-0">
                @include('site.coupons._coupon-list', ['coupon' => $coupon])
            </div>
        @endforeach
    </div>
    @if($coupons->lastPage() > 1)
        {!! $coupons->appends(['q' => $q])->render() !!}
    @endif

    @if($unpopular_coupons->count() > 0)
    <!-- unpopular coupons -->
    <h3 class="h-title">Unpopular Coupons</h3>
    <div class="row row-masnory row-tb-20">
        @foreach($unpopular_coupons as $unpopular)
            <div class="col-xs-12">
                @include('site.coupons._coupon-list', ['coupon' => $unpopular])
            </div>
        @endforeach
    </div>
    @endif
</section>