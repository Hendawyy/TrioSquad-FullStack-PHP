<?php
static $C;
static $RO =0;
while($RO != 1){
	$C=0;
	$RO=1;
}
?>
<html>
<head>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Shoe Data</title>
<script>
</script>
<style>
.alert {
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
.alert2 {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
</style>
</head>
<?php
error_reporting(0);
include('DBCONN.php');
$SHID = $_POST['SID'];
$S = $_POST['Size'];
$Q = $_POST['Quantity'];
if(isset($_POST['sque'])){
$Sizes = $mycon->query("SELECT * FROM AppQuantity WHERE ID = '$SHID'");
	static $C=0;
	while ($rez = mysqli_fetch_array ($Sizes)){
	if($rez['Size'] == $S){
		$C++;
	}
}
$sql = "UPDATE `AppQuantity` SET `Quantity` = '$Q' WHERE `AppQuantity`.`ID` = '$SHID' AND `AppQuantity`.`Size` = '$S'";
if($C != 0){
if (!$mycon->query($sql)) {	
    echo '<div class="alert2">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryC.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Quantity Updated Succesfully.
</div>
<?php
    require('InventoryC.php');
}
}else if($C==0){
$sql2 = "INSERT INTO `AppQuantity` (`ID`, `Size`, `Quantity`) VALUES ('$SHID', '$S', '$Q') ";
if (!$mycon->query($sql2)) {	
   echo '<div class="alert2">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql2 . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryC.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Size Added Succesfully.
</div>
<?php
    require('InventoryC.php');
}
}
}else{
	require('InventoryC.php');
}
?>
</html>