<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders(Apparel)</title>
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
$DT = $_GET['DT'];
$P = $_GET['P'];
$SHID = $_GET['SHID'];
$Q = $_GET['QTY'];
$S = $_GET['Size'];
$SID = $_GET['SID'];
$XAS = $mycon->query("SELECT * FROM `BuyApp` WHERE `BuyApp`.`CPhone` = '$P' AND `BuyApp`.`SID` = $SID AND `BuyApp`.`ID` = '$SHID'
AND `BuyApp`.`Datetime` = '$DT'");
if($XAS->num_rows > 0){
$sql = "DELETE FROM `BuyApp` WHERE `BuyApp`.`CPhone` = '$P' AND `BuyApp`.`SID` = $SID AND `BuyApp`.`ID` = '$SHID' AND `BuyApp`.`Datetime` = '$DT'";
$sqal = "DELETE FROM `customers` WHERE `customers`.`CPhone` = $P";
$she = mysqli_query($mycon,"SELECT Quantity FROM `AppQuantity` WHERE AppQuantity.ID = '$SHID' AND AppQuantity.Size = '$S' ");
$result = mysqli_fetch_array($she);
$ShQty = $result['Quantity'];
$sql1 = "UPDATE AppQuantity
SET Quantity = '$ShQty' + '$Q'
WHERE AppQuantity.ID = '$SHID' AND AppQuantity.Size = '$S'";

if (!$mycon->query($sql)) {	
    echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql!</strong> '. $sql . '<br>' . $mycon->error.  
'</div>';
	require('E2.php');
}else{
    if(!$mycon->query($sql1)){
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sql1!</strong> '. $sql1 . '<br>' . $mycon->error.  
'</div>';
			require('E2.php');
}else{
$sqlz = "SELECT * FROM `BuyApp` WHERE `CPhone` = $P";
if($sqlz->num_rows == 1){
	if(!$mycon->query($sqal)){
echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error in sqal!</strong> '. $sql1 . '<br>' . $mycon->error.  
'</div>';
		require('E2.php');
}else{
	echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Order Deleted Successfully.</div>';
			require('SellerOrdersShirts.php');
	}
}else if($sqlz->num_rows > 1){
    echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Order Deleted Successfully. User Not Deleted</div>';
			require('SellerOrdersShirts.php');
}
}
}
$mycon->close();
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong>Order Already Deleted </div>';
	require('SellerOrdersShirts.php');
}
require('SellerOrdersShirts.php');
$mycon->close();
?>
</html>