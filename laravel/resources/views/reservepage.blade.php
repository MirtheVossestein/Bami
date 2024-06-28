<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveerpagina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="font-ubuntu.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                <a href="http://127.0.0.1:8000/"
                    class="absolute top-2 left-4 z-20 text-white text-4xl ">BaMihuisjes.com</a>
            </div>
            <div class="space-x-4">
                <a href="houses"
                    class="text-sm text-black absolute z-20 top-4 right-80 py-1 px-16 rounded-lg transition-all hover:bg-white shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85">Vakantiehuizen</a>
                <a href="contact"
                    class="text-sm text-black absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all shadow-lg bg-white p-2 hover:scale-105 hover:opacity-85 rounded-lg hover:bg-white">Contact</a>

                <button id="dropdownDefaultButton"
                    class="absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white rounded-lg p-2 transition-all hover:scale-105 hover:opacity-85">
                    <h1 class="text-sm text-black">Account</h1>
                </button>

                
                @if (session('isLoggedIn'))
                    <div id="dropdown"
                        class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
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
                                <a href="reservations"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mijn
                                    reserveringen</a>
                            </li>
                            <li>
                                <a href="/logout"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    uit</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div id="dropdown"
                        class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute right-6 top-14">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/login"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    in</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <div class="h-80 md:h-104 bg-gray-300 rounded-lg mb-4">
                        <img class="w-full h-full object-cover rounded-lg"
                            src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen">
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-8 flex flex-col space-y-4">
                    <div>
                        <h1 class="text-base text-lg font-bold">Vul uw informatie in om de reservering compleet te
                            maken.</h1>
                    </div>
                    <form action="{{ route('completereservation') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="flex items-center mb-4">
                          <span class="text-gray-800 font-bold mr-2">Datum:</span>
  
                          <div class="flex items-center">
                              <div class="relative">
                                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                          xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                          <path
                                              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                      </svg>
                                  </div>
                                  <input name="start" id="start_date" type="text"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                      placeholder="Selecteer een datum">
                              </div>
                              <span class="mx-4 text-gray-500">tot</span>
                              <div class="relative">
                                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                          xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                          <path
                                              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                      </svg>
                                  </div>
                                  <input name="end" id="end_date" type="text"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                      placeholder="Selecteer een datum">
                              </div>
                          </div>
                      </div>

                        <div class="flex flex-col">
                            <label for="name" class="font-bold mb-1">Naam en achternaam:</label>
                            <input type="text" id="name" name="first_name" required
                                class="p-2 border border-gray-300 rounded">
                        </div>
                        <div class="flex flex-col">
                            <label for="address" class="font-bold mb-1">Adres en huisnummer:</label>
                            <input type="text" id="address" name="customer_address" required
                                class="p-2 border border-gray-300 rounded">
                        </div>
                        <div class="flex flex-col">
                            <label for="zipcode_location" class="font-bold mb-1">Postcode en plaatsnaam:</label>
                            <input type="text" id="zipcode_location" name="customer_zipcodelocation" required
                                class="p-2 border border-gray-300 rounded">
                        </div>
                        <div class="flex flex-col">
                            <label for="email" class="font-bold mb-1">E-mail:</label>
                            <input type="email" id="email" name="customer_email" required
                                class="p-2 border border-gray-300 rounded">
                        </div>
                        <div class="flex flex-col">
                            <label for="phone" class="font-bold mb-1">Telefoonnummer:</label>
                            <input type="tel" id="phone" name="phone" required
                                class="p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <h1 class="text-base font-bold">Datum reservering: (insert data reservering BAS)</h1>
                        </div>
                        <div class="flex flex-col">
                            <input type="submit"
                                class="p-3 mt-4 bg-green-800 text-white rounded cursor-pointer hover:bg-green-700 hover:scale-105 hover:opacity-85 transition-all block text-center w-full">Reserveer</input>
                        </div>
                        <input type="hidden" name="houseId" value="{{ $house->id }}">
                    </form>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.getElementById('dropdownDefaultButton');
            const dropdownMenu = document.getElementById('dropdown');

            dropdownButton.addEventListener('mouseenter', function() {
                dropdownMenu.classList.remove('hidden');
            });

            dropdownButton.addEventListener('mouseleave', function() {
                setTimeout(() => {
                    if (!dropdownMenu.matches(':hover')) {
                        dropdownMenu.classList.add('hidden');
                    }
                }, 300);
            });

            dropdownMenu.addEventListener('mouseleave', function() {
                dropdownMenu.classList.add('hidden');
            });

            dropdownMenu.addEventListener('mouseenter', function() {
                dropdownMenu.classList.remove('hidden');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
