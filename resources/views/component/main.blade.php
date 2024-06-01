<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lupdate">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title>@yield('title')</title>
    @include('component.css')
</head>


<body>
    @include('component.header')

    @include('component.navbar')

    @yield('main')

    @include('component.footer')

    @include('component.script')
</body>

</html>