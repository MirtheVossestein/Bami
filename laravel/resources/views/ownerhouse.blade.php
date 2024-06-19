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

    <button id="openDialogBtn">Open Dialog</button>
    <dialog id="simpleDialog">
        <h2>Simple Dialog</h2>
        <p>This is a simple dialog model.</p>
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