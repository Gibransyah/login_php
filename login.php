<?php
// Memulai sesi
session_start();

// Jika pengguna sudah login, redirect ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Validasi login sederhana (dapat diubah sesuai kebutuhan)
$valid_username = "gibran";
$valid_password = "gibran5002";

// Memproses form saat dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek apakah username dan password cocok
    if ($username === $valid_username && $password === $valid_password) {
        // Set session dan redirect ke dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Pesan error jika username atau password salah
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="flex h-screen w-full">
        <!-- Bagian kiri (sidebar) -->
        <div class="hidden md:flex md:w-1/2 bg-blue-600 text-white flex-col justify-center items-center p-12">
            <h1 class="text-5xl font-bold mb-4">Selamat Datang!</h1>
            <p class="text-xl">Silahkan login terlebih dahulu.</p>
            <p class="mt-6 text-sm opacity-75">Semoga anda terbantu dengan web yang saya buat.</p>
            <div class="mt-8">
                <p class="text-xs opacity-75 italic">“Codingan yang baik adalah codingan yang penuh dengan eror”</p>
            </div>
        </div>

        <!-- Bagian kanan (form login) -->
        <div class="flex items-center justify-center w-full md:w-1/2 bg-white p-12">
            <div class="w-full max-w-md">
                <h2 class="text-4xl font-semibold text-center mb-6">Masukan akun anda!</h2>
                <form method="POST" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="username">Username</label>
                        <input class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="username" id="username" placeholder="Masukan Username" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 text-lg font-medium mb-2" for="password">Password</label>
                        <input class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" id="password" placeholder="Masukan password" required />
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-200">Login</button>
                </form>

                <!-- Menampilkan pesan error jika login gagal -->
                <?php if (isset($error_message)): ?>
                    <p class="text-red-500 mt-4 text-center"><?= $error_message ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
