<x-persian-datepicker
    wirePropertyName="livewire-component.property"
    label="Custom Label"
    showFormat="jYYYY/jMM/jDD"
    returnFormat="X"
    :required="true"
    :defaultDate="date('Y-m-d H:i:s')"
    :setNullInput="true"
    :withTime="true"
    :ignoreWire="true"
    :withTimeSeconds="true"/>
