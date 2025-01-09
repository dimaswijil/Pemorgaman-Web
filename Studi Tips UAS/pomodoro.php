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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Pomodoro</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(to bottom, #E2DAD6, #F7EFEA);
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: #7FA1C3;
            color: #091057;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.1rem;
            font-style: italic;
            color: #333;
        }

        /* Navbar */
        nav {
            background-color: #001A57; /* Warna biru gelap */
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 30px; /* Jarak antar item */
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #FFFFFF; /* Warna teks putih */
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #FFD700; /* Warna kuning saat hover */
        }

        /* Main Section */
        main {
            margin: 20px auto;
            padding: 30px;
            max-width: 900px;
            background: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            color: #2E073F;
            margin-bottom: 20px;
            font-size: 1.8rem;
            text-align: center;
        }

        main p, ol, ul {
            margin: 15px 0;
            font-size: 1.1rem;
        }

        main ol, main ul {
            padding-left: 20px;
        }

        main ul li, main ol li {
            margin-bottom: 10px;
        }

        /* Image Styling */
        main img {
            display: block;
            margin: 20px auto;
            max-width: 50%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        main img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            background: #091057;
            color: #FDFAD9;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }

        footer .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        footer p {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        footer .social-icons {
            display: flex;
            gap: 15px;
        }

        footer .social-icons a {
            text-decoration: none;
            color: #EBD3F8;
            font-size: 1.5rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        footer .social-icons a:hover {
            transform: scale(1.2);
            color: #FFD700;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            header nav ul {
                flex-direction: column;
                gap: 10px;
            }

            main {
                padding: 20px;
            }

            main img {
                max-width: 70%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Teknik Pomodoro</h1>
        <p>Sistematisasikan kekacauan di otak Anda dan selesaikan sesuatu.</p>
        <nav>
            <ul>
                <li><a href="kategori.php">Kembali</a></li>
                <li><a href="#pomodoro">Apa itu Teknik Pomodoro</a></li>
                <li><a href="#tips">Tips Belajar</a></li>
                <li><a href="#rules">3 Aturan Teknik Pomodoro</a></li>
                <li><a href="#tips-pomodoro">Tips Efektivitas Pomodoro</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="pomodoro">
            <h2>Teknik Pomodoro</h2>
            <img src="pomodoro_method.jpg" alt="Ilustrasi Teknik Pomodoro">
            <p>Teknik Pomodoro adalah metode manajemen waktu yang dikembangkan oleh Francesco Cirillo pada akhir 1980-an. Ini mendorong orang untuk bekerja dengan waktu yang mereka miliki, daripada menentangnya.</p>
            <h3>Cara Bekerja:</h3>
            <ol>
                <li>Pilih tugas yang ingin Anda kerjakan.</li>
                <li>Atur pengatur waktu selama 25 menit (satu Pomodoro).</li>
                <li>Kerjakan tugas sampai pengatur waktu berbunyi.</li>
                <li>Istirahat sejenak (5 menit) setelah satu Pomodoro.</li>
                <li>Setelah empat Pomodoro, istirahat lebih lama (15-30 menit).</li>
            </ol>
        </section>

        <section id="tips">
            <h2>Tips Belajar</h2>
            <ul>
                <li>Tetap teratur dengan perencana.</li>
                <li>Minimalisir gangguan dengan ruang belajar yang tenang.</li>
                <li>Gunakan teknik pembelajaran aktif seperti meringkas.</li>
                <li>Beristirahat secara teratur untuk menghindari kelelahan.</li>
            </ul>
        </section>

        <section id="rules">
            <h2>3 Aturan Teknik Pomodoro</h2>
            <ol>
                <li>Pecahkan proyek yang kompleks menjadi tugas kecil.</li>
                <li>Gabungkan tugas-tugas kecil dalam satu Pomodoro.</li>
                <li>Patuhi batas waktu Pomodoro tanpa gangguan.</li>
            </ol>
        </section>

        <section id="tips-pomodoro">
            <h2>Tips Efektivitas Pomodoro</h2>
            <p>Rencanakan Pomodoro Anda di awal hari. Pastikan untuk tidak menjadwalkan lebih dari enam belas Pomodoro dalam sehari.</p>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Tips Belajar Efektif | All Rights Reserved</p>
            <div class="social-icons">
                <a href="https://instagram.com" target="_blank" aria-label="Instagram">Instagram</a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter">Twitter</a>
            </div>
        </div>
    </footer>
</body>
</html>
