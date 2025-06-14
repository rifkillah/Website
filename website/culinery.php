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
                    <h3>Gudeg</h3>
                    <img src="gambar/gudeg.jpeg" style="width: 100%; height: 70%;" alt="Taman Sari">
                    <a href="gudeg.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Bakpia</h3>
                    <img src="gambar/bakpia.jpeg" style="width: 100%; height: 70%;" alt="Candi Borobudur">
                    <a href="bakpia.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Sate Khlathak</h3>
                    <img src="gambar/khalatak.jpeg" style="width: 100%; height: 70%;" alt="Malioboro">
                    <a href="SateKlathak.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Nasi Kucing</h3>
                    <img src="gambar/angkringan.jpg" style="width: 100%; height: 70%;" alt="Candi Prambanan">
                    <a href="nasikucing.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Wedang Ronde</h3>
                    <img src="gambar/ronde.jpg" style="width: 100%; height: 70%;" alt="Pantai Parangtritis">
                    <a href="wedangronde.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
            </div> 
        </section>  
    <!-- Beberapa Wisata di Bali -->


    <div class="pagination">
        <a href="#" class="page-number active">1</a>
        <a href="culinery2.php" class="page-number">2</a>
    </div>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Rifkillah Muliya Al-faris.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
