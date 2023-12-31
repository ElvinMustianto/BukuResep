<nav class="navbar navbar-expand-lg bg-white shadow-lg p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto font-monospace shadow-lg p-1 rounded" href="/">BUKU RESEP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto"> <!-- Menggunakan mx-auto untuk memindahkan item menu ke tengah -->
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/pastrys">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "penulis") ? 'active' : '' }}" href="/penulis">Penulis</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-white {{ ($active === "login") ? 'active' : '' }}" href="/login">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                        Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
