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
        <a href="http://127.0.0.1:8000/" class="absolute top-2 left-4 z-20 text-white text-4xl ">
            BaMihuisjes.com
        </a>
        <h2 class="ubuntu-regular-italic absolute left-4 top-52 z-20 text-white text-4xl ">Jouw smakelijke vakantiehuisje midden in de natuur.</h2>
        <a href="houses" class="absolute z-20 top-4 right-80 py-1 px-16 transition-all shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Vakantiehuizen</h1>
        </a>
        <div class="absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all  shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Contact</h1>
        </div>
        <div class=" z-20">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="absolute z-20 top-4 py-1 transition-all px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
                <h1 class="text-sm">Account</h1>
            </button>
        @if(session('isLoggedIn'))
                <div id="dropdown" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profiel</a>
                        </li>
                        <li>
                            <a href="ownerhouse" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn vakantiehuizen</a>
                        </li>
                        <li>
                            <a href="reservations" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn reserveringen</a>
                        </li>
                        <li>
                            <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log uit</a>
                        </li>
                    </ul>
                </div>
            @else
                <div id="dropdown" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="/login" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log in</a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="h-12 bg-green-700"></div>

    <div class="flex justify-center shadow-lg mt-8">
        <div class="w-72 h-64 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom transition-all hover:scale-105 " src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen">
        </div>
        <div class="w-72 h-58 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom transition-all hover:scale-105 " src="{{ asset('images/Olburgen/HouseO.jpg') }}" alt="Olborgen">
        </div>
        <div class="w-72 h-64 mb-4 mx-8">
            <img class="rounded-lg object-scale-down w-full h-full object-left-bottom transition-all  hover:scale-105 " src="{{ asset('images/Hierden/HouseH.jpg') }}" alt="Hierden">
        </div>
    </div>
   

     <style>
        #dropdownDefaultButton:hover + #dropdown,
        #dropdown:hover {
            display: block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownButton = document.getElementById('dropdownDefaultButton');
            const dropdownMenu = document.getElementById('dropdown');

            dropdownButton.addEventListener('mouseenter', function () {
                dropdownMenu.classList.remove('hidden');
            });

            dropdownMenu.addEventListener('mouseleave', function () {
                dropdownMenu.classList.add('hidden');
            });

            dropdownMenu.addEventListener('mouseenter', function () {
                dropdownMenu.classList.remove('hidden');
            });
        });
    </script>


</body>


</html>
