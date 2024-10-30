  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if(auth()->check())
                      <span style="color: black; font-size: 15px" class="mr-2 d-none d-lg-inline small">Welcome, {{ auth()->user()->name }}</span>
                  @endif
                  <img class="img-profile rounded-circle" src="https://i.ibb.co.com/3WPvxLF/user.png" alt="User Profile">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                   aria-labelledby="userDropdown">
                  <form action="{{ route('userlogout') }}" method="POST" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                      @csrf
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      <button type="submit" class="btn btn-link p-0">Logout</button>
                  </form>
              </div>
          </li>
      </ul>


  </nav>
<!-- End of Topbar -->