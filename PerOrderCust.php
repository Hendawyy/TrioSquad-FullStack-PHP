<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders Perfumes</title>
<head>
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
$sql3;
$she = mysqli_query($mycon,"SELECT Quantity FROM `perfumes` WHERE perfumes.PerID = '$_POST[sss]' ");
$result = mysqli_fetch_array($she);
$Cust = mysqli_query($mycon,"SELECT * FROM `customers` WHERE `customers`.CPhone = '$_POST[phone]'");

$res = mysqli_fetch_array ($Cust);
$C=0;
if($res['CPhone'] > 0){
	$C++;
}
$Shoz = $mycon->query("SELECT * FROM perfumes Where PerID = $_POST[sss]");
$sz = mysqli_fetch_array ($Shoz);

$SPS = $mycon->query("SELECT * FROM salesperson Where SID = $_POST[idseler]");
$resalt = mysqli_fetch_array ($SPS);
$ShQty = $result['Quantity'];
$date = date("Y/m/d");
$TAQ =$sz['ActualPrice']* $_POST['qty'];//Actual Price * Quant
$totPrice = $_POST['sprice'] * $_POST['qty'];//Sold Price * Quant
$szqty = $sz['Price'] * $_POST['qty'];//Min Price * Quant

$sql = "INSERT INTO `customers` (`Name`, `Gender`, `CPhone`, `City`, `Address`, `Governorate`, `Zone`) VALUES ('$_POST[name]', '$_POST[gender]', '$_POST[phone]', '1', '$_POST[add]', '$_POST[cityx]', '$_POST[Zone]')";

if($resalt['Sname'] == 'Ahmed Amin'||$resalt['Sname'] == 'Mohamed Ali'||$resalt['Sname'] == 'Marwan Hamed'||$resalt['Sname'] == 'Ziad Mohamed'){
  
	$PROFITAHMED = ($totPrice - $TAQ)/2;
$sql3 = "INSERT INTO `buyper`  (`CPhone`,  `SID`, `PerID`, `Date`, `ActualPrice`, `MinP`, `sPrice`, `Ahmed`, `Ziad`, `Shipping`, `Quantity`, `PN`) VALUES ('$_POST[phone]','$_POST[idseler]', '$_POST[sss]', '$date','$_POST[asp]', '$_POST[minsop]', '$_POST[sprice]', '$PROFITAHMED', '$PROFITAHMED',  '$_POST[fee]',  '$_POST[qty]', '$_POST[PN]')";

}
	else{
	$UserProfit =($totPrice - $szqty);
	$PROFITAHMED = ($szqty - $TAQ)/2;
	$sql3 = "INSERT INTO `buyper` (`CPhone`, `SID`, `PerID`, `Date`, `ActualPrice`, `MinP`,`sPrice`, `UserProfit`, `Ahmed`, `Ziad`, `Shipping`, `Quantity`, `PN`) VALUES ('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date','$_POST[asp]', '$_POST[minsop]', '$_POST[sprice]', '$UserProfit', '$PROFITAHMED','$PROFITAHMED', '$_POST[fee]', '$_POST[qty]', '$_POST[PN]')";
}	
$sql4 = "UPDATE perfumes
SET Quantity = '$ShQty' - '$_POST[qty]'
WHERE perfumes.PerID = $_POST[sss]";
if($C == 0){
if (!$mycon->query($sql)) {	
    echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('SellerOrdersPerfumes.php');
} 
	else{
	 if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		require('SellerOrdersPerfumes.php');
	}
 	else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrdersPerfumes.php');
}
	else{
			?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order Added Succesfully.
</div>
<?php

			require('SellerOrdersPerfumes.php');
		}
}
}
}else if($C > 0){
if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		require('SellerOrdersPerfumes.php');
	}
 else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrdersPerfumes.php');
}else{
			?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order Added Succesfully.
</div>
<?php

			require('SellerOrdersPerfumes.php');
		}
}
}
$mycon->close();
}else{
	require('SellerOrdersPerfumes.php');
}
?>
</html>