@extends("base")
@section('title')
Contact us
@endsection
@section('content')
<!-- contact area start -->
<section class="contact__area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact__info">
                    <h3>Find us here.</h3>
                    <ul class="mb-55">
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Address:</h6>
                                <span>1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                            </div>
                        </li>
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Email:</h6>
                                <span><a href="http://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3f0dcddc7d2d0c7f3d6c1d6ddc7dbd6ded69dd0dcde">[email&#160;protected]</a></span>
                            </div>
                        </li>
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-phone-alt"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Number Phone:</h6>
                                <span>(800) 123 456 789, (800) 987 654 321</span>
                            </div>
                        </li>
                    </ul>
                    <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready. Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

                    <div class="contact__social">
                        <ul>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact__form">
                    <h3>Contact Us.</h3>
                    <form action="http://themepure.net/template/outstock-prv/outstock/assets/mail.php" id="contact-form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact__input">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact__input">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <label>Subject <span class="required">*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__submit">
                                    <button type="submit" class="os-btn os-btn-black">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->

<!-- contact map area start -->
<section class="contact__map">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="contact__map-wrapper p-relative">
                    <iframe src="https://maps.google.com/maps?hl=en&amp;q=Fes+()&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact map area end -->

<!-- subscribe area start -->
<section class="subscribe__area pb-100">
    <div class="container">
        <div class="subscribe__inner subscribe__inner-2 pt-95">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="subscribe__content text-center">
                        <h2>Get Discount Info</h2>
                        <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe__form">
                            <form action="#">
                                <input type="email" placeholder="Subscribe to our newsletter...">
                                <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection