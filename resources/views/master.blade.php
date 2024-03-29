<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Soap Consumer</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style>
            .alert { margin-bottom: 0; }
        </style>
    </head>
    <body>
        <div class="container">
            <h2> Soap test </h2>
            <ul class="nav nav-tabs">
                <li><a href='/'>home</a></li>
                <li><a href='{{ route("contact.index") }}'>Contacts</a></li>
                <li><a href='{{ route("salesOrder.index") }}'>Sales Orders</a></li>
            </ul>
        </div>
        <div class="container app-content">
            @yield('content')
        </div>
    </body>
</html>
