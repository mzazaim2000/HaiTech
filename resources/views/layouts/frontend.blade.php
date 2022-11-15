

<!DOCTYPE html>
<html lang="{{ strreplace('', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HaiTech</title>

        <!-- Fonts -->
        <meta name="description" content="">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/loginclient.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    </head>

    <body>
         <header>
            <img class="logo" src="images/logo.svg" alt="logo">
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
            <a class="cta" href="#"><button>User</button></a>
         </header>
     
      <div>
        @yield('content')
      </div>

      <script src=" {{ asset('frontend/js/jquery-3.6.1.min.js') }}"></script>
      <script src=" {{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>

    </body>
</html>