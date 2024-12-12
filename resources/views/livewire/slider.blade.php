@if($type == "Default")
<div class="heroslider">
    <div class="heroslider-slider heroslider-animted tm-slider-arrow">

        @foreach($sliders as $slider)
        <!-- Heroslider Item -->
        <div class="heroslider-wrapper">
            <div class="heroslider-single" data-bgimage="assets/images/hero/heroimage-1.jpg" data-black-overlay="8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="heroslider-content text-center">
                                <div class="heroslider-animatebox">
                                    <h1>
                                        <span>We Provide Best</span>
                                        <b>Consulting Services</b>
                                    </h1>
                                </div>
                                <div class="heroslider-animatebox">
                                    <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                        minus
                                        libero
                                        cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                                </div>
                                <div class="heroslider-animatebox">
                                    <div class="tm-buttongroup">
                                        <a href="about-us.blade.php" class="tm-button">About Us <b></b></a>
                                        <a href="services.html" class="tm-button tm-button-white">Our Services
                                            <b></b></a>
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
    <div class="heroslider-single tm-rippple-active" data-bgimage="assets/images/hero/heroimage-3.jpg"
         data-black-overlay="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heroslider-content text-center">
                        <div class="heroslider-animatebox">
                            <h1>
                                <span>We Provide Best</span>
                                <b>Consulting Services</b>
                            </h1>
                        </div>
                        <div class="heroslider-animatebox">
                            <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                minus
                                libero
                                cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                        </div>
                        <div class="heroslider-animatebox">
                            <div class="tm-buttongroup">
                                <a href="about-us.blade.php" class="tm-button">About Us <b></b></a>
                                <a href="services.blade.php" class="tm-button tm-button-white">Our Services <b></b></a>
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
@elseif($type== 'textslider' && $sliders)
<div class="heroslider">
    <div class="heroslider-slider heroslider-textslider heroslider-animted tm-slider-arrow" data-bgimage="assets/images/hero/heroimage-1.jpg"
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
                                        <span>{{data_get($slider,'title')}}</span>
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
                                <span>We Provide Best</span>
                                <b>Consulting Services</b>
                            </h1>
                        </div>
                        <div class="heroslider-animatebox">
                            <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                minus
                                libero
                                cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                        </div>
                        <div class="heroslider-animatebox">
                            <div class="tm-buttongroup">
                                <a href="about-us.blade.php" class="tm-button">About Us <b></b></a>
                                <a href="services.blade.php" class="tm-button tm-button-white">Our Services <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Heroslider Item -->

    <div class="tm-videobgwarpper">
        <div id="youtube-bg" class="tm-videobg" data-bgimage="assets/images/hero/heroimage-4.jpg" data-property="{videoURL:'https://www.youtube.com/watch?v=XWcjIahn7xI',containment:'self',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,showYTLogo:false,optimizeDisplay:true}"></div>
    </div>
</div>
@endif
