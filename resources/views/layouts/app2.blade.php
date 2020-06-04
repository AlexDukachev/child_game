<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Child Game</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/main.css') }}">
    @yield('css')
</head>
<body>
    
    <section class="section-block-wrapper">
        <div class="parallax_bg d-none d-lg-block d-xl-block">
            <ul id="scene" class="scene" data-scalar-x="10" data-scalar-y="4">
                <li class="layer" data-depth="0.00"><img id="sun" src="{{ asset('build/img/sun.png') }}" alt=""></li>
                <li class="layer" data-depth="0.20"><img id="globe" src="{{ asset('build/img/globe.png') }}" alt=""></li>
                <li class="layer" data-depth="0.30"><img id="cloud" src="{{ asset('build/img/clouds.png') }}" alt=""></li>
            </ul>
        </div>
        <div id="overlay_slider_land" class="overlay_slider_land d-none d-lg-block d-xl-block"></div>
        <div class="container">
            @yield('content')
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('build/js/parallax.min.js') }}"></script>
    <script src="{{ asset('build/js/main.js') }}"></script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(64633369, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/64633369" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>