@props([
    'cancel' => 'Unnamed Button',
    'action' => false,
    'alphName' => false,
    'model' => false,
    'loading' => false
])
<style>
    @keyframes loader-rotate {
        0% {
            transform: rotate(0);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .loader {
        border-right-color: transparent;
        animation: loader-rotate 1s linear infinite;
    }
</style>
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
                ">
                <div class="flex items-center justify-evenly gap-3">
                    @if($loading)
                        <span wire:loading wire:target="{{$loading}}"><div
                                class="w-5 h-5 border-2 border-orange-600 rounded-full loader"></div></span>
                    @endif

                    {{$action}}
                </div>

            </button>
        </div>
    @endif
</div>
