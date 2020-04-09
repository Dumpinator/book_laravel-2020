<html lang="{{ app()->getLocale() }}">
    <head>
        <title>App Name - @yield('title')</title>
        {{-- asset calcule le chemin vers le dossier des JS --}}
        <link href="{{ asset('css/app.css') }}" >
    </head>
    <body class="content-body" >
        @section('sidebar')
            This is the master sidebar.
            Un menu secondaire partout ...
        @show

        <div class="container">
            <h1>Les books de notre site</h1>
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>