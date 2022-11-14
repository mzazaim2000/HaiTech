<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
  
  *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
  }
  .container{
      height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #2D2D2D;
      column-gap: 30px;
  }
  .form{
      position: absolute;
      max-width: 430px;
      width: 100%;
      padding: 30px;
      border-radius: 6px;
      background: #2D2D2D;
  }
  .form.signup{
      opacity: 0;
      pointer-events: none;
  }
  
  .forms.show-signup .form.login{
      opacity: 0;
      pointer-events: none;
  }
  
  h2{
      font-size: 28px;
      font-weight: 600;
      color: #ffffff;
      text-align: center;
  }
  img.logo-img{
    position: relative;
    height: 100px;
    width: 100%;
  }
  
  form{
      margin-top: 30px;
  }
  .form .field{
      position: relative;
      height: 50px;
      width: 100%;
      margin-top: 20px;
      border-radius: 6px;
  }
  .field input,
  .field button{
      height: 100%;
      width: 100%;
      border: none;
      font-size: 16px;
      font-weight: 400;
      border-radius: 6px;
  }
  .field input{
      outline: none;
      padding: 0 15px;
      border: 1px solid#CACACA;
  }
  .field input:focus{
      border-bottom-width: 2px;
  }
  .eye-icon{
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      font-size: 18px;
      color: #8b8b8b;
      cursor: pointer;
      padding: 5px;
  }
  .field button{
      color: #fff;
      background-color: #8F8F8F;
      transition: all 0.8s ease;
      cursor: pointer;
  }
  .field button:hover{
      background-color: #bcb6b6;
  }
  .form-link{
      text-align: center;
      margin-top: 10px;
  }
  .form-link span,
  .form-link a{
      font-size: 14px;
      font-weight: 400;
      color: #FFFFFF;
  }
  .form a{
      color: #FFFFFF;
      text-decoration: none;
  }
  .form-content a:hover{
      text-decoration: underline;
  }
  .media-options a{
      display: flex;
      align-items: center;
      justify-content: center;
  } 
  img.google-img{
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
  }
  a.google-img{
      height: 20px;
      width: 20px;
      object-fit: cover;
  }
  
  a.google{
      border: 1px solid #CACACA;
      background-color:white;
  }
  
  a.google:hover{
      background-color: #bcb6b6;
  }
  a.google span{
      font-weight: 500;
      opacity: 0.6;
      color: #2D2D2D;
  }
  
  @media screen and (max-width: 500px) {
      .form{
          padding: 20px 10px;
      }
      
  }
</style>

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
                <h2>Reset your password</h2>
            
                <form action="#">
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
                        <a href="loginAdmin" class="login-lane">← Log in</a>
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