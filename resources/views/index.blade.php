<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title></title>
       
           @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>

    <body class="antialiased">
        <div class="flex justify-center items-center h-screen">
            <h1 class="text-3xl text-purple-600 font-bold">Laravel 9 Vite with Tailwind CSS</h1>
        </div>
        <h1 class="text-3xl p-2 font-bold">
            Tailwind 3.0
        </h1>
    </body>

</html>