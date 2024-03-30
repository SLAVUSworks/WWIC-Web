<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file" class="align-text-bottom"></span>
            Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('categories') }}">
            <span data-feather="list" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="log-out" class="align-text-bottom"></span>
            Logout
          </a>
        </li>
      </ul>
  </nav>