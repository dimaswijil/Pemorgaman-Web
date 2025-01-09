<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nama_Lengkap = $conn->real_escape_string($_POST['Nama_Lengkap']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password']; // Hashing the password

    // Check if the username or email already exists
    $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $errorMessage = "Username atau email sudah terdaftar. Gunakan yang lain.";
    } else {
        // Insert data into the users table
        $insertQuery = "INSERT INTO users (Nama_Lengkap, email, username, password) VALUES ('$Nama_Lengkap', '$email', '$username', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            $successMessage = "Pendaftaran berhasil! Silakan login.";
            header("Location: login.php"); // Redirect to login page
            exit;
        } else {
            $errorMessage = "Terjadi kesalahan: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Tips Belajar Efektif</title>
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #F3F3E0; /* Warna latar belakang yang lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #B0C4DE; /* Warna latar belakang form */
            padding: 20px; /* Padding untuk form */
            border-radius: 10px; /* Sudut membulat */
            box-shadow: 0 2px 4px rgba(0,0,0,0.2); /* Bayangan pada form */
            width: 300px; /* Lebar form */
        }

        h1 {
            text-align: center; /* Rata tengah untuk judul */
            color: #133E87; /* Warna judul */
            margin-bottom: 20px; /* Jarak bawah judul */
        }

        .message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 15px;
            text-align: center;
        }

        .success {
            color: green;
        }

        label {
            display: block; /* Menampilkan label sebagai block */
            margin-bottom: 5px; /* Jarak bawah label */
            color: #133E87; /* Warna label */
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; /* Lebar input 100% dari container */
            padding: 10px; /* Padding untuk input */
            margin-bottom: 20px; /* Jarak bawah input */
            border: 1px solid #608BC1; /* Border input */
            border-radius: 5px; /* Sudut membulat untuk input */
        }

        .register-button {
            width: 100%; /* Lebar tombol 100% dari container */
            padding: 10px; /* Padding untuk tombol */
            background-color: #4979b3; /* Warna tombol */
            color: #F3F3E0; /* Warna teks tombol */
            border: none; /* Menghilangkan border */
            border-radius: 5px; /* Sudut membulat untuk tombol */
            cursor: pointer; /* Kursor pointer saat hover */
            transition: background-color 0.3s; /* Transisi warna saat hover */
        }

        .register-button:hover {
            background-color: #CBDCEB; /* Warna tombol saat hover */
            color: #133E87; /* Warna teks tombol saat hover */
        }

        .footer {
            text-align: center; /* Rata tengah footer */
            margin-top: 20px; /* Jarak atas footer */
        }

        .footer a {
            color: #4b77ae; /* Warna tautan di footer */
            text-decoration: none; /* Menghilangkan garis bawah */
        }

        .footer a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h1>Register</h1>

        <?php if (!empty($errorMessage)): ?>
            <div class="message error"> <?php echo $errorMessage; ?> </div>
        <?php endif; ?>

        <?php if (!empty($successMessage)): ?>
            <div class="message success"> <?php echo $successMessage; ?> </div>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="Nama_Lengkap">Nama Lengkap</label>
            <input type="text" id="Nama_Lengkap" name="Nama_Lengkap" required placeholder="Masukkan nama lengkap">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan email">

            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" name="username" required placeholder="Masukkan nama pengguna">

            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" required placeholder="Masukkan kata sandi">

            <button type="submit" class="register-button">Daftar</button>
        </form>

        <div class="footer">
            <p>Sudah memiliki akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>

</body>
</html>
