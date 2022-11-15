
<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HaiTech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="css/style.css">

	  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    </head>

    <body>
      <header>

        <img src="images/logo.png" alt="" class="logo-img">
    
        <ul class="navbar">
          <li><a href="#">HOME</a></li>
          <li><a href="#" class="active">SERVICES</a></li>
          <li><a href="#">PROJECT</a></li>
          <li><a href="#">CLIENTS</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">USER</a></li>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">All services</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
        </ul>

        <!--<div class="dropdown">
          <a href="#" class="user"><i class="ri-user-fill"><button class="dropbtn">User</button>
          <div class="bx bx-menu" id="menu-icon"></div>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">All services</a>
            <a href="#">Logout</a>
          </div>
        </div>-->
    
        <!--<div class="dropdown-menu">
          <a href="#" class="user"><i class="ri-user-fill"></i>User</a>
          <div class="bx bx-menu" id="menu-icon"></div>
          <div class="menu-content">
            <a href="#">Profile</a>
            <a href="#">All services</a>
            <a href="#">Logout</a>
          </div>
        </div>-->
      </header>
    
      <!--js link--->
      <script type="text/javascript" src="js/script.js"></script>
    
      <div>
       <!-- @yield('content')-->
      </div>

      <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
      <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>

    </body>
</html>