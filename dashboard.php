<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 flex items-center justify-center">
    <div class="bg-white p-12 rounded-2xl shadow-xl w-full max-w-lg text-center transform transition-all duration-500 hover:scale-105">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang Dashboard!</h1>
        <p class="text-gray-600 mb-8">Selamat kamu berhasil login!</p>
        <a href="index.php" class="inline-block bg-red-500 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-red-600 transition duration-200">Logout</a>
    </div>
</body>
</html>
