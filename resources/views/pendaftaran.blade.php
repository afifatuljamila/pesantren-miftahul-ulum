<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP Miftahul Ulum - Mencetak Generasi Qur'ani & Beradab</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.jpg.png') }}">
    <style>
        :root {
            --primary-green: #1a5928;
            --dark-green: #0e3617;
            --accent-gold: #c5a059;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgba(214, 214, 221, 0.85), rgba(225, 225, 230, 0.85)), 
                        url("{{ asset('assets/img/gambar pesantren.jpg.jfif') }}") no-repeat center center fixed;
            background-size: cover;
            color: #0e0d0dff;
            overflow-x: hidden;
        }

        /* Navbar Enhancement */
        .navbar { 
            background: rgba(255, 255, 255, 0.95); 
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05); 
            padding: 12px 0;
        }
        .nav-link { font-weight: 500; color: #444 !important; transition: 0.3s; }
        .nav-link:hover { color: var(--primary-green) !important; }

        /* Hero Section */
        .hero-section { 
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(40, 70, 40, 0.75)), 
                        url("{{ asset('assets/img/gambarpeantren.jpg.jfif') }}") no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white; 
            padding: 180px 0 140px; 
            text-align: center; 
        }

        .arabic-text {
            font-family: 'Amiri', serif;
            font-size: 3rem;
            color: var(--accent-gold);
            margin-bottom: 25px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        /* Section Titles */
        .section-title {
            color: var(--primary-green);
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-gold);
            border-radius: 2px;
        }

        /* Custom Cards */
        .program-card {
            border: none;
            border-radius: 20px;
            transition: all 0.4s ease;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
        }
        .program-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 15px 40px rgba(26, 89, 40, 0.15);
        }
        .icon-box {
            width: 80px;
            height: 80px;
            background: rgba(26, 89, 40, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary-green);
            transition: 0.3s;
        }
        .program-card:hover .icon-box {
            background: var(--primary-green);
            color: white;
        }

        /* Form Styling */
        .card-pendaftaran {
            border: none;
            border-radius: 25px;
            margin-top: -100px;
            background: white;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 0.25rem rgba(26, 89, 40, 0.1);
        }

        /* Info Badge */
        .info-badge {
            background: white;
            padding: 25px;
            border-radius: 15px;
            border-bottom: 5px solid var(--accent-gold);
            height: 100%;
            transition: 0.3s;
        }
        .info-badge:hover { background: var(--primary-green); color: white !important; }
        .info-badge:hover .text-muted { color: rgba(255,255,255,0.7) !important; }

        footer { background: #0a2411; color: #b0c4b5; padding: 80px 0 30px; }
        .footer-link { color: #b0c4b5; text-decoration: none; transition: 0.3s; }
        .footer-link:hover { color: var(--accent-gold); padding-left: 10px; }

        .btn-daftar { 
            background: var(--primary-green); 
            border: none;
            border-radius: 50px; 
            padding: 12px 30px;
            font-weight: 600;
        }
        /* ... kode CSS lainnya ... */

        .btn-daftar { 
            background: var(--primary-green); 
            border: none;
            border-radius: 50px; 
            padding: 12px 30px;
            font-weight: 600;
        }

        /* TARO KODEMU DI SINI */
        .tata-tertib-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            border-left: 5px solid var(--primary-green);
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .tata-tertib-list {
            list-style: none;
            padding-left: 0;
        }
        .tata-tertib-list li {
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
        }
        .tata-tertib-list li::before {
            content: "\f633"; 
            font-family: bootstrap-icons;
            position: absolute;
            left: 0;
            color: var(--accent-gold);
            font-weight: bold;
        }
    </style> ```

---

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP Miftahul Ulum - Mencetak Generasi Qur'ani & Beradab</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.jpg.png') }}">

    <style>
        :root {
            --primary-green: #1a5928;
            --dark-green: #0e3617;
            --accent-gold: #c5a059;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgba(214, 214, 221, 0.85), rgba(225, 225, 230, 0.85)), 
                        url("{{ asset('assets/img/gambar pesantren.jpg.jfif') }}") no-repeat center center fixed;
            background-size: cover;
            color: #333;
            overflow-x: hidden;
        }

        .navbar { 
            background: rgba(255, 255, 255, 0.95); 
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05); 
        }

        .hero-section { 
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(40, 70, 40, 0.75)), 
                        url("{{ asset('assets/img/gambarpeantren.jpg.jfif') }}") no-repeat center center fixed;
            background-size: cover;
            color: white; 
            padding: 150px 0 100px; 
            text-align: center; 
        }

        .section-title {
            color: var(--primary-green);
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 50px;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0; left: 50%; transform: translateX(-50%);
            width: 80px; height: 4px; background: var(--accent-gold);
        }

        .tata-tertib-card {
            background: white; padding: 30px; border-radius: 20px;
            border-left: 5px solid var(--primary-green); height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .tata-tertib-list { list-style: none; padding-left: 0; }
        .tata-tertib-list li { margin-bottom: 12px; padding-left: 30px; position: relative; }
        .tata-tertib-list li::before {
            content: "\f633"; font-family: bootstrap-icons;
            position: absolute; left: 0; color: var(--accent-gold);
        }

        .program-card { border-radius: 20px; transition: 0.3s; border: none; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .program-card:hover { transform: translateY(-10px); }

        footer { background: #0a2411; color: #b0c4b5; padding: 60px 0 30px; }
        .footer-link { color: #b0c4b5; text-decoration: none; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/img/logo.jpg.png') }}" alt="Logo" width="45" class="me-2">
                <div class="lh-1">
                    <span class="fw-bold d-block" style="color: var(--primary-green); font-size: 1.4rem;">MIFTAHUL ULUM</span>
                    <small class="text-muted" style="font-size: 0.7rem; letter-spacing: 2px;">PONDOK PESANTREN</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-success btn-daftar text-white ms-lg-4" href="#form-daftar">Daftar Santri</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </style>
</head>
<body>


    <section class="hero-section">
        <div class="container" data-aos="zoom-in">
            <div class="arabic-text">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ</div>
            <h1 class="display-4 fw-bold mb-3">PONDOK PESANTREN MIFTAHUL ULUM</h1>
            <h1 class="display-6 fw-bold mb-3">Mencetak Generasi Robbani</h1>
            <p class="lead mb-5 fs-4 px-md-5">Unggul dalam Ilmu Agama, Mulia dalam Akhlak, dan Cakap dalam Teknologi untuk Masa Depan Umat.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#profil" class="btn btn-outline-light btn-lg px-4 rounded-pill">Profil Pesantren</a>
                <a href="#form-daftar" class="btn btn-warning btn-lg px-4 rounded-pill text-dark fw-bold">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-badge shadow-sm">
                        <h2 class="fw-bold text-success">1200+</h2>
                        <p class="text-muted mb-0">Santri Aktif</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-badge shadow-sm">
                        <h2 class="fw-bold text-success">45</h2>
                        <p class="text-muted mb-0">Ustadz/ah</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-badge shadow-sm">
                        <h2 class="fw-bold text-success">15</h2>
                        <p class="text-muted mb-0">Ekstrakurikuler</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-badge shadow-sm">
                        <h2 class="fw-bold text-success">A</h2>
                        <p class="text-muted mb-0">Akreditasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profil" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/gambar pesantren.jpg.jfif') }}" class="img-fluid rounded-4 shadow-lg" alt="Gedung Pesantren">
                        <div class="position-absolute bottom-0 end-0 bg-warning p-4 rounded-4 shadow d-none d-md-block" style="margin-right: -20px; margin-bottom: -20px;">
                            <h5 class="mb-0 fw-bold">Est. 1995</h5>
                            <small>Mengabdi untuk Negeri</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <h2 class="section-title text-start">Mengenal Lebih Dekat</h2>
                    <p class="lead text-success fw-bold">"Mencetak ulama yang intelek dan intelek yang ulama."</p>
                    <p>Pondok Pesantren Miftahul Ulum didirikan dengan visi besar untuk menjawab tantangan zaman. Kami menyediakan lingkungan belajar yang asri dan kondusif, menggabungkan kurikulum <strong>Pesantren Salafiyah</strong> yang kuat dengan <strong>Kurikulum Nasional</strong>.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Lingkungan asri dan aman</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fasilitas olahraga & lab komputer</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Pembinaan karakter 24 jam</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="program" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Program Pendidikan</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card program-card p-4 text-center">
                        <div class="icon-box"><i class="bi bi-book-half fs-2"></i></div>
                        <h4>Madrasah Diniyah</h4>
                        <p class="text-muted">Kurikulum kitab kuning (Turots) mencakup Fiqh, Tauhid, Alat (Nahwu & Shorof).</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card program-card p-4 text-center border-bottom border-success border-4">
                        <div class="icon-box"><i class="bi bi-stars fs-2"></i></div>
                        <h4>Tahfidz Al-Qur'an</h4>
                        <p class="text-muted">Program menghafal Al-Qur'an dengan target terukur dan bimbingan murottal berkualitas.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card program-card p-4 text-center">
                        <div class="icon-box"><i class="bi bi-code-slash fs-2"></i></div>
                        <h4>Digital Skill</h4>
                        <p class="text-muted">Ekstrakurikuler IT seperti Web Design, Content Creation, dan Desain Grafis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tata-tertib" class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Tata Tertib Santri</h2>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="tata-tertib-card">
                        <h4 class="mb-4 text-success"><i class="bi bi-shield-check me-2"></i> Kewajiban Santri</h4>
                        <ul class="tata-tertib-list">
                            <li>Wajib mengikuti shalat berjamaah 5 waktu di Masjid.</li>
                            <li>Mengikuti seluruh rangkaian kegiatan belajar mengajar dan setoran hafalan.</li>
                            <li>Berpakaian sopan dan islami (Sarung, Koko, dan Peci untuk Putra).</li>
                            <li>Menjaga kebersihan lingkungan kamar dan area pesantren.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="tata-tertib-card">
                        <h4 class="mb-4 text-danger"><i class="bi bi-exclamation-octagon me-2"></i> Larangan Santri</h4>
                        <ul class="tata-tertib-list">
                            <li>Dilarang membawa alat elektronik (HP, Laptop, MP3) tanpa izin.</li>
                            <li>Dilarang membawa atau menghisap rokok di area pesantren.</li>
                            <li>Dilarang keluar area pesantren tanpa izin tertulis dari Keamanan.</li>
                            <li>Dilarang membawa senjata tajam atau barang berbahaya lainnya.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5" id="form-daftar">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8" data-aos="zoom-in-up">
                <div class="card card-pendaftaran shadow-lg p-4 p-md-5">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-success">Pendaftaran Santri Baru</h3>
                        <p class="text-muted">Silahkan isi formulir di bawah ini dengan data yang benar.</p>
                    </div>
                    <form action="{{ route('daftar.store') }}" method="POST">
                       @csrf
                       <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-600">Nama Lengkap Santri</label>
                                <input type="text" class="form-control bg-light py-2" placeholder="Nama sesuai ijazah" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-600">Pilihan Program</label>
                                <select class="form-select bg-light py-2">
                                    <option>Reguler (SMP/SMA)</option>
                                    <option>Khusus Tahfidz</option>
                                    <option>Pasca Sekolah (Takhasus)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-600">WhatsApp Orang Tua</label>
                                <input type="tel" class="form-control bg-light py-2" placeholder="08xxxx" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-600">Asal Kota</label>
                                <input type="text" class="form-control bg-light py-2" placeholder="Contoh: Surabaya" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-600">Catatan/Pesan Tambahan</label>
                            <textarea class="form-control bg-light" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-3 fw-bold rounded-pill shadow">SUBMIT PENDAFTARAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-4">
                    <h4 class="text-white fw-bold mb-4">MIFTAHUL ULUM</h4>
                    <p class="pe-md-5">Lembaga pendidikan Islam yang berkomitmen membangun peradaban umat melalui pendidikan yang berkualitas dan terjangkau bagi semua kalangan.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-4">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Beranda</a></li>
                        <li class="mb-2"><a href="#profil" class="footer-link">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#program" class="footer-link">Program Studi</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Biaya Pendidikan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-white mb-4">Hubungi Kami</h5>
                    <p class="small mb-2 d-flex"><i class="bi bi-geo-alt me-3 text-warning"></i> Jl. Raya Pesantren No. 123, Kabupaten Pasuruan, Jawa Timur</p>
                    <p class="small mb-2 d-flex"><i class="bi bi-whatsapp me-3 text-warning"></i> +62 812 3456 7890</p>
                    <p class="small mb-2 d-flex"><i class="bi bi-envelope me-3 text-warning"></i> info@miftahululum.id</p>
                </div>
            </div>
            <hr class="mt-5 border-secondary">
            <div class="text-center mt-4">
                <p class="small mb-0">&copy; 2026 Pondok Pesantren Miftahul Ulum. Developed with <i class="bi bi-heart-fill text-danger"></i> for Ummah.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>