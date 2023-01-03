
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HaiBro</title>
  <link rel="shortcut icon" href="images/logo2.png" />  

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
                <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i>
                  <img src="images/user2.png" class="user-img" /></a></a>
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
                <li><a href="allServices">All services</a></li>
                <li><a href="login">Log out</a></li>
              </ul>
            </div>
            <!-- menu -->
          </div>
          <!-- content -->
        </div>
        <div class="overlay-left"></div>
      
        <!--====== SIDEBAR PART ENDS ======-->
  </header>
  <br><br><br>

     <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Request Service</h3>
                        <p>Enter your details & we will be ready to provide solution instantly.</p>
                        
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                          {{Session:get('success')}}
                        </div>
                        @endif

                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                          {{Session:get('fail')}}
                        </div>
                        @endif

                        <form action="{{route("insert")}}" method="POST">
                          @csrf
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Name" required>
                               <div class="valid-feedback">Name field is valid!</div>
                               <div class="invalid-feedback">Name field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                              <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                               <div class="valid-feedback">Phone no. field is valid!</div>
                               <div class="invalid-feedback">Phone no. field cannot be blank!</div>
                          </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                              <input class="form-control" type="text" name="company" placeholder="Company" required>
                               <div class="invalid-feedback">Company name field cannot be blank!</div>
                          </div>

                          <br>
                          Services:
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="UPS" id="invalidCheck">
                          <label class="form-check-label">Uninterruptible Power Supply Precision Cooling Solution</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="services[]" value="Facility Management" id="invalidCheck">
                          <label class="form-check-label">Facility Management M&E Maintenance</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" value="Data Center Enhancement" id="invalidCheck">
                        <label class="form-check-label">Data Center Enhancement ICT Managed Services</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Corporate Support" id="invalidCheck">
                      <label class="form-check-label">Corporate Support Business Advisory</label>
                  </div>

                  <br>
                  
                  Select Date & Time:
                  <div class="col-md-12">
                    <div class="input-group">
                    <input class="input--style-2 js-datepicker" type="date" name="date"> <tr><tr> <input class="time" type="time" name="time">
                    </div>
                    </div>

                    <br>

                        <div class="col-md-12">
                            <textarea class="form-control" type="text" name="issue" placeholder="State your issue" required></textarea>
                             <div class="invalid-feedback">Issue field cannot be blank!</div>
                        </div>
                  
                       <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>

  <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
  <script src=" {{ asset('frontend/js/form.bundle.js') }}"></script>

  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="frontend/js/navbar.bundle.js"></script>

</body>
</html>

