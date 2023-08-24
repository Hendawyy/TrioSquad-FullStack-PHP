<?php
static $C;
static $RO =0;
while($RO != 1){
	$C=0;
	$RO=1;
}
?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Shoes Data</title>
<head>
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
.alert1 {
  padding: 20px;
  background-color: #f44336;
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
if(isset($_POST['Submite'])){
$sql = "UPDATE `shoes` SET `Image` = '$_POST[SI]'  WHERE `ID` = '$SHID'";
if (!$mycon->query($sql)) {	
    echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryS.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Shoe Image Updated Succesfully.
</div>
<?php
    require('InventoryS.php');
}
}else{
	require('InventoryS.php');
}
?>
</html>