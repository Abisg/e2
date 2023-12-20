<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <a href="/">
            <img id="logo" src= '/images/Guess-the-word-title.png' alt="The Game logo">
        </a>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>
