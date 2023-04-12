<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    {{-- misal ingin buat default yield/section --}}

    @section('header')
    <h1>Default Header</h1>
    @show

    @section('content')
    <h1>Default Content</h1>
    @show


    {{-- @yield('header')
    @yield('content') --}}
</body>
</html>