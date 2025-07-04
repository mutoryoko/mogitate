<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/jsmath-cmti10">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    @yield('css')
    @livewireStyles
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="{{ route('products') }}">mogitate</a>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>