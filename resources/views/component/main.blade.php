<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lupdate">
    <meta name="author" content="Enterprise Development">
    <link rel="icon" href="/assets/img/logo/laptop.png">

    <title>SpecFinder - @yield('title')</title>
    @include('component.css')

    @yield('style')
</head>

<body>
    @if(Request::is('/'))
    @include('component.header')
    @endif

    @include('component.navbar')

    @yield('main')

    @include('component.footer')

    @include('component.script')
</body>

</html>