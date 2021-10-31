@props([
'title' => 'Unnamed Modal',
'alphName' => false,
])


<div x-show="{{$alphName}}"
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-300"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">

    <div class="overflow-y-auto fixed inset-0 z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="
          flex
          items-end
          justify-center
          w-screen
          px-4
          text-center
          sm:block sm:p-0
        ">
            <div class="w-screen  flex items-center bg-black bg-opacity-80  justify-center min:h-screen ">
                <div
                    class="bg-gray-100 dark:bg-gray-700 rounded-md p-14 max:h-2/3  w-10/12">
                    <h1 class="text-3xl dark:text-gray-100  font-medium -mt-5 mb-5">{{$title}}</h1>

                    {{$content}}

                    {{$button}}
                </div>


            </div>
        </div>
    </div>

</div>
