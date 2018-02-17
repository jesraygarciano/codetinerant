<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','Codetinerant') }}</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <header class="v-header container">
                <div class="fullscreen-video-wrap">
                    <video src="vid/understang.mp4" autoplay="true" loop="true"></video>
                </div>

                <div class="header-overlay"></div>

                    <div class="header-content">
                        <h1>Jesray Garciano</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ab delectus commodi dolores quaerat deleniti dicta rem labore reiciendis laborum quasi eius amet atque facilis, soluta culpa quae, vero quidem.</p>
                        <a href="#" class="btn">Read more!</a>
                    </div>

            </header>

            <section class="section">
                <h1>Section One</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dicta, dolores aspernatur veritatis. Quia, ipsam ex odit delectus qui, quis modi, voluptate, similique deleniti ut quisquam suscipit explicabo aspernatur neque.
            </section>

            <section class="section section-btm">
                <h1>Section Two</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro repudiandae laboriosam commodi, fuga explicabo neque esse eveniet voluptatum consequuntur eum quisquam facere provident cumque voluptas dolor ducimus voluptate ex iure totam, maxime blanditiis est similique id expedita. Beatae perferendis eius, animi est, praesentium ab illo odit neque, aspernatur facere excepturi.

            </section>

<script src="js/app.js"></script>
</body>
</html>