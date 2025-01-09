<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objective Key & Result</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
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
            background-color: #001A57;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #FFD700;
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
        <h1>Objective Key & Result</h1>
        <p>Sistematisasikan kekacauan di otak Anda dan selesaikan tugas-tugasmu.</p>
        <nav>
            <ul>
                <li><a href="kategori.php">Kembali</a></li>
                <li><a href="#OKR">Apa itu Objective Key Result?</a></li>
                <li><a href="#tips">Tips Belajar</a></li>
                <li><a href="#aturan_OKR">Aturan OKR</a></li>
                <li><a href="#Tips_Cepat">Tips Efektivitas OKR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="OKR">
            <h2>Objective Key Result</h2>
            <img src="okr_content.jpg" alt="Ilustrasi OKR">
            <p>Objective and Key Results (OKR) adalah kerangka kerja manajemen tujuan yang digunakan...</p>
        </section>

        <section id="tips">
            <h2>Tips Belajar</h2>
            <ul>
                <li>Pahami Konsep Dasar</li>
                <li>Mulai dari Hal Sederhana</li>
                <li>Fokus pada Prioritas</li>
                <li>Konsisten dan Disiplin</li>
            </ul>
        </section>

        <section id="aturan_OKR">
            <h2>Aturan OKR</h2>
            <ol>
                <li>Objective Harus Jelas dan Inspiratif</li>
                <li>Key Results Harus Terukur</li>
                <li>Periode Waktu Jelas</li>
                <li>Ambisius Tapi Realistis</li>
                <li>Evaluasi Secara Berkala</li>
            </ol>
        </section>

        <section id="Tips_Cepat">
            <h2>Tips Efektivitas OKR</h2>
            <ul>
                <li>Komunikasikan OKR dengan Jelas</li>
                <li>Gunakan OKR sebagai Alat Fokus</li>
                <li>Selaraskan OKR dengan Tim dan Individu</li>
                <li>Berikan Umpan Balik dan Pengakuan</li>
                <li>Jadikan OKR Transparan</li>
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
