<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - Consultation Denpasar Institute</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/detail_berita.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
        
        <!-- mobile hamburger -->
        <button class="hamburger" aria-label="Open menu" aria-expanded="false">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
        </button>

        <nav id="mainNav" class="main-nav" role="navigation" aria-label="Main navigation">
            <ul class="nav-list">
                <li><a href="home.html">Home</a></li>
                
          <a href="{{ route('about') }}">About Us</a>
                <li class="has-dropdown">
                  <a href="program.html">Program <span class="caret">▾</span></a>
                  <ul class="dropdown">
                    <li><a href="student.html">Student Exchanges</a></li>
                    <li><a href="overseas.html">Overseas Study</a></li>
                    <li><a href="overseas.html">Internship Study</a></li>
                    <li><a href="career.html">Career Consultation</a></li>
                  </ul>
                </li>
                <li><a href="how it works.html">How It Works</a></li>
                <li><a href="register.html">Registration</a></li>
                <li class="has-dropdown">
                  <a href="gallery.html">Gallery <span class="caret">▾</span></a>
                  <ul class="dropdown">
                    <li><a href="gallery.html">Video</a></li>
                    <li><a href="gallery.html">Foto</a></li>
                  </ul>
                </li>
                <li><a href="berita.html"class="active">News Update</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
        </nav>

        <div class="header-right">
            <div class="lang-selector">
            <button class="lang">ID <span class="caret">▾</span></button>
            <ul class="lang-dropdown">
                <li><a href="#" class="active">ID</a></li>
                <li><a href="#">EN</a></li>
            </ul>
            </div>
            <a class="auth-btn" href="login.html"> Up</a>
        </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="news-detail">
        <div class="news-hero">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html">Home</a> / <a href="berita.html">News Update</a> / <span>Detail News</span>
                </div>
                <h1 class="news-title">SISWA INI MENDAPATKAN MEDALI EMAS DALAM OLIMPIADE MATEMATIKA TINGKAT NASIONAL</h1>
                <div class="news-meta">
                <span class="author">By Putu Aditya</span>
                <span class="date">6 Oktober 2025</span>
                <span class="category">Prestasi Siswa</span>

                <!-- Views di samping kategori -->
                <span class="views">
                    <span class="eye-icon">&#128065;</span>
                    200 Views
                </span>
            </div>
        </div>

            </div>
        </div>

        <div class="news-content">
            <div class="container">
                <div class="content-wrapper">
                    <div class="news-image-wrapper">
                        <img src="gallery/cded0180-f43e-4856-9187-d371be3be799.jpg" alt="SISWA INI MENDAPATKAN MEDALI EMAS DALAM OLIMPIADE MATEMATIKA TINGKAT NASIONAL" class="news-image">
                    </div>
                    
                    <div class="content-card">
                        <div class="news-body">
                            <p>Sebuah prestasi membanggakan kembali diraih oleh siswa Indonesia di kancah kompetisi matematika nasional. Made Wijaya, siswa kelas XI dari SMA Negeri 1 Denpasar, berhasil meraih medali emas dalam Olimpiade Matematika Tingkat Nasional 2025 yang diselenggarakan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            
                            <p>Made berhasil mengungguli lebih dari 500 peserta dari berbagai provinsi di Indonesia dengan menyelesaikan soal-soal kompleks matematika tingkat lanjut. "Persiapan yang intensif selama 6 bulan terakhir dan dukungan dari guru serta orangtua menjadi kunci keberhasilan saya," ungkap Made saat diwawancarai usai penganugerahan medali.</p>
                            
                            <p>Kepala SMA Negeri 1 Denpasar, Dr. I Gusti Ngurah Arya, M.Pd., menyatakan bahwa prestasi ini merupakan bukti nyata dari komitmen sekolah dalam mengembangkan potensi siswa di bidang sains dan matematika. "Kami memiliki program khusus untuk pembinaan olimpiade yang dijalankan secara konsisten. Prestasi Made ini diharapkan bisa menginspirasi siswa lainnya untuk berprestasi di tingkat nasional maupun internasional," jelasnya.</p>

                            <p>Made akan mewakili Indonesia dalam Olimpiade Matematika Internasional yang akan diselenggarakan di Singapura pada Desember 2025 mendatang. Tim pembina olimpiade sekolah saat ini sedang mempersiapkan program latihan intensif untuk memaksimalkan potensi Made di kompetisi internasional tersebut.</p>
                        </div>

                        <div class="share-buttons">
                            <span>Share this:</span>
                            <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="share-btn telegram"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>

                    <div class="more-news">
                        <h2>Berita Terkait</h2>
                        <div class="news-grid">
                            <a href="detail_berita.html" class="related-news">
                                <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="Berita terkait 1">
                                <h3>Tim Robotik SMA Denpasar Raih Juara 2 di Kompetisi Internasional</h3>
                                <span class="date">4 Oktober 2025</span>
                            </a>
                            <a href="detail_berita.html" class="related-news">
                                <img src="gallery/images (10).jpg" alt="Berita terkait 2">
                                <h3>Program Beasiswa Kuliah ke Luar Negeri Dibuka untuk Siswa Berprestasi</h3>
                                <span class="date">2 Oktober 2025</span>
                            </a>
                            <a href="detail_berita.html" class="related-news">
                                <img src="gallery/images (11).jpg" alt="Berita terkait 3">
                                <h3>Workshop Persiapan Olimpiade Sains Digelar di Denpasar</h3>
                                <span class="date">1 Oktober 2025</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
 <!-- FOOTER -->
