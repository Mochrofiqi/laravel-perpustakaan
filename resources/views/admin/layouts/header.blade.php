<header class="navbar navbar-dark sticky-top flex-md-nowrap shadow" style="background-color: rgb(50, 48, 48)" >
    <a class="navbar-brand navbar-dark col-md-2 col-lg-2 me-0 px-3 fs-4" href="#" style="background-color: rgb(50, 48, 48)">
        <img src="/img/ikon/dashboard.png" width="45" alt=""> Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h3 class="text-light">Perpustakaan Moonlight</h3>

    <div class="user-info-dropdown">
            <a class="text-decoration-none m-2" role="button" data-toggle="dropdown">
                <span class="user-icon">
                    @if (auth()->user()->foto)
                        <img src="{{ asset('storage/' . auth()->user()->foto ) }}" alt="image" width="50" class="m-1">
                    @else
                        <img src="/img/slide/kosong.png" alt="image" width="50" class="m-1">
                    @endif
                </span>
                <span class="text-light fs-5 m-1" style="font-family: Geneva, Verdana">{{ auth()->user()->nama }}</span>
            </a>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: rgb(66, 65, 65)">
        <div class="position-sticky pt-5">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light h5" aria-current="page" href="/dashboard">
                <img src="/img/ikon/home.png" width="35" alt="">
                    Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light h5" href="/profile">
                <img src="/img/ikon/user.png" width="35" alt="">
                  Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light h5" href="/buku">
                <img src="/img/ikon/books.png" width="35" alt="">
                    Data Buku
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light h5" href="/kategori">
                <img src="/img/ikon/options.png" width="34" alt="">
                    Data Kategori Buku
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light h5" href="/user">
                <img src="/img/ikon/teamwork.png" width="35" alt="">
                Data User
              </a>
            </li>
          </ul>

          <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Transaksi</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h5>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link text-light h5" href="/peminjaman">
                <img src="/img/ikon/book.png" width="35" alt="">
                    Data Peminjaman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white h5" href="/pengembalian">
                <img src="/img/ikon/return.png" width="36" alt="">
                    Data Pengembalian
              </a>
            </li>
          </ul>
          <ul class="nav flex-column">
            <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 text-muted">
                <span>Setting</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
            </h5>
            <li class="nav-item" style="padding-left: 20px">
                <form action="/logout" method="POST">
                    @csrf
                    <img src="/img/ikon/logout.png" width="40" alt="">
                    <button class="btn text-light fs-5" type="submit"><i class="dw dw-logout"></i>Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

