<section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
    <div class="container">
        <div class="row row-tb-20">
            <div class="col-sm-12 col-md-6">
                <div class="row row-tb-20">
                    @include('site.partials.bottom-nav')
                    @include('site.partials.bottom-stores')
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="footer-col">
                    <div class="footer-links">
                        <h2 class="color-lighter">Subscribe to mail</h2>
                        <div class="!newsletter-form">
                            <h4 class="mb-20 color-lighter">Sign up for our weekly email newsletter</h4>
                            {{--<p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>--}}
                            <form method="get" action="">
                                <div class="input-group mb-10">
                                    <input type="email" class="form-control bg-white" placeholder="Email Address" required="required">
                                <span class="input-group-btn">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <p class="color-muted"><small>We’ll never share your email address with any third-party.</small> </p>
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
