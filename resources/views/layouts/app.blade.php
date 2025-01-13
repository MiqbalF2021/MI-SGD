<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MI SGD Bandung' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('kontak')
    @include('partials.footer')
</body>
</html>
