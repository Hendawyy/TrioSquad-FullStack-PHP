<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<?php
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
if($Admin == 'Yes'){
?>

	<head>
		<meta charset="utf-8">
		<title>Edit Shoe Data</title>
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
				error_reporting(0);
				include('DBCONN.php');
				$SHID = $_GET['ID'];
				$Shoes = $mycon->query("SELECT * FROM shoes WHERE ID = '$SHID'");
				$res = mysqli_fetch_array ($Shoes);
				?>
				<form action='EditShoeBE.php' method="post">
					<h3>Edit Shoe Data</h3>			
					<div class="form-wrapper">
						<label class="label-input">Shoe Model</label>
						<input type="text" name="SM" value="<?php echo $res['Model'];?>" class="form-control" required>
					</div>
					<span hidden>
					<input type="text" name="SID" value="<?php echo $res['ID'];?>" class="form-control" required hidden>
					</span>
					<div class="form-wrapper form-select">
						<label for="SB">Shoe Brand</label>
						<div class="form-holder">
							<select name="SB" id="SB" class="form-control" required>
								 <option value="<?php echo $res['Brand'];?>" selected><?php echo $res['Brand'];?></option>
								<option value="Adidas" class="option">Adidas</option>
								<option value="Nike" class="option">Nike</option>
								<option value="New Balance" class="option">New Balance</option>
								<option value="Puma" class="option">Puma</option>
								<option value="Vans" class="option">Vans</option>
								<option value="Alexander McQueen" class="option">Alexander McQueenAlexander McQueen</option>
								<option value="Yeezy" class="option">Yeezy</option>
								<option value="Air Jordan" class="option">Air Jordan</option>
								<option value="Air Force" class="option">Air Force</option>
								<option value="Timberland" class="option">Timberland</option>
								
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="form-wrapper">
						<label class="label-input">Minimum Price</label>
						<input type="text" name="minP" value="<?php echo $res['Price'];?>" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label class="label-input">Actual Price</label>
						<input type="text" name="AP" value="<?php echo $res['ActualPrice'];?>" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label  class="label-input">Profit</label>
						<input type="text" name="pr" value="<?php echo $res['Profit'];?>" class="form-control" required>
					</div>
					<div align="center">
					<button name="Submite">Update Shoe Data</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="UI.php?ID=<?php echo $res['ID'];?>">Update Image</a><br><br><br>
					<a href="InventoryS.php">Back To Inventory</a><br><br><br>
					</div>
				</form>
				<div class="image-holder">
					<img src="images/H678608f9504a438f977439c62cb1ffe89.jpg">
				</div>
			</div>
		</div>	
	</body>
<?php
}else{
	require('E7.php');
}
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>
</html>
