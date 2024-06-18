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
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 

</head>

<body class="ubuntu-medium bg-gray-100">
    <div class="bg-green-800 h-28 text-white py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
            <div>
                <a href="index" class="text-4xl font-bold">BaMihuisjes.com</a>
            </div>
            <div class="space-x-4">
                <a href="houses" class="text-sm text-black absolute z-20 top-4 right-80 py-1 px-16 rounded-lg transition-all hover:bg-white shadow-lg bg-white rounded-lg p-2 hover:scale-105 hover:opacity-85">Vakantiehuizen</a>
                <a href="contact" class="text-sm text-black absolute z-20 top-4 right-32 py-1 px-16 right-2 transition-all shadow-lg bg-white rounded-lg p-2 hover:scale-105 hover:opacity-85 rounded-lg hover:bg-white  ">Contact</a>
                <a href="login" class="text-sm text-black absolute z-20 top-4 py-1 px-6 right-6 shadow-lg bg-white transition-all rounded-lg p-2 hover:scale-105 hover:opacity-85 hover:bg-white">Login</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <div class="h-72 md:h-96 bg-gray-300 rounded-lg mb-4">
                        <img class="w-full h-full object-cover rounded-lg" src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen">
                    </div>
                    <div class="flex justify-end mb-4">
                    <button class="w-1/2  text-gray-800 py-2 rounded-lg font-bold">Reviews</button>
                        <button class="w-1/2 bg-gray-200 text-gray-800 py-2 rounded-lg hover:scale-105 hover:opacity-85 transition-all rounded-lg hover:bg-gray-300 font-bold">Reserveren</button>
                    </div>
                    
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Natuurhuisje in Voorthuizen</h2>
                    <p class="text-gray-600 mb-4">Huisje midden in de natuur, op het zuiden, aan de rand van het bos, in een uitzonderlijke omgeving, perfect om te ontspannen, met uitzicht over het platteland en het bos. In het centrum van een eindeloos netwerk van wandel- en fietsroutes. <br>
                    
                    </p>
                    <div class="flex items-center mb-4">
                        <span class="text-gray-800 font-bold mr-2">Prijs per nacht:</span>
                        <span class="text-gray-700">&#8364;55</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <span class="text-gray-800 font-bold mr-2">Datum:</span>
                        
                        <div class="flex items-center">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input name="start" id="start-date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-700 focus:border-green-800 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecteer aankomst">
                            </div>
                            <span class="mx-4 text-black-">tot</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                </div>
                                <input name="end" id="end-date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-700 focus:border-green-800 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecteer vertrek">
                            </div>
                            </div>
                    </div>
                    <div>
                        <span class="text-gray-800 font-bold">Omschrijving:</span>
                        <p class="text-gray-600 text-sm mt-2">Een vrijstaand modern huisje met 2 tweepersoonskamers, een woonkamer, keuken en badkamer.
                            Huisje is uitgerust met een zwembad en een rustgevende tuin. Wifi en wasmachine aanwezig. <br> </p>
                        <p class="text-gray-800 mt-2"> Dit huisje is alleen te huren voor minimaal 5 dagen. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var startCalendar = flatpickr("#start-date", {
      dateFormat: "d-m-Y",
      onChange: function(selectedDates, dateStr, instance) {
        if (selectedDates.length > 0) {
          var minEndDate = new Date(selectedDates[0]);
          minEndDate.setDate(minEndDate.getDate() + 5); 
          endCalendar.set('minDate', minEndDate);
        } else {
          endCalendar.set('minDate', null);
        }
      }
    });

    var endCalendar = flatpickr("#end-date", {
      dateFormat: "d-m-Y",
      onChange: function(selectedDates, dateStr, instance) {
        if (selectedDates.length > 0) {
          var minStartDate = new Date(selectedDates[0]);
          minStartDate.setDate(minStartDate.getDate() - 5); 
          startCalendar.set('maxDate', null);
        } else {
          startCalendar.set('maxDate', null);
        }
      }
    });
  });
</script>


</body>

</html>
