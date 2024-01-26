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
  <li><a href="upload_files.php" class = "active" >Upload Files</a></li>
  <li><a href="user.php">Users data</a></li>
  <li><a href="department.php">Add Departments</a></li>
  <li><a href="feedback.php">FeedBack</a></li>
  
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>






<br>
<br>
<br>

<form action='upload_files.php' method='POST' enctype="multipart/form-data">

<br>
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


<label for="cars">Choose Format:</label>
<select name="format">
    <option value="pic">Image</option>
    <option value="video">Video</option>
    <option value="pdf">pdf</option>
  </select>
<br>
<br>




<label for="cars">Give Name to file:</label>
<input type = "text" name = "full" required>

<br>
<br>
<label for="cars">Choose File:</label>
  <input type="file" name="fileToUpload" id="fileToUpload">
					
<br>
<br>


<input type='submit' value='Update Contents' name='added'>

<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
  die('Could not connect: ' . pg_error());
  }
        $temp = isset($_POST['added']);
        if (isset($_POST['added'])) {
					
          $full=$_POST['full'];
          $department_id = $_POST['department_id'];
          $year_id = $_POST['year'];
          $format = $_POST['format'];
					$target_dir = "../uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$file_name_to_save = basename($_FILES["fileToUpload"]["name"]);
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					if (file_exists($target_file)) {
						echo "Sorry, file already exists.";
						$uploadOk = 0;
					}

					// if($imageFileType != "pdf") {
					// 	echo "Sorry, only pdf are allowed.";
					// 	$uploadOk = 0;
					// 	}

					
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
					  } else {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							
							$query=pg_query($conn,"insert into upload_content(path,file_name,department_id,year_id,format) values('$file_name_to_save','$full','$department_id','$year_id','$format')");
							if ($query) {
								echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
							} 
							else if(!$query)
							{
								echo "<b style='color:white;'>Sorry, there was an error uploading your file.</b>";
							}
						} else {
						  echo "Sorry, there was an error uploading your file.";
						}
					  }	
				}
				?>









</form> 


























</body>
</html>


