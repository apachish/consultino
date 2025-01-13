<div class="header sticky-header">

    <!-- Header Top Area -->
    <div class="header-toparea">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="header-topinfo">
                        <ul>
                            <li><a href="tel://{{$telephone}}"><i class="fa fa-phone"></i> {{$telephone}}</a></li>
                            <li><a href="mailto://{{$email}}"><i class="fa fa-envelope-o"></i>
                                    {{$email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="header-topinfo text-right">
                        <ul>
                            <li><i class="fa fa-clock-o"></i> {{$working_hours}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Top Area -->

    <!-- Header Bottom Area -->
    <div class="header-bottomarea">
        <div class="container">
            <div class="header-bottominner">
                <div class="header-logo">
                    <a href="{{route("home")}}">
                        <img src="{{$logo}}" alt="deconsult logo">
                    </a>
                </div>
                <nav class="tm-navigation">
                    <ul>
                        <li ><a href="{{route("home")}}">{{__("Home")}}</a></li>
                        <li><a href="{{route("about-us")}}">{{__("About Us")}}</a></li>
                        <li ><a href="{{route("blog")}}">{{__("Blog")}}</a></li>
                        <li><a href="{{route("contact-us")}}">{{__("Contact Us")}}</a></li>
                    </ul>
                </nav>
                <div class="header-icons">
                    <ul>
                        <li>
                            <button title="Search" class="header-searchtrigger"><i class="fa fa-search"></i></button>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <a href="cart.html" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a>--}}
                        {{--                        </li>--}}
                        @auth('customer')
                        <li>
                            <button title="dashboard" class="header-loginformtrigger" type="button"
                                    onclick="window.location='{{route("dashboard")}}'"
                            ><i class="fa fa-user"></i></button>
                        </li>
                        @elseauth
                            <li>
                                <button title="dashboard" class="header-loginformtrigger" type="button"
                                        onclick="window.location='{{route("platform.main")}}'"
                                ><i class="fa fa-user"></i></button>
                            </li>
                        @else
                            <li>
                                <button title="Login / Register" class="header-loginformtrigger" type="button"
                                        data-toggle="modal" data-target="#tm-loginregister-popup"><i class="fa fa-user"></i></button>
                            </li>
                        @endauth

                    </ul>
                </div>

                <!-- Header Searchform -->
                <div class="header-searchbox">
                    <form action="#" class="header-searchform">
                        <input type="text" placeholder="Enter search keyword..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!--// Header Searchform -->

            </div>
            <div class="header-mobilemenu clearfix">
                <div class="tm-mobilenav"></div>
            </div>
        </div>
    </div>
    <!--// Header Bottom Area -->

</div>
