<header id="mainHeader" class="main-header">
    <!-- Header Header -->
    <div class="header-header bg-white">
        <div class="container">
            <div class="row row-rl-0 row-tb-20 row-md-cell">
                @if(Conf::has('appearance.logo'))
                <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                    <a href="{{ route('index') }}" class="logo">
                        <img src="/upload/{{ Conf::get('appearance.logo') }}" alt="{{ Conf::get('app.sitename') }}" width="250" />
                    </a>
                </div>
                @endif
                @include('site.partials.search-form')
                {{--
                                    @include('site.partials.categories-menu')
                                    @include('site.partials.social-links')
                --}}
            </div>
        </div>
    </div>
    <!-- End Header Header -->
    <!-- Header Menu -->
    @include('site.partials.top-nav')
    <!-- End Header Menu -->
</header>