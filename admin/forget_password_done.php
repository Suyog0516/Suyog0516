<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
    echo 'asdasd';
  die('Could not connect: ' . pg_error());
  }
  				
					// echo 'asdasdsad';
                    
                    $name=$_GET['name'];
					$password = $_GET['password'];
                    
					// echo $user_name;
					
                        $query=pg_query($conn,"select * from users where name = '$name' and designation = 'admin'");
                        if ($query) {	
                            $query1=pg_query($conn,"UPDATE users SET password='$password'  WHERE name='$name'");
                            // header('Location:login.php');
                            echo 'Successfully Changed';
                        } 
                        else
                        {
                            echo "<b style='color:black;'>User not found!</b>";
                        }
				?>