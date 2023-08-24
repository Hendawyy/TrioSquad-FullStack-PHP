<?php
session_start();
error_reporting(0);
$Z = $_SESSION['UserID'];
if(isset($_SESSION['UserID'])){
?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Edit Order's Data</title>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style>
/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
img { max-width: 100%; height: auto; }
@media (min-device-width:600px) {
    img[data-src-600px] {
        content: attr(data-src-600px, url);
    }
}

@media (min-device-width:800px) {
    img[data-src-800px] {
        content: attr(data-src-800px, url);
    }
}
.video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
html { font-size:100%; }

@media (min-width: 640px) { body {font-size:1rem;} } 
@media (min-width:960px) { body {font-size:1.2rem;} } 
@media (min-width:1100px) { body {font-size:1.5rem;} } 	
body, html {
  background-color: #EBECF0;
}
::placeholder{
	text-align: center;
}
input{
	text-align: center;
}
body, p, input,a, select, textarea, button {
  font-family: "Montserrat", sans-serif;
  letter-spacing: -0.2px;
  font-size: 16px;
}

div, p {
  color: #BABECC;
  text-shadow: 1px 1px 1px #FFF;
}

form {
  padding: 16px;
  width: 320px;
  margin: 0 auto;
}

.segment {
  padding: 32px 0;
  text-align: center;
}

button, input,select,a {
  border: 0;
  outline: 0;
  font-size: 16px;
  border-radius: 320px;
  padding: 16px;
  background-color: #EBECF0;
  text-shadow: 1px 1px 0 #FFF;
}

label {
  display: block;
  margin-bottom: 24px;
  width: 100%;
}

input,select,a {
  margin-right: 8px;
	text-align: center;
  box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
  width: 100%;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  appearance: none;
  -webkit-appearance: none;
	
}
input,select,a:focus {
  box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #FFF;
}

button,a {
  color: #61677C;
  font-weight: bold;
  box-shadow: -5px -5px 20px #FFF, 5px 5px 20px #BABECC;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  font-weight: 600;
}
button,a:hover {
  box-shadow: -2px -2px 5px #FFF, 2px 2px 5px #BABECC;
}
button,a:active {
  box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #FFF;
}
button,a .icon {
  margin-right: 8px;
}
button,a.unit {
  border-radius: 8px;
  line-height: 0;
  width: 48px;
  height: 48px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 8px;
  font-size: 19.2px;
}
button.unit,a .icon {
  margin-right: 0;
}
button.red,a	 {
  display: block;
  width: 100%;
  color: #AE1100;
}

.input-group {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
.input-group label {
  margin: 0;
  flex: 1;
}
	::placeholder{
		font-weight: bolder;
		color: navy;
	}
</style>
</head>
<?php
error_reporting(0);
include("DBCONN.php");
$SHID = $_GET['SHID'];
$P = $_GET['P'];
$DT = $_GET['DT'];
$D = $_GET['D'];
$S = $_GET['Size'];
$Q = $_GET['QTY'];
$SPPU = $_GET['SPPU'];
$G = $_GET['G'];
$sql = "SELECT * FROM `buys` JOIN customers on buys.CPhone = customers.CPhone JOIN city ON customers.City = city.CityID JOIN shoes on buys.ID=shoes.ID WHERE SID = '$Z' AND buys.ID = '$SHID' AND buys.CPhone = '$P' AND `Datetime` = '$DT'";
$ORDERS = mysqli_query($mycon,$sql);
$ressa = mysqli_fetch_array ($ORDERS);

?>
<body>

 <div class="segment">
 <h1>Edit Order Data</h1>
 </div> 
<center>
<form method="post" action="UpdateOrder.php">
<label style="font-weight:bolder;color:navy;">Name</label>
<label>
<input type="text" name="name" value="<?php echo $ressa['Name']; ?>" required/>
</label>
<label style="font-weight:bolder;color:navy;">Phone</label>
<label>
<input type="text" name="phone" value="0<?php echo $ressa['CPhone']; ?>" readonly required/>
</label>
<label style="font-weight:bolder;color:navy;">Gender</label>
<label>
<select name="gender" required>
 <option value="<?php echo $G; ?>" selected><?php echo $G; ?></option>
 <option value="Male" >Male</option>
 <option value="Female" >Female</option>
</select>
</label>
<label style="font-weight:bolder;color:navy;">City</label>
<label>
<select name="city" required>
	<option value="<?php echo $ressa['CityID']; ?>"selected><span style="color:navy;font-weight: bolder;"><?php echo $ressa['Governorate']; ?></span></option>
<?php
$CT = mysqli_query($mycon,'SELECT * From `city` ORDER BY `city`.`Governorate` ASC');
while ( $rec = mysqli_fetch_array ($CT)){
?>
  <option value="<?php echo $rec['CityID']; ?>"><?php echo $rec['Governorate']; ?></option>
<?php
}
?>
</select>
</label>
<label style="font-weight:bolder;color:navy;">Address</label>
<label>
<input type="text" name="add" value="<?php echo $ressa['Address']; ?>" required/>
</label>
<label style="font-weight:bolder;color:navy;">Shipping</label>

<label>
<input type="text" name="fee" value="<?php echo $ressa['Shipping']; ?>"required/>
</label>
<label>
<input type="text" name="sss" id="sss" value="<?php echo $SHID; ?>"readonly hidden />
</label>
<?php
$C = $mycon->query("SELECT * FROM salesperson WHERE SID = '$Z'");
$CR = mysqli_fetch_array ($C);
?>
<label style="font-weight:bolder;color:navy;">Shoe Model</label>
<label>
<?php
$SM = mysqli_query($mycon,"SELECT * From `shoes` Where ID = '$SHID' ");
$rem = mysqli_fetch_array ($SM)
?>
<input type="text" name="model" value="<?php echo $rem['Model']; ?>" readonly required/>
</label>
<label style="font-weight:bolder;color:navy;">Selling Price Per Unit</label>
<label>
<input type="text" name="price" required value="<?php echo $SPPU; ?>" readonly/>
</label>
<label>
<input type="text" name="prof" value="<?php echo $ressa['Profit']; ?>" hidden readonly required />
</label>
<?php
	$Admin = $CR['Admin'];
	if($Admin == 'Yes'){
?>

<?php
}
?>
<label style="font-weight:bolder;color:navy;">Size</label>
<label>
<input type="text" name="size" value="<?php echo $S ?>" readonly required/>
</label>
<label style="font-weight:bolder;color:navy;">Qunatity</label>
<label>
<input type="text" name="qty" value="<?php echo $Q ?>" required/>
</label>
<label>
<input type="text" name="idseler" value="<?php echo $CR['SID']; ?>"hidden readonly required/>
</label>
<label style="font-weight:bolder;color:navy;">Seller</label>
<label>
<input type="text" name="sname" value="<?php echo $CR['Sname']; ?>" readonly required/>
</label>
<label>
<input type="text" name="d" value="<?php echo $D; ?>" readonly required hidden/>
</label>
<label>
<input type="text" name="dt" value="<?php echo $DT; ?>" readonly required hidden/>
</label>
<label>
<input type="submit" name="seo" value="Edit Order" style="color: deepskyblue;font-weight: bolder;"><i class="icon ion-md-lock"></i>
</label>
<label>
<a href="SellerOrders.php" style="color:teal;font-weight: bolder;text-decoration:none;">Back To My Orders</a><i class="icon ion-md-lock"></i>
</label>
<label>
<a href="Products.php" style="color:dodgerblue;font-weight: bolder;text-decoration:none;">Go To All Products</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Logout.php" style="color:red;font-weight: bolder;text-decoration:none;">Logout</a><i class="icon ion-md-lock"></i>

</label>

</form>
</center>
</body>
</html>
<?php
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>