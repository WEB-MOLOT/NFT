<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta property="og:site_name" content="NFT projects">
    <meta property="og:title" content="NFT projects">
    <meta property="og:description" content="All NFT Presales">
    <meta property="og:url" content="#">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="img/avatar.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.svg">

    <style>
        .page.page_hide {
            opacity: 0;
            transition: 0.3s opacity;
        }

        @media (max-width: 760px) {
            .filter__bottom {
                display: none;
            }
        }
    </style>
</head>

<body>
<div class="page page_hide" id="app">
    @include('partials.header')
    @yield('content')

    @include('partials.modals')

    @include('partials.footer')
</div>
<link rel="preload" media="all" href="/css/libs.css" as="style" onload="this.rel='stylesheet'">
<link rel="preload" media="all" href="/css/index.css" as="style" onload="this.rel='stylesheet'">

<script src="/js/libs.js" rel="preload" as="script" defer></script>
<script src="/js/index.js" rel="preload" as="script" defer></script>

<script src="/js/app.js"></script>
</body>

</html>