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
                <h2 class="text-3xl font-bold text-green-800">Invitation Letter Generator</h2>
                <form action="{{url('/invitation-generator')}}" method="post" class="w-full" target="_blank">
                    @csrf()
                    <div class="md:flex md:gap-4 border-b border-gray-300 pb-4 mb-4">
                        <div class="flex-1">
                            <div class="mt-4">
                                <label for="full_name">Full Name & Honorifics</label>
                                <input type="text" class="form-input" name="full_name" placeholder="e.g. Juan C. dela Cruz, PhD">
                            </div>
                            <div class="mt-4">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-input" name="designation">
                            </div>
                            <div class="mt-4">
                                <label for="greeting">Greeting Line Short Name</label>
                                <input type="text" class="form-input" name="greeting" placeholder="e.g. Dr. dela Cruz">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mt-4">
                                <label for="institution">Institution</label>
                                <input type="text" class="form-input" name="institution">
                            </div>
                            <div class="mt-4">
                                <label for="address">Company Address</label>
                                <input type="text" class="form-input" name="address">
                            </div>
                        </div>
                    </div>
                    <button class="px-4 py-2 rounded bg-green-800 text-white font-bold hover:bg-green-700" type="submit">
                        Generate Invitation Letter
                    </button>

                </form>
            </div>
        </div>

    </body>
