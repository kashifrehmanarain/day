@if($top_stores->count() > 0)
    <div class="footer-col col-sm-7">
        <div class="footer-top-instagram instagram-widget">
            <h2 class="color-lighter">Top Stores</h2>
            <div class="row row-tb-5 row-rl-5">
                @foreach($top_stores as $tstore)
                <div class="instagram-widget__item col-xs-3">
                    <a href="{{ route('store', ['slug' => $tstore->slug]) }}">
                        @if(!empty($tstore) && !empty($tstore->store_logo))
                            <img src="{{ starts_with($tstore->store_logo, ['http://', 'https://']) ? '' : '/upload/thumb/150/' }}{{ $tstore->store_logo }}" alt="{{$tstore->title}} Logo">
                        @else
                            <img src="/f/assets/images/instagram/instagram_01.jpg" alt="Not Available">
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
