<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ - Denpasar Institute</title>
  <link rel="stylesheet" href="{{ asset('style/faq.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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

<main>
  <div class="faq-header">
    <h2 class="faq-title">Do You Have Questions?</h2>
    <p class="faq-subtitle">
        We have answers (well, most of the time!)
        <br>
        Below you'll find answers to some of the most common questions about Denpasar Institute,
        our programs, and how our services work! If you still can’t find what you’re looking for,
        don’t hesitate to <a href="contact.html">Contact Us</a>, our team will be happy to help!
    </p>

    <div class="faq-image-box">
        <img src="gallery/WhatsApp Image 2025-11-24 at 08.01.04_b08c8a96.jpg" alt="FAQ Character">
    </div>
</div>

<hr class="faq-separator">

<div class="faq-section">
    <div class="faq-column">
      <h3>General FAQs</h3>
      <ul class="faq-list">
        <li>
          <button class="faq-question" aria-expanded="false">What is Consultative Denpasar Institute?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Denpasar Institute adalah lembaga riset dan pengembangan SDM yang menyediakan konsultasi pendidikan, program pertukaran pelajar, dan layanan pengembangan karier untuk siswa dan profesional.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">How can I contact your team?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Anda dapat menghubungi kami melalui email info@denpasarinstitute.com atau telepon di 087865309966. Atau gunakan formulir kontak pada halaman Contact.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">Do I need to pay to join your consultation?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Beberapa layanan dasar kami gratis, namun program konsultasi mendalam dan beberapa layanan premium mungkin berbiaya. Silakan cek halaman program untuk rincian biaya.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">Can I book an appointment online?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Ya — Anda dapat memesan janji secara online melalui halaman Registration atau mengirimkan pertanyaan melalui formulir di halaman Contact/FAQ.
          </div>
        </li>
      </ul>
    </div>

    <div class="faq-column">
      <h3>Program & Services FAQs</h3>
      <ul class="faq-list">
        <li>
          <button class="faq-question" aria-expanded="false">What kind of programs do you offer?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Kami menawarkan program Student Exchange, Overseas Study, Internship Study, dan Career Consultation yang disesuaikan dengan kebutuhan siswa dan institusi.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">Can I apply if I'm still a student?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Ya. Banyak program kami ditujukan untuk pelajar. Periksa persyaratan program tertentu untuk batas usia atau kualifikasi tambahan.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">What documents do I need to prepare for a consultation?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Umumnya siapkan identitas (KTP/Paspor), transkrip nilai atau raport, dan dokumen pendukung lain yang relevan dengan jenis konsultasi.
          </div>
        </li>
        <li>
          <button class="faq-question" aria-expanded="false">Are your services available for international students?<span class="chev">▾</span></button>
          <div class="faq-answer" hidden>
            Ya — kami melayani siswa internasional dan menyediakan panduan serta dukungan bahasa bila diperlukan.
          </div>
        </li>
      </ul>
    </div>
</div>


<div class="faq-help-box">
    <h3>Still Need Help?</h3>

    <form class="faq-form">
        <label>Email: info@denpasarinstitute.com</label>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email Address">
        <textarea placeholder="Your Question or Message"></textarea>
        <button type="submit" class="faq-btn">Send Message</button>
    </form>
</div>

<div class="faq-bottom-space"></div>

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

</main>

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
  
  // FAQ: open on hover, close when cursor leaves; clicks still toggle on touch/keyboard
  document.querySelectorAll('.faq-list li').forEach(function(li) {
    const btn = li.querySelector('.faq-question');
    const answer = li.querySelector('.faq-answer');
    if (!btn || !answer) return;

    function open() {
      btn.setAttribute('aria-expanded', 'true');
      answer.hidden = false;
      requestAnimationFrame(function() {
        answer.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      });
    }

    function close() {
      btn.setAttribute('aria-expanded', 'false');
      // set to current height then collapse for smooth animation
      answer.style.maxHeight = answer.scrollHeight + 'px';
      requestAnimationFrame(function() {
        answer.style.maxHeight = '0';
        answer.classList.remove('open');
      });
      answer.addEventListener('transitionend', function handler() {
        answer.hidden = true;
        answer.style.maxHeight = '';
        answer.removeEventListener('transitionend', handler);
      }, { once: true });
    }

    // Hover behavior for pointer devices
    li.addEventListener('mouseenter', function() {
      open();
    });

    li.addEventListener('mouseleave', function() {
      close();
    });

    // Click fallback (touch or keyboard) toggles the panel
    btn.addEventListener('click', function(e) {
      // prevent default button behaviour
      e.preventDefault();
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      if (isOpen) close(); else open();
    });
  });
</script>

</body>
</html>