<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->ga }}"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $page->ga }}', { 'anonymize_ip' : true} );
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
        <meta name="description" content="{{ $page->og_description }}">
        <meta name="keywords" content="{{ $page->keywords }}">

        <meta property="og:site_name" content="{{ $page->og_site_name }}">
        <meta property="og:title" content="{{ $page->og_title }}">
        <meta property="og:description" content="{{ $page->og_description }}">
        <meta property="og:image" content="{{ $page->og_image }}">
        <meta property="og:url" content="{{ $page->og_url }}">
        <meta property="og:type" content="website">
        <meta property="og:image:alt" content="{{ $page->og_image_alt }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:alt" content="{{ $page->og_image_alt }}">

        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="{{ $page->favicon }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    
    </head>
    <body class="bg-gray-200 overflow-x-hidden">
        @yield('body')
    </body>
</html>