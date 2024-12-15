<div class="tm-section blogs-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-blog-list">
            <div class="row mt-30-reverse blog-masonry-active">
                @foreach($blogs as $blog)
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6 col-12 mt-30 blog-masonry-item">
                    <div class="blog-slider-item">
                        <div class="tm-blog wow fadeInUp">
                            @if(data_get($blog,'type')=="image")
                                <div class="tm-blog-image">
                                    <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">
                                        <img src="{{data_get($blog,'image')}}" alt="{{data_get($blog,'title')}}">
                                    </a>
                                </div>
                            @elseif(data_get($blog,'type')=="slider")
                                <div class="tm-blog-imageslider tm-slider-arrow tm-slider-dots">
                                    @foreach(json_decode(data_get($blog,'parameters.images.value')) as $slide)
                                        <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}"
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
                                        <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">
                                            {{data_get($blog,'user.name')}}
                                        </a>
                                    </span>
                                    <span><i class="fa fa-calendar-o"></i>{{toJalali(data_get($blog,"created_at"))}}</span>

                                </div>
                                <h5><a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">{{data_get($blod,'title')}}</a></h5>
                                <p>{{data_get($blog,'description')}}</p>
                                <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}" class="tm-readmore">{{__("Continue Reading")}}...</a>
                             </div>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->
                @endforeach

            </div>

            <div class="tm-pagination mt-50">
{{--                <ul>--}}
{{--                    <li class="is-active"><a href="blog.blade.php">1</a></li>--}}
{{--                    <li><a href="blog.blade.php">2</a></li>--}}
{{--                    <li><a href="blog.blade.php">3</a></li>--}}
{{--                    <li><a href="blog.blade.php">4</a></li>--}}
{{--                    <li><a href="blog.blade.php">></a></li>--}}
{{--                </ul>--}}
                {{ $blogs->links() }}

            </div>
        </div>
    </div>
</div>
