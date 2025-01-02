<div class="tm-myaccount-dashboard" >
    @if (session()->has('message'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    @if($errors->first())
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-danger" role="alert">
                    <span>{{ $errors->first() }}</span>
                </div>
            </div>
        </div>
    @endif
    <form  wire:submit.prevent="save" >
        @csrf

        <div class="tm-form  tm-form-bordered align-items-center">
            <div class="row">
                <div class="col-lg-2 "></div>
                <div class="col-lg-10">
                    <p>لیست مراجعین ثبت شده با شماره شما</p>
                    <p>لطفا جهت ثبت نوبت،فرد مورد نظر را انتخاب کنید:</p>
                    <div class="tm-form-inner">
                        <div class="tm-form-field tm-form-fieldhalf">
                            <select class="form-control @error('file_id') is-invalid @enderror" id="file_id"
                                    wire:model="file_id">
                                <option value="">{{__("Click here to choose")}}</option>
                                @foreach($files as $file)
                                    <option value="{{data_get($file,"id")}}" {{$file_id==data_get($file,"id")?"selected":"" }}>{{data_get($file,"firstName")." ".data_get($file,"lastName")}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="centered-div">
            <p>-یا-</p>
        </div>

        <div class="tm-form  tm-form-bordered">
            <div class="centered-div">

                <h4> تشکیل پرونده برای شخص جدید با شماره{{$customer->mobile}}</h4>
            </div>
            <div class="tm-form-inner">
                <div class="tm-form-field tm-form-fieldhalf">
                    <label for="file-firstName">{{ __("First name") }}</label>
                    <input type="text"
                           class="form-control @error('file.firstName') is-invalid @enderror"
                           id="file-firstName"
                           wire:model="file.firstName"
                           @if(!$file_id)required="required"@endif
                    >
                    @if ($errors->has('file.firstName'))
                        <span class="text-danger">{{ $errors->first('file.firstName') }}</span>
                    @endif
                </div>
                <div class="tm-form-field tm-form-fieldhalf">
                    <label for="file-lastname">{{__("Last name")}}</label>
                    <input type="text"
                           class="form-control @error('file.lastName') is-invalid @enderror"
                           id="file-lastName"
                           wire:model="file.lastName"
                           @if(!$file_id)required="required"@endif

                    >
                    @if ($errors->has('file.lastName'))
                        <span class="text-danger">{{ $errors->first('file.lastName') }}</span>
                    @endif
                </div>
                <div class="tm-form-field">
                    <label for="file-displayname">{{__("National Code")}}</label>
                    <input type="text"
                           class="form-control @error('file.national_code') is-invalid @enderror"
                           id="file-national_code"
                           wire:model="file.national_code"
                           @if(!$file_id)required="required"@endif

                    >
                    @if ($errors->has('file.national_code'))
                        <span class="text-danger">{{ $errors->first('file.national_code') }}</span>
                    @endif
                </div>
                <div class="tm-form-field">
                    <label for="file-address">{{__("Address")}}</label>
                    <input type="text"
                           class="form-control @error('file.address') is-invalid @enderror"
                           id="file-address"
                           wire:model="file.address"
                           >
                    @if ($errors->has('file.address'))
                        <span class="text-danger">{{ $errors->first('file.address') }}</span>
                    @endif
                </div>


                <div class="tm-form-field">
                    <div class="row">
                        <div class="col-lg-2 "></div>
                        <div class="col-lg-4 ">
                            <input type="radio"
                                   class="form-control @error('file.gender') is-invalid @enderror"
                                   id="file-gender-male"
                                   wire:model="file.gender"
                                   name="file.gender"

                                    value=0 >
                            <label for="file-gender-male">{{__("Male")}}</label>
                        </div>
                        <div class="col-lg-4 ">
                            <input type="radio"
                                   class="form-control @error('file.firstName') is-invalid @enderror"
                                   id="file-gender-female"
                                   wire:model="file.gender"
                                   name="file.gender"

                                   value=1
                                   >
                            <label for="file-gender-female">{{__("Female")}}</label>
                        </div>
                        <div class="col-lg-2 ">
                            @if ($errors->has('file.gender'))
                                <span class="text-danger">{{ $errors->first('file.gender') }}</span>
                            @endif
                        </div>
                    </div>


                </div>
                <div class="tm-form-field">
                    <input type="checkbox"
                           class="form-control @error('file.accept') is-invalid @enderror"
                           id="file-accept"
                           wire:model="file.accept"
                           >
                    <label for="file-accept">{{__("Important note")}}:
                        {{__("Please record the details of the person who is to be visited (not the parents, spouse, or author) so that there is no discrepancy in the registration of the case. Obviously, the responsibility for any discrepancy lies with you.")}}</label>
                    @if ($errors->has('file.accept'))
                        <p class="text-danger">{{ $errors->first('file.accept') }}</p>
                    @endif
                </div>


            </div>
        </div>
        <div class="tm-form-field">
            <button type="submit" class="tm-button">{{__("Register a request")}} <b></b></button>

        </div>
    </form>
    <div class="mb-3 row">
        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
    </div>
</div>
