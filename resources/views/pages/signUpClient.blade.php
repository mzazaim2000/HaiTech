      
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
          <!-- End layout styles -->
          <link rel="shortcut icon" href="/images/logo.png" />                            
      </head>
      <body>
  
          <section class="container forms">
              <div class="form login">
                  <div class="form-content">
                    <br><br>
                      <img src="images/logo.png" alt="" class="logo-img">
                     
                      <h1>Sign Up</h1>
                      <h5>Create your account now!</h5>
                     
                      <form action="login">
                      
                    
                          <div class="field input-field">
                              <input type="text" placeholder="Firstname" class="form-control" name=fname>
                          </div>

                          <div class="field input-field">
                            <input type="text" placeholder="Surname" class="form-control" name="lname">
                          </div>

                          <div class="field input-field">
                            <input type="email" placeholder="Email" class="form-control" name="email">
                          </div>

                          <div class="field input-field">
                            <input type="tel" placeholder="Mobile number" class="form-control" name="contact">
                          </div>
  
                          <div class="field input-field">
                              <input type="password" placeholder="New password" class="form-control" name="password">
                              <i class='bx bx-hide eye-icon'></i>
                          </div>

                          <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="form-control" id="cpass">
                            <i class='bx bx-hide eye-icon'></i>
                          </div>
  
                          <div class="field button-field">
                              <button>Sign Up</button>
                          </div>
                        </form>
                  </div>
              </div>
          </section>
  
      </body>


       <!--Javascript-->
       <script src="/frontend/js/signup.js"></script>
       {{-- <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
        import { getDatabase } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";
        import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";

        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        const firebaseConfig = {
          apiKey: "AIzaSyCBtFJsUjqBMW7wZ5a9Gll9caV8NRiejtk",
          authDomain: "haitech-abee6.firebaseapp.com",
          databaseURL: "https://haitech-abee6-default-rtdb.firebaseio.com",
          projectId: "haitech-abee6",
          storageBucket: "haitech-abee6.appspot.com",
          messagingSenderId: "854610689870",
          appId: "1:854610689870:web:2a81c69979fee7e729e81f"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
        const auth = getAuth(); --}}
      </script>
