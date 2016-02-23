<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Soap Consumer</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-family: monospace,'Lato';
                color: #444;
            }

            .container {
                margin: 0 auto;
                width: 400px;
            }

            .app-content {
                padding: 32px 0;
            }

            .app-nav {
                padding: 16px 0;
                border-bottom: 1px dashed #444;
            }

        </style>
    </head>
    <body>
        <div class="container app-nav">
            <a href='{{ route("order.index") }}'>Orders</a> &middot;
            <a href='{{ route("order.actions") }}'>Actions</a> &middot;
            <a href='#'>Find Order</a>
        </div>
        <div class="container app-content">
            @yield('content')
        </div>
    </body>
</html>
