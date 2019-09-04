<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strava Clone</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')
</head>
<body class="@yield('body_class')">

<div class="flex-column">
    @include('web.partials.header')
    @yield('content')
    @include('web.partials.footer')
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
