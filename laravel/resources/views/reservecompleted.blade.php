<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voltooid</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="font-ubuntu.css">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon1-16x16.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body class="ubuntu-medium bg-gray-100">
  <div class="bg-green-800 h-28 text-white py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
      <div>
        <a href="http://127.0.0.1:8000/" class="absolute top-2 left-4 z-20 text-white text-4xl ">BaMihuisjes.com</a>
      </div>
      <div class="space-x-4">
        <a href="houses"
          class="text-sm text-black absolute z-20 top-4 right-80 py-1 px-16 rounded-lg transition-all hover:bg-white shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85">Vakantiehuizen</a>
        <a href="contactpage"
          class="text-sm text-black absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85 rounded-lg hover:bg-white">Contact</a>

        <button id="dropdownDefaultButton"
          class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
          <h1 class="text-sm text-black">Account</h1>
        </button>


        @if(session('isLoggedIn'))
      <div id="dropdown"
        class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
        <li>
          <a href="profile"
          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profiel</a>
        </li>
        <li>
          <a href="ownerhouse"
          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn
          vakantiehuizen</a>
        </li>
        <li>
          <a href="myreservations"
          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn
          reserveringen</a>
        </li>
        <li>
          <a href="/logout"
          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log uit</a>
        </li>
        </ul>
      </div>
    @else
    <div id="dropdown"
      class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="/login"
        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log in</a>
      </li>
      </ul>
    </div>
  @endif
      </div>
    </div>
  </div>

  <div class="h-12 bg-green-700"></div>

  <div class="max-w-7xl mx-auto mt-8 px-4">
    <div class="bg-white shadow-md rounded-lg p-8">
      <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2">
          <div class="h-80 md:h-104 bg-gray-300 rounded-lg mb-4">
            <img class="w-full h-full object-cover rounded-lg" src="{{ asset('images/Voorthuizen/HouseV.png') }}"
              alt="Voorthuizen">
          </div>
        </div>
        <div class="md:w-1/2 md:pl-8 flex flex-col space-y-4">
          <div>
            <h1 class="text-base text-xl text-green-800 font-bold">Uw reservering compleet!</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropdownButton = document.getElementById('dropdownDefaultButton');
      const dropdownMenu = document.getElementById('dropdown');

      dropdownButton.addEventListener('mouseenter', function () {
        dropdownMenu.classList.remove('hidden');
      });

      dropdownButton.addEventListener('mouseleave', function () {
        setTimeout(() => {
          if (!dropdownMenu.matches(':hover')) {
            dropdownMenu.classList.add('hidden');
          }
        }, 300);
      });

      dropdownMenu.addEventListener('mouseleave', function () {
        dropdownMenu.classList.add('hidden');
      });

      dropdownMenu.addEventListener('mouseenter', function () {
        dropdownMenu.classList.remove('hidden');
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>