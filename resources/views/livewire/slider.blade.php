@if($type == "Default")
<div class="heroslider">
    <div class="heroslider-slider heroslider-animted tm-slider-arrow">

        @foreach($sliders as $slider)
        <!-- Heroslider Item -->
        <div class="heroslider-wrapper">
            <div class="heroslider-single" data-bgimage="{{data_get($slider,'slider.image')}}" data-black-overlay="8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="heroslider-content text-center">
                                <div class="heroslider-animatebox">
                                    <h1>
                                        <span>{{data_get($slider,'slider.title')}}</span>
                                        @if(data_get($slider,'parameters.subtitle.value'))
                                            <b>{{data_get($slider,'parameters.subtitle.value')}}</b>
                                        @endif
                                    </h1>
                                </div>
                                @if(data_get($slider,'parameters.description.value'))
                                    <div class="heroslider-animatebox">
                                        <p>{{data_get($slider,'parameters.description.value')}}</p>
                                    </div>
                                @endif
                                <div class="heroslider-animatebox">
                                    <div class="tm-buttongroup">
                                        @if(data_get($slider,'parameters.button1_text.value'))
                                            <a href="{{data_get($slider,'parameters.button1_link.value')}}"
                                               class="tm-button">
                                                {{data_get($slider,'parameters.button1_text.value')}}
                                                <b></b></a>
                                        @endif
                                            @if(data_get($slider,'parameters.button2_text.value'))
                                                <a href="{{data_get($slider,'parameters.button1_link.value')}}"
                                                   class="tm-button tm-button-white">
                                                    {{data_get($slider,'parameters.button2_text.value')}}
                                                    <b></b></a>
                                            @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Heroslider Item -->
        @endforeach
    </div>
    <div class="heroslider-slidecounter"></div>
</div>
{{--index-ripplebg--}}
@elseif($type == 'ripplebg')
<div class="heroslider">

    <!-- Heroslider Item -->
    <div class="heroslider-single tm-rippple-active" data-bgimage="{{data_get($sliders,'0.slider.image')}}"
         data-black-overlay="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heroslider-content text-center">
                        <div class="heroslider-animatebox">
                            <h1>
                                <span>{{data_get($sliders,'0.slider.title')}}</span>
                                @if(data_get($sliders,'0.parameters.subtitle.value'))
                                    <b>{{data_get($sliders,'0.parameters.subtitle.value')}}</b>
                                @endif
                            </h1>
                        </div>
                        @if(data_get($sliders,'0.parameters.description.value'))
                            <div class="heroslider-animatebox">
                                <p>{{data_get($sliders,'0.parameters.description.value')}}</p>
                            </div>
                        @endif
                        <div class="heroslider-animatebox">
                            <div class="tm-buttongroup">
                                @if(data_get($sliders,'0.parameters.button1_text.value'))
                                    <a href="{{data_get($sliders,'0.parameters.button1_link.value')}}"
                                       class="tm-button">
                                        {{data_get($sliders,'0.parameters.button1_text.value')}}
                                        <b></b></a>
                                @endif
                                @if(data_get($sliders,'0.parameters.button2_text.value'))
                                    <a href="{{data_get($sliders,'0.parameters.button1_link.value')}}"
                                       class="tm-button tm-button-white">
                                        {{data_get($sliders,'0.parameters.button2_text.value')}}
                                        <b></b></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Heroslider Item -->

