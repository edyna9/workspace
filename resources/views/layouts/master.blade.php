<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/aeb1e90743.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>
    @include('layouts/_nav')

    @yield('content')
</body>
</html>