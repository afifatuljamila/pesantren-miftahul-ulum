@php
    // Konfigurasi Data Pesantren (Di Laravel, ini sebaiknya di Controller, tapi bisa di sini untuk sementara)
    $nama_pesantren = "PP Miftahul Ulum";
    $tagline = "Mencetak Generasi Mutafaqqih Fid Din & Berakhlakul Karimah";
    $telepon = "0812-3456-7890";
    $alamat = "Jl. Pesantren No. 123, Pasuruan, Jawa Timur";
    $email = "info@miftahululum.sch.id";
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $nama_pesantren; ?> - Modern Islamic Boarding School</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root { 
        --p-green: #1a5928; 
        --s-green: #2e7d32; 
        --accent: #fbc02d;
        --light-bg: #f4f7f5; 
    }

    body { font-family: 'Poppins', sans-serif; background-color: var(--light-bg); color: #333; overflow-x: hidden; }
    
    /* Navbar Custom */
    .navbar { background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); box-shadow: 0 2px 15px rgba(0,0,0,0.05); }
    .navbar-brand span { font-weight: 700; color: var(--p-green); letter-spacing: -0.5px; }

    /* Hero Section */
    .hero { 
        height: 85vh; margin: 15px; border-radius: 40px; overflow: hidden;
        position: relative; display: flex; align-items: center; color: white;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), 
                    url('https://images.unsplash.com/photo-1590076214667-c0f33b98c442?q=80&w=2000') center/cover;
    }

    /* Card & Components */
    .feature-card {
        background: white; padding: 30px; border-radius: 20px;
        transition: all 0.3s ease; border: none; height: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }
    .feature-card:hover { transform: translateY(-10px); box-shadow: 0 15px 45px rgba(0,0,0,0.08); }
    .icon-box { 
        width: 60px; height: 60px; background: var(--light-bg); 
        color: var(--p-green); border-radius: 15px; display: flex; 
        align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px;
    }

    .form-container { 
        background: white; padding: 40px; border-radius: 30px; 
        box-shadow: 0 20px 50px rgba(0,0,0,0.05); border: 1px solid rgba(0,0,0,0.05);
    }

    .btn-pendaftaran { 
        background: var(--p-green); color: white; border-radius: 15px; 
        padding: 15px; width: 100%; border: none; font-weight: 600; transition: 0.3s;
    }
    .btn-pendaftaran:hover { background: var(--s-green); transform: scale(1.02); color: white; }
    
    .section-title { font-weight: 700; color: var(--p-green); position: relative; padding-bottom: 15px; }
    .section-title::after {
        content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);
        width: 60px; height: 4px; background: var(--accent); border-radius: 2px;
    }

    footer { background: #0a2611; color: #cbd5e0; padding: 60px 0 20px; }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('assets/img/logo.jpg.png') }}" height="40" class="me-2" alt="Logo">
        <span><?php echo $nama_pesantren; ?></span>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="bi bi-list fs-2"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link px-3" href="#">Profil</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#program">Program</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#kontak">Kontak</a></li>
          <li class="nav-item ms-lg-3">
            <a href="#pendaftaran" class="btn btn-success rounded-pill px-4 shadow-sm" style="background: var(--p-green);">
                <i class="bi bi-person-plus me-2"></i>Daftar Sekarang
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero shadow-lg" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
          <span class="badge rounded-pill bg-warning text-dark mb-3 px-3 py-2">Pendaftaran 2026 Telah Dibuka</span>
          <h1 class="display-3 fw-bold mb-4">Membangun Masa Depan Bersama Al-Qur'an</h1>
          <p class="lead mb-5 opacity-90"><?php echo $tagline; ?></p>
          <div class="d-flex gap-3 justify-content-center">
            <a href="#pendaftaran" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-success">Mulai Daftar</a>
            <a href="#" class="btn btn-outline-light btn-lg rounded-pill px-5"><i class="bi bi-play-circle me-2"></i>Virtual Tour</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 mt-5" id="program">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-center">
                    <div class="icon-box mx-auto"><i class="bi bi-book"></i></div>
                    <h4>Tahfidz Al-Qur'an</h4>
                    <p class="text-muted small">Program akselerasi hafalan Al-Qur'an dengan metode mutqin dan sanad.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-center">
                    <div class="icon-box mx-auto"><i class="bi bi-translate"></i></div>
                    <h4>Bahasa Asing</h4>
                    <p class="text-muted small">Lingkungan aktif berbahasa Arab dan Inggris untuk percakapan sehari-hari.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card text-center">
                    <div class="icon-box mx-auto"><i class="bi bi-mortarboard"></i></div>
                    <h4>Kitab Kuning</h4>
                    <p class="text-muted small">Kajian mendalam literatur klasik Islam dengan bimbingan guru kompeten.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="py-5" id="pendaftaran">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="display-5 fw-bold mb-4 text-success">Ayo Menjadi Bagian dari Santri Kami</h2>
          <p class="mb-4">Dapatkan pendidikan terbaik yang menyeimbangkan antara ilmu agama (ukhrawi) dan ilmu umum (duniawi) di lingkungan yang asri dan kondusif.</p>
          <ul class="list-unstyled">
            <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i> Fasilitas Asrama Nyaman</li>
            <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i> Ekstrakurikuler Beragam</li>
            <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-warning me-3 fs-4"></i> Beasiswa Santri Berprestasi</li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="form-container">
            <h3 class="fw-bold mb-4">Formulir Pendaftaran</h3>
            <form action="proses.php" method="POST">
              <div class="mb-3">
                <label class="form-label small fw-bold">Nama Lengkap Calon Santri</label>
                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Contoh: Ahmad Fauzi" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Pilihan Program</label>
                <select class="form-select form-control-lg bg-light border-0">
                    <option>Tahfidz Al-Qur'an</option>
                    <option>Kajian Kitab Kuning</option>
                    <option>Madrasah Reguler</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label small fw-bold">Nomor WhatsApp Orang Tua</label>
                <input type="tel" class="form-control form-control-lg bg-light border-0" placeholder="0812xxxx" required>
              </div>
              <button type="submit" class="btn-pendaftaran shadow-lg">Kirim Data Pendaftaran</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="kontak">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h4 class="text-white fw-bold mb-4"><?php echo $nama_pesantren; ?></h4>
          <p class="small"><?php echo $tagline; ?></p>
          <div class="d-flex gap-3 mt-4">
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-4 px-lg-5">
          <h5 class="text-white mb-4">Navigasi</h5>
          <ul class="list-unstyled small">
            <li class="mb-2"><a href="#" class="text-decoration-none text-reset">Sejarah Pesantren</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-reset">Kurikulum</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-reset">Unit Pendidikan</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-reset">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5 class="text-white mb-4">Informasi Kontak</h5>
          <p class="small mb-2"><i class="bi bi-geo-alt me-2 text-warning"></i> <?php echo $alamat; ?></p>
          <p class="small mb-2"><i class="bi bi-whatsapp me-2 text-warning"></i> <?php echo $telepon; ?></p>
          <p class="small mb-2"><i class="bi bi-envelope me-2 text-warning"></i> <?php echo $email; ?></p>
        </div>
      </div>
      <hr class="my-5 border-secondary">
      <div class="text-center small">
        <p class="mb-0">&copy; 2026 <?php echo $nama_pesantren; ?>. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 800,
        once: true
    });
  </script>
</body>
</html>