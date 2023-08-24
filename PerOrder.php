<?php
session_start();
if(isset($_SESSION['UserID'])){
$Z = $_SESSION['UserID'];
?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Customer / Perfume Order Form</title>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
<script>
// In your Javascript
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
</head>
<?php
error_reporting(0);
include("DBCONN.php");
$PID = $_GET['ID'];
$Qunatity = $_POST['Qunatity'];
$sss = $_POST['sss'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$PN = $_POST['PN'];
$city = $_POST['city'];
$Qunatity = $_POST['Qunatity'];
$Qu = $_POST['qty'];
?>
<body>
 <div class="segment">
 <h1>Add Customer / Order(Perfume)</h1>
 </div> 
<center>
<form method="post" action="<?php $_PHP_SELF ?>">
<?php
$cityselect=$_POST['city'];
if(empty($_POST['city']))
{
?>
<label>
<input type="text" name="name" placeholder="Enter The Customer's Name" required/>
</label>
<label>
<input type="text" name="phone" placeholder="Enter The Customer's Phone" required/>
</label>
<label>
<select name="gender" required >
<option value="" disabled selected>Enter The Customer's Gender</option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>
</label>

<label>
		<select name="city" class="js-example-basic-single" onchange="this.form.submit()" required>
        <option value="" disabled selected><span style="color:navy;font-weight: bolder;">Enter The Customer's City</span></option>
        <?php
        $CT = mysqli_query($mycon,'SELECT * From `governorates` ORDER BY `governorates`.`ID` ASC');
        while ( $rec = mysqli_fetch_array ($CT)){
        ?>
        <option value="<?php echo $rec['id']; ?>"><?php echo $rec['governorate_name_en'].'-------------------'.$rec['governorate_name_ar']; ?></option>
        <?php
        }
        ?>
        </select>
</label>
<label>
<input type="text" name="size" value="<?php echo $Size;?>" readonly required hidden/>
</label>
<label>
<input type="text" name="qty" value="<?php echo $Qunatity;?>" readonly required hidden/>
</label>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
}
else
{
    ?>
<label>
<input type="text" name="name" value="<?php echo $_POST['name']; ?>" required/>
</label>
<label>
<input type="text" name="phone" value="<?php echo $_POST['phone']; ?>" required/>
</label>
<label>
<select name="gender" required >
<option value="<?php echo $_POST['gender']; ?>" selected><?php echo $_POST['gender'];?></option>>
</select>
</label>
<label>
<?php
        $asd= $_POST['city'];
        $sql = "SELECT * From `governorates` WHERE `governorates`.`id` = $asd";
        $SPOsda = $mycon->query($sql);
        if ($SPOsda->num_rows > 0) {
            while($row = $SPOsda->fetch_assoc()) {
                ?>
                
        <select name="cityx" required>
        <option value="<?php echo $asd;?>" selected readonly><?php echo  $row["governorate_name_en"]."-------------------".$row["governorate_name_ar"];?></option>
        <span style="color:navy;font-weight: bolder;">
        </span>
        </select>
            <?php
            }
            } else {
            echo "0 results";
            }
        ?>
</label>

<label>
<select name="Zone" class="js-example-basic-single" required>
<option value="" disabled selected><span style="color:navy;font-weight: bolder;">Enter The Customer's Zone</span></option>
<?php
$sql2 = "SELECT * FROM `cities` Where cities.governorate_id = $asd";
$SPOsda2 = $mycon->query($sql2);
if ($SPOsda2->num_rows > 0) {
while($row = $SPOsda2->fetch_assoc()) {
?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['city_name_en'].'-------------------'.$row['city_name_ar']; ?></option>
<?php
}
} else {
echo "0 results";
}
?>
</select>
</label>
<label>
<input type="text" name="add" placeholder="Enter The Customer's Address" required/>
</label>
<label>
<select name="PN" required >
<option value="" disabled selected>Enter The Page's Order</option>
<?php
$CT = mysqli_query($mycon,'SELECT * From `Pages` Where Type = "Perfumes" OR ID IN (1,2,15);');
while ( $rec = mysqli_fetch_array ($CT)){
?>
  <option value="<?php echo $rec['ID']; ?>"><?php echo $rec['Platform']; ?></option>
<?php
}
?>
</select>
</label>
<label>
<input type="text" name="fee" placeholder="Enter The Shipping Fee" required/>
</label>
<label>
<input type="text" name="sss" id="sss" value="<?php echo $PID; ?>"readonly hidden/>
</label>
<?php
$C = $mycon->query("SELECT * FROM salesperson WHERE SID = '$Z'");
$CR = mysqli_fetch_array ($C);
?>

<label style="font-weight:bolder;color:navy;">Model</label>
<label>
<?php
$SM = mysqli_query($mycon,"SELECT * From `perfumes` Where PerID = '$_GET[ID]' ");
$rem = mysqli_fetch_array ($SM)
?>
<input type="text" name="model" value="<?php echo $rem['Model']; ?>" readonly required/>
</label>
<label style="font-weight:bolder;color:navy;">Selling Price Per Unit</label>
<label>
<input type="text" name="sprice" required value="<?php echo $rem['Price']; ?>"/>
<input type="text" name="minsop" hidden readonly required value="<?php echo $rem['Price']; ?>"/>
<input type="text" name="asp" hidden readonly required value="<?php echo $rem['ActualPrice']; ?>"/>
</label>
<?php
	$Admin = $CR['Admin'];
?>
<label style="font-weight:bolder;color:navy;">Qunatity</label>
<label>
<input type="text" name="qty" value="<?php echo $Qu ?>" readonly required/>
</label>
<label>
<input type="text" name="idseler" value="<?php echo $CR['SID']; ?>"hidden readonly required/>
</label>
<label>
<input type="text" name="sname" value="<?php echo $CR['Sname']; ?>" readonly required/>
</label>
<label>
<input type="submit" name="sub" value="Buy" formaction="PerOrderCust.php" style="color:deepskyblue;font-weight: bolder;"><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Perfume.php?ID=<?php echo $PID;?>" style="color:teal;font-weight: bolder;text-decoration:none;">Back To Perfume</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Perfumes.php" style="color:dodgerblue;font-weight: bolder;text-decoration:none;">Back To All Perfumes</a><i class="icon ion-md-lock"></i>
</label>
<label>
	<a href="Logout.php" style="color:red;font-weight: bolder;text-decoration:none;">Logout</a><i class="icon ion-md-lock"></i>

</label>
<?php
}
?>
</form>
</center>
</body>
</html>
<?php
}else{
	require('UserLogin.php');
}
?>