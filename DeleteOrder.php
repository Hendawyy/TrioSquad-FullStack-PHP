<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders(Shoes)</title>
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
$DT = $_GET[DT];
$P = $_GET[P];
$SHID = $_GET[SHID];
$Q = $_GET[QTY];
$S = $_GET[Size];
$SID = $_GET[SID];
$XAS = $mycon->query("SELECT * FROM `buys` WHERE `buys`.`CPhone` = '$P' AND `buys`.`SID` = $SID AND `buys`.`ID` = '$SHID' AND `buys`.`Datetime` = '$DT'");
if($XAS->num_rows > 0){
$sql = "DELETE FROM `buys` WHERE `buys`.`CPhone` = '$P' AND `buys`.`SID` = $SID AND `buys`.`ID` = '$SHID' AND `buys`.`Datetime` = '$DT'";
$sqal = "DELETE FROM `customers` WHERE `customers`.`CPhone` = $P";
$she = mysqli_query($mycon,"SELECT Quantity FROM `shoesquantity` WHERE shoesquantity.ID = '$SHID' AND shoesquantity.Size = '$S' ");
$result = mysqli_fetch_array($she);
$ShQty = $result['Quantity'];
$sql1 = "UPDATE shoesquantity
SET Quantity = '$ShQty' + '$Q'
WHERE shoesquantity.ID = '$SHID' AND shoesquantity.Size = '$S'";

if (!$mycon->query($sql)) {	
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
		 include('E2.php');
		 require('SellerOrders.php');
}else{
    if(!$mycon->query($sql1)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql1!</strong> '. $sql1 . '<br>' . $mycon->error.  
   	'</div>';
		 include('E2.php');
		 require('SellerOrders.php');
}else{
$sqlz = "SELECT * FROM `buys` WHERE `CPhone` = $P";
if($sqlz->num_rows == 1){
	 if(!$mycon->query($sqal)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sqal!</strong> '. $sql1 . '<br>' . $mycon->error.  
   	'</div>';
		 include('E2.php');
		 require('SellerOrders.php');
	 
}else{
	echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Order Deleted Successfully.</div>';
			require('SellerOrders.php');
	}
}else if($sqlz->num_rows > 1){
    echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Order Deleted Successfully. User Not Deleted</div>';
			require('SellerOrders.php');
}
}
}
$mycon->close();
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong>Order Already Deleted </div>';
	require('SellerOrders.php');
}
$mycon->close();
require('SellerOrders.php');

?>
</html>