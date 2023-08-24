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
$SM = $_POST['models'];	
$SQ = $_POST['SQS'];	
if(isset($_POST['Submit'])){
$XAS = $mycon->query("SELECT * FROM shoes Where `Model` = '$SM' ");
$rez = mysqli_fetch_array ($XAS);
$SHID = $rez['ID'];
$arrays = $_POST['S'];
$arrayq = $_POST['Q'];
for($i=1;$i<=$SQ;$i++){
	$sql = "INSERT INTO `shoesquantity` (`ID`, `Size`, `Quantity`) VALUES ('$SHID', '$arrays[$i]', '$arrayq[$i]') ";
	$mycon->query($sql);
}
require('InventoryS.php');
$mycon->close();
}else{
	require('InventoryS.php');
}
?>
</html>