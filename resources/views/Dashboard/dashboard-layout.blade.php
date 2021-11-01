<!doctype html>
<html class="dark"  lang="en">
<head>
    @livewireStyles
    <script src="{{asset('js/dark-mode.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

<div class=" h-screen">
    <x-Dashboard.dashboard-nav/>


    <section class="w-full bg-white">
        <div class="
          relative
          items-center
          w-full
          px-5
          py-12
          mx-auto
          md:px-12
          lg:px-16
          max-w-7xl
          lg:py-24
        ">
            <div class="flex w-full mx-auto text-left">
                <div class="relative inline-flex items-center mx-auto align-middle">
                    <div class="text-center">
                        <h1 class="
                  max-w-5xl
                  text-2xl
                  font-bold
                  leading-none
                  tracking-tighter
                  text-neutral-600
                  md:text-5xl
                  lg:text-6xl lg:max-w-7xl
                ">Your Student <br class="hidden lg:block"> Management System </h1>
                        <p class="
                  max-w-xl
                  mx-auto
                  mt-8
                  text-base
                  leading-relaxed
                  text-gray-300
                "> Manage all your students easily with Amber-CXC </p>
                        <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
                            <div class="mt-3 rounded-lg sm:mt-0">
                                <a href="{{route('teacher')}}" class="

                      items-center
                      block
                      px-5
                      py-4
                      text-base
                      font-medium
                      text-center
                      text-blue-400
                      transition
                      duration-500
                      ease-in-out
                      transform
                      lg:px-10
                      shadow-md
                      hover:text-orange-500
                      hover:shadow-2xl
                      rounded-xl
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-blue-500
                    "> View Teacher
                                </a>
                            </div>
                            <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
                                <a href="{{route('student')}}" class="
                      items-center
                      block
                      px-5
                      lg:px-10
                      py-3.5
                      text-base
                      font-medium
                      text-center
                       text-blue-400
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border-2 border-white
                      shadow-md
                      hover:text-orange-500
                      hover:shadow-2xl
                      rounded-xl
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-gray-500
                    "> View Students
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>



</body>
</html>
