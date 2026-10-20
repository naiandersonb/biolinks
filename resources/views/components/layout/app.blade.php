<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="h-full" data-theme="sunset">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}
</body>

</html>