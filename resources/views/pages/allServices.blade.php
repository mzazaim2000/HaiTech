<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> HaiTech</title>

    <!-- Fonts -->
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/clientservice.css') }}">


</head>

<body>
  <header>
    <!--====== NAVBAR NINE PART START ======-->
  
    <section class="navbar-area navbar-nine">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="home">
                <img src="images/haibro.png" class="haibro-img" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
                aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
  
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="page-scroll active" href="home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="home#services">Services</a>
                  </li>
  
                  <li class="nav-item">
                    <a class="page-scroll" href="home#clients">Clients</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="home#about">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="home#contact">Contact Us</a>
                  </li>
                </ul>
              </div>
  
              <div class="navbar-btn d-none d-lg-inline-block">
                <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
              </div>
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
  
    <!--====== NAVBAR NINE PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->
  
        <div class="sidebar-left">
          <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni lni-close"></i></a>
          </div>
          <div class="sidebar-content">
            <div class="sidebar-logo">
              <a href="index.html"><img src="images/haibro.png" class="haibro-img" /></a>
            </div>
            <!-- logo -->
            <div class="sidebar-menu">
              <ul>
                <li><a href="updateprofileClient">Profile</a></li>
                <li><a href="services">All services</a></li>
                <li><a href="login">Log out</a></li>
              </ul>
            </div>
            <!-- menu -->
          </div>
          <!-- content -->
        </div>
        <div class="overlay-left"></div>
      
        <!--====== SIDEBAR PART ENDS ======-->

        <!-- Start header Area -->

          <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
          <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
          <script src=" {{ asset('frontend/js/form.bundle.js') }}"></script>
        
          <!--====== js ======-->
          <script src="assets/js/bootstrap.bundle.min.js"></script>
          <script src="assets/js/glightbox.min.js"></script>
          <script src="assets/js/main.js"></script>
          <script src="assets/js/tiny-slider.js"></script>
          <script src="frontend/js/navbar.bundle.js"></script>

        </section>
      </body>
      </html>