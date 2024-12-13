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
                    <h2>درکنار شما هستیم</h2>
                    <span class="divider"><i class="fa fa-superpowers"></i></span>
                    <p>
                        مرکز مشاوره ما با تکیه بر تیمی از مشاوران و روانشناسان متخصص، فضایی امن و حرفه‌ای برای رسیدگی به نیازهای روانشناختی و مشاوره‌ای شما فراهم کرده است. هدف ما این است که با ارائه خدمات مشاوره فردی، خانواده، تحصیلی و شغلی، به شما در مدیریت چالش‌ها، بهبود روابط و رشد شخصی کمک کنیم.

                        ما معتقدیم که هر فرد ارزشمند است و شایسته دریافت بهترین حمایت‌ها برای دستیابی به آرامش و موفقیت در زندگی است. در این مسیر، تلاش ما بر ارائه راهکارهای علمی و کاربردی است تا بتوانیم همراه شما در ساختن فردایی بهتر باشیم.
                    </p>
                    <ul class="stylish-list">
                        <li><i class="fa fa-check-square-o"></i>
                            درمانگران متخصص</li>
                        <li><i class="fa fa-check-square-o"></i>  روان‌سنجی حرفه ای</li>
                        <li><i class="fa fa-check-square-o"></i>
                            مشاوره آنلاین</li>
                        <li><i class="fa fa-check-square-o"></i>
                            نوبت دهی آسان</li>
                        <li><i class="fa fa-check-square-o"></i>
                            مشاوره تخصصی کودک</li>
                    </ul>
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
