<div class="tm-section contact-us-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center mt-30-reverse">

            <div class="col-lg-6 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-pin"></i>
                                </span>
                    <h5>{{__("Address")}}</h5>
                    <p>{{$address}}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-phone"></i>
                                </span>
                    <h5>{{__("Phone")}}</h5>
                    <p><a href="tel://{{$telephone}}">{{$telephone}}</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-mail"></i>
                                </span>
                    <h5>{{__("Email")}}</h5>
                    <p><a href="mailto://{{$email}}">{{$email}}</a></p>
                </div>
            </div>

        </div>
    </div>
    <div class="container tm-padding-section-top">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="tm-contact-formwrapper">
                    <h5>{{__("Let’s get in touch")}}</h5>
                    <div>
                        @if (session()->has('message_contact_us'))
                            <div class="alert alert-success">
                                {{ session('message_contact_us') }}
                            </div>
                        @endif
                    </div>
                    <form wire:submit="sendContact" id="tm-contactform" class="tm-form">
                        <div class="tm-form-inner">
                            <div class="tm-form-field">
                                <input type="text"
                                       wire:model="contactus.fullName"
                                       required="required"
                                       placeholder="{{__("Enter Full Name")}}*"
                                       class="@error('contactus.fullName') is-invalid @enderror"
                                >
                                @if ($errors->has('contactus.fullName'))
                                    <span class="text-danger">{{ $errors->first('contactus.fullName') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field">
                                <input type="email"
                                       wire:model="contactus.email"
                                       required="required"
                                       placeholder="{{__("Email")}}*">
                                @if ($errors->has('contactus.email'))
                                    <span class="text-danger">
                                        {{ $errors->first('contactus.email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="tm-form-field">
                                <input type="text"
                                       wire:model="contactus.subject"
                                       required="required"
                                       placeholder="{{__("Subject")}}*">
                                @if ($errors->has('contactus.subject'))
                                    <span class="text-danger">
                                        {{ $errors->first('contactus.subject') }}
                                    </span>
                                @endif
                            </div>
                            <div class="tm-form-field">
                                <textarea
                                    wire:model="contactus.message"
                                    required="required"
                                     cols="30" rows="5"
                                          placeholder="{{__("Message")}}*"></textarea>
                                @if ($errors->has('contactus.message'))
                                    <span class="text-danger">
                                        {{ $errors->first('contactus.message') }}
                                    </span>
                                @endif
                            </div>
                            <div class="tm-form-field">
                                <button type="submit" class="tm-button">{{__("Send Message")}} <b></b></button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messages"></p>
                </div>
            </div>
            <div class="col-lg-5 m-1">
                <div class="tm-contact-map">
                    <div id="google-map">
                    <iframe src="https://balad.ir/embed?p=5rxnaLYout45NV" title="مشاهده «دکتر اسماعیل زارع» روی نقشه بلد" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>--}}
{{--    <script src="/assets/js/google-map.js"></script>--}}
</div>
