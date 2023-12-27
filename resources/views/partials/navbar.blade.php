<nav class="navbar navbar-expand-lg bg-white shadow-lg p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto font-monospace" href="/">BUKU RESEP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto"> <!-- Menggunakan mx-auto untuk memindahkan item menu ke tengah -->
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/pastrys">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Category") ? 'active' : '' }}" href="/category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Penulis") ? 'active' : '' }}" href="/penulis">Penulis</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button type="button" class="btn btn-white">LOGIN</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
