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
  <!-- END OF TEMPLATE-->
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Quick Actions</h5>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button href="addClient" type="button" class="btn px-0" onclick="addFormModal()"> <i class="icon-user mr-2"></i> Add Client</button>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="adminPending" class="admin-pending">
                      <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> In-Progress Services</button>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="adminUpcoming" class="admin-upcoming">
                      <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Upcoming Services</button>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="invoice" class="admin-invoice">
                      <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">EXPENSE</span>
                          <h4>$32123</h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PURCHASE</span>
                          <h4>95,458</h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">QUANTITY</span>
                          <h4>2650</h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">RETURN</span>
                          <h4>25,542</h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © HaiTech</span>
              </div>
            </footer>

            <!-- Add Client HTML -->
  <div id="addClient" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="form-body">
          <div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Client Form</h4>
        <p class="card-description">Kindly fill in your client's information.</p>
        <form action="{{route('addClient')}}" method="POST" class="forms-sample">
          @csrf
          <div class="form-group">
            <label for="InputName1">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="fname" placeholder="Firstname" required>
          </div>
          <div class="form-group">
            <label for="InputName2">Surname</label>
            <input type="text" class="form-control" id="lastname" name="lname" placeholder="Surname" required>
          </div>
          <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" class="form-control" id="Email" name="email" placeholder="john@example.com" required>
          </div>
          <div class="form-group">
            <label for="InputPhone">Phone Number</label>
            <input type="tel" class="form-control" id="Contact" name="contact" pattern="^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)[1]-*[0-9]{8}$" placeholder="0112366789" required>
          </div>
          <button type="button"class="btn btn-light" onclick="closeModal()">Cancel</button>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
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
    <!-- End custom js for this page -->

    <script src="/frontend/js/dashboard.js"></script>

    <script src="/frontend/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
    <script>

      function addFormModal(){
        $('#addClient').modal('show');
      }

      function editForm(id){

        $("#id").val("");
        $("#fname").val("");
        $("#lname").val("");
        $("#email").val("");
        $("#contact").val("");     

        $.ajax({
            type: "GET",
            url: '{{url("client/edit/")}}'+'/'+id,
            dataType: "json",
            success: function (data) {
                // console.log(data);
                $("#cid").val(data["id"]);
                $("#fname").val(data["firstname"]);
                $("#lname").val(data["surname"]);
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
        $('#addClient').modal('hide');
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