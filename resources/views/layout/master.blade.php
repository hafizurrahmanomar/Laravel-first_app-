<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>@yield('title')</title>

    @yield('style')

</head>

<body>
    <div class="container">
        {{-- navbar section --}}

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/extra">Extra</a>
        </nav>

        {{-- body section --}}
        @yield('content')

        {{-- Extra show --}}

        @section('extra')
            <h2>This parant Content</h2>
        @show
    </div>


    {{-- javaScript --}}
    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
