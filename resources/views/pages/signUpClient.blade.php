      
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> HaiTech </title>
  
          <!-- CSS -->
          <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
          <link rel="stylesheet" href="{{ asset('frontend/css/background.css') }}">
          <link rel="stylesheet" href="{{ asset('frontend/css/signupclient.css') }}">
                  
          <!-- Boxicons CSS -->
          <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                          
      </head>
      <body>
  
          <section class="container forms">
              <div class="form login">
                  <div class="form-content">
                    <br><br>
                      <img src="images/logo.png" alt="" class="logo-img">
                      <h1>Sign Up</h1>
                      <h5>Create your account now!</h5>
                  
                      <form action="login" method="get">
                          <div class="field input-field">
                              <input type="text" placeholder="Firstname" class="input" id=fname>
                          </div>

                          <div class="field input-field">
                            <input type="text" placeholder="Surname" class="input" id="lname">
                          </div>

                          <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" id="email">
                          </div>

                          <div class="field input-field">
                            <input type="tel" placeholder="Mobile number" class="input" id="contact">
                          </div>
  
                          <div class="field input-field">
                              <input type="password" placeholder="New password" class="password" id="password">
                              <i class='bx bx-hide eye-icon'></i>
                          </div>

                          <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" id="cpass">
                            <i class='bx bx-hide eye-icon'></i>
                          </div>
  
                          <div class="field button-field">
                              <button>Sign Up</button>
                          </div>
                        </form>
                  </div>
              </div>
          </section>
  
          <!--Javascript-->
          <script src="/frontend/js/loginclient.js"></script>
      </body>