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
                <img src="{{asset('images/regcon2025grpahics.jpg')}}" alt="">
            </a>
            <div class="p-8">
                <h1 class="text-4xl text-green-700 font-bold">Welcome IT Educators!</h1>
                <div class="mt-4">
                    <div class="font-bold">Welcome to the PSITE Central Visayas Regional Convention 2025!</div>
                    Join us for a celebration of innovation, collaboration, and the bright future of
                    IT education in the region! As we mark another milestone in our journey, this
                    year's convention promises to be an inspiring gathering of educators, professionals,
                    and industry leaders. Expect engaging discussions, transformative ideas,
                    and meaningful connections—all in the spirit of advancing technology education
                    and strengthening our PSITE community. Don't miss this chance to be part of
                    something impactful and unforgettable!
                </div>
                <div class="mt-4">
                    <div class="font-bold">
                        Set your calendars for June 2 to 4, 2025, as we take you to the
                        vibrant and scenic Dumaguete City!
                    </div>
                    Get ready for three exciting days packed with informative talks,
                    product showcases, and so much more. Enjoy our warm welcome party,
                    an evening of fun and camaraderie during our socialization night,
                    and grab your chance to win exciting raffle items and surprises
                    throughout the event. Whether you're here to learn, network, or
                    simply enjoy the company of fellow IT educators, the PSITE
                    Central Visayas Regional Convention 2025 is the place to be.
                    See you in Dumaguete!
                </div>
            </div>
            <div class="p-8 bg-green-800 text-white">
                <h2 class="text-3xl font-bold">How to Join?</h2>
                <div class="flex align-center">
                    <div class="flex-1">
                        To join our Regional Convention, please create an account in our
                        <a href="{{url('https://is.psite7.org')}}" class="text-cyan-300" target="_blank">PSITE Information System</a> if you don't already have one.
                        Once you get an account, you login to your account and click on the Convention tab. Have your proof of payment ready and
                        click on Join to submit your registration.
                    </div>
                    <div class="w-[200px] flex align-center justify-center">
                        <div>
                            <a href="{{url('https://is.psite7.org')}}" class="bg-cyan-300 px-4 py-2 rounded text-cyan-900 font-bold" target="_blank">Join Here!</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-bold">Customizable Invitation Letter</h2>
                    <div>
                        We can generate for you a customized invitation letter. Simply click on the button and
                        provide the necessary information and a custom invitation letter .pdf file shall be generated for you.
                    </div>
                </div>
                <a href="{{url('/invitation-generator')}}" class="bg-green-700 text-white px-4 py-2 rounded font-bold">Generate</a>
            </div>
        </div>
    </body>
</html>
