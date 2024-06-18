<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="font-ubuntu.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
 
<body class="ubuntu-medium">
    <nav class="flex justify-between h-28 items-center bg-green-800 p-4 text-white">
        <div class="flex items-center">
            <a href="index.blade.php" class="absolute top-2 left-4 z-20 text-white text-4xl ">
            BaMihuisjes.com
        </a> 
        </div>
        <div class="flex items-center justify-center">
            <span class="material-icons text-white text-3xl">account_circle</span> <!-- User Icon -->
        </div>
    </nav>

    <div class="max-w-lg mx-auto p-4 bg-white rounded shadow-md mt-20">
        <h2 class="text-2xl text-center font-bold mb-5">Log hier in.</h2>
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="email" class="font-bold mb-1">E-mail:</label>
                <input type="email" id="email" name="email" required class="p-2 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col">
                <label for="password" class="font-bold mb-1">Wachtwoord:</label>
                <input type="password" id="password" name="password" required class="p-2 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col">
                <button type="submit" class="p-2 bg-green-800 text-white rounded cursor-pointer hover:bg-green-700 w-full">Login</button>
            </div>
            @error('login_error')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </form>
    </div>

</body>
</html>
