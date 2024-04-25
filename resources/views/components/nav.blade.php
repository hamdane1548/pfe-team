
<nav   class="navbar my-nav navbar-expand-lg  navbar-light bg-white">
  <div class="container-fluid  ">
    <a class="navbar-brand " href="#">
      <img src="images/logo.svg" width="140" height="140" class="d-inline-block align-top active" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="offcanvas item offcanvas-start text-bg-light"
        id="offcanvasDarkNavbar"
      >
    <div class="offcanvas-body" id="navbarNav">
      <ul id="item-nav" class=" justify-content-end ps-3 item-nav navbar-nav col-md-7 offset-md-3">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/single">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">contact</a>
        </li>
      </ul>
      <div class="dropdown">
        <button class="btn btn-light btn-secondary border-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <img src="{{ asset('images/Flag_of_France.png') }}" width="18px" height="18px" class="img-fluid" alt="Drapeau français" />
        </button>
        <div class="dropdown-menu"  aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">
                <img src="{{ asset('images/Flag_of_France.png') }}" width="15px" height="15px" class="img-fluid" alt="Drapeau français" />
                Français
            </button>
            <button class="dropdown-item" type="button">
              <img src="{{ asset('images/Flag_of_Morocco.svg.png') }}" width="15px" height="15px" class="img-fluid" alt="Drapeau français" />
              Arabe
          </button>
        </div>
      </div>
    </div>
    </div>
  </div>
  </nav>
