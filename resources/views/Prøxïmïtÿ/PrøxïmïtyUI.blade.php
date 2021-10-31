<!DOCTYPE html>
<html class="dark"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PrøxïmïtyUI') }}</title>

    <!-- Styles -->
    <script src="{{asset('js/dark-mode.js')}}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
        <div class="absolute flex top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase">{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('prox-login') }}"
                   class="no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase">{{ __('Login') }}</a>
            @endauth
        </div>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray-600 dark:text-gray-200 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    {{ config('app.name', 'Proximity UI') }}
                </h1>
                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">

                    <li>
                        <a target="_blank" href="https://laravel.com/docs"
                           class="no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="Laravel Documentation">Laravel Documentation</a>
                    </li>
                    <li>
                        <a target="_blank"
                           class="cursor-pointer no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="Tailwind UI Kits">Tailwind UI Kits</a>
                    </li>

                    <li>
                        <a target="_blank" href="{{url('https://github.com/Pixelated21/Proximity-UI')}}"
                           class="no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="GitHub">GitHub</a>
                    </li>

                    <li>
                        <a target="_blank" href="{{url('https://www.jetbrains.com/phpstorm/')}}"
                           class="no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="GitHub">Php Storm</a>
                    </li>

                    <li>
                        <a target="_blank"
                           class="cursor-pointer no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="Laravel Packages">Laravel Packages</a>
                    </li>

                    <li>
                        <a target="_blank" href="{{url('https://source.unsplash.com')}}"
                           class="cursor-pointer no-underline text-sm font-normal text-teal-800 dark:text-gray-200  transition hover:border-gray-500  border-b border-transparent duration-300  uppercase"
                           title="Unsplash Random Image">{{__('Random Images')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{--<x-modal/>--}}
</body>
</html>
