@props([
   'title' => 'Unnamed Select Input',
   'name' => false,
   'id' => false,
   'label' => true,
   'model' => false,
   'error' => false
])
<div class="flex w-full flex-col">

{{--Label--}}
@if ($label !== false)
    <label @if($id !== false)
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

<select
    wire:model="{{$model}}"
    {{$attributes->merge(['class' =>'
                          form-select
                          w-full
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
                          text-gray-400
                          focus:outline-none
                          focus:border-transparent
                          focus:ring-2
                          focus:ring-gray-400
                          focus:ring-offset-2
                          focus:ring-offset-gray-900
                          dark:bg-gray-600
                          dark:text-gray-100
                          '])}}

    @if ($id !== false)
    id="{{$id}}"
    @endif

    @if ($name !== false)
    name="{{$name}}"
    @endif
        >

    {{$options}}

</select>
</div>
