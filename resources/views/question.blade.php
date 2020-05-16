<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Game</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/main.css') }}">
</head>
<body>
    
    <section class="section-block-wrapper">
        <div class="parallax_bg hidden-sm hidden-xs">
            <ul id="scene" class="scene" data-scalar-x="10" data-scalar-y="4">
                <li class="layer" data-depth="0.00"><img id="sun" src="{{ asset('build/img/sun.png') }}" alt=""></li>
                <li class="layer" data-depth="0.20"><img id="globe" src="{{ asset('build/img/globe.png') }}" alt=""></li>
                <li class="layer" data-depth="0.30"><img id="cloud" src="{{ asset('build/img/clouds.png') }}" alt=""></li>
            </ul>
        </div>
        <div id="overlay_slider_land" class="overlay_slider_land"></div>
        <div class="container">
            <div class="questions">
                <div class="question_single_image">
                    <figure>
                        <div class="question_single_image_wrapper">
                            <img class="vc_single_image-img" src="https://z9v7g9z9.stackpathcdn.com/demo-3/wp-content/uploads/sites/6/2019/03/image-background-8-min.png" width="438" height="431" alt="image-background-8-min" title="image-background-8-min" />\
                        </div>
                    </figure>
                </div>
                <div class="q-element">
                    <div class="q-box" style="background-color:#ffffff; " data-hover="background-color: #0fbaf4;">
                        <div class="content">
                            <h3 class="title">Creative activities</h3>
                            <div class="description" style="margin:0 0 13px; line-height: 1.5;">Help developing your child's creativity and social skills.</div>
                        </div>
                    </div>
                </div>
                <div class="q-element">
                    <div class="q-box" style="background-color:#ffffff; " data-hover="background-color: #0fbaf4;">
                        <div class="content">
                            <h3 class="title">Creative activities</h3>
                            <div class="description" style="margin:0 0 13px; line-height: 1.5;">Help developing your child's creativity and social skills.</div>
                        </div>
                    </div>
                </div>
                <div class="q-element">
                    <div class="q-box" style="background-color:#ffffff; " data-hover="background-color: #0fbaf4;">
                        <div class="content">
                            <h3 class="title">Creative activities</h3>
                            <div class="description" style="margin:0 0 13px; line-height: 1.5;">Help developing your child's creativity and social skills.</div>
                        </div>
                    </div>
                </div>
                <div class="q-element">
                    <div class="q-box" style="background-color:#ffffff; " data-hover="background-color: #0fbaf4;">
                        <div class="content">
                            <h3 class="title">Creative activities</h3>
                            <div class="description" style="margin:0 0 13px; line-height: 1.5;">Help developing your child's creativity and social skills.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('build/js/parallax.min.js') }}"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
</body>
</html>