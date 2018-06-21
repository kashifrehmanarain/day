@if($banners->count()>0)
    <div class="col-xs-12">
        <div class="widget latest-deals-widget panel prl-20">
            <div class="widget-body ptb-20">
                <div class="owl-slider"
                     @if($banners->count()>1) data-loop="true" data-autoplay="true"
                     data-autoplay-timeout="10000" data-smart-speed="1000"
                     data-nav-speed="false" data-nav="true" data-xxs-items="1"
                     data-xxs-nav="true" data-xs-items="1" data-xs-nav="true"
                     data-sm-items="1" data-sm-nav="true" data-md-items="1"
                     data-md-nav="true" data-lg-items="1" data-lg-nav="true"
                     @else data-loop="false" @endif>
                    @foreach($banners as $banner)
                        @if($banner->banner_type == "custom")
                            <a target="_blank" href="{{$banner->custom_url}}">
                                <div class="latest-deals__item item">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3"
                                            data-bg-img="/upload/thumb/300/{{$banner->custom_image}}">
                                        {{--<div class="deal-about p-10 pos-a bottom-0 left-0">
                                            <h5 class="deal-title mb-10">
                                                <a href="{{$banner->custom_url}}" class="color-lighter">{{$banner->title}}</a>
                                            </h5>
                                        </div>--}}
                                    </figure>
                                </div>
                            </a>
                        @else
                            <div class="latest-deals__item item">
                                {!! $banner->html_code !!}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
