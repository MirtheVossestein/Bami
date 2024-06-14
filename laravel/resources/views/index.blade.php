<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepagina</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">

        
        
    </head>
    <body class="h-screen flex flex-col">
    <div class="h-72 bg-green-800 flex items">
    <a href="index.blade.php" class="z-20 py-2 px-5 text-white text-4xl font-bold">
        <h1 class="ubuntu-light">BaMihuisjes.com</h1>
    </a>
        <div class="absolute z-20 top-4 right-80 py-1 px-16 right-2 shadow-lg bg-white rounded-lg p-2">
                <h1 class="text-sm">Huisjes</h1>
            </div>

            <div class="absolute z-20 top-4 right-32 py-1 px-16 right-2 shadow-lg bg-white rounded-lg p-2">
                <h1 class="text-sm">Contact</h1>
            </div>

            <div class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2">
                <h1 class="text-sm">Login </h1>
            </div>

</div>
<div class="flex justify-center">
    <div class="w-72 h-64 mb-4 mx-8">
        <img class="rounded-lg object-scale-down w-full h-full object-left-bottom " src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen">
    </div>
    <div class="w-72 h-58 mb-4 mx-8">
        <img class="rounded-lg object-scale-down w-full h-full  object-left-bottom " src="{{ asset('images/Olburgen/HouseO.jpg') }}" alt="Olborgen">
    </div>
    <div class="w-72 h-64 mb-4 mx-8">
        <img class="rounded-lg object-scale-down w-full h-full object-left-bottom " src="{{ asset('images/Hierden/HouseH.jpg') }}" alt="Afbeelding 3">
    </div>
</div>


</body>
</html>