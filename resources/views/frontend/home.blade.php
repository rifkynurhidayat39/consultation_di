<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Consultation / Workforce Solutions</title>
  <link rel="stylesheet" href="{{ asset('style/home.css') }}">
  <!-- Google Fonts Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- added fontawesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!-- BEGIN: new header (site navigation) -->
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
          <li><a href="home.html" class="active">Home</a></li>
          
          <a href="{{ route('about') }}">About Us</a>
          <li class="has-dropdown">
            <a href="program.html" aria-haspopup="true" aria-expanded="false">Program <span class="caret">▾</span></a>
            <ul class="dropdown" aria-label="Program submenu">
              <li><a href="student.html">Student Exchanges</a></li>
              <li><a href="overseas.html">Overseas Study</a></li>
              <li><a href="overseas.html">Internship Study</a></li>
              <li><a href="career.html">Career Consultation</a></li>
            </ul>
          </li>
          <li><a href="how it works.html">How It Works</a></li>
          <li><a href="register.html">Registration</a></li>
          <li class="has-dropdown">
            <a href="gallery.html" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret">▾</span></a>
            <ul class="dropdown" aria-label="Gallery submenu">
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
  <!-- END: new header -->

  <!-- HERO / BANNER SLIDER -->
  <header class="hero">
    <div class="slider" id="slider" aria-roledescription="carousel">
      <div class="slide active" role="group" aria-roledescription="slide" aria-label="1 of 3" style="background-image:url('https://images.unsplash.com/photo-1509395176047-4a66953fd231?auto=format&fit=crop&w=1400&q=60');">
        <div class="overlay">
          <small class="kicker">Your Trusted Partner in</small>
          <h1>Your Trusted Partner in Workforce Solutions &amp; Career Success</h1>
          <p class="lead">We connect ambition with opportunity through student exchange, internships and career consulting.</p>
          <a class="btn" href="program.html">See All Programs</a>
        </div>
      </div>

      <div class="slide" role="group" aria-roledescription="slide" aria-label="2 of 3" style="background-image:url('https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=1400&q=60');">
        <div class="overlay">
          <small class="kicker">Empowering Careers</small>
          <h1>Empowering Careers, Ensuring Compliance</h1>
          <p class="lead">Explore opportunities worldwide and build a global career with guidance from our experts.</p>
          <a class="btn" href="aboutus.html">Learn More</a>
        </div>
      </div>

      <div class="slide" role="group" aria-roledescription="slide" aria-label="3 of 3" style="background-image:url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1400&q=60');">
        <div class="overlay">
          <small class="kicker">Global Programs</small>
          <h1>Global Study &amp; Internship Programs</h1>
          <p class="lead">Student exchange, overseas internships and career consultation to grow your potential.</p>
          <a class="btn" href="contact.html">Contact Us</a>
        </div>
      </div>

      <button class="nav prev" id="prev" aria-label="Previous slide">&#10094;</button>
      <button class="nav next" id="next" aria-label="Next slide">&#10095;</button>

      <div class="dots" id="dots" role="tablist" aria-hidden="false"></div>
    </div>
  </header> <!-- end hero -->

  <!-- REMOVED: feature-section (dipindah ke bawah intro-wrapper) -->
  
  <section class="intro-wrapper">
    <div class="intro">
      <div class="card">
        @if($sambutan)
          <h3>{{ $sambutan->title }}</h3>
          <p>{{ $sambutan->description }}</p>
        @else
          <h3>Empowering Careers, Ensuring Compliance</h3>
          <p>Explore opportunities as a digital nomad with our innovative Bali Nomad Academy (BNA). Experience hands-on learning in various coworking spaces across Bali, where you'll gain practical skills while enjoying the island's growing reputation as a digital nomad hub.</p>
          <p>Our program offers a unique blend of professional development and cultural immersion, helping you build a global career while experiencing the vibrant lifestyle that Bali has to offer.</p>
          <p>Through our comprehensive curriculum, you'll develop essential skills in remote work, digital marketing, and international business practices.</p>
        @endif
      </div>

      <div class="side-image">
        @if($sambutan && $sambutan->image)
          <img src="{{ asset('storage/' . $sambutan->image) }}" alt="{{ $sambutan->title }}">
        @else
          <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=700&q=60" alt="student smiling">
        @endif
      </div>
    </div>
  </section> <!-- end intro-wrapper -->

  <!-- BARU: About section standalone (kanan dari feature-section) -->
  <section class="about-section">
    <div class="about-custom">
      <!-- Kolom Kiri (45%) -->
      <div class="about-left">
        <!-- Baris Atas: Card Besar + Card Kecil Kanan -->
        <div class="about-top-row">
          <div class="about-main-card">
            <img src="gallery/orang3.jpg" alt="indoapps main">
          </div>
          <div class="about-small-top">
            <img src="gallery/global.jpg" alt="illustration">
          </div>
        </div>
        <!-- Baris Bawah: 3 Card Kecil -->
        <div class="about-bottom-row">
          <div class="about-small-card">
            <img src="gallery/orang3.jpg" alt="technology">
          </div>
          <div class="about-small-card">
            <img src="gallery/ilustrasi-siswa-sma_169.jpeg" alt="cyber-tech">
          </div>
          <div class="about-small-card">
            <img src="gallery/orang2.jpg" alt="building">
          </div>
        </div>
      </div>

      <!-- Kolom Kanan (55%) -->
      <div class="about-content">
        <h3 class="about-title">
          <span class="about-title-light">About Consultation</span><br>
          <span class="about-title-bold">Denpasar Institute</span>
        </h3>
        <p class="about-text">
          Welcome to Consultation Denpasar Institute, your trusted partner in education consulting, student exchange, and global career development.
        </p>
        <p class="about-text">
          We believe that pursuing education abroad is more than just studying — it's a life-changing journey of growth, opportunity, and cultural discovery. That's why we provide not only expert guidance for overseas study and internships, but also personalized career consultation to help you reach your fullest potential.
        </p>
        <p class="about-text">
          Whether you're seeking international study programs, internship placements, or career advice, Consultation Denpasar Institute is here to support every step of your journey. With professionalism, integrity, and a passion for global learning, we ensure your path to success is clear and rewarding.
        </p>
      </div>
    </div>
  </section>
  <!-- END: about-section -->

  <!-- MAIN CONTENT -->
  <main>
    <section class="stats">
      <div class="stats-header">
        <div class="stats-icon"></div>
        <h2 class="stats-heading">Stats Overview</h2>
        <p class="stats-title">People love Denpasar Institute</p>
      </div>
      <div class="stats-grid">
        <div class="stat"><strong>100</strong><span>Students</span></div>
        <div class="stat"><strong>100</strong><span>Countries</span></div>
        <div class="stat"><strong>100</strong><span>Candidates</span></div>
        <div class="stat"><strong>100</strong><span>Companies</span></div>
      </div>
    </section>

    <section class="programs" id="programs">
      <h2>Explore Our Programs</h2>
      <div class="grid">
        <article class="program">
          <img src="gallery/korea copy.jpg" alt="">
          <h4>Student Exchange</h4>
          <p>International exchange to develop cross-cultural skills and academic growth.</p>
          <a href="student.html" class="read-more">Read More</a>
        </article>

        <article class="program">
          <img src="gallery/jerman.jpg" alt="">
          <h4>Overseas Study & Internship</h4>
          <p>Internships and study programs abroad with partner institutions.</p>
          <a href="overseas.html" class="read-more">Read More</a>
        </article>

        <article class="program">
          <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=600&q=60" alt="">
          <h4>Career Consultation</h4>
          <p>Personalised career planning, resume help, and placement guidance.</p>
          <a href="career.html" class="read-more">Read More</a>
        </article>
      </div>
    </section>

    <section class="how">
      <h2>How it Works?</h2>

      <div class="steps">
        <!-- Step 1: text left, image right -->
        <div class="step-row">
          <div class="step-text">
            <h4>Step 1 : Consultation</h4>
            <p>Meet our education consultants and share your study or career goals. We'll help you explore the best international programs that fit your ambitions.</p>
          </div>
          <div class="step-image">
            <img src="gallery/kerja4.png" alt="consultation">
          </div>
        </div>

        <!-- Step 2: image left, text right -->
        <div class="step-row step-row-reverse">
          <div class="step-image">
            <img src="gallery/kerja3.png" alt="planning">
          </div>
          <div class="step-text">
            <h4>Step 2 : Planning</h4>
            <p>Meet our education consultants and share your study or career goals. We'll help you explore the best international programs that fit your ambitions.</p>
          </div>
        </div>

        <!-- Step 3: text left, image right -->
        <div class="step-row">
          <div class="step-text">
            <h4>Step 3 : Placement</h4>
            <p>Meet our education consultants and share your study or career goals. We'll help you explore the best international programs that fit your ambitions.</p>
          </div>
          <div class="step-image">
            <img src="gallery/kerja2.png" alt="placement">
          </div>
        </div>

        <!-- Step 4: image left, text right -->
        <div class="step-row step-row-reverse">
          <div class="step-image">
            <img src="gallery/kerja1.png" alt="follow-up">
          </div>
          <div class="step-text">
            <h4>Step 4 : Follow-up</h4>
            <p>Meet our education consultants and share your study or career goals. We'll help you explore the best international programs that fit your ambitions.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="reviews-section">
      <h2>OUR CLIENT SAY</h2>
      <br> <br>
      <div class="reviews-container" id="reviewsContainer"></div>
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
  <!-- ...existing code (end body) ... -->
  <script>
    (function(){
  const slides = document.querySelectorAll('.slide');
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');
  const dotsWrap = document.getElementById('dots');
  let current = 0;
  let timer = null;
  const interval = 5000;

  // create dots
  slides.forEach((s, i) => {
    const btn = document.createElement('button');
    btn.dataset.index = i;
    btn.setAttribute('aria-label', `Go to slide ${i+1}`);
    if(i===0) btn.classList.add('active');
    btn.addEventListener('click', ()=> { goto(i); resetTimer(); });
    dotsWrap.appendChild(btn);
  });

  function show(idx){
    slides.forEach((s,i)=> {
      s.classList.toggle('active', i===idx);
      s.setAttribute('aria-hidden', i===idx ? 'false' : 'true');
    });
    Array.from(dotsWrap.children).forEach((d,i)=> d.classList.toggle('active', i===idx));
    current = idx;
  }

  function goto(i){
    if(i < 0) i = slides.length - 1;
    if(i >= slides.length) i = 0;
    show(i);
  }

  prev.addEventListener('click', ()=> { goto(current-1); resetTimer(); });
  next.addEventListener('click', ()=> { goto(current+1); resetTimer(); });

  function startTimer(){
    timer = setInterval(()=> goto(current+1), interval);
  }
  function resetTimer(){
    clearInterval(timer);
    startTimer();
  }

  // pause on hover
  const slider = document.getElementById('slider');
  slider.addEventListener('mouseenter', ()=> clearInterval(timer));
  slider.addEventListener('mouseleave', ()=> startTimer());

  // keyboard navigation
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'ArrowLeft'){ goto(current-1); resetTimer(); }
    if(e.key === 'ArrowRight'){ goto(current+1); resetTimer(); }
  });

  // basic touch / swipe support
  let touchStartX = 0;
  slider.addEventListener('touchstart', (e)=> { touchStartX = e.changedTouches[0].clientX; clearInterval(timer); }, {passive:true});
  slider.addEventListener('touchend', (e)=> {
    const dx = e.changedTouches[0].clientX - touchStartX;
    if(Math.abs(dx) > 40){
      if(dx > 0) goto(current-1); else goto(current+1);
    }
    startTimer();
  }, {passive:true});

  // init
  show(0);
  startTimer();
})();

// Navbar scroll effect - transparan di atas banner, putih saat scroll
(function() {
  const header = document.querySelector('.site-header');
  const hero = document.querySelector('.hero');
  
  if (!header || !hero) return;
  
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

// Review random + active middle (sama seperti gallery)
const reviewsData = [
  { name: "Nur", text: "Mantap pisan! Lorem ipsum dolor sit amet, consectetur adipiscing elit.", img: "gallery/orang1.jpg" },
  { name: "Haiki", text: "Pengalaman luar biasa belajar di luar negeri!", img: "gallery/orang2.jpg" },
  { name: "Rani", text: "Programnya sangat membantu dan informatif.", img: "gallery/orang3.jpg" },
  { name: "Fajar", text: "Sangat direkomendasikan buat mahasiswa aktif!", img: "gallery/orang1.jpg" },
  { name: "Sinta", text: "Stafnya ramah banget dan responsif!", img: "gallery/orang2.jpg" }
];

const container = document.getElementById("reviewsContainer");
if (container) {
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
}
  </script>
</body>
</html>