<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HaiBro</title>
  <link rel="shortcut icon" href="images/logo2.png" />  

    <!-- Fonts -->
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
                <img src="{{url('images/haibro.png')}}" class="haibro-img" />
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
                    <a class="page-scroll" href="{{url('home#services')}}">Services</a>
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
                <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i>
                  <img src="images/user2.png" class="user-img" /></a></a>
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
        <div class="container-xl">
          <div class="table-responsive">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h2>All Services</h2>
                  </div>
                  <div class="col-sm-6">
                    <a href="serviceForm" class="btn btn-success"><i class="material-icons">&#xE147;</i><span>New Service</span></a>
                
                  </div>
                </div>
              </div>

          <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Company</th>
              <th>Services</th>
              <th>Date</th>
              <th>Time</th>
              <th>Issue</th>
              <th>Amount</th>              
              <th colspan="3" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @if($services->count())
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
                 <td>{{$service->amount}}</td>
                 <td>
                  <a href="editService" class="edit" onclick="editForm({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="deleteService" class="delete" onclick="deleteService({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  <a href="viewService" class="view" onclick="viewService({{$service->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
                 </td>
               </tr>
               @endforeach 
               @endif
          </table>
         

          <!-- Edit Modal HTML -->
<div id="editService" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
      <div class="form-body">
        <div class="row">
            <div class="">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Request Service</h3>
                        <p>Enter your details & we will be ready to provide solution instantly.</p>
                        
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
					<button type="button" class="btn btn-default" onclick="closeModalDelete()">Cancel</button>
					<input type="submit" class="btn btn-danger" value="Proceed" >
				</div>
			</form>
		</div>
	</div>
</div>

<!-- View Modal HTML -->
<div id="viewService" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="#" method="POST">
        @csrf
        <input type="hidden" name="id" id="servId" value="">
				<div class="modal-header">						
					<h4 class="modal-title">Service Payment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Payment can be done by transferring to the account number below.</p>
					<p class="text-warning"><small>Maybank</small></p>
          <p class="text-info"><small>Account Number: 1892725328938</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-danger" onclick="closeModal()" value="Close" >
				</div>
			</form>
		</div>
	</div>
</div>
          
          
  </header>
  
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
            $('#viewService').modal('hide');
          }

          function deleteService(id){
            $("#servId").val(id);
            $('#deleteService').modal('show');
          }

          function closeModalDelete(){
            $('#deleteService').modal('hide');
          }

          function viewService(id){
            $("#servId").val(id);
            $('#viewService').modal('show');
          }

          </script>

        </section>
      </body>
      </html>
