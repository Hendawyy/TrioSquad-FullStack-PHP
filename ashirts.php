<?php
error_reporting(0);
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
$img = $res['Image'];
if($res['Sname'] == 'Ahmed Amin' || $res['Sname'] == 'Marwan Hamed'){
$Month = $mycon->query("SELECT DISTINCT Month(Date) AS MONTH FROM `BuyApp` ORDER BY `MONTH` ASC");
$Year = $mycon->query("SELECT DISTINCT Year(Date) AS YEAR FROM `BuyApp` ORDER BY `YEAR` ASC");
$D="";
?>
<html>
<head> 
<title>All Apparel Orders</title>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script  type='text/javascript'>
	$(document).ready(function() { 
	$('input[name=rbtn]').change(function(){
     $('form').submit();

});
});
</script>
<script  type='text/javascript'>
	$(document).ready(function() { 
	$('input[name=Z]').change(function(){
     $('form').submit();

});
});
</script>
<style>
.row {
    margin: 0
}

.checked {
    color: rgb(255, 217, 0);
    margin-right: 1vh
}

label.radio span {
    padding: 1vh 4vh;
    background-color: #6c7ae0;
    color: lavender;
    display: inline-block;
    margin-right: 2vh
}

label.radio input:checked+span {
    border: 1px solid white;
    padding: 1vh 4vh;
    background-color: #6c7ae0;
    margin-right: 2vh;
    color: lavender;
    display: inline-block
}


@media(max-width:768px) {
    .btn {
        background-color: transparent;
        border-color: rgba(186, 216, 125, 0.863);
        color: rgba(186, 216, 125, 0.863);
        padding: 1vh;
        font-size: 0.9rem;
        height: fit-content;
        border-radius: 3px
    }
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio {
    cursor: pointer
}


* {
  box-sizing: border-box;
}
html,
body {
  padding: 0;
  margin: 0;
}

body {
  font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
}

table {
  border-collapse: collapse;
  min-width: 100%;
	text-align: center;
	color:lightblue;

}


td {
  padding: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

th {
  position: sticky;
  padding: 15px;
  text-align: center;
  top: 0;
background: #6c7ae0;
  text-align: center;
  font-weight: normal;
  font-size: 1.1rem;
  color: white;
}

th:last-child {
  border: 0;
}

td {
  padding-top: 10px;
	padding: 15px;
  padding-bottom: 10px;
  color: #808080;
}

tr:nth-child(even) td {
  background: #f8f6ff;
}

.image{
	border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
	border-radius: 50%;
  height: 100px;
  width: 100px;
}
#myInput {
background-image: url('/images/—Pngtree—search icon_4699282.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
   font-size: 16px;
  padding: 12px 20px 12px 40px;

  margin-bottom: 12px;
}
.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid lightseagreen;
  outline: 0;
  font-size: 1.3rem;
  color: black;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: black;
	text-align: center;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}
.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
 
  font-weight: 700;
}
input[type=text]{
	color: black;
	text-align: center;
}


#myTable {}
.button {
	background-color: #4CAF50;
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

.button2 {background-color: #008CBA;} /* Blue */
.button1 {background-color: gray;} /* gray */
.button3 {background-color: #f44336;} /* Red */ 
.button5 {background-color: #4CAF50;} /* Red */ 
.button4 {background-color: blueviolet;} /* blueviolet */ 
</style>
</head>
<body>
<?php
include('NAv.php');
?>


<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Sellers.."/>
</div>
</center>
<br><br><br>

<?php
if(empty($_POST['Z'])){
?>
<div align="center">
<a class="button" style="background:green;" href="ExportALLDataApp.php">Export To Excel</a>
</div><br><br><br>	
<form method="post" action="<?php $_PHP_SELF ?>">
<?php
while ($DateY = mysqli_fetch_array ($Year)){
?>
<label class="radio"> 
<input type="radio" name="Z" id="Z" required value="<?php echo $DateY['YEAR'];?>">
<span>
<div class="row"><big><b><?php echo $DateY['YEAR']; ?></b></big></div>
</span> 
</label>
<?php
}?>
<?php

$sql = "SELECT DISTINCT BuyApp.CPhone As Phone,BuyApp.SID,BuyApp.PN,BuyApp.ID,BuyApp.Datetime
,Month(Date) As Month,Year(Date) As Year, BuyApp.Date,BuyApp.sPrice,BuyApp.Shipping,BuyApp.Size,
BuyApp.Quantity,BuyApp.Userprofit AS UserProfit,BuyApp.Profit, Pages.Platform,Pages.Type,BuyApp.PN, 
customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Apparel.AID,BuyApp.ActualPrice,
BuyApp.Price AS MinimumPrice,BuyApp.Sprice AS SoldPrice,
Apparel.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,BuyApp.AppType,Apparel.Model,
salesperson.Gender 
From BuyApp JOIN Pages ON Pages.ID=BuyApp.PN 
JOIN customers ON BuyApp.CPhone = customers.CPhone 
JOIN salesperson ON BuyApp.SID = salesperson.SID 
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate 
JOIN Apparel on BuyApp.ID=Apparel.AID ORDER BY `BuyApp`.`Datetime` DESC;";

$ALL = mysqli_query($mycon,$sql);

$AhmedAminProf;
$M7med3liProf;
$AsmaaAMIN;
$IbrahimAmin;
$Bassem5aled;
$OmarFathy;
$Arsanybeshara;
$Tarek3bdl3azim;
$AhmedYasser;
$OBADAH;
$Amrh;
$FaresAsh;
$PROFIT;
$Zero=0.0;
$Count;
$TSPAK;
$TACPAK;
?>
<br>
<table id ='myTable'>
    <thead>
<tr>  
<th>Order Number</th>
<th>Apparel Image</th>
<th>Apparel Model</th>
<th>Apparel Type</th>
<th>Platform</th>
<th>Apparel Size</th>
<th>Apparel Quantity</th>
<th>Apparel Shipping Price</th>	
<th>Apparel Actual Price</th>
<th>Apparel Minimum Price</th>
<th>Apparel Sold Price</th>
<th>Seller Image</th>
<th>Seller Name</th>
<th>Customer's Name</th>
<th>Customer's Phone Number</th>
<th>Customer's City</th>
<th>Customer's Zone</th>
<th>Customer's Address</th>
<th>Date Sold</th>
<th>User Profit</th>
<th>Total Profit</th>
    </tr>
</thead>
<tbody>
 		<?php
		 while ($res = mysqli_fetch_array ($ALL))
			{
			 $Count++;
			?>
        <tr>
          <td><?php echo $Count;?></td>
          <td><a href="Apparel.php?ID=<?php echo $res['AID'];?>" class="text-dark">
		  <img class="image"src="images/Apparel/<?php echo $res['SHOEIMG'];?>"></a></td>
          <td><?php echo $res['Model'];?></td>
          <td><?php echo $res['AppType'];?></td>
          <td><?php echo $res['Platform'];?></td>
          <td><?php echo $res['Size'];?></td>
          <td><?php echo $res['Quantity'];?></td>
          <td><?php echo $res['Shipping'];?> LE.</td>
          <td><?php echo number_format($res['ActualPrice']*$res['Quantity']);?> LE.</td>
			<?php
			 $TACPAK += $res['ActualPrice']*$res['Quantity'];
			?>
          <td><?php echo number_format($res['MinimumPrice']*$res['Quantity']);?> LE.</td>
          <td><?php echo number_format($res['SoldPrice']*$res['Quantity']);?> LE.</td>
          <td><a href="EORDERApp.php?SID=<?php echo $res['SID'];?>"><img class="image"src="images/<?php echo $res['SIMG'];?>"></a></td>
          <td><?php echo $res['Sname'];?></td>
          <td><?php echo $res['Name'];?></td>
          <td style='color:lavender;background:#6c7ae0;font-weight:bolder;'><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
		  <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
          <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
          <td><?php echo $res['Address'];?></td>
          <td><?php echo $res['Datetime'];?></td>
		
		  <?php
			 if($res['Sname'] == 'Asmaa Amin'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $AsmaaAMIN += $res['UserProfit'];
			 }else if($res['Sname'] == 'Ibrahim Amin'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $IbrahimAmin += $res['UserProfit'];
			 }else if($res['Sname'] == 'Bassem Khaled'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $Bassem5aled += $res['UserProfit'];
			 }else if($res['Sname'] == 'Omar Mohamed Fathy'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $OmarFathy += $res['UserProfit'];
			 }else if($res['Sname'] == 'Arsany Beshara'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Arsanybeshara += $res['UserProfit'];
			 }else if($res['Sname'] == 'Tarek Abd El Azim'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Tarek3bdl3azim += $res['UserProfit'];
			 }else if($res['Sname'] == 'Obadah Motasem'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $OBADAH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Amr Hamed'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $AmrH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Fares ElAshryy'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $FaresAsh += $res['UserProfit'];
			 }else{
				 ?>
          		 
				 <td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo number_format($res['UserProfit']);?></td>
		 <?php
				$AsmaaAMIN += $Zero;
				$IbrahimAmin += $Zero;
				$Bassem5aled += $Zero;
				$OmarFathy += $Zero;
				$Arsanybeshara += $Zero;
				$Tarek3bdl3azim += $Zero;
				$AhmedYasser += $Zero;
				$OBADAH += $Zero;				
				$AmrH += $Zero;
				$FaresAsh += $Zero;

		}
		?>
		<td style="background:lightblue;color:navy;font-weight:bolder;font-size:20px;"><?php echo number_format($res['Profit']);?></td>
			<?php
			$PROFIT += $res['Profit'];
			?>
		<?php 
		}
?>
		</tr>
		  <div>
			  <tr>
		  		<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Actual Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"> <?php echo number_format($TACPAK);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Sold Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px">
				<?php echo number_format($TACPAK+$PROFIT);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="font-weight:bolder;color:purple;background-color:rgb(57, 204, 199);font-size:22px"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
		  	</tr>
		  <tr>
		  		<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:lavender;font-weight:bolder;font-size:22px;">Total Asmaa Amin's Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AsmaaAMIN);?> LE.</td>
				<td style="background:DodgerBlue;color:navy;font-weight:bolder;font-size:22px;"></td></tr>
		  <tr>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;">Total Ibrahim Amin's Profit</td>
			<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($IbrahimAmin);?> LE.</td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;">Total Bassem Khaled's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Bassem5aled);?> LE.</td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>

		  <tr>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;">Total Omar Fathy's Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OmarFathy);?> LE.</td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;">Total Arsany Beshara's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Arsanybeshara);?> LE.</td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;">Total Tarek Abd El Azim's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Tarek3bdl3azim);?> LE.</td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;">Total Obadah Motasem's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OBADAH);?> LE.</td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;">Total Amr Hamed's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AmrH);?> LE.</td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
			 <tr>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;">Total Fares ElAshryy's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($FaresAsh);?> LE.</td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:lavender;font-weight:bolder;font-size:22px;">Total Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($PROFIT);?> LE.</td>
		  </tr>
		  
			</div>
      </tbody>
    </table>
  
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    td2 = tr[i].getElementsByTagName("td")[14];
    td3 = tr[i].getElementsByTagName("td")[13];
    td4 = tr[i].getElementsByTagName("td")[2];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
      var aztxtValue = td3.textContent || td3.innerText;
      var sztxtValue = td4.textContent || td4.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1|| ztxtValue.toUpperCase().indexOf(filter) > -1
	  || aztxtValue.toUpperCase().indexOf(filter) > -1|| sztxtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<br>

<div align='center'>
<a class="button" href="Apparels.php">Make New Order</a><br><br><br><br>
<a class="button button2" href="SellerOrdersShirts.php">View My Orders</a><br><br><br><br>
<a class="button button4" href="InventoryC.php">View Inventory</a><br><br><br><br>
<a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
<a class="button button3" href="Logout.php">Logout</a><br><br><br><br>
</div>

</form>
<?php
}
	else if(!empty($_POST['Z']) && empty($_POST['rbtn']))
	{
	$Year=$_POST['Z'];
?>
	<div align="center">
<a class="button" style="background:green;" href="ExportALLDataAppYear.php?Year=<?php echo $Year;?>">Export To Excel</a>
</div><br><br><br>	
<form method="post" action="<?php $_PHP_SELF ?>">
<label class="radio"> 
<input type="radio" name="Z" id="Z" checked required value="<?php echo $Year;?>">
<span>
<div class="row"><big><b><?php echo $Year;?></b></big></div>
</span> 
</label><br>

<?php
$Monthz = $mycon->query("SELECT DISTINCT Month(Date) AS MONTH,Year(Date) FROM `BuyApp` WHERE Year(Date) = $Year ORDER BY `MONTH` ASC");
while ($Date = mysqli_fetch_array ($Monthz)){
	if($Date['MONTH'] == 1){
	$D = 'January';
}else if($Date['MONTH'] == 2){
	$D = 'February';
}else if($Date['MONTH'] == 3){
	$D = 'March';
}else if($Date['MONTH'] == 4){
	$D = 'April';
}else if($Date['MONTH'] == 5){
	$D = 'May';
}else if($Date['MONTH'] == 6){
	$D = 'June';
}else if($Date['MONTH'] == 7){
	$D = 'July';
}else if($Date['MONTH'] == 8){
	$D = 'August';
}else if($Date['MONTH'] == 9){
	$D = 'September';
}else if($Date['MONTH'] == 10){
	$D = 'October';
}else if($Date['MONTH'] == 11){
	$D = 'November';
}else if($Date['MONTH'] == 12){
	$D = 'December';
}
?>
<label class="radio"> 
<input type="radio" name="rbtn" id="rbtn" required value="<?php echo $Date['MONTH'];?>">
<span>
<div class="row"><big><b><?php echo $D; ?></b></big></div>
</span> 
</label>
<?php
}

$sql = "SELECT DISTINCT BuyApp.CPhone As Phone,BuyApp.SID,BuyApp.PN,BuyApp.ID,BuyApp.Datetime
,Month(Date) As Month,Year(Date) As Year, BuyApp.Date,BuyApp.sPrice,BuyApp.Shipping,BuyApp.Size,
BuyApp.Quantity,BuyApp.Userprofit AS UserProfit,BuyApp.Profit, Pages.Platform,Pages.Type,BuyApp.PN, 
customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Apparel.AID,BuyApp.ActualPrice,
BuyApp.Price AS MinimumPrice,BuyApp.Sprice AS SoldPrice,
Apparel.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,BuyApp.AppType,Apparel.Model,
salesperson.Gender 
From BuyApp JOIN Pages ON Pages.ID=BuyApp.PN 
JOIN customers ON BuyApp.CPhone = customers.CPhone 
JOIN salesperson ON BuyApp.SID = salesperson.SID 
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate 
JOIN Apparel on BuyApp.ID=Apparel.AID 
WHERE Year(Date) = '$Year' 
ORDER BY `BuyApp`.`Datetime` DESC
";
$ALL = mysqli_query($mycon,$sql);

$AhmedAminProf;
$M7med3liProf;
$AsmaaAMIN;
$IbrahimAmin;
$Bassem5aled;
$OmarFathy;
$Arsanybeshara;
$Tarek3bdl3azim;
$AhmedYasser;
$OBADAH;
$Amrh;
$FaresAsh;
$PROFIT;
$Zero=0.0;
$Count;
$TSPAK;
$TACPAK;
?>
<br>
<table id ='myTable'>
    <thead>
<tr>  
<th>Order Number</th>
<th>Apparel Image</th>
<th>Apparel Model</th>
<th>Apparel Type</th>
<th>Platform</th>
<th>Apparel Size</th>
<th>Apparel Quantity</th>
<th>Apparel Shipping Price</th>	
<th>Apparel Actual Price</th>
<th>Apparel Minimum Price</th>
<th>Apparel Sold Price</th>
<th>Seller Image</th>
<th>Seller Name</th>
<th>Customer's Name</th>
<th>Customer's Phone Number</th>
<th>Customer's City</th>
<th>Customer's Zone</th>
<th>Customer's Address</th>
<th>Date Sold</th>
<th>User Profit</th>
<th>Total Profit</th>
    </tr>
</thead>
<tbody>
 		<?php
		 while ($res = mysqli_fetch_array ($ALL))
			{
			 $Count++;
			?>
        <tr>
          <td><?php echo $Count;?></td>
          <td><a href="Apparel.php?ID=<?php echo $res['AID'];?>" class="text-dark">
		  <img class="image"src="images/Apparel/<?php echo $res['SHOEIMG'];?>"></a></td>
          <td><?php echo $res['Model'];?></td>
          <td><?php echo $res['AppType'];?></td>
          <td><?php echo $res['Platform'];?></td>
          <td><?php echo $res['Size'];?></td>
          <td><?php echo $res['Quantity'];?></td>
          <td><?php echo $res['Shipping'];?> LE.</td>
          <td><?php echo number_format($res['ActualPrice']*$res['Quantity']);?> LE.</td>
			<?php
			 $TACPAK += $res['ActualPrice']*$res['Quantity'];
			?>
          <td><?php echo number_format($res['MinimumPrice']*$res['Quantity']);?> LE.</td>
          <td><?php echo number_format($res['SoldPrice']*$res['Quantity']);?> LE.</td>
          <td><a href="EORDERApp.php?SID=<?php echo $res['SID'];?>"><img class="image"src="images/<?php echo $res['SIMG'];?>"></a></td>
          <td><?php echo $res['Sname'];?></td>
          <td><?php echo $res['Name'];?></td>
          <td style='color:lavender;background:#6c7ae0;font-weight:bolder;'><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
		  <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
          <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
          <td><?php echo $res['Address'];?></td>
          <td><?php echo $res['Datetime'];?></td>
		
		 <?php
			 if($res['Sname'] == 'Asmaa Amin'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $AsmaaAMIN += $res['UserProfit'];
			 }else if($res['Sname'] == 'Ibrahim Amin'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $IbrahimAmin += $res['UserProfit'];
			 }else if($res['Sname'] == 'Bassem Khaled'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $Bassem5aled += $res['UserProfit'];
			 }else if($res['Sname'] == 'Omar Mohamed Fathy'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $OmarFathy += $res['UserProfit'];
			 }else if($res['Sname'] == 'Arsany Beshara'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Arsanybeshara += $res['UserProfit'];
			 }else if($res['Sname'] == 'Tarek Abd El Azim'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Tarek3bdl3azim += $res['UserProfit'];
			 }else if($res['Sname'] == 'Obadah Motasem'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $OBADAH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Amr Hamed'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $AmrH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Fares ElAshryy'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $FaresAsh += $res['UserProfit'];
			 }else{
				 ?>
          		 
				 <td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo number_format($res['UserProfit']);?></td>
		 <?php
				$AsmaaAMIN += $Zero;
				$IbrahimAmin += $Zero;
				$Bassem5aled += $Zero;
				$OmarFathy += $Zero;
				$Arsanybeshara += $Zero;
				$Tarek3bdl3azim += $Zero;
				$AhmedYasser += $Zero;
				$OBADAH += $Zero;				
				$AmrH += $Zero;
				$FaresAsh += $Zero;

		}
		?>
		<td style="background:lightblue;color:navy;font-weight:bolder;font-size:20px;"><?php echo number_format($res['Profit']);?></td>
			<?php
			$PROFIT += $res['Profit'];
			?>
		<?php 
		}
?>
		</tr>
		  <div>
			  <tr>
		  		<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Actual Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"> <?php echo number_format($TACPAK);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Sold Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px">
				<?php echo number_format($TACPAK+$PROFIT);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="font-weight:bolder;color:purple;background-color:rgb(57, 204, 199);font-size:22px"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
		  	</tr>
		  <tr>
		  		<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:lavender;font-weight:bolder;font-size:22px;">Total Asmaa Amin's Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AsmaaAMIN);?> LE.</td>
				<td style="background:DodgerBlue;color:navy;font-weight:bolder;font-size:22px;"></td></tr>
		  <tr>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;">Total Ibrahim Amin's Profit</td>
			<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($IbrahimAmin);?> LE.</td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;">Total Bassem Khaled's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Bassem5aled);?> LE.</td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>

		  <tr>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;">Total Omar Fathy's Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OmarFathy);?> LE.</td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;">Total Arsany Beshara's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Arsanybeshara);?> LE.</td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;">Total Tarek Abd El Azim's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Tarek3bdl3azim);?> LE.</td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;">Total Obadah Motasem's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OBADAH);?> LE.</td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;">Total Amr Hamed's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AmrH);?> LE.</td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
			 <tr>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;">Total Fares ElAshryy's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($FaresAsh);?> LE.</td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:lavender;font-weight:bolder;font-size:22px;">Total Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($PROFIT);?> LE.</td>
		  </tr>
		  
			</div>
      </tbody>
    </table>
  
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    td2 = tr[i].getElementsByTagName("td")[14];
    td3 = tr[i].getElementsByTagName("td")[13];
    td4 = tr[i].getElementsByTagName("td")[2];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
      var aztxtValue = td3.textContent || td3.innerText;
      var sztxtValue = td4.textContent || td4.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1|| ztxtValue.toUpperCase().indexOf(filter) > -1
	  || aztxtValue.toUpperCase().indexOf(filter) > -1|| sztxtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<br>


<div align='center'>
<a class="button button3" href="ashirts.php">Back To All</a><br><br><br><br>
<a class="button" href="Products.php">Make New Order</a><br><br><br><br>
<a class="button button2" href="SellerOrders.php">View My Orders</a><br><br><br><br>
<a class="button button4" href="InventoryS.php">View Inventory</a><br><br><br><br>
<a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
<a class="button button3" href="Logout.php">Logout</a><br><br><br><br>
</div>


</form>
<?php
}
	else if(!empty($_POST['rbtn']) && !empty($_POST['Z'])){
	$Month=$_POST['rbtn'];
	$Year=$_POST['Z'];
	
if($Month == 1){
	$D = 'January';
}else if($Month == 2){
	$D = 'February';
}else if($Month == 3){
	$D = 'March';
}else if($Month == 4){
	$D = 'April';
}else if($Month == 5){
	$D = 'May';
}else if($Month == 6){
	$D = 'June';
}else if($Month == 7){
	$D = 'July';
}else if($Month == 8){
	$D = 'August';
}else if($Month == 9){
	$D = 'September';
}else if($Month == 10){
	$D = 'October';
}else if($Month == 11){
	$D = 'November';
}else if($Month == 12){
	$D = 'December';
}
?>

	<div align="center">
<a class="button" style="background:green;" href="ExportALLDataAppMonth.php?Month=<?php echo $Month;?>&amp;Year=<?php echo $Year;?>">Export To Excel</a>
</div><br><br><br>	
<label class="radio"> 
<input type="radio" name="rbtn" id="rbtn" checked required value="<?php echo $Month;?>">
<span>
<div class="row"><big><b><?php echo $D;?></b></big></div>
</span> 
</label>
<label class="radio"> 
<input type="radio" name="Z" id="Z" checked required value="<?php echo $Year;?>">
<span>
<div class="row"><big><b><?php echo $Year;?></b></big></div>
</span> 
</label>
<?php
$sql = "SELECT DISTINCT BuyApp.CPhone As Phone,BuyApp.SID,BuyApp.PN,BuyApp.ID,BuyApp.Datetime
,Month(Date) As Month,Year(Date) As Year, BuyApp.Date,BuyApp.sPrice,BuyApp.Shipping,BuyApp.Size,
BuyApp.Quantity,BuyApp.Userprofit AS UserProfit,BuyApp.Profit, Pages.Platform,Pages.Type,BuyApp.PN, 
customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Apparel.AID,BuyApp.ActualPrice,
BuyApp.Price AS MinimumPrice,BuyApp.Sprice AS SoldPrice,
Apparel.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,BuyApp.AppType,Apparel.Model,
salesperson.Gender 
From BuyApp JOIN Pages ON Pages.ID=BuyApp.PN 
JOIN customers ON BuyApp.CPhone = customers.CPhone 
JOIN salesperson ON BuyApp.SID = salesperson.SID 
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate 
JOIN Apparel on BuyApp.ID=Apparel.AID 
WHERE Month(Date) = '$Month' 
AND Year(Date) = '$Year'  
ORDER BY `BuyApp`.`Datetime` DESC;
";
$ALL = mysqli_query($mycon,$sql);

$AhmedAminProf;
$M7med3liProf;
$AsmaaAMIN;
$IbrahimAmin;
$Bassem5aled;
$OmarFathy;
$Arsanybeshara;
$Tarek3bdl3azim;
$AhmedYasser;
$OBADAH;
$Amrh;
$FaresAsh;
$PROFIT;
$Zero=0.0;
$Count;
$TSPAK;
$TACPAK;
?>
<br>
<table id ='myTable'>
    <thead>
<tr>  
<th>Order Number</th>
<th>Apparel Image</th>
<th>Apparel Model</th>
<th>Apparel Type</th>
<th>Platform</th>
<th>Apparel Size</th>
<th>Apparel Quantity</th>
<th>Apparel Shipping Price</th>	
<th>Apparel Actual Price</th>
<th>Apparel Minimum Price</th>
<th>Apparel Sold Price</th>
<th>Seller Image</th>
<th>Seller Name</th>
<th>Customer's Name</th>
<th>Customer's Phone Number</th>
<th>Customer's City</th>
<th>Customer's Zone</th>
<th>Customer's Address</th>
<th>Date Sold</th>
<th>User Profit</th>
<th>Total	 Profit</th>
    </tr>
</thead>
<tbody>
 		<?php
		 while ($res = mysqli_fetch_array ($ALL))
			{
			 $Count++;
			?>
        <tr>
          <td><?php echo $Count;?></td>
          <td><a href="Apparel.php?ID=<?php echo $res['AID'];?>" class="text-dark">
		  <img class="image"src="images/Apparel/<?php echo $res['SHOEIMG'];?>"></a></td>
          <td><?php echo $res['Model'];?></td>
          <td><?php echo $res['AppType'];?></td>
          <td><?php echo $res['Platform'];?></td>
          <td><?php echo $res['Size'];?></td>
          <td><?php echo $res['Quantity'];?></td>
          <td><?php echo $res['Shipping'];?> LE.</td>
          <td><?php echo number_format($res['ActualPrice']*$res['Quantity']);?> LE.</td>
			<?php
			 $TACPAK += $res['ActualPrice']*$res['Quantity'];
			?>
          <td><?php echo number_format($res['MinimumPrice']*$res['Quantity']);?> LE.</td>
          <td><?php echo number_format($res['SoldPrice']*$res['Quantity']);?> LE.</td>
          <td><a href="EORDERApp.php?SID=<?php echo $res['SID'];?>"><img class="image"src="images/<?php echo $res['SIMG'];?>"></a></td>
          <td><?php echo $res['Sname'];?></td>
          <td><?php echo $res['Name'];?></td>
          <td style='color:lavender;background:#6c7ae0;font-weight:bolder;'><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
		  <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
          <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
          <td><?php echo $res['Address'];?></td>
          <td><?php echo $res['Datetime'];?></td>
	 <?php
			 if($res['Sname'] == 'Asmaa Amin'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $AsmaaAMIN += $res['UserProfit'];
			 }else if($res['Sname'] == 'Ibrahim Amin'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $IbrahimAmin += $res['UserProfit'];
			 }else if($res['Sname'] == 'Bassem Khaled'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				 $Bassem5aled += $res['UserProfit'];
			 }else if($res['Sname'] == 'Omar Mohamed Fathy'){
		   ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $OmarFathy += $res['UserProfit'];
			 }else if($res['Sname'] == 'Arsany Beshara'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Arsanybeshara += $res['UserProfit'];
			 }else if($res['Sname'] == 'Tarek Abd El Azim'){
		  ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
				  $Tarek3bdl3azim += $res['UserProfit'];
			 }else if($res['Sname'] == 'Obadah Motasem'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $OBADAH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Amr Hamed'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $AmrH += $res['UserProfit'];
			 }else if($res['Sname'] == 'Fares ElAshryy'){
				 ?>
				<td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo $res['UserProfit'];?></td>
			<?php
		   $FaresAsh += $res['UserProfit'];
			 }else{
				 ?>
          		 
				 <td style = 'background:#4CAF50;color:#cfffe5;font-weight:bolder;font-size:20px;'><?php echo number_format($res['UserProfit']);?></td>
		 <?php
				$AsmaaAMIN += $Zero;
				$IbrahimAmin += $Zero;
				$Bassem5aled += $Zero;
				$OmarFathy += $Zero;
				$Arsanybeshara += $Zero;
				$Tarek3bdl3azim += $Zero;
				$AhmedYasser += $Zero;
				$OBADAH += $Zero;				
				$AmrH += $Zero;
				$FaresAsh += $Zero;

		}
		?>
		<td style="background:lightblue;color:navy;font-weight:bolder;font-size:20px;"><?php echo number_format($res['Profit']);?></td>
			<?php
			$PROFIT += $res['Profit'];
			?>
		<?php 
		}
?>
		</tr>
		  <div>
			  <tr>
		  		<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Actual Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"> <?php echo number_format($TACPAK);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;">Total Sold Price</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px">
				<?php echo number_format($TACPAK+$PROFIT);?> LE.</td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:white;font-weight:bolder"></td>
				<td style="background:rgb(57, 204, 199);color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="font-weight:bolder;color:purple;background-color:rgb(57, 204, 199);font-size:22px"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
				<td style="background:rgb(57, 204, 199);color:navy;font-weight:bolder;font-size:22px;"></td>
		  	</tr>
		  <tr>
		  		<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:white;font-weight:bolder"></td>
				<td style="background:DodgerBlue;color:lavender;font-weight:bolder;font-size:22px;">Total Asmaa Amin's Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AsmaaAMIN);?> LE.</td>
				<td style="background:DodgerBlue;color:navy;font-weight:bolder;font-size:22px;"></td></tr>
		  <tr>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;">Total Ibrahim Amin's Profit</td>
			<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($IbrahimAmin);?> LE.</td>
			<td style="background:#4b0000;color:white;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;">Total Bassem Khaled's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Bassem5aled);?> LE.</td>
				<td style="background:#7e91d8;color:lavender;font-weight:bolder;font-size:22px;"></td>

		  <tr>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;">Total Omar Fathy's Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OmarFathy);?> LE.</td>
			  <td style="background:#4cc5d8;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;">Total Arsany Beshara's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Arsanybeshara);?> LE.</td>
				<td style="background:#cc3600;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;">Total Tarek Abd El Azim's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($Tarek3bdl3azim);?> LE.</td>
				<td style="background:#cc3680;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;">Total Obadah Motasem's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($OBADAH);?> LE.</td>
				<td style="background:#ff6784;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		<tr>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;">Total Amr Hamed's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($AmrH);?> LE.</td>
				<td style="background:#993366;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
			 <tr>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;">Total Fares ElAshryy's Profit</td>
				<td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($FaresAsh);?> LE.</td>
				<td style="background:#003399;color:lavender;font-weight:bolder;font-size:22px;"></td>
		  </tr>
		  <tr>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:navy;font-weight:bolder;font-size:22px;"></td>
			  <td style="background:#000000;color:lavender;font-weight:bolder;font-size:22px;">Total Profit</td>
			  <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:22px"><?php echo number_format($PROFIT);?> LE.</td>
		  </tr>
		  
			</div>
      </tbody>
    </table>
  
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    td2 = tr[i].getElementsByTagName("td")[14];
    td3 = tr[i].getElementsByTagName("td")[13];
    td4 = tr[i].getElementsByTagName("td")[2];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
      var aztxtValue = td3.textContent || td3.innerText;
      var sztxtValue = td4.textContent || td4.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1|| ztxtValue.toUpperCase().indexOf(filter) > -1
	  || aztxtValue.toUpperCase().indexOf(filter) > -1|| sztxtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<br>


<div align='center'>
<a class="button button3" href="ashirts.php">Back To All</a><br><br><br><br>
<a class="button " href="Products.php">Make New Order</a><br><br><br><br>
<a class="button button2" href="SellerOrders.php">View My Orders</a><br><br><br><br>
<a class="button button4" href="InventoryS.php">View Inventory</a><br><br><br><br>
<a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
<a class="button button3" href="Logout.php">Logout</a><br><br><br><br>
</div>

<?php
}
}else{
	require('E7.php');
}
}else{
	require('UserLogin.php');
}
?>
</body>
</html>
  