@props([
    'method' => 'post',
    'action' => '#',
    'wireSubmit' => false
])

<form
    {{$attributes->merge()}}
    @if ($wireSubmit)
    wire:submit.prevent="{{$wireSubmit}}"
    @endif
    method="{{$method}}" action="{{$action}}">
    @csrf

    {{$body}}

</form>
