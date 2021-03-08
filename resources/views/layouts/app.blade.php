<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{config('app.name')}} </title>

    <link rel="stylesheet" href="css/app.css">


    <style>
        #menu-toggle:checked + #menu{
            display: block;
            padding-left: 8px;
        }
    </style>
</head>
<body>
    <div>
        @include('inc.navbar')
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>