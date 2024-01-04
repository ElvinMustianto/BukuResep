<header class="navbar navbar-white sticky-top bg-white flex-md-nowrap p-2 shadow rounded">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 font-monospace text-dark" href="#">BUKU RESEP</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link px-3 border-0">
            <i class="bi bi-box-arrow-in-left me-1"></i>Sign Out</button>
        </form>
      </div>
    </div>
  </header>
