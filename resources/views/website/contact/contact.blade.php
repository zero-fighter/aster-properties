@extends('master.front.master')

@section('title')
    Contact
@endsection

@section('body')

<!-- =======================================
    ==Start banner section==
=======================================-->
<section class="banner-section contact-banner top-margin">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h4 class="fw-500 color-ff">Contact Us</h4>
                    <p class="color-ff">Welcome to beauty lab, where you can relax and enjoy life.</p>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#">home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- =======================================
    ==End banner section==
=======================================-->


<!-- =======================================
    ==Start Contact-info section==
=======================================-->
<section class="contact-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="color-72 fw-500 pb-10">Our Location</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc.</p>
                </div>
            </div>
        </div>
        <!--/row-->

        <div class="row">
            <div class="col-lg-5">
                <div class="contact-number">
                    <h5 class="title color-d5 mb-30 pos-relative fw-500">Contact Info</h5>
                    <address>
                        <p class="address"><i class="fa fa-home"></i><span>Address:</span> 121 King St, Melbourne Vic 3000, Australia.</p>
                        <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> +66 1800-111-333</p>
                        <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="#">info@beautylab.com</a></p>
                        <p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>
                    </address>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-map">
                    <div id="map" class="mapHome1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================================
    ==End Contact-info section==
=======================================-->


<!-- =======================================
    ==Start get in touch section==
=======================================-->
<section class="getin-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="get-in">
                    <h5 class="title color-d5 mb-30 pos-relative fw-500">Get In Touch</h5>

                    <!-- new start -->
                    <form action="#" method="post" class="clearfix">
                        <div class="form-group">
                            <input type="text" name="name" value="" placeholder="Your Name">
                            <input type="email" name="email" value="" placeholder="Your Email" required>
                            <input type="text" name="subject" value="" placeholder="Subject" required>
                        </div>
                        <textarea name="message" rows="4" placeholder="Your Message"></textarea>
                        <button type="submit" class="send-msg" name="submit">send message</button>
                    </form>
                    <!-- new end -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="consultant-wrapper">
                    <h5 class="title color-d5 mb-30 pos-relative fw-500">Our Experts Consultant</h5>
                    <div class="single-consultant">
                        <img src="{{asset('/')}}images/a1.jpg" alt="consultant">
                        <div class="content">
                            <a href="#" class="fw-500 roboto color-72">Nicky Cruse</a>
                            <p>Email: nicky@beautylab.com</p>
                            <p>Skype: beautylab.support</p>
                        </div>
                    </div>

                    <div class="single-consultant">
                        <img src="{{asset('/')}}images/a2.jpg" alt="consultant">
                        <div class="content">
                            <a href="#" class="fw-500 roboto color-72">Micky Bruse</a>
                            <p>Email: nicky@beautylab.com</p>
                            <p>Skype: beautylab.support</p>
                        </div>
                    </div>
                    <!--/single consultant-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================================
    ==End get in touch section==
=======================================-->


<!-- =======================================
        ==Start call to action section==
=======================================-->
<section class="cta-section booking-cta-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                    <a href="#">Book A Session Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================================
        ==End call to action section==
=======================================-->
@endsection
