<head> 
    
  <title>HaiBro</title>
  <link rel="shortcut icon" href="/images/logo.png" />    
     <!-- CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('/frontend/css/profile.css') }}">  
        <link rel="stylesheet" href="{{ asset('/frontend/css/frontend.css') }}">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('frontend/css/form.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/clientservice.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/allservices.css') }}">
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

            <br><br><br><br><br>
<div class="container-xl px-4 mt-4">
  <!-- Account page navigation-->
  <nav class="nav nav-borders">
    
  </nav>
  <hr class="mt-0 mb-4">
  <div class="row">
      <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mb-4 mb-xl-0">
              <div class="card-header">Profile Picture</div>
              <div class="card-body text-center">
                  <!-- Profile picture image-->
                  <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                  
                  <!-- Profile picture help block-->
                  <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                  <!-- Profile picture upload button-->
                  <input type="file" class="form-control">
              </div>
          </div>
      </div>
      <div class="col-xl-8">
          <!-- Account details card-->
          <div class="card mb-4">
              <div class="card-header">Account Details</div>
              <div class="card-body">
                
                  <form action ="{{route('updateProfile')}}" method="POST">
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <input type="hidden" name="id" id="id" value="">
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputFirstName">First name</label>
                              <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value=""> 
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inpuSurname">Surname</label>
                              <input class="form-control" id="inputSurname" type="text" name="lname" placeholder="Enter your last name" value="">
                          </div>
                      </div>
                      <!-- Form Row        -->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputOrgName">Organization name</label>
                              <input class="form-control" id="inputOrgName" type="text" name="company" placeholder="Enter your organization name" value="">
                          </div>

                      </div>
                      <!-- Form Group (email address)-->
                      <div class="mb-3">
                          <label class="small mb-1" for="inputEmailAddress">Email address</label>
                          <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="">
                      </div>
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (phone number)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputPhone">Mobile number</label>
                              <input class="form-control" id="inputPhone" type="tel" name="contact" placeholder="Enter your phone number" value="">
                          </div>
                         
                      </div>
                      <!-- Save changes button-->
                      
                      <button class="btn btn-primary" type="submit" onclick="editProfile()">Save changes</button>
                      <button type="button" class="btn btn-default" onclick="closeModal()" href="#">Cancel</button>
                
                    </form>
                 
              </div>
          </div>
      </div>
  </div>
</div>


        <!--Javascript-->
        <script src="/frontend/js/loginclient.js"></script>
        <script>
            function editForm(id){
  
              $("#id").val("");
              $("#fname").val("");
              $("#lname").val("");
              $("#email").val("");
              $("#company").val("");
              $("#contact").val("");
  
              $.ajax({
                  type: "GET",
                  url: '{{url("profile/edit/")}}'+'/'+id,
                  dataType: "json",
                  success: function (data) {
                      // console.log(data);
                      $("#id").val(data["id"]);
                      $("#fname").val(data["fname"]);
                      $("#lname").val(data["lname"]);
                      $("#contact").val(data["contact"]);
                      $("#email").val(data["email"]);
                      $("#company").val(data["company"]);
                
  
                      $('#editService').modal('show');
                  },
                  error: function (data) {
                      console.log('Error:', data);
  
                  }
              });
  
            }
  
            function closeModal(){
              $('#editProfile').modal('hide');
            }
            </script>
</body>
