<head> 
    
  <title>HaiBro</title>
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
                  <form action ="{{route('showProfile')}}" method="POST">
                    @csrf
                    @method('PUT')
                      <!-- Form Row-->
                      <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          
                          <div class="col-md-6">
                              <label class="small mb-1" for="inputFirstName">First name</label>
                              <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value="{{auth()->user()->firstname}}">
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
                              <input class="form-control" id="inputOrgName" type="text" name="organization" placeholder="Enter your organization name" value="">
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
                      <button class="btn btn-primary" type="button"><a href="#">Save changes</a></button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

{{-- {{auth()->user()->email}} --}}
{{-- {{auth()->user()->contact}} --}}
        <!--Javascript-->
        <script src="/frontend/js/loginclient.js"></script>
</body>