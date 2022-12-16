<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaiTech</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/frontend/css2/simple-line-icons.css">
    <link rel="stylesheet" href="/frontend/css/vendor.bundle.base.css">
    <!-- endinject -->
    {{-- <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/frontend/css/daterangepicker.css">
    <link rel="stylesheet" href="/frontend/css/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles --> --}}
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/newstyle.css">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/clientservice.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/allservices.css') }}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="admindashboard">
            <img src="/images/logo.png" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="admindashboard"><img src="/images/test/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Admin!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">0</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 0 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right"></span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
            
                  </div>
       
                </a>
              </div>
            </li>

            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="/images/userIcon.png" alt="Profile image"> <span class="font-weight-normal">HaiBro Staff</span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                <a href="loginAdmin" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <!--  <a>We Hassle Free Anything</a> -->

            <li class="nav-item">
              <a class="nav-link" href="admindashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Services</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Client</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Invoice</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">

            <!-- page template end -->
          
          <br><br><br><br><br>
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Clients</h2>
                    </div>
                    <div class="col-sm-6">
                      <a href="serviceForm" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>New Client</span></a>
                  
                    </div>
                  </div>
                </div>
  
            <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>ClientID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @if($services->count())
              @foreach($services as $key => $service)
                 <tr id="tr_{{$service->id}}">
           
                   <td>{{$service->id}}</td>
                   <td>{{$service->name}}</td>
                   <td>{{$service->phone}}</td>
                   <td>{{$service->email}}</td>
                   <td>{{$service->company}}</td>
                   <td>{{$service->services}}</td>
                   <td>{{$service->date}}</td>
                   <td>{{$service->time}}</td>
                   <td>{{$service->issue}}</td>
                   <td> --}}
                    <a href="editService" class="edit"  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="deleteService" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                
                   {{-- </td>
                 </tr> --}}
                 {{-- @endforeach 
                 @endif --}}
            </table>
           
  
            <!-- Edit Modal HTML -->
  <div id="editService" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
        <div class="form-body">
          <div class="row">
              <div class="form-holder">
                  <div class="form-content">
                      <div class="form-items">
                          <h3>Request Service</h3>
                          <p>Enter your details & we will be ready to provide solution instantly.</p>
{{--                           
                          @if(Session::get('success'))
                          <div class="alert alert-success">
                            {{Session:get('success')}}
                          </div>
                          @endif
  
                          @if(Session::get('fail'))
                          <div class="alert alert-danger">
                            {{Session:get('fail')}}
                          </div>
                          @endif --}}
  
                          <form action="{{route("update")}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="id" value="">
                              <div class="col-md-12">
                                 <input class="form-control" type="text" name="name" id="name" value="" placeholder="Name" required>
                                 <div class="valid-feedback">Name field is valid!</div>
                                 <div class="invalid-feedback">Name field cannot be blank!</div>
                              </div>
  
                              <div class="col-md-12">
                                <input class="form-control" type="text" name="phone" id="phone" value="" placeholder="Phone Number" required>
                                 <div class="valid-feedback">Phone no. field is valid!</div>
                                 <div class="invalid-feedback">Phone no. field cannot be blank!</div>
                            </div>
  
                              <div class="col-md-12">
                                  <input class="form-control" type="email" name="email" id="email" value=""  placeholder="Email" required>
                                   <div class="valid-feedback">Email field is valid!</div>
                                   <div class="invalid-feedback">Email field cannot be blank!</div>
                              </div>
  
                              <div class="col-md-12">
                                <input class="form-control" type="text" name="company" id="company" value=""  placeholder="Company" required>
                                 <div class="invalid-feedback">Company name field cannot be blank!</div>
                            </div>
  
                            <br>
                            Services:
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="services[]" id="ups" value="UPS"  id="invalidCheck">
                            <label class="form-check-label">Uninterruptible Power Supply Precision Cooling Solution</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="fm" value="Facility Management"  id="invalidCheck">
                            <label class="form-check-label">Facility Management M&E Maintenance</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="services[]" id="dce" value="Data Center Enhancement"  id="invalidCheck">
                          <label class="form-check-label">Data Center Enhancement ICT Managed Services</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="services[]" id="cs" value="Corporate Support"  id="invalidCheck">
                        <label class="form-check-label">Corporate Support Business Advisory</label>
                    </div>
  
                    <br>
                    
                    Select Date & Time:
                    <div class="col-md-12">
                      <div class="input-group">
                      <input class="input--style-2 js-datepicker" type="date" name="date" id="date" value="" > <tr><tr> 
                      <input class="time" type="time" name="time" id="time" value="" >
                      </div>
                      </div>
  
                      <br>
  
                          <div class="col-md-12">
                              <textarea class="form-control" type="text" name="issue" id="issue" value="" placeholder="State your issue" required></textarea>
                               <div class="invalid-feedback">Issue field cannot be blank!</div>
                          </div>
                    
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    
  
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" onclick="closeModal()">cancel</button>
                                    <input type="submit" class="btn btn-info" value="Save">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
       </div>
          </div>
      </div>
  </div>
  
  <!-- Delete Modal HTML -->
  <div id="deleteService" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <form action="{{route("delete")}}" method="POST">
          @csrf
          <input type="hidden" name="id" id="servId" value="">
                  <div class="modal-header">						
                      <h4 class="modal-title">Delete Service</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">					
                      <p>Are you sure you want to delete these Records?</p>
                      <p class="text-warning"><small>This action cannot be undone.</small></p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" onclick="closeModalDelete()">cancel</button>
                      <input type="submit" class="btn btn-danger" value="Proceed" >
                  </div>
              </form>
          </div>
      </div>
  </div>

              </div>
            </div>
          </div>
              
    
          <!-- Start header Area -->
  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
            <script src="{{ asset('frontend/js/form.bundle.js') }}"></script>
          
            <!--====== js ======-->
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/js/glightbox.min.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/js/tiny-slider.js"></script>
            <script src="frontend/js/navbar.bundle.js"></script>
            <script src="frontend/js/allServices.js"></script>
            {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>