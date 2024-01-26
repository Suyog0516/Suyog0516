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
<br>

<h1 style="text-align:center">Feedback</h1>

<?php
        $conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
		 $query=pg_query($conn,"SELECT * FROM feedback");
		 while ($row=pg_fetch_assoc($query)) {
            echo '<br>';
            echo $row['content'];
            echo '<br>';
            echo '<hr>';
		 }
		 ?>















</body>
</html>


