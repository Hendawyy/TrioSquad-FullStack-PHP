<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Perfumes Inventory</title>
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
$SHID = $_GET['ID'];
$Sizes = $mycon->query("SELECT * FROM perfumes WHERE PerID = $SHID ");
while ($rex = mysqli_fetch_array ($Sizes)){
$ZAD += $rex['Quantity'];
}
if($ZAD == 0){
$sql = "DELETE FROM `perfumes` WHERE PerID = $SHID ";

if (!$mycon->query($sql)) {	
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
   	require('InventoryP.php');
} else{
	 
  		echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulation! </strong> Perfume Deleted Successfully</div>';
	require('InventoryP.php');
}

$ZAD=0;
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error! </strong>Perfume Can not Be Deleted Because The Perfume Data Will Be Lost From The Inventory Completely</div>';
	require('InventoryP.php');
}


$mycon->close();
?>
</html>