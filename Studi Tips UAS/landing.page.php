<?php
// PHP Logic Here
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tips Belajar Efektif</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #E9F4FB;
            color: #133E87;
            transition: background-color 0.3s, color 0.3s;
        }

        header {
            background-color: #1A374D;
            color: #F3F3E0;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.8rem;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .hero {
            background: url('img/belajar2.jpg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero h2 {
            z-index: 2;
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .cta-button {
            margin-top: 20px;
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            z-index: 2;
            transition: transform 0.3s, background-color 0.3s;
        }

        .cta-button:hover {
            transform: scale(1.05);
            background-color: #2c65df;
        }

        .testimonials {
            background-color: #F0F9FF;
            padding: 50px 20px;
        }

        .testimonials h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .testimonial {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .testimonial:hover {
            transform: translateY(-10px);
        }

        .testimonial p {
            font-style: italic;
        }

        .testimonial h3 {
            margin-top: 15px;
            color: #4A90E2;
        }

        footer {
            background-color: #1A374D;
            color: #F3F3E0;
            padding: 20px;
            text-align: center;
        }

        footer .social-icons img {
            margin: 0 10px;
            width: 30px;
            height: 30px;
            transition: transform 0.3s;
        }

        footer .social-icons img:hover {
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .cta-button {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di StudiTips</h1>
        <p>Tempat terbaik untuk tips belajar efektif dan produktif.</p>
    </header>

    <div class="hero">
        <h2>Siap Menjadi Pelajar Terbaik?</h2>
        <a href="login.php" class="cta-button">Mulai Belajar</a>
    </div>

    <section class="testimonials">
        <h2>Testimoni Pengguna</h2>

        <div class="testimonial-grid">
            <div class="testimonial">
                <p>"Website ini sangat membantu saya mengatur jadwal belajar dan mempersiapkan diri untuk ujian. Tips-tipsnya sangat praktis dan mudah diikuti."</p>
                <h3>- Budi, Mahasiswa</h3>
            </div>
            <div class="testimonial">
                <p>"Saya bisa lebih fokus belajar dan memanfaatkan waktu dengan baik berkat saran yang diberikan di sini."</p>
                <h3>- Siti, Pelajar SMA</h3>
            </div>
            <div class="testimonial">
                <p>"Tips-tips di website ini sangat membantu saya mengatur waktu dan menjaga produktivitas saya sebagai pelajar."</p>
                <h3>- Amir, Mahasiswa Teknik</h3>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Tips Belajar Efektif | All Rights Reserved</p>
        <div class="social-icons">
            <a href="https://instagram.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
            <a href="https://x.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/X_logo.jpg" alt="Twitter">
            </a>
        </div>
    </footer>
</body>
</html>

