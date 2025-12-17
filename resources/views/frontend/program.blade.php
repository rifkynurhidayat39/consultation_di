<!DOCTYPE html>
<html lang="en">
<header class="site-header">
<link rel="stylesheet" href="{{ asset('style/program.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
          <li><a href="aboutus.html">About Us</a></li>
          <li class="has-dropdown">
            <a href="program.html"class="active">Program <span class="caret">▾</span></a>
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
          <li><a href="berita.html">News Update</a></li>
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
        <a class="auth-btn" href="login.html">Login User</a>
      </div>
    </div>
  </header>
  <section class="program-section">
    <h2 class="program-title">Our Program</h2>

    <div class="program-carousel">
          <div class="program-card">
                <img src="gallery/jerman.jpg" class="program-image">
                <h3>Student Exchange</h3>
                <p class="program-desc">Belajar sambil bertukar budaya dengan mahasiswa dari berbagai negara.</p>
                <a href="student.html" class="detail-btn">Detail</a>
            </div>

            <div class="program-card">
              <img src="gallery/prescon.webp" class="program-image">
              <h3>Career Consultation</h3>
                <p class="program-desc">Konsultasi karier untuk mengarahkan masa depan sesuai minat dan potensi.</p>
                <a href="career.html" class="detail-btn">Detail</a>
            </div>

            <div class="program-card">
              <img src="gallery/overseas.jpg" class="program-image">
                <h3>Overseas Study & Internship</h3>
                <p class="program-desc">Belajar di luar negeri dengan dukungan penuh dari tim konsultan.</p>
                <a href="overseas.html" class="detail-btn">Detail</a>
            </div>
        </div>

    </div>
</section>

  
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
        <a href="privacy_policy.html" target="_blank">Terms & Condition</a> |
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
  <script>
    const container = document.querySelector('.program-container');
    const nextBtn = document.querySelector('.carousel-btn.next');
    const prevBtn = document.querySelector('.carousel-btn.prev');
  
    nextBtn.addEventListener('click', () => {
      container.scrollBy({ left: 350, behavior: 'smooth' });
    });
  
    prevBtn.addEventListener('click', () => {
      container.scrollBy({ left: -350, behavior: 'smooth' });
    });
  </script>
  
  </html>