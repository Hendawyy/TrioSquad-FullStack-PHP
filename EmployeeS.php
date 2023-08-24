<html lang="en">
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<?php
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
if($res['Sname'] == 'Ahmed Amin'){
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employees Data</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
.bs-example{
	margin: 20px;
}
*{
	color:skyblue;
	align-content: center;
}
	body{
		background-color:darkslategrey!important;
	}
	thead{
		
	}
	td{
		 padding: 20px 15px;
	}
table{
	text-align: center;
	border-collapse: separate;
	border-color: aliceblue;
}
	.img{
	border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
	border-radius: 50%;
  	height: 100px;
  	width: 100px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color:deeppink;} /* Blue */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: blueviolet;} /* blueviolet */ 
</style>
</head>
<body>
<?php
include('NAvS.php');
?>
<div class="bs-example">
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Status</th>
<?php
if($_SESSION['UserID'] == 1){
?>
                <th>View Employee's Shoe Orders</th>
                <th>View Employee's Perfume Orders</th>                
				<th>View Employee's Apparel Orders</th>

                <th>Edit Employee's Data</th>
<?php
}
?>
            </tr>
        </thead>
        <tbody>
			<?php
			error_reporting(0);
			include("DBCONN.php");
			$SP = mysqli_query($mycon,'SELECT * FROM `salesperson` ORDER BY `salesperson`.`Sname` ASC');
			while ($res = mysqli_fetch_array ($SP)){
				$img = $res['Image'];
			?>
            <tr>
                <td><img class="img" src="images/<?php echo $img ;?>"></td>
                <td style="padding-top:55px;"><?php echo $res['Sname'] ;?></td>
				<td style="padding-top:55px;"><?php echo $res['Password'];?></td>
                <td style="padding-top:55px;"><?php echo $res['Gender'] ;?></td>
				<?php
					if($res['Admin'] == 'Yes'){
						?>
						<td style="padding-top:55px;"><?php echo "Admin";?></td>
				<?php
					}else if($res['Admin'] == 'NO'){
				?>
						<td style="padding-top:55px;"><?php echo "Seller";?></td>
				<?php
					}
				?>

<td style="padding-top:55px;"><a href="EORDER.php?SID=<?php echo $res['SID'];?>"><i class="fa fa-eye" style='font-size:38px;color:skyblue'></i></a></td>
<td style="padding-top:55px;"><a href="EORDERper.php?SID=<?php echo $res['SID'];?>"><i class="fa fa-eye" style='font-size:38px;color:red'></i></a></td>
<td style="padding-top:55px;"><a href="EORDERApp.php?SID=<?php echo $res['SID'];?>"><i class="fa fa-eye" style='font-size:38px;color:lavender'></i></a></td>
<td style="padding-top:55px;"><a href="EditEmpData.php?SID=<?php echo $res['SID'];?>"><i class="fa fa-edit" style='font-size:38px;color:skyblue'></i></a></td>

</tr>
<?php
}
?>
		</tbody>
    </table>
</div>
<form>
<div align='center'>
<button class="button" formaction="InventoryS.php">View Shoes Inventory</button><br><br><br><br>
<button class="button button1" formaction="InventoryP.php">View Perfume Inventory</button><br><br><br><br>
<button class="button button2" formaction="SellerOrders.php">View My Orders</button><br><br><br><br>
<button class="button button4" formaction="a.php">View All Orders</button><br><br><br><br>
<button class="button button3" formaction="Logout.php">Logout</button><br><br><br><br>
</div>
</form>
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