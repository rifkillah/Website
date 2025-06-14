<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="budd.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
            <!-- Video Background -->
    <video autoplay muted loop class="video-background">
        <source src="video/videoyogya.mp4" type="video/mp4">
        Browser Anda tidak mendukung tag video.
    </video>
    
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logo-unpam-300x291.png" alt="Logo Universitas Pamulang" class="logo">
        </div>
        <ul>
            <li><a href="index1.php">Beranda</a></li>
            <li><a href="destinasi.php">Destinasi</a></li>
            <li><a href="culinery.php">Kuliner</a></li>
            <li><a href="Budaya.php">Budaya</a></li>
            <li><a href="kontak1.php">Hubungi Kami</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Keluar</a>
        </div>
    </nav>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

 <!-- Konten Deskripsi dan Gambar dengan Slider -->
 <section class="content-section">
        <div class="description">
            <h2>Kesenian Yogyakarta</h2>
            <p>
            Kesenian Yogyakarta merupakan ekspresi budaya masyarakat Jawa yang berpusat di Daerah Istimewa Yogyakarta, mencakup berbagai bentuk seni tradisional yang telah berkembang selama berabad-abad di bawah pengaruh Keraton Ngayogyakarta Hadiningrat. Kesenian ini tidak hanya berfungsi sebagai hiburan, tetapi juga sebagai media pelestarian nilai-nilai filosofis Jawa, sarana pendidikan moral, dan bagian integral dari berbagai upacara adat serta ritual keraton. Ciri khas kesenian Yogyakarta terlihat dari unsur-unsur seperti gerak tari yang halus dan penuh makna (contohnya Tari Bedhaya dan Srimpi), alunan musik gamelan dengan laras slendro dan pelog, seni rupa tradisional (termasuk batik dengan motif simbolis seperti Parang dan Kawung), serta seni pertunjukan seperti wayang kulit dan ketoprak. Kesenian Yogyakarta juga mencerminkan akulturasi budaya Jawa dengan pengaruh Islam yang harmonis, seperti terlihat dalam tradisi Sekaten dan Garebeg. Yang membedakan kesenian Yogyakarta adalah penekanannya pada konsep "adiluhung" - seni yang tidak hanya indah secara estetis tetapi juga mengandung nilai-nilai luhur kehidupan. Kesenian ini terus dilestarikan baik dalam bentuk aslinya maupun melalui berbagai inovasi kontemporer, menjadikan Yogyakarta sebagai salah satu pusat kebudayaan Jawa yang paling otentik dan dinamis di Indonesia.
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="gong.php"><img src="gambar/wayang.jpg" alt="Umelasi"></a></div>
                <div class="slide"><a href="kecak.php"><img src="gambar/ketoprak.jpg" alt="Ngaben"></a></div>
                <div class="slide"><a href="ogoh.php"><img src="gambar/batik1.jpg" alt="Saraswati"></a></div>
                <div class="slide"><a href="calonarang.php"><img src="gambar/jatilan.jpg" alt="Tumpak"></a></div>
                <div class="slide"><a href="panji.php"><img src="gambar/klasik2.jpeg" alt="Tumpak"></a></div>
            </div>
            <div class="navigation">
                <button class="nav-btn" id="prev">&#9664; </button> <!-- Panah Kiri -->
                <button class="nav-btn" id="next"> &#9654;</button> <!-- Panah Kanan -->
            </div>
            <div class="button-container">
                <a href="budaya.php" class="wisata-button">Back To Beranda</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Rifkillah Muliya Al-faris.</p>
    </div>

    <script src="script.js"></script>
    <script>
        const slides = document.querySelector('.slides');
        const slide = document.querySelectorAll('.slide');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        let index = 0;

        function showSlide(i) {
            index += i;
            if (index < 0) {
                index = slide.length - 1;
            } else if (index >= slide.length) {
                index = 0;
            }
            slides.style.transform = `translateX(${-index * 100}%)`;
        }

        prev.addEventListener('click', () => showSlide(-1));
        next.addEventListener('click', () => showSlide(1));
    </script>
</body>
</html>
