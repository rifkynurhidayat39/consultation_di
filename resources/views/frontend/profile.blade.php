<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('style/profile.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

  <div class="profile-container">
    <div class="banner-section">
      <div class="banner-image">
        <img src="gallery/global.jpg" alt="Banner">
      </div>
      <div class="action-buttons">
        <button class="btn-edit-bg">
          <i class="fas fa-camera"></i>
          Edit Cover Photo
        </button>
      </div>
    </div>

    <div class="profile-header">
      <div class="profile-photo">
        <img src="gallery/orang3.jpg" alt="Profile">
        <button class="btn-edit-photo">
          <i class="fas fa-camera"></i>
        </button>
      </div>
      
      <div class="user-info-section">
        <h1 class="user-name">Zhuher Mubarokh</h1>
        <p class="user-role">Student</p>
      </div>
    </div>

    <div class="data-diri-card">
      <div class="card-title-row">
        <h2 class="card-title">Data Diri</h2>
        <button class="btn-edit-diri">
          <i class="fas fa-pen"></i>
          <span>Edit</span>
        </button>
      </div>
      <div class="data-row">
        <span class="data-label">Nama Lengkap</span>
        <span class="data-separator">:</span>
        <span class="data-value">Zhuher Mubarokh</span>
      </div>
      <div class="data-row">
        <span class="data-label">No Telepon</span>
        <span class="data-separator">:</span>
        <span class="data-value">0851234567</span>
      </div>
      <div class="data-row">
        <span class="data-label">Alamat</span>
        <span class="data-separator">:</span>
        <span class="data-value">Jl. Pandawa, Banjar Kebon, Singapadu, Gianyar, Bali</span>
      </div>
      <div class="data-row">
        <span class="data-label">Tanggal Lahir</span>
        <span class="data-separator">:</span>
        <span class="data-value">02 Januari 2007</span>
      </div>
    </div>
  </div>

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
        <a href="index.html" class="footer-link">denpasarinstitute.com</a><br>
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
        <a href="terms_conditions.html" target="_blank">Terms & Condition</a>
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

  <!-- Hamburger & Dropdown functionality -->
  <script>
    // Hamburger toggle for mobile nav
    const hamburger = document.querySelector('.hamburger');
    const mainNav = document.getElementById('mainNav');
    
    if (hamburger && mainNav) {
      hamburger.addEventListener('click', function() {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        const newState = !isExpanded;
        
        this.setAttribute('aria-expanded', newState);
        mainNav.classList.toggle('open');
        
        if (!newState) {
          document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
            dropdown.classList.remove('open');
            dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
          });
        }
      });

      document.addEventListener('click', function(e) {
        const isNavOpen = mainNav.classList.contains('open');
        const clickedInsideNav = mainNav.contains(e.target);
        const clickedHamburger = hamburger.contains(e.target);
        
        if (isNavOpen && !clickedInsideNav && !clickedHamburger) {
          mainNav.classList.remove('open');
          hamburger.setAttribute('aria-expanded', 'false');
          
          document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
            dropdown.classList.remove('open');
            dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
          });
        }
      });
    }

    // Toggle dropdown on small screens
    document.querySelectorAll('.has-dropdown > a').forEach(function(anchor) {
      anchor.addEventListener('click', function(e) {
        if (window.innerWidth < 760) {
          e.preventDefault();
          const parent = anchor.parentElement;
          const wasOpen = parent.classList.contains('open');
          
          document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
            if (dropdown !== parent) {
              dropdown.classList.remove('open');
              dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
            }
          });
          
          parent.classList.toggle('open');
          const isOpen = !wasOpen;
          anchor.setAttribute('aria-expanded', isOpen);
        }
      });
    });
  </script>

</body>
</html>
