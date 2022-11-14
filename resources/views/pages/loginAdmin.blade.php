
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> HaiTech</title>

      <!-- CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/loginadmin.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/background.css') }}">            
      
      <!-- Boxicons CSS -->
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- End layout styles -->
        <link rel="shortcut icon" href="/images/logo.png" />                   
  </head>
  <body>

      <section class="black">
          <section class="container">
          <div class="form login">

                <img src="images/logo.png" alt="" class="logo-img">
                <header>Admin Login</header>
                 
                  <form action="#">
                      <div class="field input-field">
                          <input type="email" placeholder="Email" class="input">
                      </div>

                      <div class="field input-field">
                          <input type="password" placeholder="Password" class="password">
                          <i class='bx bx-hide eye-icon'></i>
                      </div>

                <!-- Checkbox -->
                <div class="form-group">
                  <input type="checkbox" name="remember">
                  <label for="remember-me" class="remember-me">Remember me</label>
                  <a href="forgotpass" class="forgot-pass">Forgot password?</a>
              </div>

                      <div class="field button">
                          <button>Login</button>
                      </div>
                  </form>

              </div>
            </section>
    </section>
        <!--Javascript-->
        <script src="/frontend/js/loginclient.js"></script>
  </body>

