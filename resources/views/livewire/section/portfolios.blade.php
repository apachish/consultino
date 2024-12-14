<div>
    @if($portfolios->count())
        <div class="tm-section portfolios-area bg-grey tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>{{__("OUR PORTFOLIOS")}}</h2>
                            <span class="divider"><i class="fa fa-superpowers"></i></span>
                            <p>"{{__("Our work samples are a reflection of our commitment, expertise, and client satisfaction.")}}"</p>
                        </div>
                    </div>
                </div>

                <div class="tm-portfolio-buttons text-center">
                    <button data-filter="*" class="is-active">{{__("All")}}</button>
                    @foreach($categories as $category)
                        <button
                            data-filter=".portfolio-filter-{{\Illuminate\Support\Str::slug($category)}}">{{$category}}</button>
                    @endforeach
                </div>

                <div class="row tm-portfolio-wrapper mt-30-reverse">

                    @foreach($portfolios as $portfolio)
                        <!-- Portfolio Single -->
                        <div
                            class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-{{\Illuminate\Support\Str::slug(data_get($portfolio,'portfolio.category'))}}">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="{{data_get($portfolio,'portfolio.image')}}" alt="portfolio image">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href="{{route("portfolios",["category"=>data_get($portfolio,'portfolio.category'),"slug"=>data_get($portfolio,'portfolio.slug')])}}"><i class="fa fa-link"></i></a>
                                        </li>
                                        @if(data_get($portfolio,'portfolio.type')=="image")
                                            <li class="zoom-button">
                                                <a href="{{data_get($portfolio,'parameters.image.value')}}"><i
                                                        class="fa fa-search-plus"></i></a>
                                            </li>
                                        @elseif(data_get($portfolio,'portfolio.type')=="slider")

                                            <li class="zoom-button">
                                                @foreach(json_decode(data_get($portfolio,'parameters.images.value')) as $slide)
                                                <a href="{{data_get($slide,'image')}}" title="{{data_get($slide,'title')}}"><i
                                                        class="fa fa-clone"></i></a>
                                                @endforeach
                                            </li>
                                        @elseif(data_get($portfolio,'portfolio.type')=="iframe")

                                            <li class="zoom-button">
                                                <a href="{{data_get($portfolio,'parameters.iframe.value')}}"><i class="fa fa-play"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5>
                                        <a href="{{route("portfolios",["category"=>data_get($portfolio,'portfolio.category'),"slug"=>data_get($portfolio,'portfolio.slug')])}}">
                                            {{data_get($portfolio,'portfolio.title')}}
                                        </a></h5>
                                    <h6>
                                        <a href="{{route("portfolios",["category"=>data_get($portfolio,'portfolio.category')])}}">
                                            {{data_get($portfolio,'portfolio.category')}}
                                        </a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tm-portfolio-loadmore text-center mt-50">
                            <a href="{{route("portfolios")}}" class="tm-button tm-button-dark">{{__("View All")}}<b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
