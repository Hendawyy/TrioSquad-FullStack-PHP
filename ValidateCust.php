<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders Shoes</title>
<head>
<title>My Orders</title>
<style>
.alert1 {
  padding: 20px;
  background-color: #4CAF50;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert {
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
</style>
</head>
<?php
error_reporting(0);
include('DBCONN.php');
if(isset($_POST['sub'])){
$PROFITAHMED;
$PROFIT3ALI;
$sql3;
$she = mysqli_query($mycon,"SELECT Quantity FROM `shoesquantity` WHERE shoesquantity.ID = '$_POST[sss]' AND shoesquantity.Size = '$_POST[size]' ");
$result = mysqli_fetch_array($she);
$Cust = mysqli_query($mycon,"SELECT * FROM `customers` WHERE `customers`.CPhone = '$_POST[phone]'");

$res = mysqli_fetch_array ($Cust);
$C=0;
if($res['CPhone'] > 0){
	$C++;
}
$Shoz = $mycon->query("SELECT * FROM shoes Where ID = $_POST[sss]");
$sz = mysqli_fetch_array ($Shoz);
$SPS = $mycon->query("SELECT * FROM salesperson Where SID = $_POST[idseler]");
$resalt = mysqli_fetch_array ($SPS);
$CustID = $res['CID'];
$CustPhone = $res['CPhone'];
$ShQty = $result['Quantity'];
$date = date("Y/m/d");
$TAQ =$_POST['APS']*$_POST['qty'];//Actual Prrice * Quantity
$totPrice = $_POST['price'] * $_POST['qty'];//Sold Price Prrice * Quantity
$szqty = $_POST['momprice'] * $_POST['qty'];//Minimum Price * Quantity
$pfuqty = $sz['Profit'] * $_POST['qty'];//Profit * Quantity
$MFUQ = $sz['MP'] * $_POST['qty'];//M7med Profit * Quantity
$ACPEXSX = ($_POST['APS']+30)* $_POST['qty'];
$ACPEXSX30=$_POST['APS']+30;
$SX="No";
$sql = "INSERT INTO `customers` (`Name`, `Gender`, `CPhone`, `City`, `Address`, `Governorate`, `Zone`) VALUES ('$_POST[name]', '$_POST[gender]', '$_POST[phone]', '1', '$_POST[add]', '$_POST[cityx]', '$_POST[Zone]')";
if($resalt['Sname'] == 'Ahmed Amin'||$resalt['Sname'] == 'Mohamed Ali'||$resalt['Sname'] == 'Marwan Hamed'||$resalt['Sname'] == 'Ziad Mohamed'){
	$PROFITAHMED = $totPrice - $TAQ;
	$PROFITAHMEDY = $totPrice - $ACPEXSX;
if($SX == "Yes"){
	$sql3 = "INSERT INTO `buys` (`CPhone`, `SID`, `ID`, `Date`, `ActualPrice`, `MinP`, `sPrice`,  `Profit`, `Shipping`, `Size`, `Quantity`, `PN`) VALUES ('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date',' $ACPEXSX30 ', '$_POST[momprice]', '$_POST[price]', '$PROFITAHMEDY',  '$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}else if($SX == "No"){
	$sql3 = "INSERT INTO `buys` (`CPhone`, `SID`, `ID`, `Date`, `ActualPrice`, `MinP`, `sPrice`,  `Profit`, `Shipping`, `Size`, `Quantity`, `PN`) VALUES
	 ('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date',' $_POST[APS]', '$_POST[momprice]', '$_POST[price]', '$PROFITAHMED',  
	 '$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}
}
	else{ 
	if($SX == "Yes"){
	$sql3 = "INSERT INTO `buys` (`CPhone`, `SID`, `ID`, `Date`, `ActualPrice`, `MinP`, `sPrice`, `Userprofit`, `Profit`, `Shipping`, `Size`, `Quantity`, `PN`) VALUES ('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date','$ACPEXSX30',  '$_POST[momprice]', '$_POST[price]', '$UserProfit', '$PROFITAHMED', '$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}else if($SX == "No"){
    $PROFITAHMED = $szqty - $pfuqty - $TAQ;
	$UserProfit =($totPrice - $szqty);
	$sql3 = "INSERT INTO `buys` (`CPhone`, `SID`, `ID`, `Date`, `ActualPrice`, `MinP`, `sPrice`, `Userprofit`, `Profit`, `Shipping`, `Size`, `Quantity`, `PN`) VALUES ('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date',' $_POST[APS]',  '$_POST[momprice]', '$_POST[price]', '$UserProfit', '$PROFITAHMED', '$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}
	
}	
$sql4 = "UPDATE shoesquantity
SET Quantity = '$ShQty' - '$_POST[qty]'
WHERE shoesquantity.ID = $_POST[sss] AND shoesquantity.Size = $_POST[size]	";

if($C == 0){
if (!$mycon->query($sql)) {	
    echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('SellerOrders.php');
} else{
	 if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		 require('SellerOrders.php');
	 }else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrders.php');
}else{
?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order/ Customer Added Succesfully.
</div>
<?php

			require('SellerOrders.php');
		}
}
}
}else if($C > 0){
	if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		require('SellerOrders.php');
	}
 else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrders.php');
}else{
			?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order Added Succesfully / Old Customer.
</div>
<?php

			require('SellerOrders.php');
		}
}
}

$mycon->close();
}else{
	require('SellerOrders.php');
}
?>
</html>