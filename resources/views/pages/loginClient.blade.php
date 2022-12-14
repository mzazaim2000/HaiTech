
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> HaiBro </title>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/background.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/loginclient.css') }}">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
         <!-- End layout styles -->
         <link rel="shortcut icon" href="/images/haibro.png" />                           
    </head>
    <body>
    
        <div class="top-container">
        <a href="loginAdmin" class="admin-login">
        <button><img src="images/user.png" alt="" class="user-img"> Login as Admin</button>
        </a>
        </div>

        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    
                    <img src="images/haibro.png" alt="" class="logo-img">
                    <form action="{{route("login")}}"  method="POST">
                        @csrf
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input" required autofocus>
                        
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
        
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember">
                            <label for="remember-me" class="remember-me">Remember me</label>
                            <a href="forgotClient" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="register" class="signup-link"><b>Sign up!</b></a></span>
                    </div>
                </div>

                {{-- <div class="line"></div>
                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Continue with Google</span>
                    </a>
                </div> --}}
            </div>
        </section>

        <!--Javascript-->
    <script src="/frontend/js/loginclient.js"></script>
    </body>
