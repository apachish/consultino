<div id="advice" class="tm-section callback-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-callback">
                    <h2>{{__("Request for advice")}}</h2>
                    <p>{{__("If you need advice, you can send your request so that colleagues related to that department will contact you.")}}</p>
                    <form wire:submit="sendRequest" class="tm-form">
                        <div class="tm-form-inner">
                            <div class="tm-form-field">
                                <input type="text" placeholder="{{__("Enter Full Name")}}*" class="form-control @error('advice_full_name') is-invalid @enderror" id="advice_full_name" wire:model="advice_email"
                                required="required">
                                @if ($errors->has('advice_full_name'))
                                    <span class="text-danger">{{ $errors->first('advice_full_name') }}</span>
                                @endif
                            </div>

                            <div class="tm-form-field">
                                <select class="form-control @error('advice_category') is-invalid @enderror" id="advice_category" wire:model="advice_category">
                                    <option value="a">{{__("Select Categories")}}</option>
                                </select>
                                @if ($errors->has('advice_category'))
                                    <span class="text-danger">{{ $errors->first('advice_category') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <input type="text" placeholder="{{__("Phone Number")}}*"  class="form-control @error('advice_mobile') is-invalid @enderror" id="advice_mobile" wire:model="advice_mobile">
                                @if ($errors->has('advice_mobile'))
                                    <span class="text-danger">{{ $errors->first('advice_mobile') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <input type="text" data-toggle="datepicker" placeholder="{{__("Select Date")}}*"
                                       class="form-control @error('advice_date') is-invalid @enderror" id="advice_date" wire:model="advice_date">
                                @if ($errors->has('advice_date'))
                                    <span class="text-danger">{{ $errors->first('advice_date') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field">
                                <button type="submit" class="tm-button">{{__("Send request")}}</button>
                            </div>
                        </div>
                    </form>
                    <div class="mb-3 row">
                        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tm-successreport">
                        <img src="{{url("images/opinion-concept-illustration_114360-4979.jpg")}}">
                </div>
            </div>
        </div>
    </div>
</div>
