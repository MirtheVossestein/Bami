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

<body>
<body class="h-screen flex flex-col ubuntu-medium">
  <div class="relative h-52 bg-green-800 flex items-center justify-center ">
    <a href="index.blade.php" class="absolute top-2 left-4 z-20 text-white text-4xl ">
      BaMihuisjes.com
      
    <a href="houses" class="absolute z-20 top-4 right-80 py-1 px-16 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
      <h1 class="text-sm">Vakantiehuizen</h1>
    </a>
    <a href="contact" class="absolute z-20 top-4 right-32 py-1 px-16 right-2 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
      <h1 class="text-sm">Contact</h1>
    </a>
    </div>
    <a href="login" class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
      <h1 class="text-sm">Account</h1> 
    </a>
    </div>

<=== text boxen omschrijvingen langer maken ==>
    <button id="openDialogBtn" class="bg-green-800 text-white rounded-lg shadow-xl w-48 mt-4 ml-4"> Voeg vakantiehuis toe</button>
    <dialog id="simpleDialog" class="p-4 rounded-lg shadow-lg w-2/3 h-auto">
      <h2 class="p-2 text-2xl text-center "> Vul de benodigde informatie in:</h2>
        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="house_name" class="mb-1">Soort huisje:</label>
                <input type="text" id="house_name" name="house_name" required class="p-2 border border-gray-300 rounded h-7 w-64">
            </div>
            <div class="flex flex-col">
                <label for="location_house" class=" mb-1">Plaatsnaam huisje:</label>
                <input type="text" id="location_house" name="location_house" required class="p-2 border  border-gray-300 h-7 rounded">
            </div>
            <div class="flex flex-col">
                <label for="amount_people" class=" mb-1">Hoeveel persoons:</label>
                <input type="number" id="amount_people" name="amount_people" required class="p-2 border border-gray-300 h-7 rounded">
            </div>
            <div class="flex flex-col">
                <label for="amount_bedrooms" class=" mb-1">Hoeveel slaapkamers:</label>
                <input type="number" id="amount_bedrooms" name="amount_bedrooms" required class="p-2 border border-gray-300 h-7 rounded ">
            </div>
            <div class="flex flex-col">
                <label for="description_location" class=" mb-1">Omschrijving omgeving huisje:</label>
                <input type="text" id="description_location" name="description_location" required class="p-2 border border-gray-300 h-7 rounded ">
            </div>
            <div class="flex flex-col">
                <label for="description_house" class="mb-1">Omschrijving wat huisje bevat:</label>
                <input type="text" id="description_house" name="description_house" required class="p-2 border border-gray-300 h-7 rounded">
            </div>
            <div class="flex flex-col">
                <label for="price" class="  mb-1">Prijs per nacht:</label>
                <input type="number" id="price" name="price" required class="p-2 border border-gray-300 h-7 rounded">
            </div>
        <button id="closeDialogBtn">Close</button>
    </dialog>

    <script>
        const dialog = document.getElementById('simpleDialog');
        const openDialogBtn = document.getElementById('openDialogBtn');
        const closeDialogBtn = document.getElementById('closeDialogBtn');

        openDialogBtn.addEventListener('click', function () {
            dialog.showModal(); // use dialog.show() if you don't want to make it modal
        });

        closeDialogBtn.addEventListener('click', function () {
            dialog.close();
        });
    </script>
  </div>

  



</body>
</html>