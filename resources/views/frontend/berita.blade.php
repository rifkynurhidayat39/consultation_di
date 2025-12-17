<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Halaman Berita</title>

  <!-- Inter font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('style/home.css') }}">
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
            <a class="auth-btn" href="login.html">Login User</a>
        </div>
        </div>
    </header>

  <main class="container">
    <!-- Top news area -->
    <section class="top-news">
      <div class="left-col">
        <div class="news-list">
          <a href="detail_berita.html" class="mini-news">
            <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="">
            <div class="meta">
              <h4>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h4>
              <time>30 October 2025</time>
            </div>
          </a>
          <a href="detail_berita2.html" class="mini-news">
            <img src="gallery/images (10).jpg" alt="">
            <div class="meta">
              <h4>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h4>
              <time>30 October 2025</time>
            </div>
          </a>
          <a href="detail_berita.html" class="mini-news">
            <img src="gallery/images (11).jpg" alt="">
            <div class="meta">
              <h4>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h4>
              <time>30 October 2025</time>
            </div>
          </a>
        </div>
      </div>

      <div class="right-col">
        <div class="featured-slider">
          <div class="slider-container">
            <div class="slide active">
              <img src="gallery/cded0180-f43e-4856-9187-d371be3be799.jpg" alt="featured">
              <div class="featured-caption">SISWA MENDAPATKAN MENDALI EMAS DALAM OLIMPIADE MATEMATIKA TINGKAT NASIONAL</div>
            </div>
            <div class="slide">
              <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="featured">
              <div class="featured-caption">PRESTASI GEMILANG SISWA DALAM KOMPETISI SAINS NASIONAL</div>
            </div>
            <div class="slide">
              <img src="gallery/Siswa-SMA.-Ist-600x381.jpg" alt="featured">
              <div class="featured-caption">PROGRAM PERTUKARAN PELAJAR MEMBUKA WAWASAN GLOBAL</div>
            </div>
          </div>
          
          <button class="slider-arrow prev" aria-label="Previous slide">❮</button>
          <button class="slider-arrow next" aria-label="Next slide">❯</button>
          
          <div class="slider-dots">
            <button class="dot active" aria-label="Go to slide 1"></button>
            <button class="dot" aria-label="Go to slide 2"></button>
            <button class="dot" aria-label="Go to slide 3"></button>
          </div>
        </div>
      </div>
    </section>

    <!-- Berita Terkini -->
    <section class="latest-news">
      <h2>Berita Terkini</h2>
      <div class="card-grid">
        <!-- 8 cards as in screenshot -->
        <a href="detail_berita.html" class="card">
          <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/images (10).jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/images (11).jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/Siswa-SMA.-Ist-600x381.jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/images (11).jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/images (10).jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
        <a href="detail_berita.html" class="card">
          <img src="gallery/Siswa-SMA.-Ist-600x381.jpg" alt="">
          <h3>Kemenkdikbud Luncurkan Kurikulum Merdeka Versi Terbaru</h3>
        </a>
      </div>
    </section>
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
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Slider functionality
      const slider = {
        container: document.querySelector('.slider-container'),
        slides: document.querySelectorAll('.slide'),
        dots: document.querySelectorAll('.dot'),
        prevBtn: document.querySelector('.slider-arrow.prev'),
        nextBtn: document.querySelector('.slider-arrow.next'),
        currentSlide: 0,
        slideInterval: null,
        
        init() {
          this.showSlide(0);
          this.autoPlay();
          this.addEventListeners();
        },
        
        showSlide(n) {
          // Remove active class from current slide and dot
          this.slides[this.currentSlide].classList.remove('active');
          this.dots[this.currentSlide].classList.remove('active');
          
          // Update current slide index
          this.currentSlide = (n + this.slides.length) % this.slides.length;
          
          // Add active class to new slide and dot
          this.slides[this.currentSlide].classList.add('active');
          this.dots[this.currentSlide].classList.add('active');
        },
        
        nextSlide() {
          this.showSlide(this.currentSlide + 1);
        },
        
        prevSlide() {
          this.showSlide(this.currentSlide - 1);
        },
        
        autoPlay() {
          if (this.slideInterval) clearInterval(this.slideInterval);
          this.slideInterval = setInterval(() => this.nextSlide(), 5000);
        },
        
        addEventListeners() {
          // Arrow buttons
          this.prevBtn.addEventListener('click', () => {
            this.prevSlide();
            this.autoPlay(); // Reset timer
          });
          
          this.nextBtn.addEventListener('click', () => {
            this.nextSlide();
            this.autoPlay(); // Reset timer
          });
          
          // Dot navigation
          this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
              this.showSlide(index);
              this.autoPlay(); // Reset timer
            });
          });
          
          // Pause on hover
          this.container.addEventListener('mouseenter', () => {
            clearInterval(this.slideInterval);
          });
          
          this.container.addEventListener('mouseleave', () => {
            this.autoPlay();
          });
        }
      };
      
      // Initialize slider
      slider.init();
      // Toggle dropdown on click for small screens
      document.querySelectorAll('.has-dropdown > a').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
          if (window.innerWidth < 760) {
            e.preventDefault();
            const parent = anchor.parentElement;
            const wasOpen = parent.classList.contains('open');
            
            // Close all other open dropdowns
            document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
              if (dropdown !== parent) {
                dropdown.classList.remove('open');
                dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
              }
            });
            
            // Toggle current dropdown
            parent.classList.toggle('open');
            const isOpen = !wasOpen;
            anchor.setAttribute('aria-expanded', isOpen);
          }
        });
      });

      // Hamburger toggle for mobile nav show/hide
      const hamburger = document.querySelector('.hamburger');
      const mainNav = document.getElementById('mainNav');
      
      if (hamburger && mainNav) {
        hamburger.addEventListener('click', function() {
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          const newState = !isExpanded;
          
          // Toggle navigation
          this.setAttribute('aria-expanded', newState);
          mainNav.classList.toggle('open');
          
          // Close all dropdowns when closing nav
          if (!newState) {
            document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
              dropdown.classList.remove('open');
              dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
            });
          }
        });

        // Close mobile nav when clicking outside
        document.addEventListener('click', function(e) {
          const isNavOpen = mainNav.classList.contains('open');
          const clickedInsideNav = mainNav.contains(e.target);
          const clickedHamburger = hamburger.contains(e.target);
          
          if (isNavOpen && !clickedInsideNav && !clickedHamburger) {
            mainNav.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
            
            // Close all dropdowns
            document.querySelectorAll('.has-dropdown.open').forEach(function(dropdown) {
              dropdown.classList.remove('open');
              dropdown.querySelector('a').setAttribute('aria-expanded', 'false');
            });
          }
        });
      }

      // Prevent clicks on dropdown parents on desktop
      document.querySelectorAll('.has-dropdown > a').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
          if (window.innerWidth >= 760) {
            e.preventDefault();
          }
        });
      });
    });
  </script>
</body>
</html>