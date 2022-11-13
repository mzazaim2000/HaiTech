
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> HaiTech Admin Login </title>

      <!-- CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/loginadmin.css') }}">
              
      <!-- Boxicons CSS -->
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                      
  </head>
  <body>

    <body class="hold-transition layout-top-nav">
      <div class="wrapper">


      <section class="container forms">
          <div class="form login">
              <div class="form-content">
                  <header>Login</header>

                  <form action="#">
                      <div class="field input-field">
                          <input type="email" placeholder="Email" class="input">
                      </div>

                      <div class="field input-field">
                          <input type="password" placeholder="Password" class="password">
                          <i class='bx bx-hide eye-icon'></i>
                      </div>

                <!-- Checkbox -->
                <div class="form-check" classclass="form-link">
                  <input class="form-check-input" type="checkbox" value="" id="formCheck"/>
                  <label class="form-check-label" for="formCheck"> Remember me?</label>
                  <a href="#" class="forgot-pass">Forgot password?</a>
                </div>
              </div>

                      <div class="field button-field">
                          <button>Login</button>
                      </div>
                  </form>

              </div>

          </div>

      </section>

      <!-- JavaScript -->

      <script src="js/script.js">
       const forms = document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");

    pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
      let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
      
      pwFields.forEach(password => {
          if(password.type === "password"){
              password.type = "text";
              eyeIcon.classList.replace("bx-hide", "bx-show");
              return;
          }
          password.type = "password";
          eyeIcon.classList.replace("bx-show", "bx-hide");
                })
                
            })
        })      

          links.forEach(link => {
        link.addEventListener("click", e => {
          e.preventDefault(); //preventing form submit
          forms.classList.toggle("show-signup");
        })
      })

      </script>
  </body>
