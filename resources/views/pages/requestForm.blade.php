
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


</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      User
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="updateprofileClient">Profile</a>
      <a class="dropdown-item" href="#">All services</a>
      <a class="dropdown-item" href="login">Logout</a>
    </div>
  </li>
  </ul>
</div>
</div>
</nav>
     </header>
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

 
  <div>
    @yield('content')
  </div>

  <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
  <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
  <script src=" {{ asset('frontend/js/form.bundle.js') }}"></script>
</body>
</html>

