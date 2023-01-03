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
                <span class="count">{{ count(App\Models\Services::newService()) }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                @foreach(App\Models\Services::newService() as $newreq)
                <a href="{{url('adminAllServices')}}" class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have new service request from {{$newreq->name}}</p>
                  <span class="badge badge-pill badge-primary float-right"></span>
                </a>
                <div class="dropdown-divider"></div>
                @endforeach
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
              <a class="nav-link" href="adminInvoice">
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
            <li><div class="me-auto p-2 bd-highlight"><h2>Services</div></li>
            <li><a href="adminAllServices" class="nav-link">All Services</a></li>
            <li><a href="adminUpcoming" class="nav-link">Upcoming</a></li>
            <li class="active"><a href="adminPending" class="nav-link">In-Progress</a></li>
              </ul>
            </nav>
          </header>
 </div>

     <!-- top nav template end -->

               <!-- table template start -->
               @if(Session::has('order_message'))
               <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
               @endif
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
                    <th colspan="4" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($services->count())
                  @foreach($services as $service)
                     <tr id="tr_{{$service->id}}">
               
                      <td>{{$service->id}}</td>
                      <td>{{$service->name}}</td>
                      <td>{{$service->company}}</td>
                      <td>{{$service->services}}</td>
                      <td>{{$service->date}}</td>
                      <td>{{$service->time}}</td>
                      <td>{{$service->status}}</td>
                       <td class="text-center">
                        <a href="{{url('inprogress', $service->id)}}" class="inprogress" onclick="return confirm('Services In-Progress?')"><i class="material-icons" data-toggle="tooltip" title="In-Progress">access_time</i></a>
                        <a href="{{url('complete', $service->id)}}" class="complete" onclick="return confirm('Complete Services?')"><i class="material-icons" data-toggle="tooltip" title="Completed">&#xE86C;</i></a>
                        <a href="editServ" class="edit" onclick="editForm({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE9a2;</i></a>
                        <a href="deleteServ" class="delete" onclick="deleteServ({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       </td>
                     </tr>
                     @endforeach 
                     @endif
               
                    </table>
                 </div> 
          <!-- content-wrapper ends -->
          </div>

              <!-- Edit Modal HTML -->
              <div id="editServ" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Service Request Form</h4>
                              <p class="card-description">Update service request details.</p>
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

                                      <form action="{{route("updateServ")}}" method="POST" class="forms-sample">
                                        @csrf
                                        <input type="hidden" name="id" id="pendingid" value="">
                                          <div class="form-group">
                                            <label for="InputName1">Fullname</label>
                                            <input class="form-control" type="text" name="name" id="name" value="" placeholder="Name" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="InputPhone">Phone Number</label>
                                            <input class="form-control" type="text" name="phone" id="phone" value="" pattern="^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)[1]-*[0-9]{8}$" placeholder="0112366789" required>
                                        </div>

                                          <div class="form-group">
                                              <label for="InputEmail">Email address</label>
                                              <input class="form-control" type="email" name="email" id="email" value=""  placeholder="Email" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="InputCompany">Company</label>
                                            <input class="form-control" type="text" name="company" id="company" value=""  placeholder="Company name" required>
                                        </div>

                                        Services:
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="services[]" id="ups" value="UPS"  id="invalidCheck">Uninterruptible Power Supply Precision Cooling Solution</label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="services[]" id="fm" value="Facility Management"  id="invalidCheck">Facility Management M&E Maintenance</label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="services[]" id="dce" value="Data Center Enhancement"  id="invalidCheck">Data Center Enhancement ICT Managed Services</label>
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="services[]" id="cs" value="Corporate Support"  id="invalidCheck">Corporate Support Business Advisory</label>
                                </div><br>
                                
                                Select Date & Time:
                                <div class="form-group">
                                  <input class="" type="date" name="date" id="date" value="" >
                                  <input class="" type="time" name="time" id="time" value="" >
                                  </div>

                                      {{-- <div class="col-md-12">
                                          <textarea class="form-control" type="text" name="issue" id="issue" value="" placeholder="State your issue" required></textarea>
                                          <div class="invalid-feedback">Issue field cannot be blank!</div>
                                      </div> --}}
                                                <button type="button" class="btn btn-light" onclick="closeModal()">Cancel</button>
                                                <input type="submit" class="btn btn-primary mr-2" value="Save">
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>

              <!-- Delete Client HTML -->
            <div id="deleteServ" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="{{route("deleteServ")}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="clearId" value="">
                    <div class="modal-header">						
                      <h4 class="modal-title">Delete Service Record</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                      <p>Are you sure you want to delete the Services Records?</p>
                      <p class="text-danger"><small>This action cannot be undone.</small></p>
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
                $("#pendingid").val(data["id"]);
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


                $('#editServ').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);

            }
        });

      }

      function closeModal(){
        $('#editServ').modal('hide');
      }

      function deleteServ(id){
        $("#clearId").val(id);
        $('#deleteServ').modal('show');
      }

      function closeModalDelete(){
        $('#deleteServ').modal('hide');
      }

      </script>

  </body>
</html>
        

    