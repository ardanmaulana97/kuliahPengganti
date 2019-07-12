<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    <!--  
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    -->
    </ul>
    

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">1 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 1 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">
            @if(\Auth::user())
              {{Auth::user()->name}}
            @endif
          </span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Profile
            <span class="float-right text-muted text-sm"><i class="fas fa-user"></i></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Setting
            <span class="float-right text-muted text-sm"><i class="fas fa-wrench"></i></span>
          </a>
          <div class="dropdown-divider"></div>
          <form action="{{route("logout")}}" method="POST">
              @csrf
              <button class="dropdown-item" style="cursor:pointer">Sign Out
              <span class="float-right text-muted text-sm"><i class="fas fa-sign-out-alt"></i></span>
              </button>

          </form>

        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->