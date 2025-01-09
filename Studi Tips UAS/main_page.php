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

// Add your main PHP logic here
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Halaman Utama - Tips Belajar Efektif</title>


    <!-- Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="main_page.css"> -->
    <style> /* Reset margin dan padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #b7c8dd; /* Warna latar belakang yang lembut */
    color: #133e87; /* Warna teks default */
}

.navbar {
    justify-content: space-between;
    display: flex;
    border-bottom: 2px solid #B0D0D3;
    background-color: #1A374D; /* Warna latar belakang header */
    padding: 15px;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 99999;
}

.navbar-logo {
    color: #B0D0D3; /* Warna navbar */
    padding: 10px;
    text-align: left;
    font-size: 2rem;
    font-weight: 600;
}

.navbar-nav a {
    color: #B0D0D3; /* Warna tautan di navbar */
    text-decoration: none;
    margin: 0 15px;
    display: inline-block;
    font-size: 1.1rem;
    font-weight: 300;
}

.navbar-nav a:hover {
    color: #AAB396; /* Warna saat hover */
}

/* Hero Section */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-image: url('img/belajar2.jpg'); /* Gambar latar belakang */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 50px;
    background-position: center;
    position: relative;
    -webkit-mask-image: linear-gradient(rgba(0, 0, 0, 1) 85%, rgba(0, 0, 0, 0));
    mask-image: linear-gradient(rgba(0, 0, 0, 1) 85%, rgba(0, 0, 0, 0));
}

.hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)); /* Gradasi dari putih ke hitam */
    z-index: 1;
}

.hero .mask-container {
    position: absolute;
    inset: 0;
    display: flex; /* Menjaga konten tetap di tengah */
    align-items: center;
    justify-content: center; /* Memusatkan konten secara horizontal */
    z-index: 2;
}

.hero .content {
    text-align: center;
    z-index: 4; /* Z-index untuk menjadikan teks di atas gradasi */
    color: #1A374D; /* Warna teks */
}

.hero .content h1 {
    font-size: 3.3rem; /* Ukuran font */
    color: #FFFFFF;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Bayangan untuk kontras */
}

.hero .content p {
    font-size: 1.4rem; /* Ukuran font untuk paragraf */
    margin-top: 1rem;
    word-spacing: 2%;
    color: #E0E0E0;
    line-height: 1.4;
}

/* Tips Section */
.tips-box {
    padding: 40px 20px; /* Ruang di sekitar bagian tips */
    color: #133E87;
}

.tips-box h2 {
    text-align: center;
    margin-bottom: 20px;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px; /* Jarak antar tips */
    margin: 30px auto; /* Margin untuk pusatkan grid */
    margin-left: 30px;
    margin-right: 30px;
}

.tip {
    background-color: #f1f1f1d0; /* Warna latar belakang kartu tips */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center; /* Memusatkan teks dalam kartu */
}

.tip h3 {
    color: #163b69; /* Warna judul tips */
    margin-bottom: 10px;
}

.tip p {
    color: #133E87; /* Warna teks dalam tips */
    font-size: 1rem;
}

/* Quotes Section */
#quotes {
    text-align: center; /* Memusatkan teks */
    margin: 20px 0; /* Menambah margin untuk jarak vertikal */
}

/* Categories Section */
#categories {
    text-align: center; /* Memusatkan teks */
    margin: 20px 0; /* Menambah margin untuk jarak vertikal */
}

/* Footer */
footer {
    background-color: #1A374D; /* Warna footer */
    color: #FFFFFF; /* Warna teks di footer */
    padding: 20px 0;
    text-align: center;
}

footer .footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

footer p {
    margin: 5px 0;
    font-size: 0.9rem;
}

footer .social-icons {
    margin-top: 10px;
}

