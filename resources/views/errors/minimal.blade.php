<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('includes.head')
</head>

<body>

<!-- Preloader -->
<div class="tm-preloader">
    <span class="tm-preloader-box"></span>
    <button class="tm-button tm-button-sm tm-button-white">Cancel Preloader <b></b></button>
</div>
<!--// Preloader -->

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <livewire:section.header/>
    <!--// Header -->


    <!-- Main Content -->
    <main class="main-content">

        <!-- 404 Area -->
        <div class="tm-section page-not-found-area tm-padding-section bg-white">
            <div class="container">
                <div class="tm-pnf">
                    <h1>                        @yield('code')
                    </h1>
                    <h2>                        @yield('message')
                    </h2>
{{--                    <h4>The page you requested could not be found</h4>--}}
                    <a href="{{route("home")}}" class="tm-button">{{__("GO BACK TO HOMEPAGE")}}</a>
                </div>
            </div>
        </div>
        <!--// 404 Area -->
        <!-- Call To Action Area -->
        <div class="tm-section call-to-action-area bg-theme">
            <div class="container">
                <div class="row align-items-center tm-cta">
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="tm-cta-content">
                            <h3>{{__("Become a member of our family now!")}}</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="tm-cta-button">
                            @auth
                                <a  onclick="window.location='{{route("platform.main")}}'" class="tm-button tm-button-white">
                                    {{__("Appointment booking")}}<b></b></a>
                            @else
                                <a href="contact-us.html" class="tm-button tm-button-white header-loginformtrigger" type="button"
                                   data-toggle="modal" data-target="#tm-loginregister-popup"
                                >{{__("Appointment booking")}}<b></b></a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Call To Action Area -->
    </main>
    <!--// Main Content -->

    <!-- Footer Area -->
    @include('includes.footer')
    <!--// Footer Area -->



    <!-- Mobile Register Popup -->
    <livewire:auth.modal/>
    <!--// Mobile Register Popup -->

</div>
<!--// Wrapper -->
@livewireScripts

<!-- Js Files -->
<script src="/assets/js/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/plugins.js"></script>
{{--<script src="/assets/js/chart.min.js"></script>--}}
{{--<script src="/assets/js/chart-active.js"></script>--}}
<script src="/assets/js/main.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/vendor/persian-date/dist/persian-date.js"></script>
<script src="/vendor/persian-datepicker/dist/js/persian-datepicker.js"></script>
<script src="/js/datepicker.js"></script>
{{--@vite('resources/js/app.js')--}}

<script>

    function otpSend(num) {
        const milliseconds = num * 1000 //60 seconds
        const currentDate = Date.now() + milliseconds
        var countDownTime = new Date(currentDate).getTime()
        let interval;
        return {
            countDown: milliseconds,
            countDownTimer: new Date(currentDate).getTime(),
            intervalID: null,
            init() {
                if (!this.intervalID) {
                    this.intervalID = setInterval(() => {
                        this.countDown = this.countDownTimer - new Date().getTime();
                    }, 1000);
                }
            },
            getTime() {
                if (this.countDown < 0) {
                    this.clearTimer()
                }
                return this.countDown;
            },
            formatTime(num) {
                var date = new Date(num);
                return new Date(this.countDown).toLocaleTimeString(navigator.language, {
                    minute: '2-digit',
                    second: '2-digit'
                });
            },
            clearTimer() {
                clearInterval(this.intervalID);
            }
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {


        // به‌روزرسانی بعد از هر تغییر یا رندر دوباره
        // Livewire.hook('message.processed', (message, component) => {
        //     if ($('#advice-expertise_id').length) {
        //         $('#advice-expertise_id').niceSelect('destroy'); // حذف مقداردهی قبلی
        //         $('#advice-expertise_id').niceSelect(); // مقداردهی مجدد
        //     }
        // });

        // ارسال تغییرات به Livewire
        $('#advice-expertise_id').on('change', function () {
            var value = $(this).val();
            console.log(value);
            Livewire.dispatch('updateNiceSelect', { value });

        });

        $('#file_id').on('change', function () {
            var value = $(this).val();
            console.log(value);
            Livewire.dispatch('updateNiceSelect', { value });

        });

    });


</script>
<!--// Js Files -->
</body>

</html>


