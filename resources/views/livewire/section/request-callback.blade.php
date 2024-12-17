<div id="advice" class="tm-section callback-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-callback">
                    <h2>{{__("Request for advice")}}</h2>
                    <p>{{__("If you need advice, you can send your request so that colleagues related to that department will contact you.")}}</p>
                    @if($errors)
                        <span>{{ $errors->first() }}</span>
                    @endif
                    <form wire:submit="sendRequest" class="tm-form">
                        <div class="tm-form-inner">
                            <div class="tm-form-field">
                                <input type="text" placeholder="{{__("Enter Full Name")}}*" class="form-control @error('advice.full_name') is-invalid @enderror" id="advice.full_name" wire:model="advice.full_name"
                                required="required">
                                @if ($errors->has('advice.full_name'))
                                    <span class="text-danger">{{ $errors->first('advice.full_name') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <input type="text" placeholder="{{__("Phone Number")}}*"  class="form-control @error('advice.mobile') is-invalid @enderror" id="advice.mobile" wire:model="advice.mobile">
                                @if ($errors->has('advice.mobile'))
                                    <span class="text-danger">{{ $errors->first('advice.mobile') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field tm-form-fieldhalf">
                                <x-persian-datepicker
                                    wirePropertyName="advice.date"
                                    label=""
                                    showFormat="jYYYY/jMM/jDD"
                                    returnFormat="X"
                                    :required="true"
                                    :defaultDate="date('Y-m-d')"
                                    :setNullInput="true"
                                    :withTime="false"
                                    :ignoreWire="true"
                                    :withTimeSeconds="true"/>

                                @if ($errors->has('advice.date'))
                                    <span class="text-danger">{{ $errors->first('advice.date') }}</span>
                                @endif
                            </div>
                            <div class="tm-form-field">

                                <select class="form-control @error('advice.expertise_id') is-invalid @enderror" id="advice.expertise_id"
                                        wire:model="advice.expertise_id">
                                    <option value="">{{__("Select Categories")}}</option>
                                    @foreach($expertises as $expertise)
                                        <option value="{{data_get($expertise,"id")}}">{{data_get($expertise,"name")}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('advice.expertise_id'))
                                    <span class="text-danger">{{ $errors->first('advice.expertise_id') }}</span>
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
