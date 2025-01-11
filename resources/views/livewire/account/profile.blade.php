<div class="tm-myaccount-acdetails" wire:ignore.self>
    @if (session()->has('message-profile'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('message-profile') }}
                </div>
            </div>
        </div>
    @endif
    <form  wire:submit="send" class="tm-form tm-form-bordered">
        <h4>{{__("Account Details")}}</h4>
        <div class="tm-form-inner">
            <div class="tm-form-field tm-form-fieldhalf">
                <label for="acdetails-firstname">{{__("First name")}}</label>
                <input type="text" id="acdetails-firstname"  wire:model="user.firstname">
                @if ($errors->has('user.firstname'))
                    <span class="text-danger">{{ $errors->first('user.firstname') }}</span>
                @endif
            </div>
            <div class="tm-form-field tm-form-fieldhalf">
                <label for="acdetails-lastname">{{__("Last name")}}</label>
                <input type="text" id="acdetails-lastname"  wire:model="user.lastname">
                @if ($errors->has('user.lastname'))
                    <span class="text-danger">{{ $errors->first('user.lastname') }}</span>
                @endif
            </div>
            <div class="tm-form-field  tm-form-fieldhalf">
                <label for="acdetails-displayname">{{__("Mobile")}}</label>
                <input type="text" id="acdetails-mobile"  wire:model="user.mobile" class="form-control">
                @if ($errors->has('user.mobile'))
                    <span class="text-danger">{{ $errors->first('user.mobile') }}</span>
                @endif
            </div>
            <div class="tm-form-field  tm-form-fieldhalf">
                <label for="acdetails-email">{{__("Email address")}}</label>
                <input type="email" id="acdetails-email"  wire:model="user.email">
                @if ($errors->has('user.email'))
                    <span class="text-danger">{{ $errors->first('user.email') }}</span>
                @endif
            </div>
            <div class="tm-form-field">
                <button type="submit" class="tm-button">{{__("Save Changes")}} <b></b></button>
            </div>
        </div>
    </form>
    <div class="mb-3 row">
        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
    </div>
</div>
