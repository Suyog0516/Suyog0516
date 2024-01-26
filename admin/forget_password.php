<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_style/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Password Reset</h1>
      <form action = "forget_password_done.php" action="POST">
        <div class="txt_field">
          <input type="text" name = "name" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "password" id = "myInput" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="checkbox" onclick="myFunction()">Show Password
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register Here</a>
        </div>
      </form>
    </div>

    <script>
      function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
      </script>
  </body>
</html>
