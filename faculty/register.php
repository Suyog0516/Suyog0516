<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="register_style/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Faculty Registration</div>
    <div class="content">

      <form action="register_user.php" action = 'POST'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name = "name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name = "user_name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name = "email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" name = "phone" onkeypress="return onlyNumberKey(event)" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name = "password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name = "password_confirm" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value = "Male">
          <input type="radio" name="gender" id="dot-2" value = "Female">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name = 'add'>
        </div>
      </form>
    </div>
  </div>

  <script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
    
</body>
</html>
