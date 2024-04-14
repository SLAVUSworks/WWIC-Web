<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-grid bg-light sidebar collapse">
    <div class="position-relative sidebar-relative">
      <div>
          <ul class="nav flex-column">
              <li class="nav-item pt-3 pb-3 border">
                  <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}" aria-current="page" href="{{ url('dashboard') }}">
                    <span class="mx-1"><i class="fa-solid fa-table-columns"></i></span>
                    &ensp;Dashboard
                  </a>
              </li>
              <li class="nav-item pt-3 pb-3 border">
                <a class="nav-link {{ Request::segment(1) === 'article' ? 'active' : null }}" href="{{ url('article') }}">
                  <span class="mx-1"><i class="fa-solid fa-file"></i></span>
                  &ensp;  Artikel
                </a>
              </li>
              @if (auth()->user()->role == 1)
              <li class="nav-item pt-3 pb-3 border">
                <a class="nav-link {{ Request::segment(1) === 'categories' ? 'active' : null }}" href="{{ url('categories') }}">
                  <span class="mx-1"><i class="fa-solid fa-folder"></i></span>
                  &ensp;Kategori
                </a>
              </li>
              <li class="nav-item pt-3 pb-3 border">
                  <a class="nav-link {{ Request::segment(1) === 'profile' ? 'active' : null }}" href="{{ url('profile') }}">
                    <span class="mx-1"><i class="fa-solid fa-address-card"></i></span>
                    &ensp;Profil
                  </a>
              </li>
              @endif
              <li class="nav-item pt-3 pb-3 border">
                  <a class="nav-link {{ Request::segment(1) === 'users' ? 'active' : null }}" href="{{ url('users') }}">
                    <span class="mx-1"><i class="fa-solid fa-users"></i></span>
                    &ensp;Users
                  </a>
              </li>
              <li class="nav-item pt-3 pb-3 border">
                  <a class="nav-link {{ Request::segment(1) === 'config' ? 'active' : null }}" aria-current="page" href="{{ url('config') }}">
                    <span class="mx-1"><i class="fa-solid fa-gears"></i></span>
                    &ensp;Config
                  </a>
              </li>
              <li class="nav-item pt-3 pb-3 border">
                  <a class="nav-link {{ Request::segment(1) === 'monitor' ? 'active' : null }}" aria-current="page" href="{{ url('monitor') }}">
                    <span class="mx-1"><i class="fa-solid fa-server"></i></span>
                    &ensp;Usage
                  </a>
              </li>
              <li class="nav-item pt-3 pb-3 border mt-auto">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>

                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      <span class="mx-1"><i class="fa-solid fa-right-from-bracket"></i></span>
                      &ensp;Logout
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>
