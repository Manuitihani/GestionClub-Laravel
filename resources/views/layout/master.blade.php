<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion du club de va'a - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>

@include('layout.navbar')
@include('layout.header')

<div class="container">

    @yield('content')
</div>

@include('layout.footer')

@yield('script')

{{--<script src="/js/app.js"></script>--}}
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>