<footer class="footer">
  <div class="container footer-container">
    <!-- Kolom 1: Contact -->
    <div class="footer-column">
      <h3>CONTACT US</h3>
      <p>
        Jl. Ganetri IV No.4 DPS 80237 Bali<br>
        Jl. Sari Dana No.1 DPS 80116 Bali
      </p>
      <p>📞 <a href="tel:+6287865309966" class="footer-link">087865309966</a></p>
      <p>📧 <a href="mailto:info@denpasarinstitute.com" class="footer-link">info@denpasarinstitute.com</a></p>
      <a href="#" target="_blank" class="footer-link">denpasarinstitute.com</a><br>
      <a href="https://maps.google.com/?q=Denpasar+Institute+Bali" target="_blank">
        <button class="footer-btn">Find Our Way</button>
      </a>
    </div>

    <!-- Kolom 2: About -->
    <div class="footer-column">
      <h3>ABOUT US</h3>
      <p>
        Denpasar Institute adalah Lembaga Riset & Pengembangan SDM yang berfokus pada riset, 
        pengembangan kompetensi, dan kolaborasi kegiatan sosial melalui CSR Program.
      </p>
    </div>

    <!-- Kolom 3: Program -->
    <div class="footer-column">
      <h3>OUR PROGRAM</h3>
      <ul>
        <li><a href="student.html" target="_blank">Student Exchanges</a></li>
        <li><a href="overseas.html" target="_blank">Overseas Study</a></li>
        <li><a href="overseas.html" target="_blank">Internship Study</a></li>
        <li><a href="career.html" target="_blank">Career Consultation</a></li>
      </ul>
    </div>
  </div>

  <!-- Bagian Bawah Footer -->
  <div class="footer-bottom">
    <p>
      © 2025 Denpasar Institute. Designed by 
      <a href="https://indoapps.id" target="_blank" class="highlight">PT. INDOAPPS SOLUSINDO</a> |
      <a href="privacy_policy.html" target="_blank">Privacy Policy</a> |
      <a href="terms_conditions.html" target="_blank">Terms & Condition</a> |
      <a href="faq.html" target="_blank">FAQ</a>
    </p>

    <!-- Social Media Icons -->
    <div class="social-inline">
      <a href="#" target="_blank" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" target="_blank" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" target="_blank" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
      <a href="#" target="_blank" class="social-icon tiktok"><i class="fab fa-tiktok"></i></a>
      <a href="#" target="_blank" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>
  
</body>
</html>
