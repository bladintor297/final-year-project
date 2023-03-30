<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FYP</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        {{-- jQuery --}}
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css'>

        {{-- CSS --}}
        <link rel='stylesheet' href='{{ URL::asset('assets/css/style.css'); }}'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

        {{-- Navigation Bar --}}
        @include('inc.navbar')

        {{-- Error/Success Prompts --}}
        @include('inc.messages')

        {{-- Body Content --}}
        @yield('content')


        {{-- JS --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <script src='{{ URL::asset('assets/js/home.js'); }}'></script>
        <script src='{{ URL::asset('assets/js/function.js'); }}'></script>

    </body>
</html>
