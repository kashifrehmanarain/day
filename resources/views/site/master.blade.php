<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="zxx" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]> <html lang="zxx" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]> <html lang="zxx" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="zxx" dir="ltr" class="no-js">
<!--<![endif]-->

<head>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    @include('site.partials.seo-meta')
    @include('site.partials.seo.more-meta')
{{--    @include('site.partials.social-meta')--}}
    @yield('meta')

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" href="/f/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" href="/f/assets/images/favicon/favicon.ico">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="/f/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/f/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Linearicons -->
    <link href="/f/assets/vendors/linearicons/css/linearicons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="/f/assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="/f/assets/vendors/owl-carousel/owl.theme.min.css" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="/f/assets/vendors/flexslider/flexslider.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/f/assets/css/base.css" rel="stylesheet">
    <link href="/f/assets/css/style.css" rel="stylesheet">
    <link href="/custom.css?2" rel="stylesheet">
    @yield('css')
    @yield('js-top')
</head>

<body id="body" class="wide-layout preloader-active">

<!--[if lt IE 9]>
<p class="browserupgrade alert-error">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->

<noscript>
    <div class="noscript alert-error">
        For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">
            instructions how to enable JavaScript in your web browser</a>.
    </div>
</noscript>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- PRELOADER                                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="loader-cube">
        <div class="loader-cube__item1 loader-cube__item"></div>
        <div class="loader-cube__item2 loader-cube__item"></div>
        <div class="loader-cube__item4 loader-cube__item"></div>
        <div class="loader-cube__item3 loader-cube__item"></div>
    </div>
</div>
<!-- End Preloader -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- WRAPPER                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="pageWrapper" class="page-wrapper">
    <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
    {{--@include('site.partials.social-sdk')--}}
    {{--@include('site.partials.seo.counters')--}}
    @include('site.partials.header')
    {!! Notifications::byGroup('0')->toHTML() !!}
    <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
    <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
    @yield('body')
    <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
    <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
    @include('site.partials.footer')
    <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

</div>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- END WRAPPER                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- BACK TO TOP                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="backTop" class="back-top is-hidden-sm-down">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- SCRIPTS                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

<!-- (!) Placed at the end of the document so the pages load faster -->

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Initialize jQuery library                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script src="/f/assets/js/jquery-1.12.3.min.js"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Latest compiled and minified Bootstrap    -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="/f/assets/js/bootstrap.min.js"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- JavaScript Plugins                        -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- (!) Include all compiled plugins (below), or include individual files as needed -->

<!-- Modernizer JS -->
<script src="/f/assets/vendors/modernizr/modernizr-2.6.2.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="/f/assets/vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- FlexSlider -->
<script type="text/javascript" src="/f/assets/vendors/flexslider/jquery.flexslider-min.js"></script>

<!-- Coutdown -->
<script type="text/javascript" src="/f/assets/vendors/countdown/jquery.countdown.js"></script>
<script src="/f/assets/js/clipboard.min.js"></script>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Custom Template JavaScript                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="/f/assets/js/main.js"></script>
@if(request()->get('cp'))
<script type="text/javascript">
    $( "#trigger_{{request()->get('cp')}}" ).trigger( "click" );
    $.ajax({url: "{{ route('increment', ['id' => request()->get('cp')]) }}"});
    $(".copy-button").hide();
</script>
@endif
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