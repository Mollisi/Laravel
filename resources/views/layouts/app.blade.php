<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            max-width:1200px;
            margin:auto;
            background: #cbd5e0;
        }
        </style>
     
</head>

<body>
    <x-header />
    <x-container>
        @yield('content')
    </x-container>
</body>

</html>