footer .social-icons a {
    color: #FFFFFF; /* Warna tautan sosial */
}</style>
    

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">StudiTips</div>
        <div class="navbar-nav">
            <a href="main_page.php">Home</a>
            <a href="kategori.php">Teknik</a>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="mask-container">
            <div class="content">
                <h1>Selamat Datang di Tips Belajar Efektif <span>!!!</span></h1>
                <p>Temukan berbagai tips belajar yang dapat membantumu mencapai hasil maksimal dalam belajar.</p>
            </div>
        </div>
    </section>
  
    <!-- Hero Section end -->

    <!-- Grid of Tips -->
    <section class="tips-box" id="tips">
        <h2>Kumpulan Tips</h2>
        <div class="tips-grid">
            <div class="tip">
                <h3>Manajemen Waktu</h3>
                <p>Atur waktu belajarmu dengan efektif. Gunakan teknik Pomodoro untuk meningkatkan fokus.</p>
            </div>
            <div class="tip">
                <h3>Membuat Catatan</h3>
                <p>Buat catatan yang ringkas namun jelas. Gunakan warna untuk menandai informasi penting.</p>
            </div>
            <div class="tip">
                <h3>Persiapan Ujian</h3>
                <p>Mulailah belajar jauh-jauh hari sebelum ujian. Jangan menunda-nunda.</p>
            </div>
            <div class="tip">
                <h3>Fokus dan Konsentrasi</h3>
                <p>Cari lingkungan yang tenang dan bebas dari gangguan untuk belajar.</p>
            </div>
            <div class="tip">
              <h3>Latihan Soal</h3>
              <p>
                Gunakan latihan soal untuk mengukur pemahamanmu terhadap materi.
              </p>
            </div>
            <div class="tip">
              <h3>Teknik Mind Mapping</h3>
              <p>
                Buat peta pikiran untuk membantu mengorganisir ide-ide dan
                informasi.
              </p>
            </div>
            <div class="tip">
              <h3>Berkelompok</h3>
              <p>
                Belajar dalam kelompok untuk saling berbagi pengetahuan dan
                strategi.
              </p>
            </div>
            <div class="tip">
              <h3>Membaca Aktif</h3>
              <p>Ajukan pertanyaan saat membaca untuk meningkatkan pemahaman.</p>
            </div>
            <div class="tip">
              <h3>Menggunakan Aplikasi Pembelajaran</h3>
              <p>
                Manfaatkan aplikasi untuk membantu mengatur jadwal belajar dan
                kuis.
              </p>
            </div>
            <div class="tip">
              <h3>Istirahat yang Cukup</h3>
              <p>Ambil istirahat secara teratur agar otakmu tetap segar.</p>
            </div>
            <div class="tip">
              <h3>Belajar dengan Mengajar</h3>
              <p>Cobalah untuk mengajarkan materi kepada orang lain.</p>
            </div>
            <div class="tip">
              <h3>Mengatur Tujuan</h3>
              <p>Tentukan tujuan belajar yang spesifik dan terukur.</p>
            </div>
            <div class="tip">
              <h3>Rutin Mengulas</h3>
              <p>Luangkan waktu untuk mengulas materi secara berkala.</p>
            </div>
            <div class="tip">
              <h3>Menghindari Multitasking</h3>
              <p>Fokus pada satu tugas untuk hasil yang lebih baik.</p>
            </div>
            <div class="tip">
              <h3>Menggunakan Sumber Belajar Beragam</h3>
              <p>Manfaatkan buku, video, dan sumber online untuk belajar.</p>
            </div>    
        </div>
    </section>

    <!-- Quotes Section -->
    <section id="quotes">
        <h2>Quotes Inspiratif</h2>
        <p>"Belajar adalah pengalaman yang lebih baik daripada apa pun yang dapat dilakukan oleh pengalaman lain." - Albert Einstein</p>
        <p>"Kebangkitan pendidikan adalah kebangkitan masyarakat." - Unbekannt</p>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Tips Belajar Efektif. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
