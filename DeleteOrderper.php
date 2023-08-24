<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders(Perfumes)</title>
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
$SID = $_GET['SID'];
$XAS = $mycon->query("SELECT * FROM `buyper` WHERE `buyper`.`SID` =$SID AND `buyper`.`PerID` = $SHID AND buyper.DateTime = '$DT' ");
if($XAS->num_rows > 0){
$sql = "DELETE FROM `buyper` WHERE `buyper`.`SID` =$SID AND `buyper`.`PerID` = $SHID AND buyper.DateTime = '$DT'";
$she = mysqli_query($mycon,"SELECT Quantity FROM `perfumes` WHERE perfumes.PerID = '$SHID'");
$result = mysqli_fetch_array($she);
$ShQty = $result['Quantity'];
$sql1 = "UPDATE perfumes
SET Quantity = '$ShQty' + '$Q'
WHERE perfumes.PerID = '$SHID'";

if (!$mycon->query($sql)) {	
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
	require('SellerOrdersPerfumes.php');
} else{
	 if(!$mycon->query($sql1)){
  		echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> '. $sql . '<br>' . $mycon->error.  
   	'</div>';
		 require('SellerOrdersPerfumes.php');
	 }else{
		 echo '<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Congratulations!</strong>Order Deleted Successfully.</div>';
			require('SellerOrdersPerfumes.php');
		}
}
}else{
	echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error ! </strong>Order Already Deleted </div>';
	require('SellerOrdersPerfumes.php');
}
	$mycon->close();
require('SellerOrdersPerfumes.php');
?>
</html>