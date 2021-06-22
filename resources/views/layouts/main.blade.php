<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://unpkg.com/vue-agile@1.1.3/dist/VueAgile.umd.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-agile@1.1.3/dist/VueAgile.css">
</head>
<body>
    <div id="app" style="margin-bottom: 0px;">
        <topo-component titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}" logo="{{ asset('img/logo.png') }}">
        </topo-component>
        @yield('banner')
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <rodape-component></rodape-component>
        </footer>
    </div>
</body>
</html>
