<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="c.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
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
    
    <!-- Gambar di bawah navbar -->
    <div class="hero-image-container">
        <img src="gambar/tugu5.jpg" alt="Hero Image">
        <div class="hero-text">Selamat datang di Yogyakarta</div>
    </div>
    
    <div class="batas">
    </div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

    <div class="content">

    <section class="tempat-hits">
            <h2>Wisata Yogyakarta</h2>
            <div class="tempat-hits-container">
                <div class="tempat-hits-item">
                    <h3>Geplak</h3>
                    <img src="gambar/geplak.jpg" style="width: 100%; height: 70%;" alt="Taman Sari">
                    <a href="geplak.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Jadah Tempe</h3>
                    <img src="gambar/jadahtempe.jpg" style="width: 100%; height: 70%;" alt="Candi Borobudur">
                    <a href="jadahtempe.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Nasi Merah</h3>
                    <img src="gambar/sego.jpg" style="width: 100%; height: 70%;" alt="Malioboro">
                    <a href="nasimerah.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Oseng-oseng Mercon</h3>
                    <img src="gambar/mercon.jpeg" style="width: 100%; height: 70%;" alt="Candi Prambanan">
                    <a href="osengmercon.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Es Campur Yogya</h3>
                    <img src="gambar/esyogya.webp" style="width: 100%; height: 70%;" alt="Pantai Parangtritis">
                    <a href="escampuryogya.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
            </div> 
        </section>  
    <!-- Beberapa Wisata di Bali -->


    <div class="pagination">
        <a href="culinery.php" class="page-number ">1</a>
        <a href="culinery2.php" class="page-number active">2</a>
    </div>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Rifkillah Muliya Al-faris.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
