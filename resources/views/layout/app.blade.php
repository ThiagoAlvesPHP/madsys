<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEDSYS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <script>
        // "global" vars, built using blade
        var BASE_URL = '{{ URL::asset('') }}';
    </script>
</head>

<body>
    <x-nav />

    <main class="main container">
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
