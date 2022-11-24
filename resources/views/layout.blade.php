<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body class="bg-gradient-to-r from-slate-700 to-slate-900">
    @include('header')
    @yield('content')
    @include('footer')
</body>

</html>