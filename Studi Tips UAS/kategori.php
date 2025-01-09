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
    <title>Teknik</title>
    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(to bottom, #F7EFEA, #E2DAD6);
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

        /* Navbar */
        nav {
            background: #091057;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 10px 0;
            margin: 0;
            gap: 20px;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            color: #FDFAD9;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            color: #FFD700;
            background: #1E293B;
            padding: 8px 15px;
            border-radius: 5px;
        }

        /* Main Section with Grid */
        main {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
            background: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .card {
            background: #F9F9F9;
            border: 1px solid #ddd;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            text-align: center;
            padding: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card h2 {
            color: #35424a;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .card img {
            display: block;
            margin: 0 auto 10px;
            max-width: 80%;
            height: auto;
            border-radius: 10px;
        }

        .card p {
            font-size: 1.1rem;
            text-align: justify;
            color: #555;
            margin-top: 10px;
        }

        .card a {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #091057;
            color: #FDFAD9;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .card a:hover {
            background: #FFD700;
            color: #091057;
        }

        /* Footer */
        footer {
            background: #091057;
            color: #FDFAD9;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        footer .social-icons a {
            color: #FDFAD9;
            font-size: 1.5rem;
            text-decoration: none;
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

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            main {
                padding: 10px;
            }

            .card img {
                max-width: 70%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Teknik</h1>
        <nav>
            <ul>
                <li><a href="main_page.php">Kembali</a></li>
                <li><a href="#pomodoro">Teknik Pomodoro</a></li>
                <li><a href="#eat-the-frog">Teknik Eat The Frog</a></li>
                <li><a href="#gtd">Teknik GTD</a></li>
                <li><a href="#kanban">Teknik Kanban</a></li>
                <li><a href="#time-blocking">Teknik Time Blocking</a></li>
                <li><a href="#okr">Objective Key & Result</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="card" id="pomodoro">
            <h2>Teknik Pomodoro</h2>
            <img src="pomodoro.jpg" alt="Pomodoro Technique">
            <p>Metode manajemen waktu dengan interval 25 menit, diikuti istirahat singkat.</p>
            <a href="pomodoro.php">Baca Selengkapnya</a>
        </div>

        <div class="card" id="eat-the-frog">
            <h2>Teknik Eat The Frog</h2>
            <img src="eat_the_frog.png" alt="Eat The Frog Technique">
            <p>Selesaikan tugas tersulit terlebih dahulu untuk hari yang lebih produktif.</p>
            <a href="Eat_the_frog.php">Baca Selengkapnya</a>
        </div>

        <div class="card" id="gtd">
            <h2>Teknik GTD</h2>
            <img src="gtd.jpg" alt="GTD Technique">
            <p>Metode manajemen untuk mengatur tugas dan proyek secara terorganisir.</p>
            <a href="GTD_Content.php">Baca Selengkapnya</a>
        </div>

        <div class="card" id="kanban">
            <h2>Teknik Kanban</h2>
            <img src="kanban.jpg" alt="Kanban Technique">
            <p>Alur kerja visual menggunakan papan dan kartu untuk produktivitas.</p>
            <a href="Kanban_Content.php">Baca Selengkapnya</a>
        </div>

        <div class="card" id="time-blocking">
            <h2>Teknik Time Blocking</h2>
            <img src="timeblocking.jpg" alt="Time Blocking Technique">
            <p>Pembagian kerja menjadi blok waktu untuk manajemen waktu yang efisien.</p>
            <a href="timeblocking_Contents.php">Baca Selengkapnya</a>
        </div>

        <div class="card" id="okr">
            <h2>Objective Key & Result</h2>
            <img src="okr.jpg" alt="OKR Technique">
            <p>Manajemen tujuan dengan fokus pada hasil kunci yang terukur.</p>
            <a href="okrContent.php">Baca Selengkapnya</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 - All rights reserved.</p>
        <div class="social-icons">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
</body>
</html>
