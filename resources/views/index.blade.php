<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script src="/js/global.js"></script>
    @stack('head-scripts')
</head>
<body>

<header>

</header>

<main>
    @yield('content')

    <aside>
    @section('sidebar')
        This is the master sidebar.
    @show
    </aside>
</main>

<footer>

    @include('partials.social-networks')

</footer>

</body>
</html>