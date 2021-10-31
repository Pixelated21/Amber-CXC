@props([
    'cancel' => 'Unnamed Button',
    'action' => false,
    'alphName' => false,
    'model' => false,
])

<div class="mt-6 md:flex flex-col md:flex-row md:justify-around sm:flex">
    <div class="mt-3 rounded-lg sm:mt-0">

        <button
            @if ($model)
            wire:click="$emit('{{$model}}')"
            @endif
                @if ($alphName)
            @click.prevent="{{$alphName}} = false"

            @endif
            class="
                  items-center
                  block
                  px-10
                  py-3.5
                  text-base
                  font-medium
                  text-center text-white
                  transition
                  duration-500
                  ease-in-out
                  transform
                  bg-red-500
                  shadow-md
                  hover:shadow-2xl
                  hover:bg-red-600
                  rounded-xl
                  w-full
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-gray-500
                "> {{$cancel}}
        </button>

    </div>
    @if ($action)

    <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
        <button @click="{{$alphName = false}}"
            type="submit"
            class="
                  items-center
                  block
                  px-10
                  py-3.5
                  w-full
                  text-base
                  font-medium
                  text-center text-white
                  transition
                  duration-500
                  ease-in-out
                  transform
                  bg-blue-400
                  rounded-xl
                  hover:bg-blue-500
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-blue-500
                "> {{$action}}

        </button>
    </div>
    @endif
</div>
