@props([
    'title' => 'Unnamed',
    'value' => false,
    'disabled' => false,
    'selected' => false
])

<option @if($disabled) disabled @endif @if($selected) selected @endif {{$attributes->merge()}} @if($value !== false) value="{{$value}} @endif">{{$title}}</option>
