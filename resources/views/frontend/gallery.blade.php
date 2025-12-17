<header class="site-header">
<link rel="stylesheet" href="{{ asset('style/gallery.css') }}">
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
          <li><a href="home.html" >Home</a></li>
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
            <a href="gallery.html"class="active">Gallery <span class="caret">▾</span></a>
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
  
  <main>
    <h1 class="gallery-title">Gallery</h1>
  
    <section class="gallery-container">
      <div class="gallery-item"><img src="gallery/jerman.jpg" alt="Germany"><div class="overlay"><p>Students Exchange in Germany</p></div></div>
      <div class="gallery-item"><img src="gallery/jepang.jpg" alt="Japan"><div class="overlay"><p>Students Exchange in Japan</p></div></div>
      <div class="gallery-item"><img src="gallery/singapore.jpg" alt="Singapore"><div class="overlay"><p>Internship in Singapore</p></div></div>
      <div class="gallery-item"><img src="gallery/overseas.jpg" alt="Overseas"><div class="overlay"><p>Overseas Study Program</p></div></div>
      <div class="gallery-item"><img src="gallery/korea.jpg" alt="Korea"><div class="overlay"><p>Student Exchange in Korea</p></div></div>
      <div class="gallery-item"><img src="gallery/global.jpg" alt="Global"><div class="overlay"><p>Global Research Collaboration</p></div></div>
      <div class="gallery-item"><img src="gallery/prancis.jpg" alt="France"><div class="overlay"><p>Cultural Exchange in France</p></div></div>
      <div class="gallery-item"><img src="gallery/usa.jpeg" alt="USA"><div class="overlay"><p>Summer Study in USA</p></div></div>
      <div class="gallery-item"><img src="gallery/australia.jpg" alt="Australia"><div class="overlay"><p>Student Exchange in Australia</p></div></div>
      <div class="gallery-item"><img src="gallery/prescon.webp" alt="Australia"><div class="overlay"><p>Student Exchange in Australia</p></div></div>
    </section>
  </main>
  
  <!-- ===== REVIEWS SECTION ===== -->
  <section class="reviews-section">
    <h2>Our Client Say</h2>
    <br> <br>
    <div class="reviews-container" id="reviewsContainer"></div>
  </section>
  
  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-column">
        <h3>CONTACT US</h3>
        <p>Jl. Ganetri IV No.4 DPS 80237 Bali<br>Jl. Sari Dana No.1 DPS 80116 Bali</p>
        <p>📞 <a href="tel:+6287865309966">087865309966</a></p>
        <p>📧 <a href="mailto:info@denpasarinstitute.com">info@denpasarinstitute.com</a></p>
        <a href="#">denpasarinstitute.com</a><br>
        <a href="https://maps.google.com/?q=Denpasar+Institute+Bali" target="_blank">
          <button class="footer-btn">Find Our Way</button>
        </a>
      </div>
  
      <div class="footer-column">
        <h3>ABOUT US</h3>
        <p>Denpasar Institute adalah Lembaga Riset & Pengembangan SDM...</p>
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
      <p>© 2025 Denpasar Institute. Designed by 
        <a href="https://indoapps.id" target="_blank">PT. INDOAPPS SOLUSINDO</a> |
        <a href="privacy_policy.html">Privacy Policy</a> |
        <a href="terms_conditions.html">Terms & Condition</a> |
        <a href="faq.html">FAQ</a>
      </p>
  
      <div class="social-inline">
        <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="social-icon tiktok"><i class="fab fa-tiktok"></i></a>
        <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </footer>
  
  <!-- ===== SCRIPTS ===== -->
  <script>
    // Random running gallery
    const gallery = document.querySelector('.gallery-container');
    function randomizeGallery() {
      const items = Array.from(gallery.children);
      const shuffled = items.sort(() => Math.random() - 0.5);
      gallery.innerHTML = '';
      shuffled.forEach(item => gallery.appendChild(item));
    }
    setInterval(randomizeGallery, 4000);
  
    // Review random + active middle
    const reviewsData = [
      { name: "Nur", text: "Mantap pisan! Lorem ipsum dolor sit amet, consectetur adipiscing elit.", img: "gallery/orang3.jpg" },
      { name: "Haiki", text: "Pengalaman luar biasa belajar di luar negeri!", img: "gallery/orang2.jpg" },
      { name: "Rani", text: "Programnya sangat membantu dan informatif.", img: "gallery/orang3.jpg" },
      { name: "Fajar", text: "Sangat direkomendasikan buat mahasiswa aktif!", img: "gallery/orang2.jpg" },
      { name: "Sinta", text: "Stafnya ramah banget dan responsif!", img: "gallery/orang2.jpg" }
    ];
  
    const container = document.getElementById("reviewsContainer");
    function renderReviews() {
      const shuffled = [...reviewsData].sort(() => Math.random() - 0.5);
      const visible = shuffled.slice(0, 3);
      container.innerHTML = visible.map((r, i) => `
        <div class="review-card ${i === 1 ? "active" : ""}">
          <img src="${r.img}" class="review-avatar" alt="${r.name}">
          <div class="review-name">${r.name}</div>
          <div class="review-text">${r.text}</div>
        </div>
      `).join("");
    }
    renderReviews();
    setInterval(renderReviews, 5000);
  </script>
  