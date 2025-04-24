<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PSITE - Central Visayas</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div class="wrapper">
            <a href="{{url('/')}}">
                <img src="{{asset('images/regcon2025graphics_cropped.jpg')}}" alt="">
            </a>
            <div class="bg-green-800 flex justify-start">
                <a href="{{url('/')}}" class="nav-link">Home</a>
            </div>
            <div class="bg-white p-8">
                <h2 class="text-3xl font-bold text-green-800">Invitation Generator</h2>
            </div>
        </div>

    </body>
