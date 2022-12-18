<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HaiTech</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/frontend/css2/simple-line-icons.css">
    <link rel="stylesheet" href="/frontend/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/frontend/css/daterangepicker.css">
    <link rel="stylesheet" href="/frontend/css/chartist.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/form.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link href="/frontend/css/index.css" rel="stylesheet">
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
            <img src="/images/logo.png" alt="logo" class="logo" />
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
                  <p class="mb-0 font-weight-medium float-left">You have 0 unread notification</p>
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


            <li class="nav-item">
              <a class="nav-link" href="admindashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminAllServices" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Services</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminClient">
                <span class="menu-title">Client</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="invoice">
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
              </div>
            </div>

    <div class="container">
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Clients</div>
        <div class="p-2 bd-highlight">
          <button type="button" class="btn btn-colour-1" onclick="showUserCreateBox()">New Client</button>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Client ID</th>
              <th>Firstname</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="mytable">
            @if($user->count())
            @foreach($user as $key => $client)
               <tr id="tr_{{$client->id}}">
         
                 <td>{{$client->id}}</td>
                 <td>{{$client->firstname}}</td>
                 <td>{{$client->surname}}</td>
                 <td>{{$client->email}}</td>
                 <td>{{$client->contact}}</td>
             
                 <td>
                  <a href="editClient" class="edit" onclick="editForm({{$client->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="deleteClient" class="delete" onclick="deleteClient({{$client->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

            <tr>
              
            </tr>
          </tbody>
          @endforeach 
          @endif
        </table>
      </div>
    </div>

  </div> 
  <!-- content-wrapper ends -->

  <!-- Edit Modal HTML -->
  <div id="editClient" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="form-body">
          <div class="row">
           
                  <div class="form-content">
                      <div class="form-items">
                          <h3>Client Details</h3>
                          <p>All clients information. Need to update client details?</p>
                          
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
  
                          <form action="{{route("updateClient")}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="id" value="">
                              <div class="col-md-12">
                                 <input class="form-control" type="text" name="fname" id="name" value="" placeholder="First Name" required>
                                 <div class="valid-feedback">Name field is valid!</div>
                                 <div class="invalid-feedback">Name field cannot be blank!</div>
                              </div>

                              <div class="col-md-12">
                                <input class="form-control" type="text" name="lname" id="name" value="" placeholder="Surname" required>
                                <div class="valid-feedback">Name field is valid!</div>
                                <div class="invalid-feedback">Name field cannot be blank!</div>
                             </div>
  
                             <div class="col-md-12">
                              <input class="form-control" type="email" name="email" id="email" value=""  placeholder="Email" required>
                               <div class="valid-feedback">Email field is valid!</div>
                               <div class="invalid-feedback">Email field cannot be blank!</div>
                          </div>

                              <div class="col-md-12">
                                <input class="form-control" type="text" name="contact" id="phone" value="" placeholder="Phone Number" required>
                                 <div class="valid-feedback">Phone no. field is valid!</div>
                                 <div class="invalid-feedback">Phone no. field cannot be blank!</div>
                            </div>
  
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    
  
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" onclick="closeModal()">Cancel</button>
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


  <!-- Delete Modal HTML -->
<div id="deleteClient" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route("deleteClient")}}" method="POST">
        @csrf
        <input type="hidden" name="id" id="clientId" value="">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Client</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete the Client's Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" onclick="closeModalDelete()">Cancel</button>
					<input type="submit" class="btn btn-danger" value="Proceed" >
				</div>
			</form>
		</div>
	</div>
</div>





  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © HaiTech</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="/frontend/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/frontend/js/Chart.min.js"></script>
<script src="/frontend/js/moment.min.js"></script>
<script src="/frontend/js/daterangepicker.js"></script>
<script src="/frontend/js/chartist.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/frontend/js/off-canvas.js"></script>
<script src="/frontend/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="/frontend/js/dashboard.js"></script>

    <script src="/frontend/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
    <script>
      function editForm(id){

        $("#id").val("");
        $("#firstname").val("");
        $("#surname").val("");
        $("#email").val("");
        $("#contact").val("");     

        $.ajax({
            type: "GET",
            url: '{{url("client/edit/")}}'+'/'+id,
            dataType: "json",
            success: function (data) {
                // console.log(data);
                $("#id").val(data["id"]);
                $("#firstname").val(data["fname"]);
                $("#surname").val(data["lname"]);
                $("#email").val(data["email"]);
                $("#contact").val(data["contact"]);

                $('#editClient').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);

            }
        });

      }

      function closeModal(){
        $('#editClient').modal('hide');
      }

      function deleteClient(id){
        $("#clientId").val(id);
        $('#deleteClient').modal('show');
      }

      function closeModalDelete(){
        $('#deleteClient').modal('hide');
      }

      </script>

  
  </body>
</html>
            <!-- table template end -->

        

    