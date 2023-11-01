<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset ('AdminLTE/index3.html') }}" class="brand-link">
      <img src="{{ asset ('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profile', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('auth.dashboard') }}" class="nav-link @if(Request::segment(1) == 'dashboard') active @endif">
                <i class="fas fa-th-large nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('film.index') }}" class="nav-link @if(Request::segment(1) == 'film') active @endif">
                <i class="fas fa-film nav-icon"></i>
                  <p>Film</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('genre.index') }}" class="nav-link @if(Request::segment(1) == 'genre') active @endif">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Genre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cast.index') }}" class="nav-link @if(Request::segment(1) == 'cast') active @endif">
                  <i class="far fa-user nav-icon"></i>
                  <p>Cast</p>
                </a>
              </li>
              <li class="nav-item">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light btn-md nav-link">
                      Log Out &nbsp;
                      <i class="fas fa-sign-out-alt"></i> <!-- Menggunakan ikon Logout yang benar -->
                    </button>
                </form>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>