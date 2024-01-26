<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a href="home.php" class = "active" >Dashboard</a></li>
  <li><a href="upload_files.php">Upload Files</a></li>
  <li><a href="user.php">Users data</a></li>
  <li><a href="department.php">Add Departments</a></li>
  <li><a href="feedback.php">FeedBack</a></li>
  
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>


<br>
<br>


<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
  die('Could not connect: ' . pg_error());
  }


echo "<table align='center' height='auto' width='60%' bgcolor='white' border='1px solid'style='text-align:center;'>
  	<tr>
  		<th>ID</th>
  		<th>NAME</th>
  		<th>PASSWORD</th>
  		<th>DELETE</th>
  	</tr>";

$result = pg_query($conn,"SELECT * FROM users");
while($row = pg_fetch_array($result))
  {
  	$id = $row['id'];
  	echo "<tr>"."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['password']."</td>"."<td>"."<a href='delete.php?id=".$id."' name='futa'>D</a>"."</td>"."</tr>";
  }
echo "</table>";
pg_close($conn);
?>











</body>
</html>


