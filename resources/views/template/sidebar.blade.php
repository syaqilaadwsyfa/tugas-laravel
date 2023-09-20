<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">PERPUSTAKAAN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('petugas.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('anggota.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('buku.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('rak.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Rak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('peminjaman.index') }}" class="nav-link">
              <i class="nav-icon fas fa-arrow-right peminjaman"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pengembalian.index') }}" class="nav-link">
              <i class="nav-icon fas fa-arrow-left pengembalian"></i>
              <p>
                Pengembalian
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
