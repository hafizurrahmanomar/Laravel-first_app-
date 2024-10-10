<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>

    @yield('style')

</head>

<body>
    {{-- navbar section --}}

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    {{-- body section --}}
    @yield('content')



    {{-- javaScript --}}
    @yield('script')

</body>

</html>
