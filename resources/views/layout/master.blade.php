<!Doctype html>
<html>
<head>
    <title>2019/2020 Election</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>
<body>

<!-- Page Content -->
@yield('content')

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>
