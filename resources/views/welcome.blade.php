<!DOCTYPE html>
<html lang="en">
    <head>
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5.3 with Vue 2</title>
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
        
    </head>
    <body>
        <div id="vue_js_data_app">
            <car></car>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
