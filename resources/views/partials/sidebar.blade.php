  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Master Data</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/kriteria')}}">
          <i class="bi bi-menu-button-wide"></i>
          <span>Data Kriteria</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('dashboard/sub-kriteria')}}">
          <i class="bi bi-menu-button"></i>
          <span>Data Sub Kriteria</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/hotel')}}">
          <i class="bi bi-building"></i>
          <span>Data Hotel</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/penilaian')}}">
          <i class="bi bi-journal-text"></i>
          <span>Data Penilaian</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/perhitungan')}}">
          <i class="bi bi-calculator"></i>
          <span>Data Perhitungan</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/hasil-akhir')}}">
          <i class="bi bi-bar-chart"></i>
          <span>Data Hasil Akhir</span>
        </a>
      </li> --}}

      <li class="nav-heading">Master User</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Data User</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->