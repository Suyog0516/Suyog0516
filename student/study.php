<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
  die('Could not connect: ' . pg_error());
  }
        
          
        
          $department_id = $_GET['department_id'];
          $year_id = $_GET['year'];
?> 
        
        
        
        
        <h1 style = "text-align:center">Study Material</h1>
<br>
<br>

        
        
        
        
        
        
        
        
        
        
        


<div style="text-align:center">
<h1>Videos:-</h1>

<?php
        $conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
		 $query=pg_query($conn,"SELECT * FROM upload_content where format = 'video' and department_id = '$department_id' and year_id = '$year_id'");
		 while ($row=pg_fetch_assoc($query)) {
            $path = $row['path'];
            $file_name = $row['file_name'];
            echo '<br>';
            echo '<br>';
            echo $file_name;
            echo '<br>';
            echo '<br>';
            echo '<video width="800" height="300" controls>';
            echo "<source src='../uploads/$path' type='video/mp4'>";
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

				$query=pg_query($conn,"SELECT * FROM upload_content where format = 'pdf' and department_id = '$department_id' and year_id = '$year_id'");
				while ($row=pg_fetch_assoc($query)) {
					$id=$row['id'];
					$path=$row['path'];
					$file_name=$row['file_name'];
					echo '<br>';
					echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="downloadpdf.php?file='.$path.'">'.$row['file_name']."</a>";
                    echo '<br>';
				}

				?>






<br>
<hr>




















<h1>Images:-</h1>





<div class="row">

<?php
   $query = " select * from upload_content where format = 'pic' and department_id = '$department_id' and year_id = '$year_id'";
   $result = pg_query($conn, $query);
   while ($data = pg_fetch_assoc($result)) {
   ?>
       <div class="column">

           <img src="../uploads/<?php echo $data['path']; ?>" alt="Lights" style="width:100%" onclick="myFunction(this);">
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






