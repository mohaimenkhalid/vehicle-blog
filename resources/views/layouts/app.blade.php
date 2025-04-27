<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
@include('layouts.partials.header')

<main>
    @yield('content')
</main>

@include('layouts.partials.footer')
</body>
</html>
