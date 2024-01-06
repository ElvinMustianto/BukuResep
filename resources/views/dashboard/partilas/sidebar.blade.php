<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-house-door"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pastry') ? 'active' : '' }}" href="/dashboard/pastry">
                <i class="bi bi-file-earmark-text"></i>
                Resep Saya
            </a>
        </li>
      </ul>
    </div>
  </nav>
