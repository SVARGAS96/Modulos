<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    
</body>
</html>