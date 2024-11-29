    <div class="tm-loginregister">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
        <div class="tab-content" id="bstab1-ontent">
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
                <form wire:submit="verify" class="tm-form tm-login-form tm-form-bordered">
                    <div class="tm-form-inner">
                        <div class="tm-form-field">
                            <label for="login-mobile">{{__("Enter your verification code to :email_mobile :",['email_mobile' => $email_mobile ])}}*</label>
                            <input type="text"
                                   class="form-control @error('code') is-invalid @enderror" id="code" wire:model="code"
                                   required="required">
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                        <div class="tm-form-field">
                            <button type="submit" class="tm-button">{{__("Code verification")}} <b></b></button>
                        </div>
                        <div class="grid gap-y-2 text-center" x-data="otpSend(60)" x-init="init()">
                            <template x-if="getTime() <= 0">
                                <form wire:submit="resendOtp">
                                    <button type="submit">
                                        Resend OTP
                                    </button>
                                    <input type="hidden" wire:model="otp">
                                </form>
                            </template>
                            <template x-if="getTime() > 0">
                                <small>
                                    Resend OTP in
                                    <span x-text="formatTime(getTime())"></span>
                                </small>
                            </template>
                        </div>
                    </div>
                </form>
                <div class="mb-3 row">
                    <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                </div>
            </div>


        </div>



    </div>

