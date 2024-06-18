<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homepage</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" type="text/css" href="font-ubuntu.css">
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 


</head>
<body class="h-screen flex flex-col ubuntu-medium">
    <div class="relative h-72 bg-green-800 flex items-center justify-center ">
        <a href="index.blade.php" class="absolute top-2 left-4 z-20 text-white text-4xl ">
            BaMihuisjes.com
        </a>
        <h2 class="ubuntu-bold-italic absolute left-2 top-36 z-20 text-white text-7xl ">Welkom!</h2>
        <h2 class="ubuntu-regular-italic absolute left-4 top-52 z-20 text-white text-4xl ">Vind hier jouw vakantiehuisje midden in de natuur.</h2>
        <a href="houses" class="absolute z-20 top-4 right-80 py-1 px-16 shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Vakantiehuizen</h1>
        </a>
        <div class="absolute z-20 top-4 right-32 py-1 px-16 right-2 shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Contact</h1>
        </div>
        <a href="login" class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Login</h1>
        </a>
        </div>
    </div>
    <div class="h-12 bg-green-700"></div>

    <div class="flex justify-center shadow-lg mt-8">
        <div class="w-72 h-64 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom hover:scale-110 hover:opacity-80" src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen">
        </div>
        <div class="w-72 h-58 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom hover:scale-110 hover:opacity-80" src="{{ asset('images/Olburgen/HouseO.jpg') }}" alt="Olborgen">
        </div>
        <div class="w-72 h-64 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom hover:scale-110 hover:opacity-80" src="{{ asset('images/Hierden/HouseH.jpg') }}" alt="Hierden">
        </div>
    </div>
</body>


</html>
