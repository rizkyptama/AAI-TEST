<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="javascript:;">
          <img src="{{asset('img/aa.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{url('dashboard')}}">
                <i class="ni ni-curved-next text-primary"></i>
                <span class="nav-link-text">Movies</span>
              </a>
            </li>
            <li class="nav-item {{ Request::is('tv') ? 'active' : '' }}">
              <a class="nav-link {{ Request::is('tv') ? 'active' : '' }}" href="{{url('tv')}}">
                <i class="ni ni-curved-next text-primary"></i>
                <span class="nav-link-text">TV Shows</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>