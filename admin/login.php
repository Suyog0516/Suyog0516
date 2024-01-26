<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_style/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post" action = "login.php">
        <div class="txt_field">
          <input type="text" name = "name" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">
          <a href="forget_password.php">Forgot Password?</div></a>
        <input type="submit" value="login" name = "login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register Here</a>
        </div>

        <?php
				if (isset($_POST['login'])) {
					if (!$_POST['name']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter your name</h4>";
					}
					elseif (!$_POST['password']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter password</h4>";
					}
					else
					{
						session_start();
						$_SESSION['name']=$_POST['name'];
						$name=$_POST['name'];
						$password=$_POST['password'];
						$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
            $result=pg_query($conn,"SELECT * FROM users WHERE name='$name' AND Password='$password' AND designation = 'admin' ");
						if ($row=pg_fetch_array($result)) {
							header('Location:home.php');
						}
						else
						{
							echo "<h4 style='color:#FF4300;' class='alert' >Wrong name or password</h4>";
						}
					}
				}
				?>




      </form>
    </div>

  </body>
</html>
