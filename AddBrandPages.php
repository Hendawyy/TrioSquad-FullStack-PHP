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
$T = $_POST['PB'];
$S = $_POST['rad'];
if(isset($_POST['PB']) && isset($_POST['rad'])){
if($_POST['rad'] == "Page"){
	$sql="INSERT INTO `Pages` (`Platform`, `Type`) VALUES ('$T', 'All')";
if (!$mycon->query($sql)) {	
   echo '<div class="alert2">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryS.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Page Added Succesfully.
</div>
<?php
    require('InventoryS.php');
}
}
	else if($_POST['rad'] == "Brand"){
	$sql1="INSERT INTO `Brands` (`Brand`) VALUES ('$T')";
if (!$mycon->query($sql1)) {	
   echo '<div class="alert2">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql1 . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryS.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Brand Added Succesfully.
</div>
<?php
    require('InventoryS.php');
}
}
}else{
	require('InventoryS.php');
}
?>
</html>