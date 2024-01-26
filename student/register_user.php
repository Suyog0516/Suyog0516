<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
    echo 'asdasd';
  die('Could not connect: ' . pg_error());
  }
  				
					// echo 'asdasdsad';
                    
                    $user_name=$_GET['user_name'];
					$name=$_GET['name'];
					$phone=$_GET['phone'];
					$email=$_GET['email'];
					$password_confirm = $_GET['password_confirm'];
					$password = $_GET['password'];
                    $gender = $_GET['gender'];

					// echo $user_name;
					if( $password != $password_confirm)
                    {
                        echo "<b style='color:black;'>Error Occurred....Password not match!</b>";
                    } 
                    else
                    {
                        $query=pg_query($conn,"insert into users(name,password,designation,fullname,email,phone,gender) values('$user_name','$password','student','$name','$email','$phone','$gender')");
                        if ($query) {	
                            header('Location:login.php');
                            // echo 'asdasd';
                        } 
                        else if(!$query)
                        {
                            echo "<b style='color:black;'>Error Occurred!</b>";
                        }
                    }
				?>