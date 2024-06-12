<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepagina</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        
        
    </head>
    <body class="h-screen flex flex-col">
    <!-- Top section -->
    <div class="h-1/2 bg-green-900 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">Green Top Section</h1>
    </div>
    <!-- Bottom section -->
    <div class="h-1/2 bg-white flex items-center justify-center">
        <h1 class="text-gray-800 text-4xl font-bold">White Bottom Section</h1>
    </div>
</body>

</html>
