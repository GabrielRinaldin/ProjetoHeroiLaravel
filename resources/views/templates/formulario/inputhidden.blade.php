@php
 $attributes['placeholder'] = $attributes['placeholder'] ?? $label   
@endphp

<div class="d-none">
<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "ERROR" }}</span>
    {!! Form::text($input, $value ?? null, $attributes) !!}
</label>
</div>