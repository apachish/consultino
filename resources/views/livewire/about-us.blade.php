<div>
    <!-- About Us Area -->
    <livewire:section.about-us/>
    <!--// About Us Area -->

    <!-- Video Callback -->
    @if($about_us_image)
    <div class="tm-section video-area tm-padding-section" data-bgimage="{{$about_us_image}}"
         data-overlay="9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-12">
                    @if($about_us_video)
                    <div class="tm-video text-center">
                        <div class="tm-videobutton tm-videobutton-lg">
                            <a href="{{$about_us_video}}">
                                <span><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                        <div class="tm-video-content">
                            <h2>{{$about_us_video_title}}</h2>
                            <p>{{$about_us_video_description}}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
    <!--// Video Callback -->

    <!-- Request Callback Area -->
    <livewire:section.request-callback/>
    <!--// Request Callback Area -->

    <!-- Funfact Area -->
    <livewire:section.container/>
    <!--// Funfact Area -->

    <!-- Team Area -->
    <livewire:section.doctors/>

    <!--// Team Area -->
</div>
