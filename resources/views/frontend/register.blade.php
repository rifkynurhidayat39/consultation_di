<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <!-- CSS khusus halaman ini -->
    <link rel="stylesheet" href="{{ asset('style/register.css') }}">

    <!-- ICON FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
<!-- RED HEADER -->
<div class="reg-header">
  <h1>Registrasi</h1>
  <p>
    For detailed information regarding how we protect and manage your data<br>
    at Commutation Dempasser Institute, please visit our 
    <a href="privacy_policy.html">Privacy Policy</a> page.
  </p>
</div>
<br>
<!-- WHITE FORM BOX -->
<div class="reg-container">

  <h2>IDENTITAS PESERTA</h2>
<br>
  <form class="reg-form">
    <div class="reg-row">
      <div class="reg-field">
        <label>Program</label>
        <select>
          <option>None</option>
          <option>Overseas Study & Internship</option>
          <option>Career Consultant</option>
          <option>Student Exchange</option>
        </select>
      </div>
    </div>
    <div class="reg-row top-fields">
      <div class="reg-field">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Nama Lengkap">
      </div>
    
      <div class="reg-field">
        <label>Tanggal Lahir</label>
        <input type="text" placeholder="DD-MM-YYYY">
      </div>
    </div>
    
    <div class="reg-row top-fields">
      <div class="reg-field">
        <label>NIK / No KTP</label>
        <input type="text" placeholder="NIK / No KTP">
      </div>
    
      <div class="reg-field">
        <label>Email</label>
        <input type="email" placeholder="Email">
      </div>
    </div>
    <!-- Baris alamat domisili (1 kolom full width) -->
<div class="reg-row">
  <div class="reg-field full-width">
    <label>Alamat Domisili</label>
    <input type="text" placeholder="Alamat Domisili">
  </div>
</div>

<!-- Baris dropdown 3 kolom -->
<div class="reg-row three-col">
  <div class="reg-field">
    <label>Provinsi</label>
    <select>
      <option>Pilih Provinsi</option>
    </select>
  </div>

  <div class="reg-field">
    <label>Kabupaten/Kota</label>
    <select>
      <option>Pilih Kabupaten/Kota</option>
    </select>
  </div>

  <div class="reg-field">
    <label>Kecamatan</label>
    <select>
      <option>Pilih Kecamatan</option>
    </select>
  </div>
</div>

   
    

    <!-- UPLOAD FOTO -->
    <label class="upload-label">Foto Diri (wajib diisi)</label>
    <div class="upload-box">
      <div>
        <i class="fa-solid fa-cloud-arrow-up"></i><br>
        Drag atau drop untuk memilih gambar
      </div>
    </div>
    <p class="upload-note">Foto harus potret, wajah jelas dan berwarna.</p>

    <!-- UPLOAD BUKTI BAYAR -->
    <label class="upload-label">Unggah Bukti Pembayaran</label>
    <div class="upload-box">
      <div>
        <i class="fa-solid fa-cloud-arrow-up"></i><br>
        Drag atau drop untuk memilih gambar
      </div>
    </div>
    <!-- UPLOAD CV -->
    <label class="upload-label">Unggah CV</label>
    <div class="upload-box">
      <div>
        <i class="fa-solid fa-cloud-arrow-up"></i><br>
        Drag atau drop untuk memilih gambar
      </div>
    </div>

    <!-- BUTTONS -->
    <div class="btn-group">
      <button type="reset" class="btn-yellow">Reset</button>
      <button type="submit" class="btn-red">Submit</button>
    </div>
  </div>
  </form>

</div>
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

<script>
  // Navbar scroll effect - transparan di atas, putih saat scroll
  (function() {
    const header = document.querySelector('.site-header');
    
    if (!header) return;
    
    function handleScroll() {
      const scrollPosition = window.scrollY;
      
      if (scrollPosition > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }
    
    // Check on load
    handleScroll();
    
    // Check on scroll
    window.addEventListener('scroll', handleScroll);
  })();

  // Mobile hamburger menu toggle
  (function() {
    const hamburger = document.querySelector('.hamburger');
    const mainNav = document.getElementById('mainNav');
    const dropdownToggles = document.querySelectorAll('.has-dropdown > a');
    
    if (!hamburger || !mainNav) return;
    
    // Toggle menu on hamburger click
    hamburger.addEventListener('click', function() {
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !isExpanded);
      mainNav.classList.toggle('open');
    });
    
    // Close menu when clicking on a link
    const navLinks = mainNav.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        // Don't close if it's a dropdown toggle
        if (!this.closest('.has-dropdown')) {
          hamburger.setAttribute('aria-expanded', 'false');
          mainNav.classList.remove('open');
        }
      });
    });
    
    // Toggle dropdown menus on mobile (click instead of hover)
    dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', function(e) {
        const dropdown = this.nextElementSibling;
        const isOpen = dropdown.classList.toggle('open');
        this.setAttribute('aria-expanded', isOpen);
        
        // Close other dropdowns
        dropdownToggles.forEach(other => {
          if (other !== this) {
            other.setAttribute('aria-expanded', 'false');
            if (other.nextElementSibling) {
              other.nextElementSibling.classList.remove('open');
            }
          }
        });
        
        e.preventDefault();
      });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.site-header')) {
        hamburger.setAttribute('aria-expanded', 'false');
        mainNav.classList.remove('open');
        dropdownToggles.forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
          if (toggle.nextElementSibling) {
            toggle.nextElementSibling.classList.remove('open');
          }
        });
      }
    });
  })();
</script>

</body>
</html>
