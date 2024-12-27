{{--<x-persian-datepicker--}}
{{--    wirePropertyName="{{$name}}"--}}
{{--    label="{{$title}}"--}}
{{--    showFormat="{{$showFormat}}"--}}
{{--    returnFormat="X"--}}
{{--    :required="$required"--}}
{{--    :defaultDate="$defaultDate"--}}
{{--    :withTime="$setWithTime"--}}
{{--    :setNullInput="$setNullInput"--}}
{{--    :ignoreWire="$ignoreWire"--}}
{{--    :withTimeSeconds="$withTimeSeconds"/>--}}
{{--<div>--}}



{{--    <div>--}}
{{--        <label for="datepicker">تاریخ:</label>--}}
{{--        <input id="inlineExampleAlt" class="format-example form-control" />--}}
{{--    </div>--}}

{{--</div>--}}
@component($typeForm, get_defined_vars())
    <div data-controller="input"
         data-input-mask="{{$mask ?? ''}}"
    >
        <input id="inlineExampleAlt"
               placeholder="{{$placeholder ?? ''}}"
               {{ $attributes }} value="{{$value}}" class="form-control">
    </div>

@endcomponent
