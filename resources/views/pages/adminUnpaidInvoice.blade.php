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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/newstyle.css">
    <link href="/frontend/css/index.css" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/logo.png" />
    <link href="index.css" rel="stylesheet">

    <style>
      .dataTables_wrapper {
        font-size : 14px;
      } 
    </style>
    
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

            <div class="container">
              <header class="site-navbar site-navbar-target" role="banner">
              <nav class="site-navigation ml-auto d-none d-lg-block" role="navigation"><br><br><br><br><br>
                <ul class="site-menu main-menu js-clone-nav ml-auto">
                  <li><div class="me-auto p-2 bd-highlight"><h2>Invoices</div></li>
                  <li><a href="adminInvoice" class="nav-link">Paid</a></li>
                  <li class="active"><a href="adminUnpaidInvoice" class="nav-link">Unpaid</a></li>
                </ul>
              </nav>
            </header><br><br><br>



      
      @if(Session::has('order_message'))
      <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
      @endif
      <div class="table">      
      <table id="table1" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Invoice ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th>Services</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @if($services->count())
          @foreach($services as $service)
             <tr id="tr_{{$service->id}}">
       
              <td>{{$service->id}}</td>
              <td>{{$service->name}}</td>
              <td>{{$service->phone}}</td>
              <td>{{$service->email}}</td>
              <td>{{$service->company}}</td>
              <td>{{$service->services}}</td>
              <td>{{$service->date}}</td>
              <td>{{$service->amount}}</td>
              <td>{{$service->paymentStatus}}</td>
               <td class="text-center">
               <a href="invoiceForm" class="edit" onclick="editForm({{$service->id}})" data-toggle="modal"><i class="fa fa-money" data-toggle="tooltip" title="Payment"></i></i></a>
               <a href="{{url('paid', $service->id)}}" class="paid" onclick="return confirm('Invoice Paid?')"><i class="material-icons" data-toggle="tooltip" title="Paid">&#xE86C;</i></a> 
               </td>
             </tr>
            @endforeach 
            @endif
      </table>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>

<!-- Edit Modal HTML -->
<div id="invoiceForm" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Invoice Form</h4>
                              <p class="card-description">Please fill in your client's invoice details.</p>
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

                                      <form action="{{route("updateInvoice")}}" method="POST" class="forms-sample">
                                        @csrf
                                        <input type="hidden" name="id" id="invoiceid" value="">
                                          <div class="form-group">
                                            <label for="InputName1">Fullname</label>
                                            <input class="form-control" type="text" name="name" id="name" value="" placeholder="Name" disabled>
                                          </div>

                                          <div class="form-group">
                                            <label for="InputPhone">Phone Number</label>
                                            <input class="form-control" type="text" name="phone" id="phone" value="" pattern="^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)[1]-*[0-9]{8}$" placeholder="0112366789" disabled>
                                        </div>

                                          <div class="form-group">
                                              <label for="InputEmail">Email address</label>
                                              <input class="form-control" type="email" name="email" id="email" value=""  placeholder="Email" disabled>
                                          </div>

                                          <div class="form-group">
                                            <label for="InputCompany">Company</label>
                                            <input class="form-control" type="text" name="company" id="company" value=""  placeholder="Company name" disabled>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">RM</span>
                                          </div>
                                          <input type="text" class="form-control" name="amount" id="amount" aria-label="Amount (to the nearest dollar)">
                                        
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <div class="input-group">
                                        
                                      </div>
                                    </div>

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







  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? HaiTech</span>
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

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>


    <script>
    
    $(document).ready( function () {
          $('#table1').DataTable();
      } );

     function editForm(id){

        $("#id").val("");
        $("#name").val("");
        $("#phone").val("");
        $("#email").val("");
        $("#company").val("");
        $("#amount").val("");


        $.ajax({
            type: "GET",
            url: '{{url("invoice/edit/")}}'+'/'+id,
            dataType: "json",
            success: function (data) {
                // console.log(data);
                $("#invoiceid").val(data["id"]);
                $("#name").val(data["name"]);
                $("#phone").val(data["phone"]);
                $("#email").val(data["email"]);
                $("#company").val(data["company"]);
                $("#amount").val(data["amount"]);
                $("#paymentStatus").val(data["paymentStatus"]);

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


                $('#invoiceForm').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);

            }
        });

      }

      function closeModal(){
        $('#invoiceForm').modal('hide');
      }

        function deleteInvoice(id){
        $("#delId").val(id);
        $('#deleteInvoice').modal('show');
      }

      function closeModalDelete(){
        $('#deleteInvoice').modal('hide');
      }

      </script>                                    

  </body>
</html>


        

    