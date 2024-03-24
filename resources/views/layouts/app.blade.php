<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" >
        @include('includes.main-menu')

        @yield('content')
    </div>
</body>
</html>
