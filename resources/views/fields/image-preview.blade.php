@if($value)
    @if($type_view=="slider")
        <div class="row">
        @foreach(json_decode($value) as $image)
            <div class="col">
            <img src="{{data_get($image,'image')}}" alt="{{data_get($image,'title')}}" style="max-width: 200px;">
            <p>{{data_get($image,'title')}}</p>
            </div>
        @endforeach
        </div>
    @else
        <img src="{{$value}}" alt="Preview" style="max-width: 200px;">
    @endif
@endif

