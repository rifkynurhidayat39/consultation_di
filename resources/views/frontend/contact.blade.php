<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Denpasar Institute</title>
  <link rel="stylesheet" href="{{ asset('style/contact.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<!-- HEADER -->
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
          <li><a href="home.html" >Home</a></li>
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
          <li><a href="berita.html">News Update</a></li>
          <li><a href="contact.html"class="active">Contact</a></li>
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

  <!-- ====== CONTACT SECTION ====== -->
  <section class="contact-section">
    <h2>Contact</h2>
    <div class="contact-container">
      <div class="map">Maps</div>

      <div class="contact-info">
        <h3>DENPASAR INSTITUTE</h3>
        <p><i class="fa-solid fa-envelope"></i> info@denpasarinstitute.com</p>
        <p><i class="fa-solid fa-location-dot"></i> Jln. Ganetri IV No. 4 DPS 80237 Bali<br>Jln. Sari Dana I No. 1 DPS 80116 Bali</p>
        <p><i class="fa-solid fa-phone"></i> 087865309966</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-column">
        <h3>CONTACT US</h3>
        <p>
          Jl. Ganetri IV No.4 DPS 80237 Bali<br>
          Jl. Sari Dana No.1 DPS 80116 Bali
        </p>
        <p>📞 <a href="tel:+6287865309966" class="footer-link">087865309966</a></p>
        <p>📧 <a href="mailto:info@denpasarinstitute.com" class="footer-link">info@denpasarinstitute.com</a></p>
        <a href="https://denpasarinstitute.com" target="_blank" class="footer-link">denpasarinstitute.com</a><br>
        <a href="https://maps.google.com/?q=Denpasar+Institute+Bali" target="_blank">
          <button class="footer-btn">Find Our Way</button>
        </a>
      </div>

      <div class="footer-column">
        <h3>ABOUT US</h3>
        <p>
          Denpasar Institute adalah Lembaga Riset & Pengembangan SDM yang berfokus pada riset, 
          pengembangan kompetensi, dan kolaborasi kegiatan sosial melalui CSR Program.
        </p>
      </div>

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

    <div class="footer-bottom">
      <p>
        © 2025 Denpasar Institute. Designed by 
        <a href="https://indoapps.id" target="_blank" class="highlight">PT. INDOAPPS SOLUSINDO</a> |
        <a href="privacy_policy.html" target="_blank">Privacy Policy</a> |
        <a href="terms_conditions.html" target="_blank">Terms & Condition</a> |
        <a href="faq.html" target="_blank">FAQ</a>
      </p>
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