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
  <!-- <li><a href="upload_files.php">Upload Files</a></li> -->
  <!-- <li><a href="#contact">Users data</a></li> -->
  <!-- <li><a href="department.php">Add Departments</a></li> -->
  <li><a href="feedback.php">FeedBack</a></li>
  
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>

<br>
<br>
<br>

<div style = "text-align:center">

<form action='study.php' action = 'POST'>



<label for="cars">Choose Department:</label>

<select name="department_id">

<?php
    $conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
		 $query=pg_query($conn,"SELECT * FROM department");
		 while ($row=pg_fetch_assoc($query)) {
      $id = $row['id'];
      $name = $row['name'];
      echo "<option value='$id'>$name</option>";
		 }
?>

</select>
<br>
<br>



<label for="cars">Choose Year:</label>
<select name="year">
    <option value="1">First Year</option>
    <option value="2">Second Year</option>
    <option value="3">Third Year</option>
    <option value="4">Fourth Year</option>
  </select>
<br>
<br>

<input type='submit' value='Load Study Material' name='added'>

</form> 

<br>
<br>
</div>





</body>
</html>


