<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Becky Argabright - Certified Massage Therapist</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <x-guest-nav />
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex text-center justify-center mt-8 p-8">                    
                    <h2 class="text-4xl font-extrabold">Becky Argabright CMT</h2>
                </div>
                <div class="flex text-center justify-center">                    
                    <img src="/images/becky-logo.png" />
                </div>
                <div class="mt-8 pt-8 flex text-center justify-center">
                    
                    <div class="flex-row">
                        <div class="flex grow m-4 p-4 text-center justify-center">30 Years of Experience</div>
                        <div class="flex grow m-4 p-4 text-center justify-center">Deep Tissue</div>
                        <div class="flex grow m-4 p-4 text-center justify-center">Myofascial Release</div>
                    </div>
                    <div class="flex-row">
                        <div class="flex grow m-4 p-4 text-center justify-center">Cranio-Sacral Manipulation</div>
                        <div class="flex grow m-4 p-4 text-center justify-center">Private Office</div>
                        <div class="flex grow m-4 p-4 text-center justify-center">Downtown Boise</div>
                    </div>
                    <div class="flex-row">
                    <div class="flex grow m-4 p-4 text-center justify-center">Therapeutic Masssage</div>
                    <div class="flex grow m-4 p-4 text-center justify-center">Hot Stones</div>
                    <div class="flex grow m-4 p-4 text-center justify-center">Licensed and Insured</div>
                </div>
            </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start sm:ms-0 ms-4">
                        &copy; All rights reserved Becky Argrabright {{ date('Y') }}
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0 ms-4">
                        Happily running Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
