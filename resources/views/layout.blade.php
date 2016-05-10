<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            @import url(https://fonts.googleapis.com/css?family=Varela+Round);

            html, body {
                height: 100%;
                width: 100%;
                margin: 0;
            }

            body {
                font-family: 'Varela Round', sans-serif;
                background: linear-gradient(to bottom right, #2ed1e9 0%, #02bce6 100%);
            }

            main {
                display: flex;
                align-items: center;
                height: 100%;
                width: 100%;
                text-align: center;
                color: white;
            }

            content { width: 100%; }

            .title { font-size: 4em; }

            .title span { border-bottom: 6px solid #c3f6e9; }

            .description {
                font-size: 1.25em;
                color: #c3f6e9;
                padding: 0 33%;
            }
        </style>

        @wphead()
    </head>
    <body {{ body_class() }}>
        <main>
            <content>
                @yield('content')
            </content>
        </main>

        @wpfooter()
    </body>
</html>
