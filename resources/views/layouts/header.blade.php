<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=el-messiri:400,500,600,700&display=swap" rel="stylesheet" />
    <title>Харчо</title>
</head>

<style>
    h1{
        font-family: 'El Messiri', sans-serif;
    }
</style>

<body class="bg-amber-50 text-amber-900 h-screen flex justify-center content-between">
    @yield('main-content')
</body>

</html>
