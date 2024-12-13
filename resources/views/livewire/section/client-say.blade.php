<div>
    @if($testimonials->count())
        <div class="tm-section testimonial-area tm-padding-section tm-parallax" data-overlay="9" data-bgimage="assets/images/bg/bg-image-2.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                        <div class="tm-section-title tm-section-title-white text-center">
                            <h2>{{__("WHAT CLIENTS SAY")}}</h2>
                            <span class="divider"><i class="fa fa-superpowers"></i></span>
                            <p>"{{__("This is where you are our top priority; we are with you to ensure you have the best experience.")}}"</p>
                        </div>
                    </div>
                </div>
                <div class="row testimonial-slider-active">

                    @foreach($testimonials as $testimonial)
                        <!-- Testimonial -->
                        <div class="col-lg-6">
                            <div class="tm-testimonial">
                                <div class="tm-testimonial-content">
                                    <i class="fa fa-quote-left"></i>
                                    <p>{{data_get($testimonial,'message')}}</p>
                                </div>
                                <div class="tm-testimonial-bottom">
                                    <div class="tm-testimonial-authorimage">
                                        <img src="/images/following.png" alt="author image">
                                    </div>
                                    <div class="tm-testimonial-authorcontent">
                                        <h5>{{data_get($testimonial,'customer.fullName')}}</h5>
                                        <p>{{__("Customers")}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <!--// Testimonial -->

                </div>
            </div>
        </div>

    @endif
</div>
