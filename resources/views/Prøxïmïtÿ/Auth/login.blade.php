@extends('Prøxïmïtÿ.Auth.auth-layout')

@section('page_title','Prøxïmïtÿ Login')

@section('content')


    <div class="bg-gray-100 dark:bg-gray-900 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center ">


        <div class="w-full h-full flex flex-col justify-evenly">

            <h1 class="text-2xl  md:text-4xl font-bold leading-tight mt-12 dark:text-gray-200">Log into your account</h1>

            @livewire('login')

            <div>
                <hr class=" border-gray-500 w-full">

                <p class="text-center mt-8 dark:text-gray-200">Powered By Prøxïmïtÿ</p>
            </div>
    </div>

@endsection
