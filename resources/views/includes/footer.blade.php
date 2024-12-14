<div class="footer fixed-footer">

    <!-- Footer Widgets Area -->
    <div class="footer-toparea tm-padding-section" data-bgimage="/assets/images/bg/footer-bg.jpg" data-overlay="2">
        <div class="container">
            <div class="row widgets footer-widgets">

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Info) -->
                    <div class="single-widget widget-info">
                        <a href="{{route("home")}}" class="widget-info-logo">
                            <img src="{{$logo_footer}}" alt="footer logo" height="60">
                        </a>
                        <p>{{$description_footer}}</p>
                        <a href="#advice" class="tm-button">{{__("Request for advice")}}<b></b></a>
                    </div>
                    <!--// Single Widget (Widget Info) -->
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget (Widget Contact) -->
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">{{__("Quick Links")}}</h5>
                        <ul>
                            <li ><a href="{{route("home")}}">{{__("Home")}}</a></li>
                            <li><a href="{{route("about-us")}}">{{__("About Us")}}</a></li>
                            <li ><a href="{{route("blog")}}">{{__("Blog")}}</a></li>
                            <li><a href="{{route("contact-us")}}">{{__("Contact Us")}}</a></li>

                        </ul>
                    </div>
                    <!--// Single Widget (Widget Contact) -->
                </div>

                <livewire:section.footer.blogs/>

                <livewire:section.footer.newsletter/>
            </div>
        </div>
    </div>
    <!--// Footer Widgets Area -->

    <!-- Footer Copyright Area -->
    <div class="footer-copyrightarea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <p class="footer-copyright">{!! $copyright !!}</p>
                </div>
                <div class="col-md-4 col-12">
                    @if($social)
                    <div class="footer-copyrightsocial">
                        <ul>
                            @foreach($social as $key=>$item)
                                <li><a href="{{$item}}" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-{{$key}}"></i></a></li>
                            @endforeach
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i--}}
{{--                                        class="fa fa-facebook-f"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i--}}
{{--                                        class="fa fa-pinterest-p"></i></a></li>--}}
                        </ul>
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <!--// Footer Copyright Area -->

</div>
