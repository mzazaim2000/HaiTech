
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HaiBro </title>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/resetpassword.css') }}">
            
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
          <!-- End layout styles -->
          <link rel="shortcut icon" href="/images/haibro.png" />                      
</head>
<body>

    <section class="container forms">
        <div class="form login">
            <div class="form-content">
              <br><br>
                <img src="images/haibro.png" alt="" class="logo-img">
                <h2>Reset your password</h2>
            
                <form action="{{route("updatePassword")}}" method="POST">
                  @csrf
                    <div class="field input-field">
                        <input type="password" placeholder="New password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field input-field">
                      <input type="password" placeholder="Re-confirm password" class="password">
                      <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Reset password</button>
                    </div>

                    <div class="form-group">
                        <a href="login" class="login-lane">← Log in</a>
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