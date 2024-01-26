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
  <li><a href="home.php"  >Dashboard</a></li>
  <li><a href="feedback.php" class = "active">FeedBack</a></li>
  
  <li style="float:right"><a href="logout.php">logout</a></li>
</ul>

<br>
<br>
<br>

<div style="text-align:center">

<form action="feedback_add.php" action = 'POST'>
  <label for="fname">Enter Feedback:</label><br>
    <textarea rows="7" cols="80" name="name">
Enter text here...</textarea>

  <br>
  <input type="submit" value="Submit Feedback" name = 'add'>
</form> 



</div>














</body>
</html>


