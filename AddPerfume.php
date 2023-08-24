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
if($res['Sname'] == 'Ahmed Amin'  || $res['Sname'] == 'Ziad Mohamed'){
?>

	<head>
		<meta charset="utf-8">
		<title>Add Perfume</title>
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
				?>
				<form action="AddPerfumeBE.php" method="post">
					<h3>Add Perfume</h3>			
					<div class="form-wrapper">
						<label class="label-input">Perfume Model</label>
						<input type="text" name="PM" class="form-control" required>
					</div>
					
					<div class="form-wrapper form-select">
						<label for="PG">Gender</label>
						<div class="form-holder">
						    <center>
							<select name="PG" id="PG" class="form-control" required>
								 <option value="" disabled selected>Choose Gender</option>
								<option value="Him" class="option">Him</option>
								<option value="Her" class="option">Her</option>
								<option value="UniSex" class="option">UniSex</option>
							</select>
							</center>
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
						<label  class="label-input">Quantity</label>
						<input type="text" name="PQ" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label  class="label-input">Image</label>
						<input type="file" name="PI" class="form-control" required>
					</div>
					<div align='center'>
					<button name="Submit">Add Perfume</button><br><br>
					<a href="InventoryP.php">Back To Inventory</a><br>
					<a href="Logout.php">Logout</a><br><br>
					</div>
				</form>
				<div class="image-holder">
					<img style="height:150%;width:99.7%;" src="images/Perfume-aroma-spray_iphone_828x1792.jpg">
				</div>
				
			</div>
		</div>	
	</body>
<?php
}else{
	require('E7.php');
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
