<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('dataTitle')</title>
    <link rel="stylesheet" href="{{  asset('css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@400;700&display=swap');
*{
    font-family: 'Ubuntu Mono',sans-serif;
}
</style>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>