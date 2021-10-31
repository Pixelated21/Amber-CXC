<div>
    @if (session()->has('alert'))
        <div x-data="{isOpen: true}">
            <div x-show="isOpen"  role="alert" class="relative -mt-5 justify-between flex p-4 text-white rounded-lg bg-gradient-to-b from-red-600 to-red-700 ">

                <div class="max-w-xs">
                    <p class="font-bold">{{session('alert')}}</p>
                </div>

                <button @click="isOpen = !isOpen"  type="button" class=" right-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
        </div>

    @endif
    <x-form wireSubmit="login" class="space-y-3" action="{{route('prox-login')}}">

        <x-slot name="body">
            <x-auth-input :error="$errors->first('email')" model="email" title="Email" name="email" placeholder="Email" autofocus/>

            <x-auth-input-password  :error="$errors->first('password')" model="password" title="Password" name="password" placeholder="Password"/>


            <x-auth-button class="bg-purple-600 font-semibold text-gray-300  hover:bg-purple-700 hover:text-white"
                           title="Login"/>
        </x-slot>
    </x-form>
</div>
