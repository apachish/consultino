<div class="tm-myaccount-address">
    <p><b>{{__("Files accessed with your username")}}</b></p>
    <div class="row">
        @if($files->count())
        @foreach($files as $file)
            <div class="col-lg-6 col-md-6">
                <div class="tm-myaccount-address-billing">
                    <a href="#" class="edit-button">{{__("Edit")}}</a>
                    <h3>{{data_get($file,'firstName')." ".data_get($file,'lastName')}}</h3>
                    <address>
                        {{__("National Code")}}:  {{data_get($file,'national_code')}}<br>
                        {{__("Gender")}}       :  {{data_get($file,'gender')}}<br>
                        {{__("Address")}}      :  {{data_get($file,'address')}}
                    </address>
                </div>
            </div>
        @endforeach
        @else
            <div class="centered-div w-100">
                <div class="alert alert-info ">{{__("The file is not available for you.")}}</div>
            </div>
        @endif
    </div>
</div>
