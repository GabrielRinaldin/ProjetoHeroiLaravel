@php
 $attributes['placeholder'] = $attributes['placeholder'] ?? $label   
@endphp


<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "ERROR" }}</span>
    {!! Form::time($input, $value ?? null, $attributes) !!}
</label>
