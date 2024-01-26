<?php
$id=$_GET['id'];
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
$query=pg_query($conn,"DELETE FROM users WHERE id='$id'");
if (!$query) {
	echo "Delete Error";
}
else
{
	header("Location: user.php");
}
?>