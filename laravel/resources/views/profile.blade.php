<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="font-ubuntu.css">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon1-16x16.png">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body class="ubuntu-medium bg-gray-100 flex flex-col min-h-screen">
  <div class="bg-green-800 h-28 text-white py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
      <div>
        <a href="http://127.0.0.1:8000/" class="absolute top-2 left-4 z-20 text-white text-4xl">BaMihuisjes.com</a>
      </div>
      <div class="space-x-4">
        <a href="houses" class="text-sm text-black absolute z-20 top-4 right-80 py-1 px-16 rounded-lg transition-all hover:bg-white shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85">Vakantiehuizen</a>
        <a href="contactpage" class="text-sm text-black absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85 rounded-lg hover:bg-white">Contact</a>
        
        <button id="dropdownDefaultButton" class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
          <h1 class="text-sm text-black">Account</h1>
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
  </div>
  <div class="h-12 bg-green-700"></div>

  <div class="flex-1 max-w-7xl mx-auto mt-8 p-4 bg-white rounded-lg shadow-md flex items-center">
    <div>
      <img id="profileImage" src="/images/default-avatar.png" alt="Foto toevoegen" class="w-24 h-24 rounded-full object-cover">
    </div>
    <div class="ml-4">
      <h1 class="text-xl font-semibold">Naam: INSERT NAAM BAS</h1>
      <h1 class="text-lg font-semibold">Adres: INSERT ADRES BAS</h1>
      <h1 class="text-lg font-semibold">E-mail: INSERT EMAIL BAS</h1>
      <h1 class="text-lg font-semibold">Tel: INSERT NUMMER BAS</h1>

      <form id="photoForm" class="mt-4">
        <label for="photoInput" class="p-2 bg-green-800 text-white rounded transition-all cursor-pointer hover:bg-green-700 w-full">Kies een foto</label>
        <input type="file" id="photoInput" class="hidden" accept="image/*">
      </form>
    </div>
  </div>

  <footer class="footer bg-green-800 text-center text-white py-3 mt-auto">
    <div class="container mx-auto">
      <p class="text-sm">&copy; 2024 Copyright: BaMihuisjes.com</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropdownButton = document.getElementById('dropdownDefaultButton');
      const dropdownMenu = document.getElementById('dropdown');
      const photoInput = document.getElementById('photoInput');
      const profileImage = document.getElementById('profileImage');

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

      photoInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            profileImage.src = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      });
    });
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
