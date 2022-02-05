<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <x-partials.header />
        
        <style>
            .gradient {
              background: linear-gradient(90deg, #5633d5 0%, #2fc0e4 100%);
            }
        </style>
    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

        <x-partials.nav />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <x-partials.footer />

        @livewireScripts
    </body>
</html>
