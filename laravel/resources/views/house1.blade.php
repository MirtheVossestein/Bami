<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houses</title>
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
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
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
                    <div class="h-72 md:h-96 bg-gray-300 rounded-lg mb-4">
                        <img class="w-full h-full object-cover rounded-lg"
                            src="{{ asset('storage/' . $house->images[0]->image) }}" alt="Voorthuizen">
                    </div>

                    <div class="flex">
                        <!-- Eerste carousel -->
                        <div id="default-carousel-1" class="carousel md:w-1/2 m-1 mr-4" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-48 overflow-hidden rounded-lg">
                                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="{{ asset('images/Voorthuizen/bedroom2.png') }}" alt="bedroom2">
                                </div>
                                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="{{ asset('images/Voorthuizen/bathroom.png') }}" alt="bathroom">
                                </div>
                            </div>
                        </div>

                        <!-- Tweede carousel -->
                        <div id="default-carousel-2" class="carousel m-1 md:w-1/2" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-48 overflow-hidden rounded-lg">
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="{{ asset('images/Voorthuizen/livingroom1.png') }}" alt="livingroom">
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="{{ asset('images/Voorthuizen/bedroom1.png') }}" alt="bedroom">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-4 mb-4">
                        <button class="w-1/2 text-gray-800 py-2 rounded-lg font-bold">Reviews</button>
                        <a href="/reserve/{{ $house->id }}"
                            class="w-1/2 bg-gray-200 text-gray-800 py-2 rounded-lg hover:scale-105 hover:opacity-85 transition-all font-bold inline-block text-center">Reserveren</a>
                    </div>

                </div>
                <div class="md:w-1/2 md:pl-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $house->category }} in {{ $house->city }}</h2>
                    <p class="text-gray-600 mb-4">{{ $house->descriptionLocation }}<br>

                    </p>
                    <div class="flex items-center mb-4">
                        <span class="text-gray-800 font-bold mr-2">Prijs per nacht: <span
                                class="text-gray-700">&#8364;{{ $house->price }}</span></span>


                    </div>
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
                                <input name="start" id="start-date" type="text"
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
                                <input name="end" id="end-date" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                    placeholder="Selecteer een datum">
                            </div>
                        </div>
                    </div>
                    <span class="text-gray-800 font-bold">Omschrijving:</span>
                    <p class="text-gray-600 text-sm mt-2">{{ $house->descriptionHouse }}<br> </p>
                    <p class="text-gray-800 mt-2"> Dit huisje is alleen te huren voor minimaal 5 dagen. </p>
                </div>
            </div>


            <div class="bg-gray-200 w-4/4 mx-3 p-2 h-auto flex rounded-lg">
                <div class="flex flex-col">

                    <div class="flex w-full">
                        <h1 class="text-lg px-2 py-1 text-black font-bold italic">Vertel ons uw mening</h1>
                    </div>

                    <div class="flex p-3">
                        <div class="flex flex-col text-black mr-16">
                            <label for="rating" class="font-bold italic mb-2">Beoordeling:</label>
                            <select id="rating" name="rating"
                                class="border-gray-300 rounded-md shadow-sm w-full mt-2  py-2 px-3 focus:outline-none focus:ring focus:ring-blue-200"
                                required>
                                <option value="">Geef sterren</option>
                                <option value="1">1 ster</option>
                                <option value="2">2 sterren</option>
                                <option value="3">3 sterren</option>
                                <option value="4">4 sterren</option>
                                <option value="5">5 sterren</option>
                            </select>
                        </div>
                        <div class="flex flex-col text-black -ml-2">
                            <label for="description" class="font-bold mb-1 italic">Beschrijving</label>
                            <div class="flex">
                                <textarea id="description" name="description" required
                                    class="p-2 border border-gray-300 rounded" rows="3" cols="90"></textarea>
                                    <input type="submit"
                                class="ml-16 mb-14 bg-white text-gray-800 py-2 px-4 mt-10 mr-4 rounded-lg hover:scale-105 hover:opacity-85 transition-all font-bold inline-block "></input>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <style>
        .flex {
            display: flex;
            justify-content: space-between;
        }

        .carousel {
            flex: 1;
            max-width: calc(75% - 2rem);
        }

        @media (max-width: 768px) {
            .flex {
                flex-direction: column;
            }

            .carousel {
                max-width: 100%;
                margin-bottom: 1.5rem;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const startDateInput = document.querySelector('#start-date');
            const endDateInput = document.querySelector('#end-date');

            const minNights = 5;

            const endDatePicker = flatpickr(endDateInput, {
                onChange: function (selectedDates) {
                    const startDate = startDatePicker.selectedDates[0];
                    const endDate = selectedDates[0];

                    if (startDate && endDate) {
                        const diffDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
                        if (diffDays < minNights) {
                            alert(`Minimum booking is ${minNights} nights.`);
                            endDatePicker.clear();
                        }
                    }
                }
            });

            const startDatePicker = flatpickr(startDateInput, {
                onChange: function (selectedDates) {
                    const startDate = selectedDates[0];
                    if (startDate) {
                        const minEndDate = new Date(startDate.getTime() + minNights * 24 * 60 * 60 *
                            1000);
                        endDatePicker.set('minDate', minEndDate);
                    }
                }
            });
        });
    </script>

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