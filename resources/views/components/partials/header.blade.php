<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.svg') }}">

<title>@yield('title', 'QixTechBlog')</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/dropdown.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

@livewireStyles