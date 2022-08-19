<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" http://smpn4tuban.siap.web.id/sekolah-profil/#.YvfQ6XZBw2w " target="_blank">
        <img src="{{ asset('/img/smp4.png') }}" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">SIP SMP Negeri 4 Tuban</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="./pages/dashboard.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
            <li class="nav-item">
                <a class="nav-link " href="./pages/datapengguna.html">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Data Pengguna Perpustakaan</span>
                </a>
              </li>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Katalog Buku</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('pembelian')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/billing.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Kategori Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/virtual-reality.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Rak Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/rtl.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Cari Buku</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Transaksi</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/profile.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/sign-in.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pengembalian</span>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./pages/dashboard.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Denda</span>
            </a>
            <li class="nav-item">
                <a class="nav-link " href="./pages/datapengguna.html">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Laporan</span>
                </a>
              </li>
          </li>
        </ul>
    </aside>
