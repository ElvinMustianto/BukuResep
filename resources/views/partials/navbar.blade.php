<nav class="navbar navbar-expand-lg bg-white shadow-lg p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto font-monospace" href="/">BUKU RESEP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto"> <!-- Menggunakan mx-auto untuk memindahkan item menu ke tengah -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pastrys') ? 'active' : '' }}" href="/pastrys">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="/category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penulis') ? 'active' : '' }}" href="/penulis">Penulis</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hi, {{ auth()->user()->nama }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard">
                        <i class="bi bi-layout-text-sidebar-reverse me-1"></i>Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-in-left me-1"></i>Sign Out</button>
                        </form>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-white {{ Request::is('login') ? 'active' : '' }}" href="/login">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                        Sign In</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
