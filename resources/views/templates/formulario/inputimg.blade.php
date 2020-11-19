@php
 $attributes['placeholder'] = $attributes['placeholder'] ?? $label   
@endphp

<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "ERROR" }}</span>
    {!! Form::image($input, $value ?? null, $attributes) !!}
</label>