<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
</head>
<body>
    <h1>Stef</h1>
    @yield('content')
</body>
</html>