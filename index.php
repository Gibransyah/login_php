<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .background-image {
      background-image: url('https://images.unsplash.com/photo-1557683316-973673baf926');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-500 via-pink-500 to-red-500">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105">
        <div class="md:flex">
            <!-- Left Section with Background Image -->
            <div class="bg-blue-600 hidden md:block md:w-1/2 p-12">
                <h1 class="text-white text-4xl font-bold mb-4 drop-shadow-lg">Selamat Datang</h1>
                <p class="text-white mb-8 drop-shadow-lg">Selamat datang di web yang saya buat dan selamat menikmati fitur yang ada di web ini.</p>
                
            </div>

            <!-- Right Section with Login Form -->
            <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                <h2 class="text-3xl font-semibold text-gray-700 mb-4">Login</h2>
                <form method="POST">
                    <div class="mb-6">
                        <label class="block text-gray-600 mb-2" for="username">Username</label>
                        <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" type="text" name="username" id="username" placeholder="Enter your username" required />
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 mb-2" for="password">Password</label>
                        <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" name="password" id="password" placeholder="Enter your password" required />
                    </div>
                    <button class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700 transition duration-200 font-semibold" type="submit">Login</button>
                </form>

                <?php
                    $username_aplikasi = "gibran";
                    $password_aplikasi = "gibran5002";

                    // Mengambil nilai dari form input
                    $username = @$_POST["username"];
                    $password = @$_POST["password"];
                    $message = "";

                    // Validasi Input
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($username) && !empty($password)) {
                            // Jika Username dan Password benar
                            if ($username == $username_aplikasi && $password == $password_aplikasi) {
                                header("Location: dashboard.php"); // Arahkan ke dashboard.php
                                exit; // Menghentikan eksekusi script lebih lanjut
                            } else {
                                // Jika Username atau Password salah
                                $message = "Username atau Password yang anda masukan salah!";
                            }
                        } else {
                            // Jika Username atau Password kosong
                            $message = "Username atau Password harus diisi!";
                        }
                    }

                    // Menampilkan pesan validasi jika ada
                    if (!empty($message)) {
                        echo "<div class='mt-4 bg-red-100 text-red-500 p-4 rounded'>$message</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
