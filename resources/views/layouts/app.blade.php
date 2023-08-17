<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" defer></script>
    <script src="../resources/js/app.js" defer></script>
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>@yield('title-block')</title>
</head>
<body>
    
    @include('inc.header')
    @yield('content')
</body>
</html>