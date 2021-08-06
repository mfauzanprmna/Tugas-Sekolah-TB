<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../../assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../../assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="../../assets/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="../../assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/components.css">

  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      {{-- Navbar Menu --}}
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('/img/' . Auth::user()->photo ) }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Sing Out') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>

      {{-- Side Bar Menu --}}
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">StarBhak</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Navigartion</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}"><a class="nav-link" href="/home"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

            {{-- Hanya yang mempunyai role admin yang bisa mengakses --}}
            @if(Auth::user()->role == 'Admin')
            <li class="dropdown {{ request()->is('kursus', 'kursus/*', 'siswa', 'siswa/*', 'guru', 'guru/*', 'matpel', 'matpel/*') ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-server"></i><span>Master Data</span></a>
              <ul class="dropdown-menu">
                <li class="{{ request()->is('guru', 'guru/*') ? 'active' : '' }}"><a class="nav-link" href="/guru"><i class="fas fa-chalkboard-teacher"></i> <span>Guru</span></a></li>
                <li class="{{ request()->is('kursus', 'kursus/*') ? 'active' : '' }}"><a class="nav-link" href="/kursus"><i class="fas fa-school"></i> <span>Kelas</span></a></li>
                <li class="{{ request()->is('siswa', 'siswa/*') ? 'active' : '' }}"><a class="nav-link" href="/siswa"><i class="fas fa-user-graduate"></i> <span>Siswa</span></a></li>
                <li class="{{ request()->is('matpel', 'matpel/*') ? 'active' : '' }}"><a class="nav-link" href="/matpel"><i class="fas fa-book"></i> <span>Mata Pelajaran</span></a></li>
              </ul>
            </li>
            @endif

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-medal"></i><span>Akademik</span></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-briefcase"></i><span>Guru dan Staff</span></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Siswa dan Alumni</span></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>

            {{-- Hanya yang mempunyai role guru yang bisa mengakses --}}
            @if(Auth::user()->role == 'Admin' || 'Guru')
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fab fa-wpforms"></i><span>Manajemen Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/kd"><i class="fas fa-book"></i> <span>Kompetensi Dasar</span></a></li>
                <li><a class="nav-link" href="/rpp"><i class="fas fa-book"></i> <span>RPP</span></a></li>
                @endif
                @if(Auth::user()->role == 'Guru')
                <li><a class="nav-link" href="/nilai"><i class="fas fa-book"></i> <span>Nilai</span></a></li>
                <li><a class="nav-link" href="/kkm"><i class="fas fa-book"></i> <span>Kkm</span></a></li>
              </ul>
            </li>
            @endif
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          SMK Taruna Bhakti <div class="bullet"></div> Uji Level Tahap 4 P2
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../../assets/modules/jquery.min.js"></script>
  <script src="../../assets/modules/popper.js"></script>
  <script src="../../assets/modules/tooltip.js"></script>
  <script src="../../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../../assets/modules/moment.min.js"></script>
  <script src="../../assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="../../assets/modules/summernote/summernote-bs4.js"></script>
  <script src="../../assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="../../assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="../../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote()
    });
  </script>
</body>
</html>