<nav class="side-navbar">
    <!-- Sidebar Header    -->
    <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="{{asset('asset/img/avatar-2.jpg')}}" alt="person">
        <h2 class="h5 text-white text-uppercase mb-0">Mubashar Munir</h2>
        <p class="text-sm mb-0 text-muted">Web Developer</p>
      </div>
      <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.php">
        <p class="h1 m-0">BD</p></a>
    </div>
    <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
    <ul class="list-unstyled">                  
      <li class="sidebar-item"><a class="sidebar-link" href="index.php"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#real-estate-1"> </use>
          </svg>HOME</a></li>
      <li class="sidebar-item"><a class="sidebar-link" href="{{ route('frontend.form') }}"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#survey-1"> </use>
          </svg>Forms </a></li>
      <li class="sidebar-item"><a class="sidebar-link" href="charts.php"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#sales-up-1"> </use>
          </svg>Charts </a></li>
      
      <li class="sidebar-item"><a class="sidebar-link" href="tables.php"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#portfolio-grid-1"> </use>
          </svg>Tables </a></li>
    </ul>
  </nav>
