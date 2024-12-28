<div class="tm-myaccount-dashboard">
    <form wire:submit="newOrder" class="">
        <div class="tm-form  tm-form-bordered align-items-center">
            <div class="row">
                <div class="col-lg-2 "></div>
                <div class="col-lg-10">
                    <p>لیست مراجعین ثبت شده با شماره شما</p>
                    <p>لطفا جهت ثبت نوبت،فرد مورد نظر را انتخاب کنید:</p>
                    <div class="tm-form-inner">
                        <div class="tm-form-field tm-form-fieldhalf">
                            <select class="form-control @error('order.file_id') is-invalid @enderror" id="order.file_id"
                                    wire:model="order.file_id">
                                <option value="">{{__("Click here to choose")}}</option>
                                @foreach($files as $file)
                                    <option value="{{data_get($file,"id")}}">{{data_get($file,"fullName")}}</option>
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
                    <label for="acdetails-firstname">{{__("First name")}}</label>
                    <input type="text" id="acdetails-firstname" required wire:model="order.firstName">
                </div>
                <div class="tm-form-field tm-form-fieldhalf">
                    <label for="acdetails-lastname">{{__("Last name")}}</label>
                    <input type="text" id="acdetails-lastname" wire:model="order.lastName">
                </div>
                <div class="tm-form-field">
                    <label for="acdetails-displayname">{{__("National Code")}}</label>
                    <input type="text" id="acdetails-displayname" wire:model="order.national_code">
                </div>
                <div class="tm-form-field">
                    <label for="acdetails-address">{{__("Address")}}</label>
                    <input type="text" id="acdetails-address" wire:model="order.address">
                </div>
                <div class="tm-form-field">
                    <div class="row">
                        <div class="col-lg-2 "></div>
                        <div class="col-lg-4 ">
                            <input class="form-control" type="radio" wire:model="order.gender" name="order.gender" value=0  id="male">
                            <label for="male">{{__("Male")}}</label>
                        </div>
                        <div class="col-lg-4 ">
                            <input class="form-control" type="radio" wire:model="order.gender" name="order.gender" value=1  id="female">
                            <label for="female">{{__("Female")}}</label>
                        </div>
                        <div class="col-lg-2 "></div>
                    </div>


                </div>
                <div class="tm-form-field">
                    <input type="checkbox" name="acdetails-agreeterms" id="acdetails-agreeterms" wire:model="order.accept">
                    <label for="acdetails-agreeterms">{{__("Important note")}}:
                        {{__("Please record the details of the person who is to be visited (not the parents, spouse, or author) so that there is no discrepancy in the registration of the case. Obviously, the responsibility for any discrepancy lies with you.")}}</label>
                </div>
                <div class="tm-form-field">
                    <button type="submit" class="tm-button">{{__("Register a request")}} <b></b></button>
                </div>
            </div>
        </div>
    </form>
</div>
