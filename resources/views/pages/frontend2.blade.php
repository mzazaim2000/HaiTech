<head> 
    
    <title> HaiTech</title>
    <link rel="shortcut icon" href="/images/logo.png" />    
    <link rel="shortcut icon" href="/images/logo.png" />    
       <!-- CSS -->
          <meta name="viewpoint" content="width=device-width, initial-scale=1">
          <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
          <link rel="stylesheet" href="{{ asset('frontend/css/loginadmin.css') }}">
          <link rel="stylesheet" href="{{ asset('/frontend/css/frontend.css') }}">  
          <link rel="stylesheet" href="{{ asset('/frontend/css/frontend2.css') }}">
  </head>  

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/haibro.png" alt="" class="haibro-img">
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row ms-auto me-3">
          <li class="nav-item me-3 me-lg-0 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-plus"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-3 me-lg-0 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->