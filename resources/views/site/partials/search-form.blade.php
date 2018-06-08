<div class="header-search col-md-9">
    <div class="row row-tb-10 ">
        <div class="col-sm-8">
            <form class="search-form" action="{{ route('search') }}" method="get">
                <div class="input-group">
                    <input type="text" name="q" class="form-control input-lg search-input" placeholder="Search stores, coupons & deals..." value="{{isset($q)?$q:''}}" required="required">
                    <div class="input-group-btn">
                        <div class="input-group">
                            {{--<select class="form-control input-lg search-select">
                                <option>Stores</option>
                                <option>Deals</option>
                                <option>Coupons</option>
                            </select>--}}
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-lg btn-search btn-block">
                                    <i class="fa fa-search font-16"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
