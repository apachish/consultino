<div class="tm-myaccount-address" wire:ignore.self>
    <p><b>{{__("Files accessed with your username")}}</b></p>
    <div class="row">
        @if($files->count())
            @if (session()->has('message-edit'))
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-md-8">
                        <div class="alert alert-success" role="alert">
                            {{ session('message-edit') }}
                        </div>
                    </div>
                </div>
            @endif
        @foreach($files as $file)
            <div class="col-lg-6 col-md-6">
                <div class="tm-myaccount-address-billing">
                    <a title="{{__("Edit")}}" class="edit-button" type="button" @click="$dispatch('set-file', { file_id: '{{data_get($file,'id')}}' })"
                            data-toggle="modal" data-target="#tm-edit-popup">{{__("Edit")}}</a>
                    <h3>{{data_get($file,'firstName')." ".data_get($file,'lastName')}}</h3>
                    <address>
                        {{__("National Code")}}:  {{data_get($file,'national_code')}}<br>
                        {{__("Gender")}}       :  {{$file->getGenderLabel()}}<br>
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
    <livewire:account.edit-file/>
    @script
    <script>

        $wire.on('file-updated', (event) => {
            $('#tm-edit-popup').modal('hide');




            // ...
        });
    </script>
    @endscript
{{--    <script>--}}
{{--        --}}
{{--        window.livewire.on('FileUpdated', () => {--}}
{{--            alert(1);--}}
{{--            $('#tm-edit-popup').modal('hide');--}}
{{--        })--}}
{{--    </script>--}}
</div>
