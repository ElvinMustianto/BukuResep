<header>
    <nav class="navbar navbar-white sticky-top bg-white flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-dark m-2" href="#">BUKU RESEP</a>
        <button class="navbar-toggler position-absolute top-10 end-0 d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="dropdown" style="margin-right: 60px">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link px-3 border-0 me-2 text-dark">SignOut</button>
                    </form>
                  </li>
                </ul>
            </div>
    </nav>
</header>
