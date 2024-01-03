  <!--  Header Start -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3 border-0 me-3 btn btn-outline">
                <i class="bi bi-box-arrow-in-left me-1"></i>Sign Out</button>
            </form>
        </ul>
      </div>
    </nav>
  </header>
