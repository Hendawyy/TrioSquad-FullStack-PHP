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
transition: 0.3s;
cursor: pointer;
}

.closebtn:hover {
color: black;
}
</style>
</head>
<?php
error_reporting(0);
include('DBCONN.php');
if (isset($_POST['sub'])) {   
// echo $_POST['sss']."<br>";
// echo $_POST['size']."<br>";
// echo $_POST['phone']."<br>";
// echo $_POST['idseler']."<br>";
// echo $_POST['Zone']."<br>";
// echo $_POST['cityx']."<br>";
// echo $_POST['qty']."<br>";
$ss=$_POST['sss'];
$she = mysqli_query($mycon,"SELECT Quantity FROM `AppQuantity` WHERE AppQuantity.ID = '$_POST[sss]' AND AppQuantity.Size = '$_POST[size]'; ");
$result = mysqli_fetch_array($she);
$Cust = mysqli_query($mycon,"SELECT * FROM `customers` WHERE `customers`.CPhone = '$_POST[phone]'");

$res = mysqli_fetch_array ($Cust);
$C=0;
if($res['CPhone'] > 0){
	$C++;
}
$Shoz = $mycon->query("SELECT * FROM Apparel Where AID = $_POST[sss]");
$sz = mysqli_fetch_array ($Shoz);
$SPS = $mycon->query("SELECT * FROM salesperson Where SID = $_POST[idseler]");
$resalt = mysqli_fetch_array ($SPS);
$CustID = $res['CID'];
$CustPhone = $res['CPhone'];
$ShQty = $result['Quantity'];
$zon = $_POST['Zone'];
$cx = $_POST['cityx'];
$date = date("Y/m/d");
$TAQ =$_POST['APS']*$_POST['qty'];//Actual Prrice * Quantity
$totPrice = $_POST['price'] * $_POST['qty'];//Sold Price Prrice * Quantity
$szqty = $_POST['momprice'] * $_POST['qty'];//Minimum Price * Quantity

$sql = "INSERT INTO `customers` (`Name`, `Gender`, `CPhone`,`Address`, `Governorate`, `Zone`) VALUES 
('$_POST[name]', '$_POST[gender]', '$_POST[phone]',  '$_POST[add]', '$_POST[cityx]', '$_POST[Zone]')";

if($resalt['Sname'] == 'Ahmed Amin'||$resalt['Sname'] == 'Mohamed Ali'||$resalt['Sname'] == 'Marwan Hamed'||$resalt['Sname'] == 'Ziad Mohamed'){
	$PROFITAHMED = $totPrice - $TAQ;
	$sql3 = 
	"INSERT INTO `BuyApp` (`CPhone`, `SID`, `ID`, `Date`, `AppType`, `ActualPrice`, `Sprice`, `Price`, `UserProfit`, `Profit`,
	`Shipping`, `Size`, `Quantity` , `PN`)
	VALUES 
	('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date' , '$sz[Type]', '$_POST[APS]', '$_POST[price]' ,'$_POST[momprice]',0.0,'$PROFITAHMED',
	'$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}else{ 
	$UserProfit =($totPrice - $szqty);
    $PROFITAHMED = $szqty - $TAQ;
	$sql3 = 
	"INSERT INTO `BuyApp` (`CPhone`, `SID`, `ID`, `Date`, `AppType`, `ActualPrice`, `Sprice`, `Price`, `UserProfit`, `Profit`,
	`Shipping`, `Size`, `Quantity` , `PN`)
	VALUES 
	('$_POST[phone]', '$_POST[idseler]', '$_POST[sss]', '$date' , '$sz[Type]', '$_POST[APS]', '$_POST[price]' ,'$_POST[momprice]','$UserProfit','$PROFITAHMED',
	'$_POST[fee]', '$_POST[size]', '$_POST[qty]', '$_POST[PN]')";
}	

$sql4 = "UPDATE AppQuantity
SET Quantity = '$ShQty' - '$_POST[qty]'
WHERE AppQuantity.ID = $_POST[sss] AND AppQuantity.Size = '$_POST[size]'";

if($C == 0){
if (!$mycon->query($sql)) {	
    echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('SellerOrdersShirts.php');
} else{
	 if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		 require('SellerOrdersShirts.php');
	 }else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrdersShirts.php');
}else{
?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order/ Customer Added Succesfully.
</div>
<?php

			require('SellerOrdersShirts.php');
		}
}
}
}else if($C > 0){
	if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
		require('SellerOrdersShirts.php');
	}
 else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
			require('SellerOrdersShirts.php');
}else{
			?>
<div class="alert1">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order Added Succesfully / Old Customer.
</div>
<?php

			require('SellerOrdersShirts.php');
		}
}
}else{
	require('SellerOrdersShirts.php');
}

$mycon->close();
}else{
	require('SellerOrdersShirts.php');
}
?>
</html>