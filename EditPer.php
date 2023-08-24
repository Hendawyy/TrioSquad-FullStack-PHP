<?php
session_start();
if(isset($_SESSION['UserID'])){
$Z = $_SESSION['UserID'];
?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Edit Perfumes's Data</title>
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
$PID = $_GET['ID'];
?>
<body>
<div class="segment">
<?php
$SQL="SELECT * FROM perfumes WHERE PerID  = '$PID'"; 
$XAS = mysqli_query($mycon,$SQL);
$recz = mysqli_fetch_array ($XAS);
?>	
<h1>Edit <?php echo $recz['Model'] ?>'s Data</h1>
</div> 
<center>
<form method="post" action="EditPerBE.php">
<label style="font-weight:bolder;color:navy;">Edit Perfume Name</label>
<label>
<input type="text" name="ID" value="<?php echo $recz['PerID'] ?>" required readonly hidden/>
</label>
<label>
<input type="text" name="Model" value="<?php echo $recz['Model'] ?>" required/>
</label>
<label style="font-weight:bolder;color:navy;">Edit Gender</label>
<label>
<select name="PG" required>
<option value="<?php echo $recz['Gender']?>" disabled selected><?php echo $recz['Gender']?></option>
<option value="Him" >Him</option>
<option value="Her" >Her</option>
<option value="UniSex">UniSex</option>
</select>
</label>
<label style="font-weight:bolder;color:navy;">Edit Perfume Price</label>
<label>
<input type="text" name="PRice" value="<?php echo $recz['Price'] ?>" required/>
</label>
<label style="font-weight:bolder;color:navy;">Edit Perfume Actual Price</label>
<label>
<input type="text" name="APRice" value="<?php echo $recz['ActualPrice'] ?>" required/>
</label>
<label style="font-weight:bolder;color:navy;">Edit Perfume Quantity</label>
<label>
<input type="text" name="Q" value="<?php echo $recz['Quantity'] ?>" required/>
</label>
<label>
<input type="submit" name="sub" value="Update Perfume Data" style="color:deepskyblue;font-weight: bolder;"><i class="icon ion-md-lock"></i>
</label>
<label>
<a href="InventoryP.php" style="color:teal;font-weight: bolder;text-decoration:none;">Back To Perfumes</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Perfumes.php" style="color:dodgerblue;font-weight: bolder;text-decoration:none;">Back To Perfumes Store</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="SellerOrdersPerfumes.php" style="color:blue;font-weight: bolder;text-decoration:none;">View My Perfumes Orders</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="AllPerfumesOrders.php" style="color:blue;font-weight: bolder;text-decoration:none;">All Perfumes Orders</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Logout.php" style="color:red;font-weight: bolder;text-decoration:none;">Logout</a><i class="icon ion-md-lock"></i>

</label>

</form>
</center>
</body>
</html>
<?php
}else{
	require('UserLogin.php');
}
?>