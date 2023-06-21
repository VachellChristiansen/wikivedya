<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="//en.wikipedia.org/w/load.php?debug=false&lang=en&modules=mediawiki.legacy.commonPrint,shared|skins.vector.styles&only=styles&skin=vector&*">
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="w-full h-screen">
            <x-content :$current :$lang :$article ></x-content>
        </div>
        @livewireScripts
    </body>
</html>
