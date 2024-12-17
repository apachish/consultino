<div>
    @if($blogs->count())
    <div class="tm-section blogs-area bg-white tm-padding-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>{{__("OUR LATEST BLOGS")}}</h2>
                        <span class="divider"><i class="fa fa-superpowers"></i></span>
                        <p>"{{__("Take a step towards greater awareness and a better life with our educational articles.")}}"</p>
                    </div>
                </div>
            </div>
            <div class="blog-slider-active tm-slider-arrow tm-slider-arrow-hovervisible">

                @foreach($blogs as $blog)
                    <div class="blog-slider-item">
                        <div class="tm-blog wow fadeInUp">
                            @if(data_get($blog,'type')=="image")
                                <div class="tm-blog-image">

                                    <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}">
                                        <img src="{{data_get($blog,'parameters.image.value')}}" alt="{{data_get($blog,'title')}}">
                                    </a>
                                </div>
                            @elseif(data_get($blog,'type')=="slider")
                                <div class="tm-blog-imageslider tm-slider-arrow tm-slider-dots">
                                    @php
                                    $slider = data_get($blog,'parameters.slider');
                                    $slider =  json_decode(data_get($slider,'value'),true)
                                    @endphp
                                    @foreach($slider as $slide)
                                        <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}"
                                           class="blogitem-imageslider-image">
                                            <img src="{{data_get($slide,'image')}}" alt="{{data_get($slide,'title')}}">
                                        </a>
                                    @endforeach
                                </div>
                            @elseif(data_get($blog,'type')=="iframe")
                                <div class="tm-blog-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                                src="{{data_get($blog,'parameters.iframe.value')}}"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            @elseif(data_get($blog,'type')=="iframe_sound")
                                <div class="tm-blog-audio">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{data_get($blog,'parameters.iframe_sound.value')}}"></iframe>
                                    </div>
                                </div>
                            @endif
                            <div class="tm-blog-content">
                                <div class="tm-blog-meta">
                                    <span><i class="fa fa-user-o"></i>{{__("Writer")}}
                                        <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}">
                                            {{data_get($blog,'user.name')}}
                                        </a>
                                    </span>
                                    <span><i class="fa fa-calendar-o"></i>{{toJalali(data_get($blog,"created_at"))}}</span>
                                </div>
                                <h5><a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}">{{data_get($blog,'title')}}</a></h5>
                                <p>{{data_get($blog,'description')}}</p>
                                <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}" class="tm-readmore">{{__("Continue Reading")}}...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
