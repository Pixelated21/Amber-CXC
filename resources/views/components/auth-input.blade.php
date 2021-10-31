@props([
    'title' => 'Unnamed Text Input',
    'name' => false,
    'label' => true,
    'id' => false,
    'placeholder' => false,
    'value' => false,
    'model' => false,
    'error' => false,
    'type' => 'text'

])

{{--Label--}}
<div class="flex flex-col">
@if ($label)
    <label {{$attributes->merge()}}

           @if($id)
           for="{{$id}}"
           @endif

           class="block text-sm mb-1 font-medium text-neutral-600 dark:text-gray-300">

        <div class="flex">

            {{$title}}

            @if ($error)
                <p> :<span class="text-xs text-red-700 dark:text-red-500"> {{$error}}</span></p>
            @endif
        </div>


    </label>
@endif
{{--End Label--}}


<input {{$attributes->merge(['class' => 'block
                          w-full
                          form-input
                          px-5
                          py-3
                          text-base text-neutral-600
                          placeholder-gray-300
                          transition
                          duration-500
                          ease-in-out
                          transform
                          border border-transparent
                          rounded-lg
                          bg-gray-50
                          focus:outline-none
                          focus:border-transparent
                          focus:ring-2
                          focus:ring-gray-400
                          focus:ring-offset-2
                          focus:ring-offset-gray-900
                          placeholder-gray-400
                          dark:bg-gray-600
                          dark:text-gray-100
                          dark:placeholder-gray-200

                          '])}}
       @if ($model)
       wire:model="{{$model}}"
       @endif

       @if ($id)
       id="{{$id}}"
       @endif

       @if ($value)
       value="{{$value}}"
       @endif


       @if ($name)
       name="{{$name}}"
       @endif


       @if ($placeholder)
       placeholder="{{$placeholder}}"
       @endif

       autocomplete="off"
       type="{{$type}}"
>
</div>
