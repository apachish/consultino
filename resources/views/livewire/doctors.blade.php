<div class="tm-section shop-page-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-shop-productsarea">

            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-7 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>{{__("List of specialists")}}</h2>
                        <span class="divider"><i class="fa fa-superpowers"></i></span>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-2 col-md-10 col-12">
                    <form wire:submit="orderBy" class="tm-shop-header">
                        {{--                        <h1 class="tm-shop-countview"></h1>--}}
                        <select>
                            <option value="value">{{__("Time")}}</option>
                            <option value="value">{{__("Name")}}</option>
                            <option value="value">{{__("Rate")}}</option>
                        </select>
                    </form>
                </div>
            </div>
            @if($doctors->count())
                <div class="tm-shop-products">
                    <div class="row mt-30-reverse">

                        @foreach($doctors as $doctor)
                            <!-- Single Product -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-30">
                                <div class="tm-product wow fadeInUp">
                                    <div class="tm-product-image">
                                        <a class="tm-product-imagelink" href="{{route("doctors.set-time",["doctor_id"=>$doctor->id,"file_id"=>$file_id])}}">
                                            <img src="{{data_get($doctor,'avatar')}}" alt="product image">
                                        </a>
                                        <ul class="tm-product-actions">
                                            <li><a href="{{route("doctors.set-time",["doctor_id"=>$doctor->id,"file_id"=>$file_id])}}"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-content">
                                        <h5 class="tm-product-title"><a
                                                href="{{route("doctors.set-time",["doctor_id"=>$doctor->id,"file_id"=>$file_id])}}">{{data_get($doctor,"user.name")}}</a>
                                        </h5>
                                        <div class="tm-product-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= data_get($doctor,'properties.rate.value'))
                                                    <span class="active"><i class="fa fa-star"></i></span>
                                                @else
                                                    <span><i class="fa fa-star"></i></span>
                                                @endif
                                            @endfor
                                        </div>
                                        @foreach(data_get($doctor,'expertises') as $expertise)
                                            <h6 class="tm-product-price">{{$expertise->name}}</h6>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!--// Single Product -->
                        @endforeach

                    </div>
                </div>
                <div class="tm-pagination mt-50">
                    {{ $doctors->links() }}

                </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-7 col-md-10 col-12">
                        <div class="tm-section-title text-center">

                            <h2> {{__("They currently have a specialist available to book time.")}}</h2>

                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
