<div class="tm-section about-us-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="tm-about-image">
{{--                    <img class="wow fadeInLeft" src="assets/images/others/about-image.png" alt="deconsult image">--}}
                    <img class="wow fadeInLeft" src="/images/43133.jpg" alt="deconsult image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="tm-about-content">
                    <h2>{{$about_us_title}}</h2>
                    <span class="divider"><i class="fa fa-superpowers"></i></span>
                    {!!  $about_us_description !!}
                    @auth
                        <a  onclick="window.location='{{route("platform.main")}}'" class="tm-button tm-button">
                            {{__("Appointment booking")}}<b></b></a>
                    @else
                        <a href="contact-us.html" class="tm-button tm-button header-loginformtrigger" type="button"
                           data-toggle="modal" data-target="#tm-loginregister-popup"
                        >{{__("Appointment booking")}}<b></b></a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
