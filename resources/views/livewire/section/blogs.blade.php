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
                            @if(data_get($blogs,'type')=="image")
                                <div class="tm-blog-image">
                                    <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">
                                        <img src="assets/images/blog/blog-image-1.jpg" alt="blog image">
                                    </a>
                                </div>
                            @elseif(data_get($blogs,'type')=="slide")
                                <div class="tm-blog-imageslider tm-slider-arrow tm-slider-dots">
                                    <a href="blog-details-gallery.html" class="blogitem-imageslider-image">
                                        <img src="assets/images/blog/blog-image-5.jpg" alt="blog image">
                                    </a>
                                    <a href="blog-details-gallery.html" class="blogitem-imagesalider-image">
                                        <img src="assets/images/blog/blog-image-6.jpg" alt="blog image">
                                    </a>
                                    <a href="blog-details-gallery.html" class="blogitem-imageslider-image">
                                        <img src="assets/images/blog/blog-image-7.jpg" alt="blog image">
                                    </a>
                                </div>
                            @elseif(data_get($blogs,'type')=="iframe")
                                <div class="tm-blog-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XWcjIahn7xI"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            @elseif(data_get($blogs,'type')=="iframe_sound")
                                <div class="tm-blog-audio">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/298527001&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                    </div>
                                </div>
                            @endif
                            <div class="tm-blog-content">
                                <div class="tm-blog-meta">
                                    <span><i class="fa fa-user-o"></i>{{__("Writer")}} <a href="blog.html">{{data_get($blog,'user.name')}}</a></span>
                                    <span><i class="fa fa-calendar-o"></i>{{toJalali(data_get($blog,"created_at"))}}</span>
                                </div>
                                <h5><a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">{{data_get($blod,'title')}}</a></h5>
                                <p>{{data_get($blog,'description')}}</p>
                                <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}" class="tm-readmore">Continue Reading...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
