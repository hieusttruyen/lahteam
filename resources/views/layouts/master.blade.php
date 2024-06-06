<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">



    {{-- Styles css common --}}

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img\Star 7.png') }}" />

    <!--Add this-->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> --}}

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    @yield('style-libraries')
    {{-- Styles custom --}}
    @yield('styles')
</head>

<body>
    @include('partial.header')

    @yield('content')

    @include('partial.footer')

    {{-- Scripts js common --}}
    {{-- <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> --}}
    {{-- Scripts link to file or js custom --}}
    @yield('scripts')
</body>

</html>
