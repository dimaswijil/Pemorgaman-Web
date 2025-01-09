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

// Jika formulir login dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk memeriksa pengguna di tabel user
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika login berhasil, redirect ke halaman utama
        header("Location: main_page.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        $error = "Nama pengguna atau kata sandi salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Tips Belajar Efektif</title>
    <style>
        /* CSS yang sudah disediakan */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #F3F3E0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #B0C4DE;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #133E87;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #133E87;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #608BC1;
            border-radius: 5px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #4979b3;
            color: #F3F3E0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #CBDCEB;
            color: #133E87;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #4b77ae;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
        <form action="" method="POST">
            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" name="username" required placeholder="Masukkan nama pengguna">

            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" required placeholder="Masukkan kata sandi">

            <button type="submit" class="login-button">Masuk</button>
        </form>

        <div class="footer">
            <p>Belum memiliki akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>

</body>
</html>
