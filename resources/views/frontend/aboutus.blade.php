<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Divisi Konsultan Denpasar Institute</title>
  <link rel="stylesheet" href="style/aboutus.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
          <li><a href="aboutus.html"class="active">About Us</a></li>
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

  <!-- ABOUT SECTION -->
  <section class="about-section">
    <div class="container about-container">
      <div class="about-image">
        <img src="https://img.freepik.com/free-vector/programming-concept-illustration_114360-1351.jpg" alt="Konsultan" />
      </div>
      <div class="about-text">
        <span class="tag">About Consultant DI</span>
        <h2>Divisi Konsultan Denpasar Institute</h2>
        <p>Pembaruan kurikulum dilakukan untuk meningkatkan fleksibilitas belajar siswa.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
  </section>

  <!-- VISI MISI -->
  <section class="visi-misi-section">
    <div class="container visi-misi-container">
      <div class="card">
        <h3>Visi</h3>
        <p>Meningkatkan fleksibilitas dan mutu pendidikan melalui pengembangan SDM unggul.</p>
      </div>
      <div class="card">
        <h3>Misi</h3>
        <p>Mendorong riset, inovasi, dan kemitraan strategis di bidang pendidikan dan pelatihan profesional.</p>
      </div>
    </div>
  </section>

  <!-- OUR CONSULTANT (Dinamis) -->
  <section id="our-consultant" class="consultant-section">
    <div class="container">
      <h2 class="consultant-title">Our Consultant</h2>
      <p class="consultant-subtitle">Tim profesional kami siap membantu Anda mencapai kesuksesan terbaik Anda.</p>

      <div class="consultant-grid" id="consultantGrid"></div>

      <!-- PAGINATION -->
      <div class="pagination" id="pagination"></div>
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
        <a href="terms_conditions.html" target="_blank">Terms & Condition</a>
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

  <!-- SCRIPT PAGINATION DINAMIS -->
  <script>
    const consultants = [
      { name: "M. Haliki Rizki, S.Kom", title: "Data Analyst Consultant", photo: "https://randomuser.me/api/portraits/men/41.jpg" },
      { name: "Putri Ayu Maharani", title: "Education Program Specialist", photo: "https://randomuser.me/api/portraits/women/68.jpg" },
      { name: "Rangga Aditya, M.Psi", title: "Career Development Expert", photo: "https://randomuser.me/api/portraits/men/85.jpg" },
      { name: "Ni Luh Citra Dewi", title: "International Study Advisor", photo: "https://randomuser.me/api/portraits/women/35.jpg" },
      { name: "Andi Wirawan", title: "Digital Transformation Consultant", photo: "https://randomuser.me/api/portraits/men/55.jpg" },
      { name: "Kartika Sari", title: "Corporate Training Specialist", photo: "https://randomuser.me/api/portraits/women/25.jpg" },
      { name: "I Made Agus", title: "Human Resource Expert", photo: "https://randomuser.me/api/portraits/men/75.jpg" },
      { name: "Ayu Lestari", title: "Communication Consultant", photo: "https://randomuser.me/api/portraits/women/72.jpg" },
      { name: "Rizal Pratama", title: "Technology Integration Advisor", photo: "https://randomuser.me/api/portraits/men/99.jpg" }
    ];

    const itemsPerPage = 3;
    let currentPage = 1;

    function renderConsultants(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const list = consultants.slice(start, end);
      const container = document.getElementById("consultantGrid");

      container.innerHTML = list.map(c => `
        <div class="consultant-card">
          <div class="consultant-photo" style="background-image: url('${c.photo}')"></div>
          <div class="consultant-info">
            <h4>${c.name}</h4>
            <span class="divider"></span>
            <p>${c.title}</p>
          </div>
        </div>
      `).join("");
    }

    function renderPagination() {
      const totalPages = Math.ceil(consultants.length / itemsPerPage);
      const pagination = document.getElementById("pagination");

      let html = `
        <a href="#" class="prev" ${currentPage === 1 ? 'style="pointer-events:none;opacity:0.5;"' : ''} onclick="changePage(${currentPage - 1}, event)">« Prev</a>
      `;

      for (let i = 1; i <= totalPages; i++) {
        html += `<a href="#" class="${i === currentPage ? 'active' : ''}" onclick="changePage(${i}, event)">${i}</a>`;
      }

      html += `
        <a href="#" class="next" ${currentPage === totalPages ? 'style="pointer-events:none;opacity:0.5;"' : ''} onclick="changePage(${currentPage + 1}, event)">Next »</a>
      `;

      pagination.innerHTML = html;
    }

    function changePage(page, event) {
      if (event) event.preventDefault();
      const totalPages = Math.ceil(consultants.length / itemsPerPage);
      if (page < 1 || page > totalPages) return;
      currentPage = page;
      renderConsultants(page);
      renderPagination();
      document.querySelector("#our-consultant").scrollIntoView({ behavior: "smooth" });
    }

    renderConsultants(currentPage);
    renderPagination();
  </script>

</body>
</html>
