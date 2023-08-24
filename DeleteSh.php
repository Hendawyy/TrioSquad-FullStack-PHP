<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Customer's Data</title>
<head>
<script>
</script>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert1 {
  padding: 20px;
  background-color: #4CAF50;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.closebtn:hover {
  color: black;
}
</style>
</head>
<?php
error_reporting(0);
include('DBCONN.php');
$P = $_GET['P'];
$sql = "DELETE FROM `customers` WHERE `customers`.`CPhone` = $P";
if (!$mycon->query($sql)) {	
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('Customers.php');
}else{	 
	echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Customer Deleted Successfully.</div>';
			require('Customers.php');
}
$mycon->close();
?>
</html>