<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyApp')</title>
</head>
<body>
    <ul>
        <li> <a href="/"> Home </a> </li> 
        <li> <a href="/contact"> Contact </a> </li>
        <li> <a href="/about"> About </a> </li>
    </ul>
    

    @yield('content')

</body>
</html>