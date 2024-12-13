<div>
    @if($services->count())
        <div class="tm-section services-area bg-grey tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>{{__("OUR SERVICES")}}</h2>
                            <span class="divider"><i class="fa fa-superpowers"></i></span>
                            <p>{{__("We aim to provide psychological and psychiatric services to you by experienced and skilled specialists and psychiatrists.")}}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-30-reverse">

                    @foreach($services as $service)
                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                    <span class="tm-service-bgicon">
                                        <i class="{{data_get($service,'icon')}}"></i>
                                    </span>
                                <span class="tm-service-icon">
                                        <i class="{{data_get($service,'icon')}}"></i>
                                    </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">{{data_get($service,'title')}}</a></h5>
                                    <p>{{data_get($service,'description')}}</p>
                                    <a href="{{route("services",["slug"=>data_get($service,'slug')])}}" class="tm-readmore">{{__("Read More")}}</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->
                    @endforeach
                    @if(false)
                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-consulting"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-consulting"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">Business Consulting</a></h5>
                                    <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>
                                    <a href="service-details.html" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-growth"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-growth"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">Corporate Finance</a></h5>
                                    <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>
                                    <a href="service-details.html" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-planning"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-planning"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">Financial Planning</a></h5>
                                    <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>
                                    <a href="service-details.html" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-money"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-money"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">Business Growth</a></h5>
                                    <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>
                                    <a href="service-details.html" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="service-details.html">Wealth Management</a></h5>
                                    <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>
                                    <a href="service-details.html" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->
                    @endif
                </div>
            </div>
        </div>

    @endif
</div>
