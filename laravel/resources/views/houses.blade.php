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
</head>

<body class="h-screen flex flex-col ubuntu-medium">
  <div class="relative h-28 bg-green-800 flex items-center justify-center ">
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
      <h1 class="text-sm">Login</h1>
    </a>
    </div>
  </div>

  <!-- House Cards Section -->
  <div class="flex justify-center mt-10">

   <!-- House Card 1 -->
   <div class="relative m-4 flex w-full max-w-xs flex-col hover:scale-105 transition-all overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
      <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
        <img class="object-cover" src="{{ asset('images/Voorthuizen/HouseV.png') }}" alt="Voorthuizen"/>
        <span class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">Nieuw!</span>
      </a>

      <div class="mt-4 px-5 pb-5">
        <a href="#">
          <h5 class="text-xl tracking-tight font-bold text-slate-900">Natuurhuisje in Voorthuizen</h5>
        </a>
        <div class="mt-2 mb-5 flex items-center justify-between">
          <p>
          <span class="material-icons text-black text-lg">wifi</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">person</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">pool</span> <!-- User Icon -->


          <span class="text-2 font-bold text-slate-900">4 Personen - <span class="italic text-slade-800">2 Slaapkamers</span></span>
          </p>
          <div class="flex items-center">
            <!-- Rating SVGs -->
          </div>
        </div>
        <a href="house1" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
          Bekijk huisje
        </a>
      </div>
    </div>

    <!-- House Card 2 -->
    <div class="relative m-4 flex w-full max-w-xs hover:scale-105 transition-all flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
      <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
        <img class="object-cover" src="{{ asset('images/Hierden/HouseH.jpg') }}" alt="Hierden"/>
        <span class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">Nieuw!</span>
      </a>

      <div class="mt-4 px-5 pb-5">
        <a href="#">
          <h5 class="text-xl tracking-tight font-bold text-slate-900">Natuurhuisje in Hierden</h5>
        </a>
        <div class="mt-2 mb-5 flex items-center justify-between">
          <p>
          <span class="material-icons text-black text-lg">wifi</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">person</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">self_improvement</span> <!-- User Icon -->


          <span class="text-2 font-bold text-slate-900">2 Personen - <span class="italic text-slade-800">1 Slaapkamers</span></span>
          </p>
          
          <div class="flex items-center">
            <!-- Rating SVGs -->
          </div>
        </div>
        <a href="house1" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
          Bekijk huisje
        </a>
      </div>
    </div>

   

    <!-- House Card 3 -->
    <div class="relative m-4 flex w-full hover:scale-105 hover:opacity-80 max-w-xs transition-all flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
      <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
        <img class="object-cover" src="{{ asset('images/Olburgen/HouseO.jpg') }}" alt="Olburgen"/>
        <span class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium text-white">Nieuw!</span>
      </a>

      <div class="mt-4 px-5 pb-5">
        <a href="house3">
          <h5 class="text-xl tracking-tight font-bold text-slate-900">Tinyhouse in Olburgen</h5>
        </a>
        <div class="mt-2 mb-5 flex items-center justify-between">
        <p>
          <span class="material-icons text-black text-lg">wifi</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">person</span> <!-- User Icon -->
          <span class="material-icons text-black text-lg">pets</span> <!-- User Icon -->


          <span class="text-2 font-bold text-slate-900">5 Personen - <span class="italic text-slade-800">2 Slaapkamers</span></span>
          </p>
          <div class="flex items-center">
            <!-- Rating SVGs -->
          </div>
        </div>
        <a href="#" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
          Bekijk huisje
        </a>
      </div>
    </div>
  </div>

  

  

</body>
</html>
