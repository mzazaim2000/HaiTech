
<!DOCTYPE html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> HaiTech</title>

        <!-- Fonts -->
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}">


    </head>

    <body>
         <header>
            <img class="logo" src="/images/logo.png" alt="logo">
            <nav>
              <ul class="nav__links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Project</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </nav>

            <div class="dropdown">
              <button class="dropbtn">User</button>
              <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">All services</a>
                <a href="#">Logout</a>
              </div>
            </div>
         </header>
     
      <!--<div>
        @yield('content')
      </div>-->

      <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
      <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>

    </body>
</html>