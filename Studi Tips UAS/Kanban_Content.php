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
    <title>Teknik Kanban</title>
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
            text-align: center;
        }

        main h2 {
            color: #2E073F;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        main p, ol, ul {
            margin: 15px 0;
            font-size: 1.1rem;
            text-align: justify;
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
        <h1>Teknik Kanban</h1>
        <p>Sistematisasikan kekacauan di otak Anda dan selesaikan tugas-tugasmu.</p>
        <nav>
            <ul>
                <li><a href="kategori.php">Kembali</a></li>
                <li><a href="#Kanban">Apa itu Teknik Kanban?</a></li>
                <li><a href="#tips">Tips Belajar</a></li>
                <li><a href="#aturan_Teknik_Kanban">Aturan Teknik Kanban</a></li>
                <li><a href="#Tips_Kanban">Tips Efektivitas Kanban</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="Kanban">
            <h2>Teknik Kanban</h2>
            <img src="kanban_method.png" alt="Ilustrasi Teknik Kanban">
            <p>Teknik Kanban adalah metode manajemen alur kerja yang digunakan untuk meningkatkan efisiensi dan produktivitas...</p>
        </section>

        <section id="tips">
            <h2>Tips Belajar</h2>
            <ul>
                <li>Gunakan Alat Digital Jika Diperlukan</li>
                <li>Fokus pada Aliran Pekerjaan</li>
                <li>Mulailah dengan Papan Kanban Sederhana</li>
                <li>Bergabung dengan komunitas atau forum online</li>
            </ul>
        </section>

        <section id="aturan_Teknik_Kanban">
            <h2>Aturan Teknik Kanban</h2>
            <ol>
                <li>Visualisasi Alur Kerja</li>
                <li>Batasan Pekerjaan yang Sedang Dikerjakan (WIP)</li>
                <li>Pull System</li>
                <li>Fokus pada Penyelesaian</li>
                <li>Mengurangi Waktu Siklus</li>
            </ol>
        </section>

        <section id="Tips_Kanban">
            <h2>Tips Efektivitas Kanban</h2>
            <ul>
                <li>Pahami dan Atasi Bottleneck</li>
                <li>Fokus pada Penyelesaian Sebelum Memulai yang Baru</li>
                <li>Evaluasi Alur Kerja Secara Rutin</li>
                <li>Pertahankan Fleksibilitas dalam Proses</li>
                <li>Lakukan Retrospektif</li>
            </ul>
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
