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


        
        
        
        
        <h1 style = "text-align:center">Study Material Submitted by Faculty</h1>
<br>
<br>

        
        
        
        
        
        
        
        
        
        
        


<div style="text-align:center">
<h1>Videos:-</h1>

<?php
        $conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
		 $query=pg_query($conn,"SELECT * FROM teacher_upload where format = 'video'");
		 while ($row=pg_fetch_assoc($query)) {
            $path = $row['path'];
            $file_name = $row['file_name'];
            $faculty = $row['submitted_by'];
            $id = $row['id'];
            echo '<br>';
            echo '<br>';
            echo $file_name;
            echo ' uploaded by ';
            echo $faculty;
            echo '<br>';
            echo "<a href='delete_faculty_upload.php?id=".$id."' name='futa'>Delete it</a>";
            echo '<br>';
            echo '<video width="800" height="300" controls>';
            echo "<source src='../teacher_uploads/$path' type='video/mp4'>";
            echo '</video>';
            echo '<br>';
            echo '<hr>';
		 }
		 ?>
<br>
<br>

<h1>Pdf:-</h1>



<?php 
                $conn=pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");

				$query=pg_query($conn,"SELECT * FROM teacher_upload where format = 'pdf'");
				while ($row=pg_fetch_assoc($query)) {
					$id=$row['id'];
					$path=$row['path'];
					$file_name=$row['file_name'];
					$faculty = $row['submitted_by'];
          echo '<br>';
					echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="downloadpdf.php?file='.$path.'">Click to download - '.$row['file_name']."</a>";
          echo '<br>';
          echo ' uploaded by ';
            echo $faculty;
            echo '<br>';
            echo "<a href='delete_faculty_upload.php?id=".$id."' name='futa'>Click to Delete it</a>";
            echo '<br>';
            echo '<br>';
            echo '<br>';
				}

				?>






<br>
<hr>




















<h1>Images:-</h1>





<div class="row">

<?php
   $query = " select * from teacher_upload where format = 'pic'";
   $result = pg_query($conn, $query);
   while ($data = pg_fetch_assoc($result)) {
   ?>
       <div class="column">

           <img src="../teacher_uploads/<?php echo $data['path']; ?>" alt="Lights" style="width:100%" onclick="myFunction(this);">
            
            <?php
            $id=$data['id'];
            $faculty = $data['submitted_by'];
            echo ' uploaded by ';
            echo $faculty;
            echo '<br>';
            echo "<a href='delete_faculty_upload.php?id=".$id."' name='futa'>Delete it</a>";
            echo '<br>';
            ?>

       </div>
   <?php
   }
?>

</div>

<div class="container">
<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
<img id="expandedImg" style="width:50%;height:800px">
<div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
var expandImg = document.getElementById("expandedImg");
var imgText = document.getElementById("imgtext");
expandImg.src = imgs.src;
imgText.innerHTML = imgs.alt;
expandImg.parentElement.style.display = "block";
}
</script>

<style>
* {
box-sizing: border-box;
}


/* The grid: Four equal columns that floats next to each other */
.column {
float: left;
width: 25%;
padding: 10px;
}

/* Style the images inside the grid */
.column img {
opacity: 0.8; 
cursor: pointer; 
}

.column img:hover {
opacity: 1;
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}

/* The expanding image container */
.container {
position: relative;
display: none;
}

/* Expanding image text */
#imgtext {
position: absolute;
bottom: 15px;
left: 15px;
color: white;
font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
position: absolute;
top: 10px;
right: 15px;
color: black;
font-size: 35px;
cursor: pointer;
}
</style>


















































</div>
























</body>
</html>


