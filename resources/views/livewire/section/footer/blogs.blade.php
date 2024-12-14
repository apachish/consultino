<div class="col-lg-3 col-md-6 col-12">
    @if($blogs->count())
        <!-- Single Widget (Widget Blog) -->
        <div class="single-widget widget-recentpost">
            <h5 class="widget-title">{{__("Recent Posts")}}</h5>
            <ul>
                @foreach($blogs as $blog)
                    <li>
                        <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}" class="widget-recentpost-image">
                            <img src="{{data_get($blog,'image')}}" alt="blog thumbnail">
                        </a>
                        <div class="widget-recentpost-content">
                            <h6><a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">{{data_get($blog,'title')}}</a></h6>
                            <span>{{toJalali(data_get($blog,'created_at'))}}</span>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    @endif
    <!--// Single Widget (Widget Blog) -->
</div>
