<div class="header sticky-header">

    <!-- Header Top Area -->
    <div class="header-toparea">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="header-topinfo">
                        <ul>
                            <li><a href="tel://+1-800-915-6270"><i class="fa fa-phone"></i> {{data_get($settings,'telephone.value')}}</a></li>
                            <li><a href="mailto://contact@example.com"><i class="fa fa-envelope-o"></i>
                                    {{data_get($settings,'email.value')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="header-topinfo text-right">
                        <ul>
                            <li><i class="fa fa-clock-o"></i> {{data_get($settings,'working_hours.value')}}</li>
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
                    <a href="index.html">
                        <img src="{{data_get($settings,'logo.value')}}" alt="deconsult logo" height="130" width="200">
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
                        @auth
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
