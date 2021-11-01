<div>
    <!-- component -->
    <body class="antialiased h-screen font-sans bg-gray-200">

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

                        <input
                            wire:model="search"
                            type="text"
                            class="w-full shadow-md py-1 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                            placeholder="Search">
                    </div>

                    <div x-data="{modal14: false}">

                        <button @click="modal14 = !modal14"
                                class="bg-white shadow-md duration-300 dark:hover:bg-orange-500 hover:bg-orange-500 px-2 py-1.5 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded dark:text-gray-700 dark:hover:bg-gray-200 hover:bg-gray-900 dark:hover:text-gray-200 hover:text-gray-200 md:mx-2">
                            Add Teacher
                        </button>

                        <form wire:submit.prevent="addTeacher">
                            <x-create-modal alphName="modal14" title="Add Teacher">

                                <x-slot name="content">

                                    <div @click.prevent="{{$alphName = false}}" class="space-y-5 gap-10">

                                        <div class="md:grid md:grid-cols-3 flex flex-col gap-5 ">

                                            <x-auth-input model="first_nm" :error="$errors->first('first_nm')"
                                                          placeholder="First Name" title="First Name"/>

                                            <x-auth-input model="last_nm" :error="$errors->first('last_nm')"
                                                          placeholder="Last Name" title="Last Name"/>

                                            <x-auth-select model="subject_id" title="Subject"
                                                           :error="$errors->first('subject_id')">

                                                <x-slot name="options">
                                                    {{--                                                {{dd($subjects)}}--}}
                                                    @forelse($subjects as $subject)
                                                        @if ($loop->first)
                                                            <x-select-options :selected="true" title="Select Subject"/>
                                                            <x-select-options :value="$subject->id"
                                                                              :title="$subject->subject_nm"/>
                                                        @else
                                                            <x-select-options :value="$subject->id"
                                                                              :title="$subject->subject_nm"/>
                                                        @endif
                                                    @empty
                                                        <x-select-options title="No Data Available"/>
                                                    @endforelse
                                                </x-slot>

                                            </x-auth-select>

                                        </div>

                                        <x-auth-input model="email" :error="$errors->first('email')"
                                                      placeholder="First Name" title="Email"/>

                                            <x-auth-input-password model="password"
                                                                   :error="$errors->first('password')"
                                                                   placeholder="Password"
                                                                   title="Password"/>
                                    </div>
                                </x-slot>

                                <x-slot name="button">
                                    <x-modal-button loading="addTeacher" alphName="modal14" cancel="Cancel" action="Add Student Choice"/>
                                </x-slot>


                            </x-create-modal>
                        </form>


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
        </div>
    </nav>


    <div class="container mx-auto px-4 sm:px-8">
        <div class="mt-4">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Teacher</h2>
            </div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                First Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Last Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Email
                            </th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Subject
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($teachers as $teacher)
{{--                            {{$teacher->subject}}--}}
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-center text-sm">
                                    <div class="ml-3">
                                        <p class="text-gray-900 font-medium whitespace-no-wrap">
                                            {{$teacher->first_nm}}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-center text-sm">
                                    <div class="ml-3">
                                        <p class="text-gray-900 font-medium whitespace-no-wrap">
                                            {{$teacher->last_nm}}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-center text-sm">
                                    <div class="ml-3">
                                        <p class="text-gray-900 font-medium whitespace-no-wrap">
                                            {{$teacher->user->email}}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-center text-sm">
                                    <div class="ml-3">
                                        <p class="text-gray-900 font-medium whitespace-no-wrap">
                                            {{$teacher->subject->subject_nm}}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b  border-gray-200 bg-white text-center text-sm">
                                    <p class="text-white font-medium font-semibold @if($teacher->user->status === 1) bg-green-500 @elseif($teacher->user->status === 0) bg-red-500 @elseif($teacher->user->status === 3) bg-yellow-300 text-black animate-pulse @endif rounded py-2 text-center whitespace-no-wrap">
                                        @if($teacher->user->status === 1) Authorized @elseif($teacher->user->status === 0)
                                            Rejected @elseif($teacher->user->status === 3) Pending @endif
                                    </p>
                                </td>

                                <td class="px-5  py-5 border-b border-gray-200 bg-white text-center text-sm">

                                    @if ($teacher->user->status !== 3)
                                        <button disabled
                                                class="bg-gray-400 opacity-50 cursor-not-allowed duration-300 shadow-sm hover:shadow-md px-4 py-2 font-medium text-white rounded-md whitespace-no-wrap">
                                            Actions Unavailable
                                        </button>

                                    @else
                                        <div class="gap-2 flex justify-center">
                                            <button wire:click="authorizeTeacher({{$teacher}})"
                                                    class=" bg-green-400 duration-300 shadow-sm hover:shadow-md px-4 py-2 font-medium text-white rounded-md whitespace-no-wrap">
                                                Authorize
                                            </button>
                                            <button wire:click="declineTeacher({{$teacher}})"
                                                    class="bg-red-600 duration-300 shadow-sm hover:shadow-md px-4 py-2 font-medium text-white rounded-md whitespace-no-wrap">
                                                Decline
                                            </button>
                                        </div>
                                    @endif

                                </td>
                            </tr>
                        @empty
                            <td colspan="6" class="px-5 py-5 border-b border-gray-200 bg-white text-center text-sm">
                                <p class="text-gray-900 text-center font-semibold text-2xl whitespace-no-wrap">
                                    No Data Available
                                </p>
                            </td>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                {{$teachers->links()}}
            </div>
        </div>
    </div>
    </body>
</div>
