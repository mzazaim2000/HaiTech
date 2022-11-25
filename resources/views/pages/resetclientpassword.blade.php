    
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
          <link rel="shortcut icon" href="/images/haibro.png"/>                          
    </head>
    <body>
    
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                  <br><br>
                    
                    <h2>Reset password</h2>
                
                    <form action="{{ route('reset.password.post') }}" method="POST">
                      
                      @if(Session::get('success'))
                      <div class="alert alert-success">
                      {{ Session::get('success')}}
                      </div>
                      @endif

                      @csrf
                      <input type="hidden" name="token" value="{{ $token }}">
                  
                        <div class="field input-field">
                            <input type="text" id="email_address" class="email" name="email" placeholder="Email" value="{{$email ?? old('email')}}">
                        </div>
                        <div class="field input-field">
                            <input type="password" name="password" placeholder="New password" class="password" value="{{old('password')}}">
                            <i class='bx bx-hide eye-icon'></i>
                        
                        </div>
    
                        <div class="field input-field">
                          <input type="password" name="password-confirm" placeholder="Re-confirm password" class="password" value="{{old('password-confirm')}}">
                          <i class='bx bx-hide eye-icon'></i>
                          
                        </div>
    
                        <div class="field button-field">
                            <button>Reset password</button>
                        </div>
    
                        <div class="form-group">
                            <a href="{{ route('login') }}" class="login-lane">← Log in</a>
                        </div>
                      </form>
                </div>
            </div>
        </section>
    
        <!-- JavaScript -->
    
        <script>
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