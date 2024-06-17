@extends('layouts.layout')

@section('content')
        
    <div class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="flex flex-col items-center justify-center relative w-full max-w-2xl px-6 lg:max-w-7xl">
                   
                        <img class="w-1/2 rounded-xl" src="img/images.png" alt="laravel">
                        <h1 class="font-bold text-3xl mt-3">the tehran best pizzas</h1>
                        <p class="text-xl text-white">{{ session('mssg') }}</p>
                        <a href="/pizzas/create" class="text-blue-600 text-xl mt-10 underline">Order the pizza</a>

                </div>
            </div>
        </div>
    </div>
@endsection