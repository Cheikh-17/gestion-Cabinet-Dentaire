<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenue</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('bootstrap/css/sb-admin-2.css') }}">
</head>

<body>
    <h2>WELCOME</h2>

    @yield('content')
    <script src="{{ asset('bootstrap/js/demo/datatables-demo.js') }}"></script>
</body>

</html>
