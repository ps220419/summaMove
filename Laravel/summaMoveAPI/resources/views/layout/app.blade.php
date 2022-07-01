<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name', 'Laravel') }}</title>      
        <!-- <link rel="stylesheet" href="//{{ asset('css/style.css') }}"> -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include('layout.navigation')

        <div id="content">
            <div id="contentcontainer">
               
            </div>
        </div>
    </body>
</html>