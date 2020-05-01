<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="./js/app.js" defer></script>
    </head>
    <body>
        <div id="app">
            <find-user></find-user>
            <update-user-name></update-user-name>
            <users-component></users-component>
        </div>
    </body>
</html>
