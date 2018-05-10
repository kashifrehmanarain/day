@extends('site.master')
@section('body')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-7 col-md-8">

                        <!-- Contact Us Area -->
                        <div class="contact-area contact-area-v2 panel ptb-30 prl-20">
                            <div class="row row-tb-30">
                                <div class="col-xs-12">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&amp;z=4&amp;output=embed"></iframe>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="contact-area-col contact-info">
                                        <div class="contact-info">
                                            <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est.</p>
                                            <ul class="contact-list mb-40">
                                                <li>
                                                    <span class="icon lnr lnr-map-marker"></span>
                                                    <h5>Address</h5>
                                                    <p class="color-mid">Comre, 404 Design Street, Melbourne, Australia</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-envelope"></span>
                                                    <h5>Email</h5>
                                                    <p class="color-mid">Email@address.com</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-phone-handset"></span>
                                                    <h5>Our phone</h5>
                                                    <p class="color-mid">(+212) 584-241-654</p>
                                                </li>
                                            </ul>
                                            <ul class="social-icons social-icons--colored list-inline">
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="contact-area-col contact-form">
                                        <h3 class="t-uppercase h-title mb-20">Get in touch</h3>
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea rows="5" class="form-control" required="required"></textarea>
                                            </div>
                                            <button class="btn">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Contact Us Area -->


                    </div>
                    <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">

                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Got any questions?</h3>
                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>
                                            <a href="contact_us_01.html" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                        </div>
                                    </div>
                                    <!-- End Contact Us Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Instagram</h3>
                                        <div class="widget-body ptb-30">

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
                                    <!-- End Instagram Widget -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Subscribe Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Subscribe to mail</h3>
                                        <div class="widget-content ptb-30">

                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" placeholder="Your Email Address" required="required">
                                                    <span class="input-group-btn">
		        	<button class="btn" type="submit">Sign Up</button>
		    	</span>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- End Subscribe Widget -->
                                </div>
                                <div class="col-xs-12">

                                    <!-- Instagram Widget -->
                                    <div class="widget subscribe-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Latest tweets</h3>
                                        <div class="widget-body ptb-20">

                                            <ul class="twitter-list">
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#">@masum_rana :</a>
                                                        <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                    </p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
@stop