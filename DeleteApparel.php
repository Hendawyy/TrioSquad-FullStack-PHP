<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Inventory</title>
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
$ZAD;
$Sizes = $mycon->query("SELECT * FROM AppQuantity WHERE ID = $SHID ");
while ($rex = mysqli_fetch_array ($Sizes)){
$ZAD += $rex['Quantity'];
}
if($ZAD == 0){
$XAS = $mycon->query("SELECT * FROM `Apparel` WHERE `Apparel`.`AID` = $SHID ");
if($XAS->num_rows > 0){
$sql = "DELETE FROM `AppQuantity` WHERE `AppQuantity`.`ID` = $SHID ";
$sql1 = "DELETE FROM `Apparel` WHERE `Apparel`.`AID` = $SHID  ";
if (!$mycon->query($sql)) {	
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('InventoryC.php');
}else{
		 if(!$mycon->query($sql1)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql1! </strong> '. $sql1 . '<br>' . $mycon->error.  
   	'</div>';
			require('InventoryC.php');
	 }else{
		 echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations! </strong>Apparel & Quantity Deleted Successfully.</div>';
			require('InventoryC.php');
		}
}
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error! </strong>Apparel Already Deleted </div>';
	require('InventoryC.php');
}
$ZAD=0;
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error! </strong>Apparel Can not Be Deleted Because The Apparel Data Will Be Lost From The Inventory Completely</div>';
	require('InventoryC.php');
}
$mycon->close();
require('InventoryC.php');
?>
</html>