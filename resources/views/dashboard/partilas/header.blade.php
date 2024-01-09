<header>
    <nav class="navbar navbar-white sticky-top bg-white flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-dark m-2" href="#">BUKU RESEP</a>
        <button class="navbar-toggler position-absolute top-10 end-0 d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="dropdown" style="margin-right: 90px">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard/user">
                    <i class="bi bi-person me-2"></i>Profile</a>
                </li>
                 <li><hr class="dropdown-divider"></li>
                 <li><a class="dropdown-item" href="/pastrys">
                    <i class="bi bi-house me-2"></i>Home</a>
                 </li>
                 <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link px-3 border-0 me-2 text-dark"><i class="bi bi-box-arrow-left me-2"></i>Sign Out</button>
                    </form>
                  </li>
                </ul>
            </div>
    </nav>
</header>
