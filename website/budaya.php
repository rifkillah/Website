<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="culture.css">
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

    <main>
        <section class="tempat-hits">
                <div class="tempat-hits-item">
                    <h3>Budaya & Adat Istiadat Yogyakarta</h3>
                    <img src="gambar/budayu.jpg" alt="Tempat Hits 1">
                    <a href="budayabali.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Alat Musik</h3>
                    <img src="gambar/jawa.jpg" alt="Tempat Hits 1">
                    <a href="alat.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Kesenian Yogyakarta</h3>
                    <img src="gambar/seni1.jpg" alt="Tempat Hits 1">
                    <a href="seni.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
        </section>  
    </main>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Rifkillah Muliya Al-faris.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
