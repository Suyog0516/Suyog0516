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
  <li><a href="home.php">Dashboard</a></li>
  <li><a href="upload_files.php">Upload Files</a></li>
  <li><a href="user.php">Users data</a></li>
  <li><a href="department.php" class = "active">Add Departments</a></li>
  <li><a href="feedback.php">FeedBack</a></li>
  
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>




<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<h2>Department Data</h2>

<table>

<tr>
    <th>Department Name</th>
</tr>





<?php
        $conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
		 $query=pg_query($conn,"SELECT * FROM department");
		 while ($row=pg_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>';
		 	echo $row['name'];
            echo '</td>';
            echo '</tr>';
		 }
		 ?>




  
</table>







<br>
<hr>

<br>


<form action="department_add.php" action = 'POST'>
  <label for="fname">Department Name to be added:</label><br>
    <br>
  <input type="text" name="fname" required><br>
  <br>
  <input type="submit" value="Submit" name = 'add'>
</form> 








</body>
</html>


