<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Local Events</title>
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header class="header-section bg-[#fff] shadow-lg sticky top-0 z-50">
        @include('frontend.layout.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <h3>this is a footer section</h3>
    </footer>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</body>
</html>
