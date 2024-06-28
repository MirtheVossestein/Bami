<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contactpagina</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" type="text/css" href="font-ubuntu.css">
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon1-16x16.png">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 


</head>
<body class="h-screen flex flex-col ubuntu-medium">
    <div class="relative h-28 bg-green-800 flex items-center justify-center ">
        <a href="http://127.0.0.1:8000/" class="absolute top-2 left-4 z-20 text-white text-4xl ">
            BaMihuisjes.com
        </a>
        <a href="houses" class="absolute z-20 top-4 right-80 py-1 px-16 transition-all shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Vakantiehuizen</h1>
        </a>
        <a href="contactpage" class="absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all shadow-lg bg-white rounded-lg p-2 hover:scale-110 hover:opacity-85">
            <h1 class="text-sm">Contact</h1>
        </a>
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
                            <a href="myreservations" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn reserveringen</a>
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

    <section class="h-12 bg-green-700">
   <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-green-800 dark:text-white">Contacteer ons</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Vragen of opmerkingen? Laat uw informatie achter en wij proberen binnen <br> 1-2 werkdagen terug te komen bij u.</p>
      
      <div id="successMessage" class="hidden text-center text-green-800 font-medium text-lg">
        Bericht is succesvol verzonden.
      </div>

      <form id="contactForm" action="#" class="space-y-8" onsubmit="handleSubmit(event)">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Naam@hotmail.com" required>
          </div>
          <div>
              <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefoonnummer</label>
              <input type="number" id="tel" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="0612345678" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Onderwerp</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Wat is uw onderwerp" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Vraag of bericht</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Laat uw bericht achter..."></textarea>
          </div>
          <button type="submit" class="p-2 bg-green-800 text-white rounded transition-all hover:scale-105 cursor-pointer hover:bg-green-700 w-full">Verzend</button>
      </form>
   </div>
</section>

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

    function handleSubmit(event) {
        event.preventDefault();
        document.getElementById('contactForm').classList.add('hidden');
        document.getElementById('successMessage').classList.remove('hidden');
    }
</script>

</body>
</html>
