<div class="tm-section service-details-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-service-details sticky-sidebar">
                    <img class="tm-service-details-image" src="{{data_get($service,'image')}}" alt="{{__("OUR SERVICES").data_get($service,'title')}}">
                    <h2>{{data_get($service,'title')}}</h2>
                    {!! $service->body !!}
{{--                   <blockquote>--}}
{{--                        <p>Nulla omnis nulla rerum. Et architecto dolorem unde. In non molestiae vel autem iste. Architecto et eum beatae facilis. Illum aut non consequuntur reprehenderit velit sequi quia.</p>--}}
{{--                    </blockquote>--}}
{{--                    <ul class="stylish-list">--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Eum dolor atque quisquam qui voluptate necessitatibus tempore.</li>--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Alias quidem non explicabo delectus totam dolores odit.</li>--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Et laboriosam magni animi dignissimos.</li>--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Adipisci dolorem minus quas voluptate sapiente velit unde veritatis.</li>--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Perferendis nihil veritatis.</li>--}}
{{--                        <li><i class="fa fa-hand-o-right"></i> Et reiciendis iure blanditiis quas sed dolore.</li>--}}
{{--                    </ul>--}}
                    @if($service->faqs)
                    <div id="service-acc" class="tm-accordion pt-2">
                        @foreach($service->faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="service-acc-heading{{data_get($faq,'id')}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#service-acc-collapse{{data_get($faq,'id')}}" aria-expanded="true" aria-controls="service-acc-collapse{{data_get($faq,'id')}}">
                                        {{data_get($faq,'question')}}
                                    </button>
                                </h5>
                            </div>
                            <div id="service-acc-collapse{{data_get($faq,'id')}}" class="collapse show " aria-labelledby="service-acc-heading{{data_get($faq,'id')}}" data-parent="#service-acc">
                                <div class="card-body">
                                    <p >{{data_get($faq,'answer')}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        @endif
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="widgets sidebar-widgets sticky-sidebar">

                    <!-- Single Widget -->
                    <div class="single-widget widget-serviceitems">
                        <h5 class="widget-title">{{__("Services")}}</h5>
                        <ul>
                            @foreach($services as $item)
                            <li class="{{$item->slug == $service->slug?"active":""}}"><a href="{{route("services",["slug"=>data_get($service,'slug')])}}">{{data_get($service,'title')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-contact">
                        <h5 class="widget-title">{{__("Contact Us")}}</h5>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>{{$address}}</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p><a href="mailto://{{$email}}">{{$email}}</a></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p><a href="tel://{{$telephone}}">{{$telephone}}</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--// Single Widget -->

                </div>
            </div>
        </div>
    </div>
</div>



