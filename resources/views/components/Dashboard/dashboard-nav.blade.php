<nav class="bg-white shadow dark:bg-gray-800">
    <div class=" px-5 py-3  md:flex">
        <div class="flex items-center justify-between">
            <div class=" w-36">
                <a class="text-2xl font-bold duration-300 text-gray-800 dark:text-white lg:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                   href="{{route('dashboard')}}">Amber-CXC</a>
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
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button
                    type="submit"
                    class="bg-white shadow-md duration-300 dark:hover:bg-red-700 hover:bg-red-600 px-2 py-1.5 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-700 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-200 hover:text-gray-200 md:mx-2">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
