<div class="tm-myaccount-acdetails">
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
                <label for="acdetails-firstname">{{__("FUll Name")}}</label>
                <input type="text" id="acdetails-firstname"  wire:model="user.name">
                @if ($errors->has('user.name'))
                    <span class="text-danger">{{ $errors->first('user.name') }}</span>
                @endif
            </div>
            <div class="tm-form-field tm-form-fieldhalf">
                <label for="acdetails-lastname">{{__("Last name")}}</label>
                <input type="text" id="acdetails-lastname"  wire:model="user.email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="tm-form-field">
                <label for="acdetails-displayname">{{__("Mobile")}}</label>
                <input type="text" id="acdetails-displayname"  wire:model="user.mobile">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="tm-form-field">
                <label for="acdetails-email">{{__("Email address")}}</label>
                <input type="email" id="acdetails-email"  wire:model="user.email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
