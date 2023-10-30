<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/kemenkumham.png' ) }}" alt="kemenkumham" class="brand-image elevation-3" style="opacity: .9">
        </div>
        <div class="info">
          <a href="#" class="d-block">PEMAJUAN HAM</a>
        </div>
</div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(auth()->user()->level == "Admin")
          <li class="nav-item">
            <a href="{{ url('beranda') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('data_pengaduan') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Pengaduan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('arsip_pengaduan') }}" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Arsip Pengaduan
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('kategori') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pengguna') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              
            </ul>
          </li>
          @endif
          @if(auth()->user()->level == "warga")
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengaduan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('data_diri')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Diri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('input_pengaduan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Pengaduan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('upload_lampiran')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lampiran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('hal_status')}}" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Status Pengaduan
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>