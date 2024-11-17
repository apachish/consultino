<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    @include('includes.header')
    <!--// Header -->

    <!-- Heroslider -->
    @if(Route::is('home'))
        <livewire:slider/>
    @else
        <livewire:breadcrumb/>
    @endif

    <!--// Heroslider -->

    <!-- Main -->
    <main class="page-content">
        {{ $slot }}

        <!-- Call To Action Area -->
        <div class="tm-section call-to-action-area bg-theme">
            <div class="container">
                <div class="row align-items-center tm-cta">
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="tm-cta-content">
                            <h3>Are you worried about your business?</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="tm-cta-button">
                            <a href="contact-us.html" class="tm-button tm-button-white">Contact Us <b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Call To Action Area -->

    </main>
    <!--// Main -->

    <!-- Footer Area -->
    @include('includes.footer')

    <!--// Footer Area -->

    <!-- Login Register Popup -->
    <div class="tm-loginregister-popup modal fade" id="tm-loginregister-popup" role="dialog" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-10 col-sm-10 col-12">
                            <div class="tm-loginregister">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                                <ul class="nav tm-tabgroup" id="bstab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="#bstab1-area1"
                                           role="tab" aria-controls="bstab1-area1" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="#bstab1-area2"
                                           role="tab" aria-controls="bstab1-area2" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="bstab1-ontent">
                                    <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel"
                                         aria-labelledby="bstab1-area1-tab">

                                        <form action="#" class="tm-form tm-login-form tm-form-bordered">
                                            <h4>Login</h4>
                                            <div class="tm-form-inner">
                                                <div class="tm-form-field">
                                                    <label for="login-email">Username or email address*</label>
                                                    <input type="email" id="login-email" required="required">
                                                </div>
                                                <div class="tm-form-field">
                                                    <label for="login-password">Password*</label>
                                                    <input type="password" id="login-password" required="required">
                                                </div>
                                                <div class="tm-form-field">
                                                    <input type="checkbox" name="login-remember" id="login-remember">
                                                    <label for="login-remember">Remember Me</label>
                                                </div>
                                                <div class="tm-form-field">
                                                    <button type="submit" class="tm-button">Login <b></b></button>
                                                </div>
                                                <div class="tm-form-field">
                                                    <a href="#">Forgot your password?</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">

                                        <form action="#" class="tm-form tm-register-form tm-form-bordered">
                                            <h4>Create an account</h4>
                                            <div class="tm-form-inner">
                                                <div class="tm-form-field">
                                                    <label for="register-username">Username</label>
                                                    <input type="text" id="register-username" required="required">
                                                </div>
                                                <div class="tm-form-field">
                                                    <label for="register-email">Email address</label>
                                                    <input type="email" id="register-email" required="required">
                                                </div>
                                                <div class="tm-form-field">
                                                    <label for="register-password">Password</label>
                                                    <input type="password" id="register-password" required="required">
                                                </div>
                                                <div class="tm-form-field">
                                                    <input type="checkbox" id="register-terms">
                                                    <label for="register-terms">I have read and agree to the
                                                        website terms and conditions</label>
                                                </div>
                                                <div class="tm-form-field">
                                                    <button type="submit" class="tm-button">Register <b></b></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Login Register Popup -->

</div>
<!--// Wrapper -->
@livewireScripts

<!-- Js Files -->
<script src="/assets/js/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/chart.min.js"></script>
<script src="/assets/js/chart-active.js"></script>
<script src="/assets/js/main.js"></script>
<!--// Js Files -->
</body>

</html>
