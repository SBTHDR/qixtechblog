<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.header />
    </head>
    <body>

        <x-partials.nav />

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <x-partials.footer />

        @livewireScripts
    </body>
</html>