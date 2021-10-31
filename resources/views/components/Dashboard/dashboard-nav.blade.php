<nav class="bg-white shadow dark:bg-gray-800">
    <div class=" px-5 py-3  md:flex">
        <div class="flex items-center justify-between">
            <div class=" w-36">
                <a class="text-2xl font-bold duration-300 text-gray-800 dark:text-white lg:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                   href="#">Amber-CXC</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="w-full md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 py-3 -mx-4 md:flex-row md:mx-0 md:py-0">
                <a href="{{route('dashboard')}}"
                   class="@if(Route::is('dashboard')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Dashboard</a>

                <a href="{{route('teacher')}}"
                   class="@if(Route::is('teacher')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Teachers</a>

                <a href="{{route('student')}}"
                   class="@if(Route::is('student')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Students</a>

                <a href="{{route('student-choice')}}"
                   class="@if(Route::is('student-choice')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Subject-Choice</a>

                <a href="{{route('subject')}}"
                   class="@if(Route::is('subject')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Subject</a>

                <a href="{{route('payment')}}"
                   class="@if(Route::is('payment')) bg-black dark:bg-blue-500 dark:hover:bg-blue-600 hover:bg-gray-600 @endif shadow-md px-2 py-1 text-sm font-medium text-gray-500 transition-colors duration-200 transform rounded dark:text-gray-200 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-900 hover:text-gray-200 md:mx-2">Payments</a>

            </div>

            @if(Route::is('student'))
                <div class="flex">
                    <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </span>

                        <input type="text"
                               class="w-full py-1 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                               placeholder="Search">
                    </div>

                    <div x-data="{modal1: true}">
                        <button @click="modal1 = !modal1"
                                class="bg-white duration-300 dark:hover:bg-orange-500 hover:bg-orange-500 px-2 py-1.5 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-700 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-200 hover:text-gray-200 md:mx-2">
                            Add Student
                        </button>

                        <x-create-modal alphName="modal1" title="Add Student">

                            <x-slot name="content">
                                <div class="flex justify-between items-center gap-5">
                                    <x-auth-input model="firstName" :error="$errors->first('firstName')"
                                                  placeholder="First Name" title="First Name"/>
                                    <x-auth-input model="lastName" :error="$errors->first('lastName')"
                                                  placeholder="Last Name" title="Last Name"/>
                                </div>

                                <div class="flex justify-between items-center gap-5">

                                    <x-auth-input model="date" :error="$errors->first('date')" type="date"
                                                  placeholder="Date" title="Date"/>
                                    <x-auth-select model="gender" title="Gender">
                                        <x-slot name="options">
                                            <x-select-options title="Male"/>
                                            <x-select-options title="Female"/>
                                        </x-slot>
                                    </x-auth-select>
                                    <x-auth-input model="phoneNumber" :error="$errors->first('phoneNumber')"
                                                  placeholder="Phone Number" title="Phone Number"/>
                                </div>


                                <x-auth-input model="email" :error="$errors->first('email')" placeholder="Email"
                                              title="Email"/>
                            </x-slot>

                            <x-slot name="button">
                                <x-modal-button alphName="modal1" cancel="Cancel" action="Add Student"/>
                            </x-slot>

                        </x-create-modal>

                    </div>


                </div>
            @endif
        </div>
    </div>
</nav>
