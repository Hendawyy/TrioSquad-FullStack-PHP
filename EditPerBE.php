
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Perfumes Data</title>
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
$SHID = $_POST['ID'];
if(isset($_POST['sub'])){
$sql = "UPDATE `perfumes` SET `Model` = '$_POST[Model]', `Price` = '$_POST[PRice]', `ActualPrice` = '$_POST[APRice]', `Quantity` = '$_POST[Q]', `Gender` = '$_POST[PG]' WHERE `perfumes`.`PerID` = '$SHID'";
if (!$mycon->query($sql)) {	
    echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	 require('InventoryP.php');
}else{
?>
<div class="alert" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> <?php echo $_POST[Model];?> Data Updated Succesfully.
</div>
<?php
    require('InventoryP.php');
}
}else{
	require('InventoryP.php');
}
?>
</html>