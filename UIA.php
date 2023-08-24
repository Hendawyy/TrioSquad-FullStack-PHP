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
if($res['Sname'] == 'Ahmed Amin' || $res['Sname'] == 'Marwan Hamed'){
?>

	<head>
		<meta charset="utf-8">
		<title>Edit Shoe Image</title>
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
        $Shoes = $mycon->query("SELECT * FROM Apparel WHERE AID = '$SHID'");
				$res = mysqli_fetch_array ($Shoes);
				?>
				<form action='UIABE.php' method="post">
					<h3>Edit Shoe Image</h3>			
					<span hidden>
					<input type="text" name="SID" value="<?php echo $res['AID'];?>" class="form-control" required hidden>
					</span>
					<div class="form-wrapper">
						<label class="label-input">Shoe Model</label>
						<input type="text" name="SM" value="<?php echo $res['Model'];?>" class="form-control" required>
					</div>   
					<div class="form-wrapper">
						<label  class="label-input">Image</label>
						<input type="file" name="SI" class="form-control" required>
					</div>
					<div align="center">
					<button name="Submite">Update Apparel image</button>
					<br><br><br><br>
					<a href="InventoryC.php">Back To Inventory</a><br><br><br>
					</div>
				</form>
				<div class="image-holder">
					<img src="images/4a91a6b4f09c7df99a6352db06f7a701.jpg">
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
