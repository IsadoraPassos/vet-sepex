<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ env('APP_NAME') }} - @yield('title')
    </title>
</head>

<body>
@yield('content')

<script src="/js/app.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

@yield('scripts-vendors')
</body>