<head> 
    
  <title> HaiBro</title>
  <link rel="shortcut icon" href="/images/logo.png" />    
     <!-- CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/loginadmin.css') }}">
        <link rel="stylesheet" href="{{ asset('/frontend/css/profile.css') }}">  
        <link rel="stylesheet" href="{{ asset('/frontend/css/frontend.css') }}">
</head>   
<body>
<div class="container-xl px-4 mt-4">
  <!-- Account page navigation-->
  <nav class="nav nav-borders">
      <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
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
                  <form>
                      <!-- Form Group (username)
                      <div class="mb-3">
                          <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                          <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                      </div> -->
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputFirstName">First name</label>
                              <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="John">
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inpuSurname">Surname</label>
                              <input class="form-control" id="inputSurname" type="text" placeholder="Enter your last name" value="Doe">
                          </div>
                      </div>
                      <!-- Form Row        -->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputOrgName">Organization name</label>
                              <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="LHDN">
                          </div>
                          <!-- Form Group (location)
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputLocation">Location</label>
                              <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                          </div>-->
                      </div>
                      <!-- Form Group (email address)-->
                      <div class="mb-3">
                          <label class="small mb-1" for="inputEmailAddress">Email address</label>
                          <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="john@gmail.com">
                      </div>
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (phone number)-->
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputPhone">Mobile number</label>
                              <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="011-2321109">
                          </div>
                          <!-- Form Group (birthday)
                          <div class="col-md-6" class="field input-field">
                              <label class="small mb-1"  for="inputPassword">Password</label>
                              <input type="password" class="form-control" id="inputPassword" placeholder="Enter new password" value="1234">
                              <i class="bx bx-hide eye-icon"></i>
                          </div>-->
                      </div>
                      <!-- Save changes button-->
                      <button class="btn btn-primary" type="button">Save changes</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
        <!--Javascript-->
        <script src="/frontend/js/loginclient.js"></script>
</body>