</div>
{{--index-textslider--}}
@elseif($type== 'textslider')
<div class="heroslider">
    <div class="heroslider-slider heroslider-textslider heroslider-animted tm-slider-arrow" data-bgimage="{{data_get($sliders,'0.slider.image')}}"
         data-black-overlay="8">
        @foreach($sliders as $slider)
        <!-- Heroslider Item -->
        <div class="heroslider-wrapper">
            <div class="heroslider-single">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="heroslider-content text-center">
                                <div class="heroslider-animatebox">
                                    <h1>
                                        <span>{{data_get($slider,'slider.title')}}</span>
                                        @if(data_get($slider,'parameters.subtitle.value'))
                                        <b>{{data_get($slider,'parameters.subtitle.value')}}</b>
                                            @endif
                                    </h1>
                                </div>
                                @if(data_get($slider,'parameters.description.value'))
                                <div class="heroslider-animatebox">
                                    <p>{{data_get($slider,'parameters.description.value')}}</p>
                                </div>
                                @endif
                                <div class="heroslider-animatebox">
                                    <div class="tm-buttongroup">
                                        @if(data_get($slider,'parameters.button1_text.value'))
                                        <a href="{{data_get($slider,'parameters.button1_link.value')}}"
                                           class="tm-button">
                                            {{data_get($slider,'parameters.button1_text.value')}}
                                            <b></b></a>
                                        @endif
                                        @if(data_get($slider,'parameters.button2_text.value'))
                                        <a href="{{data_get($slider,'parameters.button1_link.value')}}"
                                           class="tm-button tm-button-white">
                                            {{data_get($slider,'parameters.button2_text.value')}}
                                            <b></b></a>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Heroslider Item -->
        @endforeach

    </div>
    <div class="heroslider-slidecounter"></div>
</div>
{{--index-videobg--}}
@elseif($type == "videobg")
<div class="heroslider tm-videobgholder">

    <!-- Heroslider Item -->
    <div class="heroslider-single" data-black-overlay="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heroslider-content text-center">
                        <div class="heroslider-animatebox">
                            <h1>
                                <span>{{data_get($sliders,'0.slider.title')}}</span>
                                @if(data_get($sliders,'0.parameters.subtitle.value'))
                                    <b>{{data_get($sliders,'0.parameters.subtitle.value')}}</b>
                                @endif
                            </h1>
                        </div>
                        @if(data_get($sliders,'0.parameters.description.value'))
                            <div class="heroslider-animatebox">
                                <p>{{data_get($sliders,'0.parameters.description.value')}}</p>
                            </div>
                        @endif
                        <div class="heroslider-animatebox">
                            <div class="tm-buttongroup">
                                @if(data_get($sliders,'0.parameters.button1_text.value'))
                                    <a href="{{data_get($sliders,'0.parameters.button1_link.value')}}"
                                       class="tm-button">
                                        {{data_get($sliders,'0.parameters.button1_text.value')}}
                                        <b></b></a>
                                @endif
                                @if(data_get($sliders,'0.parameters.button2_text.value'))
                                    <a href="{{data_get($sliders,'0.parameters.button1_link.value')}}"
                                       class="tm-button tm-button-white">
                                        {{data_get($sliders,'0.parameters.button2_text.value')}}
                                        <b></b></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Heroslider Item -->

    <div class="tm-videobgwarpper">
{{--        <div id="youtube-bg" class="tm-videobg" data-bgimage="{{data_get($sliders,'0.slider.image')}}" data-property="{videoURL:'{{data_get($sliders,'0.parameters.video.value')}}',containment:'self',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,showYTLogo:false,optimizeDisplay:true}"></div>--}}

        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
        <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

        <div class="video-wrapper" style="background-image: url('{{data_get($sliders,'0.slider.image')}}');
        background-size: cover; background-position: center;">

        <video id="player" class="tm-videobg"  width="100%" playsinline controls autoplay muted loop>
            <source src="{{data_get($sliders,'0.parameters.video.value')}}" type="video/mp4">
        </video>
        </div>
        <script>
            const player = new Plyr('#player', {
                autoplay: true // فعال‌سازی autoplay
            });
        </script>
        <style>
            .video-wrapper {
                position: relative;
                width: 100%;
                height: 360px; /* یا هر ارتفاع دیگر */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .video-wrapper[data-bgimage] {
                background-image: url('');
            }

            .video-wrapper[data-bgimage]::before {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: attr(data-bgimage url);
                background-size: cover;
                background-position: center;
                z-index: 1;
            }
            video {
                position: relative;
                position: relative;
            }
        </style>
    </div>
</div>
@endif
