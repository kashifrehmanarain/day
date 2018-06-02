<section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
    <div class="container">
        <div class="row row-tb-20">
            <div class="col-sm-12 col-md-7">
                <div class="row row-tb-20">
                    <div class="footer-col col-sm-6">
                        <div class="footer-about">
                            <img class="mb-40" src="/f/assets/images/logo_light.png" width="250" alt="">
                            <p class="color-light">{!! nl2br(e(Conf::get('app.description'))) !!}</p>
                        </div>
                    </div>
                    <div class="footer-col col-sm-6">
                        <div class="footer-top-twitter">
                            <h2 class="color-lighter">Twitter Feed</h2>
                            <ul class="twitter-list">
                                <li class="single-twitter">
                                    <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in reprehenderit.</p>
                                </li>
                                <li class="single-twitter">
                                    <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id corrupti iusto cupiditate omnis.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="row row-tb-20">
                    @include('site.partials.bottom-nav')
                    <div class="footer-col col-sm-6">
                        <div class="footer-top-instagram instagram-widget">
                            <h2>Instagram Widget</h2>
                            <div class="row row-tb-5 row-rl-5">


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_01.jpg" alt="">
                                </div>


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_02.jpg" alt="">
                                </div>


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_03.jpg" alt="">
                                </div>


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_04.jpg" alt="">
                                </div>


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_05.jpg" alt="">
                                </div>


                                <div class="instagram-widget__item col-xs-4">
                                    <img src="/f/assets/images/instagram/instagram_06.jpg" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="payment-methods t-center">
                    <span><img src="/f/assets/images/icons/payment/paypal.jpg" alt=""></span>
                    <span><img src="/f/assets/images/icons/payment/visa.jpg" alt=""></span>
                    <span><img src="/f/assets/images/icons/payment/mastercard.jpg" alt=""></span>
                    <span><img src="/f/assets/images/icons/payment/discover.jpg" alt=""></span>
                    <span><img src="/f/assets/images/icons/payment/american.jpg" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="mainFooter" class="main-footer">
    <div class="container">
        <div class="row">
            <p>{{ Conf::get('app.sitename') }} © {{ date('Y') }} - {{ Conf::get('seo.default.seo_title') }}</p>
        </div>
    </div>
</footer>
