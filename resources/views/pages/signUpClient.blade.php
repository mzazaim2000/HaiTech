
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    
    <title> HaiTech </title>

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/loginclient.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<body>
  <div class="container forms">
    <div class="title">Sign up.</div>
    <div class="form-content">

      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <input type="text" placeholder="First name" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Surname" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Email address" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Mobile number" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="New password" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Confirm password" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
