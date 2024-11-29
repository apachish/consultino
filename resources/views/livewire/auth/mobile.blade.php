<div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel"
     aria-labelledby="bstab1-area1-tab" >
    @if (session()->has('message'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    <form wire:submit="send" class="tm-form tm-login-form tm-form-bordered">
        <div class="tm-form-inner">
            <div class="tm-form-field">
                <label for="login-mobile">{{__("Enter your mobile number:")}}*</label>
                <input type="text"
                       class="form-control @error('mobile') is-invalid @enderror" id="mobile" wire:model="mobile"
                       required="required">
                @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
            </div>
            <div class="tm-form-field">
                <button type="submit" class="tm-button">{{__("Send verification code")}} <b></b></button>
            </div>

        </div>
    </form>
    <div class="mb-3 row">
        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
    </div>
</div>
