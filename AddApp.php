<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<style>
.alert {
  padding: 20px;
  background-color: #4CAF50;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert1 {
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
<script>
</script>
<?php
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
if($res['Sname'] == 'Ahmed Amin' || $res['Sname'] == 'Marwan Hamed'){
?>

	<head>
		<meta charset="utf-8">
		<title>Add Apparel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner" >
				<?php
				include('DBCONN.php');
				error_reporting(0);
				if(!isset($_POST["Submit"]))
				{?>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<h3>Add Apparel</h3>			
					<div class="form-wrapper">
						<label class="label-input">Apparel Model</label>
						<input type="text" name="SM" class="form-control" required>
					</div>
					<div class="form-wrapper form-select">
						<label for="SB">Apparel Type</label>
						<div class="form-holder">
							<select name="SB" id="SB" class="form-control" required>
								<option value="" disabled selected>Choose Type</option>
								<option value="Shirts" class="option">Shirts</option>
								<option value="Pants" class="option">Pants</option>
								<option value="Jeans" class="option">Jeans</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="form-wrapper">
						<label class="label-input">Minimum Price</label>
						<input type="text" name="minP" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label class="label-input">Actual Price</label>
						<input type="text" name="AP" class="form-control" required>
					</div>
				
					<div class="form-wrapper">
						<label  class="label-input">Image</label>
						<input type="file" name="SI" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label  class="label-input">How Many Sizes From The Current Apparel</label>
						<input type="text" name="SQ" class="form-control" required>
					</div>
					<div align='center'>
					<button name="Submit">Add Apparel</button><br><br>
					<a href="InventoryC.php">Back To Inventory</a><br>
					<a href="Logout.php">Logout</a><br><br>
					</div>
				</form>
				<div class="image-holder">
					<img src="images/4a91a6b4f09c7df99a6352db06f7a701.jpg">
				</div>
				<?php
					
				}if(isset($_POST["Submit"])){
$sql = "INSERT INTO `Apparel` (`Model`, `Type`, `Price`, `ActualPrice`, `Image`) 
VALUES ('$_POST[SM]', '$_POST[SB]', '$_POST[minP]', '$_POST[AP]', '$_POST[SI]')";					
					
$XAS = $mycon->query("SELECT * FROM Apparel Where `Model` = '$_POST[SM]'");
$rez = mysqli_fetch_array ($XAS);
					if($rez['Model'] == $_POST['SM']){
?>
	<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> Apparel ALready Exists.  
</div>
			<a href="InventoryC.php">Back To Inventory</a><br>
			<a href="Apparels.php">Back To Products</a><br>
	<?php
						
						require('Apparels.php').exit();
					}else if (!$mycon->query($sql)) {	
						echo '<strong>Error!</strong> '. $sql1 . '<br>'.  $mycon->error.''; 
					} elseif($rez['Model'] != $_POST['SM']) {
						//echo "Shoe Added Succesfully.";
				?>
				<form action="AddCQ.php" method="post">
					<h3>Add Size / Quantity For The <?php echo $_POST["SM"]; ?></h3>			
					<?php
						for($i=1; $i<=$_POST['SQ']; $i++) {
						?>
						<div class="form-wrapper">
							<label class="label-input"><?php echo $_POST['SB'];?> Size #<?php echo $i; ?></label>
							<input type="text" name="S[<?php echo $i; ?>]" class="form-control" required>
							<label class="label-input"><?php echo $_POST['SB'];?> Quantity #<?php echo $i; ?></label>
							<input type="text" name="Q[<?php echo $i; ?>]" class="form-control" required>
						</div>
						<?php 
		} 
						?>
					<input type="text" name="models" value="<?php echo $_POST["SM"]; ?>" readonly hidden required>
					<input type="text" name="SQS" value="<?php echo $_POST["SQ"]; ?>" readonly hidden required>
					
					<div align='center'>
					<button name="Submit">Add Sizes / Quantity</button><br>
					<a href="InventoryC.php">Back To Inventory</a><br>
					<a href="Logout.php">Logout</a><br><br>
					</div>
					</form>
				<div class="image-holder">
					<img src="images/4a91a6b4f09c7df99a6352db06f7a701.jpg">
				</div>
				<?php
				}
				}
				?>
				
			</div>
		</div>	
	</body>
<?php
}
}else if(!isset($_SESSION['UserID'])){
	?>
	<div class="alert1">
    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
    <strong>Error!</strong> You Must Login first  
</div>
	<?php
	require('UserLogin.php');
}
?>
</html>
