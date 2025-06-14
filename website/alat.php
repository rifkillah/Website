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
            <h2>Alat Musik Yogyakarta</h2>
            <p>
            Alat musik Yogyakarta merupakan instrumen tradisional yang berkembang dalam budaya Jawa dan menjadi bagian integral dari kehidupan masyarakat serta keraton. Alat-alat ini tidak hanya berfungsi sebagai pengiring kesenian tetapi juga memiliki nilai filosofis dan spiritual yang dalam. Sebagian besar tergabung dalam ansambel gamelan yang digunakan untuk mengiringi wayang kulit, tari klasik, upacara adat, dan ritual keraton. Beberapa alat musik khas Yogyakarta seperti gamelan (terdiri dari gong, kenong, saron), kendhang, rebab, siter, dan slenthem memiliki karakter suara yang khas dengan laras slendro dan pelog. Instrumen-instrumen ini dibuat dengan teknik khusus dan bahan pilihan, mencerminkan kearifan lokal serta kehalusan estetika budaya Jawa. Selain berfungsi sebagai hiburan, alat musik tradisional Yogyakarta juga berperan dalam pelestarian nilai-nilai luhur masyarakat Jawa yang diwariskan turun-temurun.
           
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="rindik.php"><img src="gambar/gamelan1.jpg" alt="Umelasi"></a></div>
                <div class="slide"><a href="ceng.php"><img src="gambar/kendang.jpg" alt="Ngaben"></a></div>
                <div class="slide"><a href="gender.php"><img src="gambar/rebab.jpg" alt="Saraswati"></a></div>
                <div class="slide"><a href="gangsa.php"><img src="gambar/siter.jpeg" alt="Tumpak"></a></div>
                <div class="slide"><a href="gamelang.php"><img src="gambar/slenthem.jpg" alt="Tumpak"></a></div>
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
