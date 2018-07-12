<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('site.partials.seo-meta')
    @include('site.partials.seo.more-meta')
    @include('site.partials.social-meta')
    @yield('meta')
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('plugins/bootstrap/css/bootstrap-0ez.css') }}">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ elixir('t/site/css/site.css') }}">
    <link href="/custom.css" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="/{{ config('files.theme_css') }}">
    @yield('js-top')
</head>
<body style="
@if(Conf::has('appearance.bg.image'))
        background: url('/upload/{{ Conf::get('appearance.bg.image') }}')
        {{ Conf::get('appearance.bg.horizontal') }}
        {{ Conf::get('appearance.bg.vertical') }}
        {{ Conf::get('appearance.bg.repeat') }}
        {{ Conf::get('appearance.bg.is_fixed') }}
        ;
@endif
">
    @include('site.partials.social-sdk')
    @include('site.partials.seo.counters')
    @include('site.partials.header')
    {!! Notifications::byGroup('0')->toHTML() !!}
    @yield('body')
    @include('site.partials.footer')
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    {{--<script src="/plugins/flat-ui/js/flat-ui.min.js"></script>--}}
    <script src="{{ elixir('t/site/js/site.js') }}"></script>
    @yield('js-bottom')
    <script type="text/javascript">
        var vglnk = { key: '87ea49da04e35c7403c14f8c543b6f73' };

        (function(d, t) {
            var s = d.createElement(t);
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//cdn.viglink.com/api/vglnk.js';
            var r = d.getElementsByTagName(t)[0];
            r.parentNode.insertBefore(s, r);
        }(document, 'script'));
    </script>
</body>
</html>