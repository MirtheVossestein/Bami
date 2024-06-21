 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beheerderspagina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="font-ubuntu.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="h-screen flex flex-col ubuntu-medium">
    <div class="relative h-52 bg-green-800 flex items-center justify-center ">
        <a href="http://127.0.0.1:8000/" class="absolute top-2 left-4 z-20 text-white text-4xl">
            BaMihuisjes.com
        </a>
        <a href="houses" class="absolute z-20 top-4 right-80 py-1 px-16 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
            <h1 class="text-sm">Vakantiehuizen</h1>
        </a>
        <a href="contact" class="absolute z-20 top-4 right-32 py-1 px-16 right-2 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
            <h1 class="text-sm">Contact</h1>
        </a>

        <!-- Account dropdown button -->
        <div class=" z-20">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
                <h1 class="text-sm">Account</h1>
            </button>

            <!-- Dropdown menu -->
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


    <button id="openDialogBtn" class="bg-green-800 text-white rounded-lg transition-all hover:scale-105 hover:opacity-85 shadow-xl w-48 mt-4 ml-4">Voeg vakantiehuis toe</button>
<dialog id="simpleDialog" class="p-4 rounded-lg shadow-lg w-2/3 h-auto">
    <h2 class="p-2 text-2xl text-green-800 text-center">Vul de benodigde informatie in:</h2>
    <form action="/register" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="flex flex-wrap justify-center space-x-4">
            <div class="flex flex-col items-center">
                <label for="house_name" class="mb-1">Soort huisje:</label>
                <input type="text" id="house_name" name="house_name" required class="p-2 border border-gray-300 rounded h-7 w-64">
            </div>
            <div class="flex flex-col items-center">
                <label for="location_house" class="mb-1">Plaatsnaam huisje:</label>
                <input type="text" id="location_house" name="location_house" required class="p-2 border border-gray-300 rounded h-7 w-64">
            </div>
        </div>
        <div class="flex flex-wrap justify-center space-x-4">
            <div class="flex flex-col items-center">
                <label for="amount_people" class="mb-1">Hoeveel persoons:</label>
                <input type="number" id="amount_people" name="amount_people" required class="p-2 border border-gray-300 rounded h-7 w-64">
            </div>
            <div class="flex flex-col items-center">
                <label for="amount_bedrooms" class="mb-1">Hoeveel slaapkamers:</label>
                <input type="number" id="amount_bedrooms" name="amount_bedrooms" required class="p-2 border border-gray-300 rounded h-7 w-64">
            </div>
        </div>
        <div class="flex flex-col items-center">
            <label for="description_location" class="mb-1">Omschrijving omgeving huisje:</label>
            <textarea id="description_location" name="description_location" required class="p-2 border border-gray-300 rounded" rows="4" cols="50"></textarea>
        </div>
        <div class="flex flex-col items-center">
            <label for="description_house" class="mb-1">Omschrijving wat huisje bevat:</label>
            <textarea id="description_house" name="description_house" required class="p-2 border border-gray-300 rounded" rows="4" cols="50"></textarea>
        </div>
        <div class="flex flex-col items-center">
            <label for="price" class="mb-1">Prijs per nacht:</label>
            <input type="number" id="price" name="price" required class="p-2 border border-gray-300 rounded h-7 w-64">
        </div>
        <div class="flex flex-col items-center">
            <label for="image" class="mb-1">Voeg (max 20) afbeeldingen van het huisje toe:</label>
            <input type="file" id="image" name="image" required class="p-2 border border-gray-300 rounded w-64">
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-green-800 text-white rounded cursor-pointer transition-all hover:scale-105 hover:opacity-85 hover:bg-green-700 w-48 mt-4 ml-4">Verzend</button>
            <button id="closeDialogBtn" class="bg-green-800 text-white rounded cursor-pointer transition-all hover:scale-105 hover:opacity-85 hover:bg-green-700 w-48 mt-4 ml-4">Terug</button>
        </div>
    </form>
</dialog>



    <script>
        const dialog = document.getElementById('simpleDialog');
        const openDialogBtn = document.getElementById('openDialogBtn');
        const closeDialogBtn = document.getElementById('closeDialogBtn');

        openDialogBtn.addEventListener('click', function () {
            dialog.showModal(); 
        });

        closeDialogBtn.addEventListener('click', function () {
            dialog.close();
        });
    </script>

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