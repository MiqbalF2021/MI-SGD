<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MI SGD Bandung' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="bg-gray-50 overflow-x-hidden">
    @include('partials.header')
    <main class>
        @yield('content')
        @include('partials.up')
    </main>
    
    @include('partials.footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>
