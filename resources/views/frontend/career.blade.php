<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Consultant | Denpasar Institute</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('style/career.css') }}">
</head>
<body>

  <!-- ===== NAVBAR ===== -->
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
          <li><a href="aboutus.html">About Us</a></li>
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

  <!-- ===== HERO SECTION ===== -->
  <section class="hero-section"></section>

  <!-- ===== HERO CARD ===== -->
  <div class="hero-card">
    <h4>Career Consultant</h4>
    <p>
      A Career Consultant is a program where students study abroad at a partner school or university for a certain period.
      Usually, these programs allow them to experience a new culture, improve their language skills,
      and gain international academic and personal experience.
    </p>
  </div>

  <!-- ===== STEP BY STEP ===== -->
  <section class="step-section text-center">
    <div class="container">
      <h5>Step By Step</h5>

      <div class="row align-items-center step">
        <div class="col-md-6 text-md-start">
          <h6 class="fw-bold">Step 1 : Consultation</h6>
          <p>Meet our academic consultants and share your study or career aspirations.<br>
            We’ll help you explore the best international program that fits your ambitions.</p>
        </div>
        <div class="col-md-6">
          <img src="https://img.freepik.com/free-vector/office-concept-illustration_114360-1076.jpg?w=826" alt="Step 1" class="img-fluid">
        </div>
      </div>

      <div class="row align-items-center step flex-md-row-reverse">
        <div class="col-md-6 text-md-start">
          <h6 class="fw-bold">Step 2 : Consultation</h6>
          <p>Meet our academic consultants and share your study or career aspirations.<br>
            We’ll help you explore the best international program that fits your ambitions.</p>
        </div>
        <div class="col-md-6">
          <img src="https://img.freepik.com/free-vector/people-meeting-online_23-2148506829.jpg?w=826" alt="Step 2" class="img-fluid">
        </div>
      </div>

      <div class="row align-items-center step">
        <div class="col-md-6 text-md-start">
          <h6 class="fw-bold">Step 3 : Consultation</h6>
          <p>Meet our academic consultants and share your study or career aspirations.<br>
            We’ll help you explore the best international program that fits your ambitions.</p>
        </div>
        <div class="col-md-6">
          <img src="https://img.freepik.com/free-vector/business-consulting-concept-illustration_114360-2586.jpg?w=826" alt="Step 3" class="img-fluid">
        </div>
      </div>

      <div class="row align-items-center step flex-md-row-reverse">
        <div class="col-md-6 text-md-start">
          <h6 class="fw-bold">Step 4 : Consultation</h6>
          <p>Meet our academic consultants and share your study or career aspirations.<br>
            We’ll help you explore the best international program that fits your ambitions.</p>
        </div>
        <div class="col-md-6">
          <img src="https://img.freepik.com/free-vector/consulting-concept-illustration_114360-2554.jpg?w=826" alt="Step 4" class="img-fluid">
        </div>
      </div>

      <a href="register.html" class="btn btn-danger">Daftar</a>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>