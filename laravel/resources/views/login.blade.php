<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="colors.css">
</head>
<body class="font-sans bg-gray-200">
    <div class="max-w-lg mx-auto p-4 bg-white rounded shadow-md mt-20">
        <h2 class="text-2xl font-bold mb-5">Login</h2>
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="email" class="font-bold mb-1">Email:</label>
                <input type="email" id="email" name="email" required class="p-2 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col">
                <label for="password" class="font-bold mb-1">Password:</label>
                <input type="password" id="password" name="password" required class="p-2 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col">
                <button type="submit" class="p-2 olivegreen text-white rounded cursor-pointer hover:bg-green-400 w-full">Login</button>
            </div>
        </form>
    </div>
</body>
</html>