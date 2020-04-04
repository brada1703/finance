<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BA Advisory and Investments</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <header class="container mx-auto my-4 py-4">
            <div class="flex justify-between">
                <div class="left">
                    <h2>BA - Advisory and Investments</h2>
                </div>
                <div class="right">
                    @auth
                        Buttons to click on
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            </div>

        </header>

        <div class="flex">


            <div class="content">
                <div class="title m-b-md">
                    Stocks
                </div>
            </div>
        </div>
    </body>
</html>
