<div class="tm-section portfolio-details-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-portfoliodetails">
            @if(data_get($portfolio,'type')=="image")
            <div class="tm-portfoliodetails-image">
                <a href="/assets/images/portfolio/lg/portfolio-image-lg-1.jpg">
                    <img src="/assets/images/portfolio/lg/portfolio-image-lg-1.jpg" alt="portfolio details">
                </a>
            </div>
            @elseif(data_get($portfolio,'type')=="slide")
            <div class="tm-portfoliodetails-image tm-portfoliodetails-gallery tm-slider-arrow tm-slider-arrow-hovervisible">
                <div class="tm-portfoliodetails-gallery-img">
                    <a href="/assets/images/portfolio/lg/portfolio-image-lg-1.jpg">
                        <img src="/assets/images/portfolio/lg/portfolio-image-lg-1.jpg" alt="portfolio details">
                    </a>
                </div>
                <div class="tm-portfoliodetails-gallery-img">
                    <a href="/assets/images/portfolio/lg/portfolio-image-lg-2.jpg">
                        <img src="/assets/images/portfolio/lg/portfolio-image-lg-2.jpg" alt="portfolio details">
                    </a>
                </div>
                <div class="tm-portfoliodetails-gallery-img">
                    <a href="/assets/images/portfolio/lg/portfolio-image-lg-3.jpg">
                        <img src="/assets/images/portfolio/lg/portfolio-image-lg-3.jpg" alt="portfolio details">
                    </a>
                </div>
            </div>
            @elseif(data_get($portfolio,'type')=="iframe")

            <div class="tm-portfoliodetails-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Sv511KEiIJQ" allowfullscreen></iframe>
                </div>
            </div>
            @endif
            <div class="tm-portfoliodetails-content tm-padding-section-sm-top">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="tm-portfoliodetails-info">
                            <ul>
                                <li><b>{{__("Project")}} :</b> {{data_get($portfolio,'title')}}</li>
                                <li><b>{{__("Categories")}} :</b> {{data_get($portfolio,'category')}}</li>
                                @if(data_get($portfolio,'date'))
                                    <li><b>{{__("date")}} :</b> {{toJalali(data_get($portfolio,'date'))}}</li>
                                @endif
                                <li><b>{{__("Project Ranking")}} :</b>
                                    <div class="tm-rating">
                                        <span class="{{$rate==1?"active":''}}"><i class="fa fa-star"></i></span>
                                        <span class="{{$rate<=3?"active":''}}"><i class="fa fa-star"></i></span>
                                        <span class="{{$rate<=4?"active":''}}"><i class="fa fa-star"></i></span>
                                        <span class="{{$rate<=5?"active":''}}"><i class="fa fa-star"></i></span>
                                        <span class="{{$rate<=6?"active":''}}"><i class="fa fa-star"></i></span>
                                    </div>
                                </li>
                                @if($social)
                                    <li><b>Share :</b>
                                        <ul class="tm-portfoliodetails-share">
                                            @foreach($social as $key=>$item)
                                                <li><a href="{{$item}}" data-toggle="tooltip" data-placement="top" title="{{ucwords($key)}}"><i class="fa fa-{{$key}}"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="tm-portfoliodetails-description">
                            <h3>{{__("Project Description")}}</h3>
                            {!! data_get($portfolio,'description') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
