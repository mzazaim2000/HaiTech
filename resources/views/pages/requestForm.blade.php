
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
              <a class="navbar-brand" href="#home">
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
                <li><a href="javascript:void(0)">Profile</a></li>
                <li><a href="javascript:void(0)">All services</a></li>
                <li><a href="javascript:void(0)">Log out</a></li>
              </ul>
            </div>
            <!-- menu -->
          </div>
          <!-- content -->
        </div>
        <div class="overlay-left"></div>
      
        <!--====== SIDEBAR PART ENDS ======-->
  </header>

  <section class="black">
    <section class="container">
      <div class="container">
            <div class="header-content">
     <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Request Service</h3>
                        <p>Enter your details & we will be ready to provide solution instantly.</p>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                              <input class="form-control" type="text" name="phone" placeholder="Mobile no." required>
                               <div class="valid-feedback">Phone no. field is valid!</div>
                               <div class="invalid-feedback">Phone no. field cannot be blank!</div>
                          </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                              <input class="form-control" type="text" name="company" placeholder="Company Name" required>
                               <div class="invalid-feedback">Company name field cannot be blank!</div>
                          </div>

                        <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">Service Type</option>
                                      <option value="jweb">Uninterruptible Power Supply Precision Cooling Solution</option>
                                      <option value="sweb">Facility Management M&E Maintenance</option>
                                      <option value="pmanager">Data Center Enhancement ICT Managed Services</option>
                                      <option value="pmanager">Corporate Support Business Advisory</option>
                               </select>
                                <div class="valid-feedback">You selected a Service Type!</div>
                                <div class="invalid-feedback">Please select a Service Type!</div>
                           </div>

                           <div class="col-md-12">
                            <input class="form-control" type="text" name="issue" placeholder="Issue" required>
                             <div class="invalid-feedback">Issue field cannot be blank!</div>
                        </div>


  <!-- 
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                               <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label>Services</label>
                          <label class="form-check-label">Uninterruptible Power Supply Precision Cooling Solution</label>
                          <label class="form-check-label">Facility Management M&E Maintenance</label>
                          <label class="form-check-label">Data Center Enhancement ICT Managed Services</label>
                          <label class="form-check-label">Corporate Support Business Advisory</label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div> -->
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
        </div>
    </div>
    </section>
  </section>

 
  <div>
    @yield('content')
  </div>

  <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
  <script src=" {{ asset('frontend/js/form.bundle.js') }}"></script>
  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>

  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>
</html>

