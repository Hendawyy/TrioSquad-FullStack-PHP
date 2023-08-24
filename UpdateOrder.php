<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<head>
<title>My Orders Shoes</title>
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
$SID = $_POST['idseler'];
$SHID = $_POST['sss'];
$P = $_POST['phone'];
$DT = $_POST['dt'];
$D = $_POST['d'];
$SP = $_POST['price'];
$PR = $_POST['prof'];
$SH = $_POST['fee'];
$S = $_POST['size'];
$Q = $_POST['qty'];
$CN = $_POST['name'];
$SM = $_POST['model'];
if(isset($_POST['seo'])){
$she = mysqli_query($mycon,"SELECT Quantity FROM `shoesquantity` WHERE shoesquantity.ID = '$SHID' AND shoesquantity.Size = '$S' ");
$result = mysqli_fetch_array($she);
$ShQty = $result['Quantity'];
$Z = mysqli_query($mycon,"SELECT Quantity FROM `buys` WHERE `buys`.`CPhone` = '$P' AND `buys`.`SID` = '$SID' AND `buys`.`ID` = '$SHID' AND `buys`.`Datetime`= '$DT' ");
$R = mysqli_fetch_array($Z);
$OQ = $R['Quantity'];
$aba7a = $ShQty+$OQ;
if($ShQty >= $Q || $Q == $OQ || $aba7a >= $Q){
$sql1="UPDATE `buys` SET `Quantity` = 0 
WHERE
`buys`.`CPhone` = '$P' AND `buys`.`SID` = '$SID' AND `buys`.`ID` = '$SHID' AND `buys`.`Datetime`= '$DT' ";	
$sql2 = "UPDATE shoesquantity
SET Quantity = shoesquantity.Quantity + '$OQ'
WHERE shoesquantity.ID = '$SHID' AND shoesquantity.Size = '$S'";
$sql3 = "UPDATE `buys` SET 
`Shipping`= '$SH' ,`Size`= '$S' ,`Quantity`= '$Q'
WHERE 
`buys`.`CPhone` = '$P' AND `buys`.`SID` = '$SID' AND `buys`.`ID` = '$SHID' AND `buys`.`Datetime`= '$DT'";
$sql4 = "UPDATE `customers` SET `Name` = '$CN', `Gender` = '$_POST[gender]', `City` = '$_POST[city]', `Address` = '$_POST[add]' WHERE  `customers`.`CPhone` = $P ";
$sql5 = "UPDATE shoesquantity
SET Quantity = shoesquantity.Quantity - '$Q'
WHERE shoesquantity.ID = '$SHID' AND shoesquantity.Size = '$S'";

if (!$mycon->query($sql1)) {	
    echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql1 . '<br>' . $mycon->error.  
   	'</div>';
} else{
	 if(!$mycon->query($sql2)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql2 . '<br>' . $mycon->error.  
   	'</div>';
	 }else{
		if(!$mycon->query($sql3)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql3 . '<br>' . $mycon->error.  
   	'</div>';
}else{
		if(!$mycon->query($sql4)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql4 . '<br>' . $mycon->error.  
   	'</div>';
}else{
			if(!$mycon->query($sql5)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql5 . '<br>' . $mycon->error.  
   	'</div>';
}else{
?>
<div class="alert1" id="mydiv">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Congratulations!</strong> Order Updated Succesfully.
</div>
<?php
			require('SellerOrders.php');
}
}	
}
}
}
}else if($ShQty < $Q){
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> Updating Order Because <br> The Entered Shoe Quantity ('.$Q.') IS MORE THAN The Avilable Shoe Quantity ('.$aba7a.') From The Given SIZE ('.$S.') OF THE SHOE MODEL ('.$SM.')  </div>';
	require('SellerOrders.php');
}

$mycon->close();
}else{
	require('SellerOrders.php');
}

?>
</html>