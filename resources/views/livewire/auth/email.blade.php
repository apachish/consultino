<div class="tab-pane fade" id="bstab1-area2"
     role="tabpanel" aria-labelledby="bstab1-area2-tab" wire:ignore.self>
    @if (session()->has('message'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    <form wire:submit="send" class="tm-form tm-register-form tm-form-bordered">
        <div class="tm-form-inner">
            <div class="tm-form-field">
                <label for="register-username">{{__("Enter your Email:")}}*</label>
                <input type="text" wire:model="email" class="form-control @error('mobile') is-invalid @enderror" id="register-username" required="required">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
