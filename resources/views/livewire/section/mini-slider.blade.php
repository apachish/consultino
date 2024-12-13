<di>
    @if($links->count())
        <div class="tm-section brand-logo-area bg-grey tm-padding-section">
            <div class="container">
                <div class="brandlogo-slider tm-slider-arrow tm-slider-arrow-hovervisible">
                    @foreach($links as $link)
                    <!-- Brang Logo Single -->
                    <div class="brandlogo">
                        <a href="{{data_get($link,'url')}}">
                            <img src="{{data_get($link,'image')}}" alt="{{data_get($link,'title')}}">
                        </a>
                    </div>
                    <!--// Brang Logo Single -->
                    @endforeach
                </div>
            </div>
        </div>
        @endif
</di>
