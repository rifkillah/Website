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
            <li><a href="kontak1.php">Hubungi kami</a></li>
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
            <h2>Budaya & Adat Istiadat</h2>
            <p>Budaya dan adat istiadat Yogyakarta mencerminkan kekayaan tradisi Jawa yang masih terjaga, dengan Keraton Yogyakarta sebagai pusatnya. Budaya Yogyakarta meliputi bahasa Jawa dengan tingkatan kesopanan (krama, ngoko), seni seperti wayang kulit, tari Bedhaya, gamelan, dan batik, serta filosofi hidup seperti "Hamemayu Hayuning Bawana" yang mengedepankan harmoni. Adat istiadatnya terlihat dalam ritual kehidupan seperti tingkeban (mitoni) untuk kehamilan, sekaten dan garebeg sebagai perayaan Islam dengan gunungan hasil bumi, serta tradisi pernikahan seperti siraman dan midodareni. Keraton memiliki upacara sakral seperti labuhan (persembahan ke Laut Selatan) dan jumenengan (penobatan Sultan). Interaksi sosial diwarnai oleh sungkeman (permohonan maaf dengan mencium lutut orang tua) dan selamatan (kenduri) sebagai bentuk syukur. Arsitektur tradisional seperti rumah Joglo dan tata kota yang berpusat pada Keraton memperkuat identitas budaya ini. Yogyakarta juga dikenal dengan prinsip gotong royong dan penghormatan pada leluhur, menjadikannya salah satu pusat budaya Jawa yang paling autentik.
            </p>
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="melasi.php"><img src="gambar/grebeg.jpg" alt="Umelasi"></a></div>
                <div class="slide"><a href="ngaben.php"><img src="gambar/labuhan.jpg" alt="Ngaben"></a></div>
                <div class="slide"><a href="saraswati.php"><img src="gambar/tariklasik.jpg" alt="Saraswati"></a></div>
                <div class="slide"><a href="tumpak.php"><img src="gambar/mitoni.jpg" alt="Tumpak"></a></div>
                <div class="slide"><a href="galung.php"><img src="gambar/batik.jpg" alt="Tumpak"></a></div>
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
