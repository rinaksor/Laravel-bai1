<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('content') - Unicode</title>
    {{-- <style type="text/css"> --}}
        @ield('css')
    {{-- </style> --}}
</head>
<body>
    <header>
        <h1>HEADER</h1>
    </header>
    <main>
        <aside>
            @section('sidebar')
                @include('clients.blocks.sidebar')
            @show
        </aside>
        <div class="content">
            @yield('content');
        </div>
    </main>
    <footer>
        <h1>FOOTER</h1>
    </footer>
    {{-- <script type="text/javascrip"> --}}
        @yield('js')
    {{-- </script> --}}
</body>
</html>