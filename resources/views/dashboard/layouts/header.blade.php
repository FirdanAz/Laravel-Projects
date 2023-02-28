<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap d-flex">
        <form action="/login/logout" method="post">
          @csrf
            <button class="btn btn-danger mr-2" style="margin-right: 20px; margin-left: 20px;" href="#" onclick="return confirm('Yakin Ingin Keluar?')">Log Out</button>
        </form>
        <form action="/home">
          <button class="btn btn-light mr-2" style="margin-right: 20px;" href="#">Kembali</button>
        </form>
      </div>
    </div>
  </header>