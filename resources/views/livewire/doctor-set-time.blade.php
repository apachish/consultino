<div class="tm-section shop-page-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-prodetails">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">

                    <!-- Product Details Images -->
                    <div class="tm-prodetails-images">
                        <div class="tm-prodetails-largeimages">
                            <div class="tm-prodetails-largeimage">
                                <a href="">
                                    <img src="{{data_get($doctor,'avatar')}}" alt="product image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--// Product Details Images -->

                </div>

                <div class="col-lg-7 col-md-6 col-12">
                    <div class="tm-prodetails-content">
                        <h3 class="tm-prodetails-title">{{data_get($doctor,'user.name')}}</h3>
                        <div class="tm-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= data_get($properties,'rate.value'))
                                    <span class="active"><i class="fa fa-star"></i></span>
                                @else
                                    <span><i class="fa fa-star"></i></span>
                                @endif
                            @endfor
                        </div>
                        <p class="tm-prodetails-availability">{{__("Status")}}: <span>{{data_get($doctor,'status')}}</span></p>
                        <div class="tm-prodetails-price">
{{--                            <span><del>$75.99</del> $59.99</span>--}}
                        </div>
                        <div class="tm-prodetails-quantitycart">
{{--                            <div class="tm-quantitybox">--}}
{{--                                <input type="text" value="1">--}}
{{--                            </div>--}}
{{--                            <a href="#" class="tm-button">Add To Cart<b></b></a>--}}
                        </div>

                        <div class="tm-prodetails-categories">
                            <h6>{{__("Expertises")}} :</h6>
                            <ul>
                                @foreach(data_get($doctor,'expertises')  as $expertise)
                                    <li><a href="{{route("doctors", ["file_id" => $this->file_id])."?expertise=".$expertise->name}}">{{$expertise->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tm-prodetails-tags">
                            <h6>{{__("Degree")}} :</h6>
                            <span>{{data_get($properties,'degree.value')}}</span>
                        </div>
                        <div class="tm-prodetails-tags">
                            <h6>{{__("University")}} :</h6>
                            <span>{{data_get($properties,'university.value')}}</span>
                        </div>
                        @if($social)
                        <div class="tm-prodetails-share">
                            <ul>

                                @foreach($social as $key=>$item)
                                    <li><a href="{{$item}}" data-toggle="tooltip" data-placement="top" title="{{ucwords($key)}}"><i class="fa fa-{{$key}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Product Details Description & Review -->
            <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab" href="#prodetails-area1"
                           role="tab" aria-controls="prodetails-area1" aria-selected="true">{{__("Doctor appointment time")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="prodetails-area2-tab" data-toggle="tab" href="#prodetails-area2"
                           role="tab" aria-controls="prodetails-area2" aria-selected="false">{{__("Reviews")}}
                            ({{data_get($doctor,'comments_count')}})</a>
                    </li>
                </ul>
                <div class="tab-content" id="prodetails-content">
                    <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel"
                         aria-labelledby="prodetails-area1-tab">
                        <div class="tm-prodetails-description">
                            @if($errors)
                                <span>{{ $errors->first() }}</span>
                            @endif
                            <form wire:submit="appointmentRegistration" class="tm-form">
                            <div class="container">
                                <div class="date-card-container">
                                    <div class="date-card" @click="$dispatch('date-changed', { date: 'Post Title' })">
                                        <div class="day-name">پنج‌شنبه</div>
                                        <div class="date">13 دی</div>
                                        <div class="relative-day">امروز</div>
                                    </div>
                                    <div class="date-card">
                                        <div class="day-name">جمعه</div>
                                        <div class="date">14 دی</div>
                                        <div class="relative-day">فردا</div>
                                    </div>
                                    <div class="date-card">
                                        <div class="day-name">شنبه</div>
                                        <div class="date">15 دی</div>
                                        <div class="relative-day">پس‌فردا</div>
                                    </div>
                                    <div class="date-card">
                                        <div class="day-name">یک‌شنبه</div>
                                        <div class="date">16 دی</div>
                                        <div class="relative-day">3 روز دیگر</div>
                                    </div>
                                    <div class="date-card">
                                        <div class="day-name">دوشنبه</div>
                                        <div class="date">17 دی</div>
                                        <div class="relative-day">4 روز دیگر</div>
                                    </div>
                                </div>
                            </div>
                            @if($set_time)
                                <div class="schedule-container">
                                    <div class="schedule-header">
                                        <div>یکشنبه 16 دی 1403</div>
                                        <div>(4 روز دیگر)</div>
                                    </div>
                                    <div class="time-slot-grid">
                                        <div class="time-slot">
                                            <div class="time">15:45</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">16:15</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">16:45</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">17:15</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">17:45</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">18:15</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">18:45</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">19:15</div>
                                            <input type="checkbox">
                                        </div>
                                        <div class="time-slot">
                                            <div class="time">19:45</div>
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">{{__("Appointment registration")}} <b></b></button>
                                    </div>
                                </div>
                            @endif
                            </form>
                                @if (session()->has('message-appointment'))
                                    <div class="row justify-content-center text-center mt-3">
                                        <div class="col-md-8">
                                            <div class="alert alert-success" role="alert">
                                                {{ session('message-appointment') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="mb-3 row">
                                    <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                                </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="prodetails-area2" role="tabpanel" aria-labelledby="prodetails-area2-tab" wire:ignore>
                        <div class="tm-prodetails-review" >
                            <div class="tm-comment-wrapper mb-50">

                                @foreach(data_get($doctor,'comments') as $comment)
                                <!-- Comment Single -->
                                <div class="tm-comment">
                                    <div class="tm-comment-thumb">
{{--                                        <img src="/assets/images/authors/author-image-1.jpg" alt="author image">--}}
                                    </div>
                                    <div class="tm-comment-content">
{{--                                        <h6 class="tm-comment-authorname"><a href="#">Kirstin Lehner</a></h6>--}}
                                        <span class="tm-comment-date">{{toJalali($comment->created_at)}}</span>
                                        <div class="tm-rating">

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= data_get($comment,'rate.value'))
                                                    <span class="active"><i class="fa fa-star"></i></span>
                                                @else
                                                    <span><i class="fa fa-star"></i></span>
                                                @endif
                                            @endfor
                                        </div>
                                        <p>{{$comment->message}}</p>
                                    </div>
                                </div>
                                <!--// Comment Single -->
                                @endforeach


                            </div>
                            <h5 class="text-uppercase">{{__("Add a review")}}</h5>
                            @if($errors)
                                <span>{{ $errors->first() }}</span>
                            @endif
                            <form wire:submit="sendComment" class="tm-form">
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <div class="tm-rating tm-rating-input">
                                            <span data-value="1" class="active"><i class="fa fa-star"></i></span>
                                            <span data-value="2" class="active"><i class="fa fa-star"></i></span>
                                            <span data-value="3" class="active"><i class="fa fa-star"></i></span>
                                            <span data-value="4" class="active"><i class="fa fa-star"></i></span>
                                            <span data-value="5" ><i class="fa fa-star"></i></span>
                                        </div>
                                        <input type="hidden" id="rating-value" wire:model="comment.rate">

                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" id="tm-comment-namefield" wire:model="comment.fullName" placeholder="{{__("Enter Full Name")}}*"
                                               class="@error('comment.fullName') is-invalid @enderror" required="required">
                                        @if ($errors->has('comment.fullName'))
                                            <span class="text-danger">{{ $errors->first('comment.fullName') }}</span>
                                        @endif
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="email" id="tm-comment-email"  wire:model="comment.email" placeholder="{{__("Enter email address")}}*"
                                               class="@error('comment.email') is-invalid @enderror" required="required">
                                        @if ($errors->has('comment.email'))
                                            <span class="text-danger">{{ $errors->first('comment.email') }}</span>
                                        @endif
                                    </div>
                                    <div class="tm-form-field">
                                        <textarea name="tm-comment-textbox" id="tm-comment-textbox" cols="30" rows="5" placeholder="{{__("Comment")}}"
                                                  wire:model="comment.message"
                                                  class="@error('comment.message') is-invalid @enderror" required="required"
                                        ></textarea>
                                        @if ($errors->has('comment.message'))
                                            <span class="text-danger">{{ $errors->first('comment.message') }}</span>
                                        @endif
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">{{__("Post Review")}} <b></b></button>

                                    </div>
                                </div>

                            </form>
                            @if (session()->has('message-comment'))
                                <div class="row justify-content-center text-center mt-3">
                                    <div class="col-md-8">
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message-comment') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="mb-3 row">
                                <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Product Details Description & Review -->
        </div>
    </div>
</div>
