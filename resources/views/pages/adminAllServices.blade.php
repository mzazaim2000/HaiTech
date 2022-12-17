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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/newstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
              <a class="nav-link" href="adminAllServices">
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
              <a class="nav-link" href="services">
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
            <!-- page template end -->
 <!-- top nav template start -->
 <div class="container"> 
  <header class="site-navbar site-navbar-target" role="banner">
        <nav class="site-navigation ml-auto d-none d-lg-block" role="navigation"><br><br><br><br><br>
          <ul class="site-menu main-menu js-clone-nav ml-auto">
            <li class="active"><a href="adminAllServices" class="nav-link">All Services</a></li>
            <li><a href="adminPending" class="nav-link">In-Progress</a></li>
            <li><a href="adminUpcoming" class="nav-link">Upcoming</a></li>
              </ul>
            </nav>
          </div>
    </header>
     <!-- top nav template end -->

               <!-- table template start -->
               <br><br><br><div class="table">
               <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Service ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Service Type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($services->count())
                  @foreach($services as $key => $service)
                     <tr id="tr_{{$service->id}}">
               
                       <td>{{$service->id}}</td>
                       <td>{{$service->name}}</td>
                       <td>{{$service->company}}</td>
                       <td>{{$service->services}}</td>
                       <td>{{$service->date}}</td>
                       <td>{{$service->time}}</td>
                       <td>{{$service->action}}</td>
                      
                       <td>
                        {{-- <button type="button" onclick="editForm({{$service->id}})" class="btn btn-edit"><i class="fas fa-pen"></i><span>Edit</span></a>
                        <button type= "button" onclick="deleteService({{$service->id}})" class="btn btn-danger"><i class="material-icons">&#xE15C;</i><span>Cancel</span></a> --}}
                        <a href="editService" class="edit" onclick="editForm({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="deleteService" class="delete" onclick="deleteService({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    
                       </td>
                     </tr>
                     @endforeach 
                     @endif
                    
                </table>
               </div>
            <!-- table template end -->

          </div> 
          <!-- content-wrapper ends -->
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
  </body>
  </html>
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
    <!-- End custom js for this page -->

            <script>
              function editForm(id){
    
                $("#id").val("");
                $("#name").val("");
                $("#phone").val("");
                $("#email").val("");
                $("#company").val("");
                $("#date").val("");
                $("#time").val("");
                $("#issue").val("");
                $("#ups").prop( "checked", false );
                $("#fm").prop( "checked", false );
                $("#dc").prop( "checked", false );
                $("#cs").prop( "checked", false );
    
                $.ajax({
                    type: "GET",
                    url: '{{url("service/edit/")}}'+'/'+id,
                    dataType: "json",
                    success: function (data) {
                        // console.log(data);
                        $("#id").val(data["id"]);
                        $("#name").val(data["name"]);
                        $("#phone").val(data["phone"]);
                        $("#email").val(data["email"]);
                        $("#company").val(data["company"]);
                        $("#date").val(data["date"]);
                        $("#time").val(data["time"]);
                        $("#issue").val(data["issue"]);
    
                        var services = data["services"].split(',');
                        for (let i = 0; i < services.length; i++) {
    
                          var serv = services[i].trim();
    
                          if(serv == "UPS"){
                            $( "#ups" ).prop( "checked", true );
                          }else if(serv == "Facility Management"){
                            $( "#fm" ).prop( "checked", true );
                          }else if(serv == "Data Center Enhancement"){
                            $( "#dce" ).prop( "checked", true );
                          }else if(serv == "Corporate Support"){
                            $( "#cs" ).prop( "checked", true );
                          }
    
                        }
    
    
                        $('#editService').modal('show');
                    },
                    error: function (data) {
                        console.log('Error:', data);
    
                    }
                });
    
              }
    
              function closeModal(){
                $('#editService').modal('hide');
              }
    
              function deleteService(id){
                $("#servId").val(id);
                $('#deleteService').modal('show');
              }
    
              function closeModalDelete(){
                $('#deleteService').modal('hide');
              }
    
              </script>

    