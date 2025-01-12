<div class="tm-edit-popup modal fade" id="tm-edit-popup" role="dialog" aria-hidden="true" wire:ignore.self>
    <div class="container">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="row justify-content-center">


                        <div class="tm-edit">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="tab-content" id="bstab1-ontent">
                                <form  wire:submit.prevent="save" >
                                    @csrf
                                    <div class="tm-form  tm-form-bordered">
                                        <div class="tm-form-inner">
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="file-firstName">{{ __("First name") }}</label>
                                                <input type="text"
                                                       class="form-control @error('file.firstName') is-invalid @enderror"
                                                       id="file-firstName"
                                                       wire:model="file.firstName"
                                                       required="required"
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
                                                       required="required"

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
                                                       required="required"

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
                                            <div class="tm-form-field float-left">
                                                <button type="submit" class="tm-button ">{{__("Edit")}} <b></b></button>

                                            </div>


                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
