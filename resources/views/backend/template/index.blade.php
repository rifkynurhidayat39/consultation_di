<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Consultan')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      display: flex;
      min-height: 100vh;
      margin: 0;
      background-color: #f1f5f9;
      font-family: 'Segoe UI', sans-serif;
    }

    /* ===== Sidebar ===== */
    .sidebar {
      width: 260px;
      background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
      color: #f8fafc;
      flex-shrink: 0;
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
      z-index: 100;
      overflow-y: auto;
    }

    .sidebar .brand {
      padding: 25px;
      text-align: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar .brand img {
      height: 60px;
      margin-bottom: 10px;
    }

    .sidebar .brand div {
      font-weight: bold;
      font-size: 1.3rem;
      letter-spacing: 0.5px;
    }

    /* ===== Search ===== */
    .sidebar .search-box {
      position: relative;
      padding: 15px 20px;
    }

    .sidebar .search-box input {
      width: 100%;
      padding: 8px 12px 8px 35px;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 0.9rem;
      background-color: #334155;
      color: #f8fafc;
    }

    .sidebar .search-box input::placeholder {
      color: #94a3b8;
    }

    .sidebar .search-box i {
      position: absolute;
      left: 30px;
      top: 24px;
      color: #94a3b8;
    }

    /* ===== Menu ===== */
    .sidebar .nav-section {
      margin-top: 10px;
      flex-grow: 1;
    }

    .sidebar .nav-link {
      display: flex;
      align-items: center;
      padding: 12px 22px;
      gap: 12px;
      color: #cbd5e1;
      font-size: 0.95rem;
      border-radius: 8px;
      margin: 4px 12px;
      transition: 0.3s;
      text-decoration: none;
    }

    .sidebar .nav-link i {
      font-size: 1.2rem;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #2563eb;
      color: #fff;
      transform: translateX(5px);
    }

    .sidebar .footer {
      padding: 15px 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.85rem;
      color: #94a3b8;
    }

    /* ===== Main Content ===== */
    .main-content {
      flex-grow: 1;
      margin-left: 260px;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .topbar {
      background-color: #ffffff;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 0 25px;
      border-bottom: 1px solid #e2e8f0;
      position: sticky;
      top: 0;
      z-index: 99;
    }

    .topbar .user-menu {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .topbar .user-menu img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      border: 2px solid #2563eb;
    }

    .topbar .user-menu .name {
      font-size: 0.95rem;
      font-weight: 600;
      color: #1e293b;
    }

    .content {
      padding: 30px;
      background-color: #f8fafc;
      flex-grow: 1;
    }

    .card {
      border-radius: 12px;
      border: none;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    @media (max-width: 991px) {
      .sidebar {
        transform: translateX(-100%);
      }
      .sidebar.show {
        transform: translateX(0);
      }
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<!-- ===== Sidebar ===== -->
<aside class="sidebar">
  <div class="brand">
    <img src="{{ asset('icon.png') }}" alt="Logo">
    <div>Consultan</div>
  </div>

  <div class="search-box">
    <i class="bi bi-search"></i>
    <input type="text" id="menuSearch" placeholder="Cari menu...">
  </div>

 <div class="nav-section" id="menuList">

    <a href="{{ route('banner.index') }}"
       class="nav-link {{ request()->routeIs('banner.*') ? 'active' : '' }}">
        <i class="bi bi-briefcase"></i> Banner
    </a>

    <a href="{{ route('news.index') }}"
       class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">
        <i class="bi bi-newspaper"></i> News and Updates
    </a>

    <a href="{{ route('faq.index') }}"
       class="nav-link {{ request()->routeIs('faqs.*') ? 'active' : '' }}">
        <i class="bi bi-question-circle"></i> FAQs
    </a>

</div>



   
  </div>

  <div class="footer">
    &copy; 2025 Consultan
  </div>
</aside>

<!-- ===== Main Content ===== -->
<div class="main-content">
  <div class="topbar">
    
  </div>

  <div class="content">
    @yield('content')
  </div>
</div>

<!-- ===== Scripts ===== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Search Menu -->
<script>
  document.getElementById('menuSearch').addEventListener('keyup', function () {
    const query = this.value.toLowerCase();
    document.querySelectorAll('#menuList .nav-link').forEach(link => {
      link.style.display = link.textContent.toLowerCase().includes(query) ? 'flex' : 'none';
    });
  });
</script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Notyf -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">
<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>

<script>
  const notyf = new Notyf({
    duration: 2000,
    position: { x: 'right', y: 'bottom' }
  });

  function toastSuccess(msg) { notyf.success(msg); }
  function toastError(msg) { notyf.error(msg); }

  function confirmDelete(url, message = 'Yakin ingin menghapus data ini?') {
    Swal.fire({
      icon: 'warning',
      title: 'Konfirmasi',
      text: message,
      showCancelButton: true,
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal',
      confirmButtonColor: '#dc2626'
    }).then(result => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }
</script>

</body>
</html>
