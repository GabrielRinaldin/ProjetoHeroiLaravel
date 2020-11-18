@php
 $attributes['placeholder'] = $attributes['placeholder'] ?? $label   
@endphp

<label class="{{$class ?? null}}">
    <span>{{$label ?? $input ?? "ERROR"}}</span>
    {!! Form::select($select, $value ?? null, $attributes)!!}
</label>