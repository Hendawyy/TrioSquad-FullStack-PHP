<?php
session_start();
error_reporting(0);
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>My Orders Apparel</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
	

<script  type='text/javascript'>
	$(document).ready(function() { 
	$('input[name=Z]').change(function(){
    $('form').submit();

});
});
</script>
	
	
	
<script  type='text/javascript'>

	$(document).ready(function() { 
	$('input[name=rbtn]').change(function(){
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
    background-color:lavender;
    color:cadetblue;
    display: inline-block;
    margin-right: 2vh
}

label.radio input:checked+span {
    border: 1px solid white;
    padding: 1vh 4vh;
    background-color: lavender;
    margin-right: 2vh;
    color:darkmagenta;
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
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    box-shadow: 2000px 5050px 7000px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */
/*
@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative
        float:left;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }*/

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

.dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
text-align: center;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  overflow-x: hidden;
  overflow-y: auto;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display:inherit;
  
	
	
}

.dropdown-content a:hover {
	background-color:navy;
	color:antiquewhite;
}

.dropdown:hover .dropdown-content {
  display: block;

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
  border-bottom: 2px solid aqua;
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
#myTable {}
</style>
</head>

<?php
$result = $mycon->query("SELECT * FROM salesperson Where SID = $ID");
$rez = mysqli_fetch_array ($result);
$Admin = $rez['Admin'];
$Name = $rez['Sname'];
$TSSP;
$TTP;
$TSAP;
$TADP;
$Month = $mycon->query("SELECT DISTINCT Month(Date) AS MONTH FROM `BuyApp` WHERE SID = $ID ORDER BY `MONTH` ASC");
$Year = $mycon->query("SELECT DISTINCT Year(Date) AS YEAR FROM `BuyApp` WHERE SID = $ID ORDER BY `YEAR` ASC");
$D;
$Count=0;
?>

<h2><?php echo $rez['Sname']; ?>'s Table</h2>
<center>
<div class="dropdown"> 
<li style="list-style-type:none;">
 <span><img src="images/<?php echo $rez['Image'];?>" style="width:250px;border-radius: 50%;"></span>
<div class="dropdown-content">
<?php
if ($Admin == 'NO') {
    if ($rez['Sname'] == 'Ziad Mohamed') {
?>
			  <ul style="color: black;padding: 12px 16px;text-decoration: none;display:inherit;">
			 <li style= "list-style-type:none;"><a href="AddPerfume.php" class="w3-bar-item w3-button">Add Perfume</a></li>
			  <li style= "list-style-type:none;"><a href="Perfumes.php" class="w3-bar-item w3-button">View Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryP.php" class="w3-bar-item w3-button">View All Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="Products.php" class="w3-bar-item w3-button">View Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="InventorySU.php" class="w3-bar-item w3-button">View All Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="Apparels.php" class="w3-bar-item w3-button">View Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryCU.php" class="w3-bar-item w3-button">View All Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersPerfumes.php" class="w3-bar-item w3-button">View MY Perfumes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrders.php" class="w3-bar-item w3-button">View MY Shoes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersShirts.php" class="w3-bar-item w3-button">View MY Apparel Orders</a></li>
			  <li style= "list-style-type:none;"><a href="AllPerfumesOrders.php" class="w3-bar-item w3-button">View All Perfumes Orders</a></li>
  			  <li style= "list-style-type:none;"><a href="Logout.php" class="w3-bar-item w3-button">Logout</a></li>
			  </ul>
<?php
    }
    else if ($rez['Sname'] == 'Marwan Hamed') {
?>
			  <ul style="color: black;padding: 12px 16px;text-decoration: none;display:inherit;">
			  <li style= "list-style-type:none;"><a href="AddApp.php" class="w3-bar-item w3-button">Add Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="Apparels.php" class="w3-bar-item w3-button">View Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryC.php" class="w3-bar-item w3-button">View All Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="Perfumes.php" class="w3-bar-item w3-button">View Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryPU.php" class="w3-bar-item w3-button">View All Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="Products.php" class="w3-bar-item w3-button">View Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="InventorySU.php" class="w3-bar-item w3-button">View All Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersPerfumes.php" class="w3-bar-item w3-button">View MY Perfumes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrders.php" class="w3-bar-item w3-button">View MY Shoes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersShirts.php" class="w3-bar-item w3-button">View MY Apparel Orders</a></li>
			  <li style= "list-style-type:none;"><a href="ashirts.php" class="w3-bar-item w3-button">View All Apparel Orders</a></li>
  			  <li style= "list-style-type:none;"><a href="Logout.php" class="w3-bar-item w3-button">Logout</a></li>
			  </ul>
		  

<?php
    }
    else if ($rez['Sname'] != 'Ziad Mohamed' && $rez['Sname'] != 'Marwan Hamed') {
?>
			  <ul style="color: black;padding: 12px 16px;text-decoration: none;display:inherit;">
			  <li style= "list-style-type:none;"><a href="Products.php" class="w3-bar-item w3-button">View Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="InventorySU.php" class="w3-bar-item w3-button">View All Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="Perfumes.php" class="w3-bar-item w3-button">View Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryPU.php" class="w3-bar-item w3-button">View All Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="Apparels.php" class="w3-bar-item w3-button">View Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryCU.php" class="w3-bar-item w3-button">View All Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrders.php" class="w3-bar-item w3-button">View Shoes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersPerfumes.php" class="w3-bar-item w3-button">View Perfumes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersShirts.php" class="w3-bar-item w3-button">View Apparel Orders</a></li>
  			  <li style= "list-style-type:none;"><a href="Logout.php" class="w3-bar-item w3-button">Logout</a></li>
			  </ul>
		  

<?php
    }
  } else if ($Admin == 'Yes') {   
       if ($rez['Sname'] == 'Ahmed Amin') {
?>
<!-------navigationbar-------->

			  <ul style="color: black;padding: 12px 16px;text-decoration: none;display:inherit;">
			  <li style= "list-style-type:none;"><a href="AddShoe.php" class="w3-bar-item w3-button">Add A Shoe</a></li>
			  <li style= "list-style-type:none;"><a href="AddPerfume.php" class="w3-bar-item w3-button">Add A Perfume</a></li>
			  <li style= "list-style-type:none;"><a href="Products.php" class="w3-bar-item w3-button">View Shoes</a></li>
			  <li style= "list-style-type:none;"><a href="Perfumes.php" class="w3-bar-item w3-button">View Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="EmployeeS.php" class="w3-bar-item w3-button">View Employees</a></li>
			  <li style= "list-style-type:none;"><a href="Customers.php" class="w3-bar-item w3-button">View Customers</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryS.php" class="w3-bar-item w3-button">Shoes Inventory</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryP.php" class="w3-bar-item w3-button">Perfume Inventory</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryC.php" class="w3-bar-item w3-button">Apparel Inventory</a></li>
		<li style= "list-style-type:none;"><a href="SellerOrders.php" class="w3-bar-item w3-button">View My Shoes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersPerfumes.php" class="w3-bar-item w3-button">View My Perfume Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersShirts.php" class="w3-bar-item w3-button">View My Apparel Orders</a></li>
			  <li style= "list-style-type:none;"><a href="a.php" class="w3-bar-item w3-button">View All Shoes Order</a></li>
			  <li style= "list-style-type:none;"><a href="AllPerfumesOrders.php" class="w3-bar-item w3-button">View All Perfumes Order</a></li>
			  <li style= "list-style-type:none;"><a href="ashirts.php" class="w3-bar-item w3-button">View All Apparel Order</a></li>
  			  <li style= "list-style-type:none;"><a href="Logout.php" class="w3-bar-item w3-button">Logout</a></li>
			  </ul>	
		  
<?php      }
      else {
?>
<ul style="color: black;padding: 12px 16px;text-decoration: none;display:inherit;">
			  <li style= "list-style-type:none;"><a href="AddShoe.php" class="w3-bar-item w3-button">Add A Shoe</a></li>
			  <li style= "list-style-type:none;"><a href="Products.php" class="w3-bar-item w3-button">View Shoes</a></li>
			<li style= "list-style-type:none;"><a href="Customers.php" class="w3-bar-item w3-button">View Customers</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryS.php" class="w3-bar-item w3-button">Shoes Inventory</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrders.php" class="w3-bar-item w3-button">View My Shoes Orders</a></li>
         <li style= "list-style-type:none;"><a href="Perfumes.php" class="w3-bar-item w3-button">View Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryPU.php" class="w3-bar-item w3-button">View All Perfumes</a></li>
			  <li style= "list-style-type:none;"><a href="Apparels.php" class="w3-bar-item w3-button">View Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="InventoryCU.php" class="w3-bar-item w3-button">View All Apparel</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersPerfumes.php" class="w3-bar-item w3-button">View Perfumes Orders</a></li>
			  <li style= "list-style-type:none;"><a href="SellerOrdersShirts.php" class="w3-bar-item w3-button">View Apparel Orders</a></li>
  			  <li style= "list-style-type:none;"><a href="Logout.php" class="w3-bar-item w3-button">Logout</a></li>
</ul>
<?php      }    }
?>
			  
</div>
</li>
</div>
</center>
<br>
<br>
<br>

<?php
if(empty($_POST['Z'])){
?>
<form method="post"  action="<?php $_PHP_SELF ?>">
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
$sql = "SELECT BuyApp.CPhone As Phone,customers.Name,cities.city_name_ar,
        cities.city_name_en,governorates.governorate_name_ar,governorates.governorate_name_en,
        Apparel.AID, Month(Date) As Month, Year(Date) As Year,Date,SID,Datetime, Shipping,Size,Quantity,
        Name As CustomerName,Gender,Address,Model, BuyApp.Price as MinimumPrice,sPrice as SoldPrice,Apparel.Type,
        BuyApp.ActualPrice,Profit,UserProfit, Apparel.Image 
        FROM `BuyApp` JOIN customers on BuyApp.CPhone = customers.CPhone 
        JOIN cities ON cities.id = customers.Zone 
        JOIN governorates on governorates.id=customers.Governorate 
        JOIN Apparel on BuyApp.ID=Apparel.AID WHERE SID = '$ID' ORDER BY `BuyApp`.`Datetime` DESC ";

$ORDERS = mysqli_query($mycon,$sql);
?>

<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Customers.."/><br><br><br>
</div>
</center>
<div class="table-wrapper">
    <table class="fl-table" id ='myTable'>
        <thead>
        <tr>
			<th>Order Number</th>
			<th>Apparel Image</th>
      <th>Apparel Model</th>
			<th>Apparel Type</th>
      <th>Apparel Size</th>
      <th>Apparel Quantity</th>
      <th>Apparel Sold Price Per Unit</th>
      <th>Total Apparel Sold Price</th>
			<?php
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
			<th>Apparel Actual Price Per Unit</th>
			<th>Total Apparel Actual Price</th>
			<th>Apparel Shipping price</th>
			<th>Total Profit</th>
			<?php
			}else {
			?>
			<th>Minimum Selling Price Per Unit</th>	
			<th>Total Minimum Selling Price</th>
      <th>User Profit Per Unit</th>
			<th>Total User Profit</th>
			<th>Shoe Shipping price</th>
			<?php
			}
      ?>
			<th>Customer's Name</th>
            <th>Customer's Phone Number</th>
            <th>Customer's City</th>
            <th>Customer's Zone</th>
            <th>Customer's Address</th>
            <th>Date Sold</th>
            <th>Delete Order</th>
        </tr>
        </thead>
		<?php
		while ($res = mysqli_fetch_array ($ORDERS))
			{
			$Count++;
		?>	
<tbody>
			<tr>	
			<td><?php echo $Count;?></td>
			<td><img class="image"src="images/Apparel/<?php echo $res['Image'];?>"></td>
            <td><?php echo $res['Model'];?></td>
            <td><?php echo $res['Type'];?></td>
            <td><?php echo $res['Size'];?></td>
            <td><?php echo $res['Quantity'];?></td>
            <td><?php echo number_format($res['SoldPrice']);?> LE.</td>
		<?php $A=$res['SoldPrice']*$res['Quantity']; ?>
            <td><?php  echo number_format($A);?> LE.</td>
			<?php 
			$TSSP +=$A;
			$ACP = $res['ActualPrice'];
			$TACP = $res['ActualPrice']*$res['Quantity'];
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
            
			<td><?php echo number_format($ACP);?> LE.</td>
			<td><?php echo number_format($TACP);?> LE.</td>
			<?php
			$TSAP += $TACP;
			$profit = $A - $TACP;
			?>
			<td><?php echo $res['Shipping'];?> LE.</td>
			<td><?php echo number_format($res['Profit']);?> LE.</td>
			<?php
				$TADP += $res['Profit'];
			}else{
			?>
			<?php
				 $MSPQ = $res['MinimumPrice'] *  $res['Quantity'];
				 $OP = $res['SP'] *  $res['Quantity'];
				$EXP = $A - $MSPQ;
				?>
				<td><?php echo number_format($res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($MSPQ);?> LE.</td>
				<td><?php echo number_format($res['SoldPrice']-$res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($res['UserProfit']);?> LE.</td>
				<td><?php echo number_format($res['Shipping']);?> LE.</td>
			<?php
				$TTP += $res['UserProfit'];
			}
        
			?>
			      <td><?php echo $res['Name'];?></td>
            <td><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
            <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
            <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
            <td><?php echo $res['Address'];?></td>
            <td><?php echo $res['Datetime'];?></td>
           	<td><a href='DeleteOrderApp.php?DT=<?php echo $res['Datetime'];?>&amp;P=<?php echo $res['Phone'];?>&amp;SHID=<?php echo $res['AID'];?>&amp;QTY=<?php echo $res['Quantity'];?>&amp;Size=<?php echo $res['Size'];?>&amp;SID=<?php echo $res['SID'];?>'><i class='fa fa-trash-o' style='font-size:38px;color:crimson'></i></a></td>
        </tr>
        
        
		<?php
			}
		?>
			
				<?php
				if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
				?>
	<tr>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Sold Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSSP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Actual Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSAP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;;font-size:20px"><?php echo $TADP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
		<td style="background-color:rgba( 71, 147, 227, 1);"></td>
			</tr>
				<?php
				}else{
				?>
	<tr>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
		<td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total <?php echo $rez['Sname']; ?> 's Profit</td>
        <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px;">
        <?php echo $TTP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        </tr>
				<?php
				}
				?>
		</tbody>
		    
    </table>

<center><br>
<a class="button button2" href="Apparels.php">Make New Order</a><br><br><br><br>
<?php
if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<a class="button" href="InventoryC.php">See Inventory</a><br><br><br><br>
<?php
	if($Name == 'Ahmed Amin'){
    ?>
    <a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
    <a class="button button4" href="KOloApparel.php">See All Orders</a><br><br><br><br>
	
<?php
	}
}else{
  ?>
<a class="button" href="InventoryCU.php">See Inventory</a><br><br><br><br>
<?php
}
?>
<a class="button button3" href="Logout.php">Logout</a><br><br><br>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
	}else{
  ?>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[13];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
  
  <?php		
  }
?>

</div>
</form>	
	
	
	
	
	
	
	
	
	

<?php
}
else if(!empty($_POST['Z']) && empty($_POST['rbtn'])){
$Year=$_POST['Z'];
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<label class="radio"> 
<input type="radio" name="Z" id="Z" checked required value="<?php echo $Year;?>">
<span>
<div class="row"><big><b><?php echo $Year;?></b></big></div>
</span> 
</label><br>

<?php
$Monthz = $mycon->query("SELECT DISTINCT Month(Date) AS MONTH,Year(Date) FROM `BuyApp` WHERE Year(Date) = $Year AND SID = $ID ORDER BY `MONTH` ASC");
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
$sql = 
"SELECT BuyApp.CPhone As Phone,customers.Name,cities.city_name_ar,
        cities.city_name_en,governorates.governorate_name_ar,governorates.governorate_name_en,
        Apparel.AID, Month(Date) As Month, Year(Date) As Year,Date,SID,Datetime, Shipping,Size,Quantity,
        Name As CustomerName,Gender,Address,Model, BuyApp.Price as MinimumPrice,sPrice as SoldPrice,Apparel.Type,
        BuyApp.ActualPrice,Profit,UserProfit, Apparel.Image 
        FROM `BuyApp` JOIN customers on BuyApp.CPhone = customers.CPhone 
        JOIN cities ON cities.id = customers.Zone 
        JOIN governorates on governorates.id=customers.Governorate 
        JOIN Apparel on BuyApp.ID=Apparel.AID WHERE SID = '$ID'
        AND Year(Date) = $Year ORDER BY `BuyApp`.`Datetime` DESC ";					   
$ORDERS = mysqli_query($mycon,$sql);
?>

<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Customers.."/><br><br><br>
</div>
</center>
<div class="table-wrapper">
    <table class="fl-table" id ='myTable'>
        <thead>
        <tr>
			<th>Order Number</th>
			<th>Apparel Image</th>
      <th>Apparel Model</th>
			<th>Apparel Type</th>
      <th>Apparel Size</th>
      <th>Apparel Quantity</th>
      <th>Apparel Sold Price Per Unit</th>
      <th>Total Apparel Sold Price</th>
			<?php
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
			<th>Apparel Actual Price Per Unit</th>
			<th>Total Apparel Actual Price</th>
			<th>Apparel Shipping price</th>
			<th>Total Profit</th>
			<?php
			}else {
			?>
			<th>Minimum Selling Price Per Unit</th>	
			<th>Total Minimum Selling Price</th>
      <th>User Profit Per Unit</th>
			<th>Total User Profit</th>
			<th>Shoe Shipping price</th>
			<?php
			}
      ?>
			<th>Customer's Name</th>
            <th>Customer's Phone Number</th>
            <th>Customer's City</th>
            <th>Customer's Zone</th>
            <th>Customer's Address</th>
            <th>Date Sold</th>
            <th>Delete Order</th>
        </tr>
        </thead>
		<?php
		while ($res = mysqli_fetch_array ($ORDERS))
			{
			$Count++;
		?>	
<tbody>
			<tr>	
			<td><?php echo $Count;?></td>
			<td><img class="image"src="images/Apparel/<?php echo $res['Image'];?>"></td>
            <td><?php echo $res['Model'];?></td>
            <td><?php echo $res['Type'];?></td>
            <td><?php echo $res['Size'];?></td>
            <td><?php echo $res['Quantity'];?></td>
            <td><?php echo number_format($res['SoldPrice']);?> LE.</td>
		<?php $A=$res['SoldPrice']*$res['Quantity']; ?>
            <td><?php  echo number_format($A);?> LE.</td>
			<?php 
			$TSSP +=$A;
			$ACP = $res['ActualPrice'];
			$TACP = $res['ActualPrice']*$res['Quantity'];
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
            
			<td><?php echo number_format($ACP);?> LE.</td>
			<td><?php echo number_format($TACP);?> LE.</td>
			<?php
			$TSAP += $TACP;
			$profit = $A - $TACP;
			?>
			<td><?php echo $res['Shipping'];?> LE.</td>
			<td><?php echo number_format($res['Profit']);?> LE.</td>
			<?php
				$TADP += $res['Profit'];
			}else{
			?>
			<?php
				 $MSPQ = $res['MinimumPrice'] *  $res['Quantity'];
				 $OP = $res['SP'] *  $res['Quantity'];
				$EXP = $A - $MSPQ;
				?>
				<td><?php echo number_format($res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($MSPQ);?> LE.</td>
				<td><?php echo number_format($res['SoldPrice']-$res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($res['UserProfit']);?> LE.</td>
				<td><?php echo number_format($res['Shipping']);?> LE.</td>
			<?php
				$TTP += $res['UserProfit'];
			}
        
			?>
			      <td><?php echo $res['Name'];?></td>
            <td><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
            <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
            <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
            <td><?php echo $res['Address'];?></td>
            <td><?php echo $res['Datetime'];?></td>
          <td><a href='DeleteOrderApp.php?DT=<?php echo $res['Datetime'];?>&amp;P=<?php echo $res['Phone'];?>&amp;SHID=<?php echo $res['AID'];?>&amp;QTY=<?php echo $res['Quantity'];?>&amp;Size=<?php echo $res['Size'];?>&amp;SID=<?php echo $res['SID'];?>'><i class='fa fa-trash-o' style='font-size:38px;color:crimson'></i></a></td>
        </tr>
        
		<?php
			}
		?>
			
				<?php
				if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
				?>
	<tr>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Sold Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSSP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Actual Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSAP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;;font-size:20px"><?php echo $TADP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
		<td style="background-color:rgba( 71, 147, 227, 1);"></td>
			</tr>
				<?php
				}else{
				?>
	<tr></tr>
    
		<td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total <?php echo $rez['Sname']; ?> 's Profit</td>
        <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px;">
        <?php echo $TTP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		    
    </table>

<center><br>
<a class="button button3" href="SellerOrdersShirts.php">Back To All</a><br><br><br><br>
<a class="button button2" href="Apparels.php">Make New Order</a><br><br><br><br>
<?php
if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<a class="button" href="InventoryC.php">See Inventory</a><br><br><br><br>
<?php
	if($Name == 'Ahmed Amin'){
    ?>
    <a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
    <a class="button button4" href="KOloApparel.php">See All Orders</a><br><br><br><br>
	
<?php
	}
}else{
  ?>
<a class="button" href="InventoryCU.php">See Inventory</a><br><br><br><br>
<?php
}
?>
<a class="button button3" href="Logout.php">Logout</a><br><br><br>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
	}else{
  ?>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[13];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
  
  <?php		
  }
?>

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
<form method="post" action="<?php $_PHP_SELF ?>">
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
$sql = "SELECT BuyApp.CPhone As Phone,customers.Name,cities.city_name_ar,
        cities.city_name_en,governorates.governorate_name_ar,governorates.governorate_name_en,
        Apparel.AID, Month(Date) As Month, Year(Date) As Year,Date,SID,Datetime, Shipping,Size,Quantity,
        Name As CustomerName,Gender,Address,Model, BuyApp.Price as MinimumPrice,sPrice as SoldPrice,Apparel.Type,
        BuyApp.ActualPrice,Profit,UserProfit, Apparel.Image 
        FROM `BuyApp` JOIN customers on BuyApp.CPhone = customers.CPhone 
        JOIN cities ON cities.id = customers.Zone 
        JOIN governorates on governorates.id=customers.Governorate 
        JOIN Apparel on BuyApp.ID=Apparel.AID WHERE SID = '$ID'
        AND Month(Date) = '$Month' AND 
        Year(Date) = '$Year'  
        ORDER BY `BuyApp`.`Datetime` DESC ";   
$ORDERS = mysqli_query($mycon,$sql);
?>

<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Customers.."/><br><br><br>
</div>
</center>
<div class="table-wrapper">
    <table class="fl-table" id ='myTable'>
        <thead>
        <tr>
			<th>Order Number</th>
			<th>Apparel Image</th>
      <th>Apparel Model</th>
			<th>Apparel Type</th>
      <th>Apparel Size</th>
      <th>Apparel Quantity</th>
      <th>Apparel Sold Price Per Unit</th>
      <th>Total Apparel Sold Price</th>
			<?php
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
			<th>Apparel Actual Price Per Unit</th>
			<th>Total Apparel Actual Price</th>
			<th>Apparel Shipping price</th>
			<th>Total Profit</th>
			<?php
			}else {
			?>
			<th>Minimum Selling Price Per Unit</th>	
			<th>Total Minimum Selling Price</th>
      <th>User Profit Per Unit</th>
			<th>Total User Profit</th>
			<th>Shoe Shipping price</th>
			<?php
			}
      ?>
			<th>Customer's Name</th>
            <th>Customer's Phone Number</th>
            <th>Customer's City</th>
            <th>Customer's Zone</th>
            <th>Customer's Address</th>
            <th>Date Sold</th>

            <th>Delete Order</th>
        </tr>
        </thead>
		<?php
		while ($res = mysqli_fetch_array ($ORDERS))
			{
			$Count++;
		?>	
<tbody>
			<tr>	
			<td><?php echo $Count;?></td>
			<td><img class="image"src="images/Apparel/<?php echo $res['Image'];?>"></td>
            <td><?php echo $res['Model'];?></td>
            <td><?php echo $res['Type'];?></td>
            <td><?php echo $res['Size'];?></td>
            <td><?php echo $res['Quantity'];?></td>
            <td><?php echo number_format($res['SoldPrice']);?> LE.</td>
		<?php $A=$res['SoldPrice']*$res['Quantity']; ?>
            <td><?php  echo number_format($A);?> LE.</td>
			<?php 
			$TSSP +=$A;
			$ACP = $res['ActualPrice'];
			$TACP = $res['ActualPrice']*$res['Quantity'];
			if($Name == 'Ahmed Amin'||$Name == 'Marwan Hamed'){
			?>
            
			<td><?php echo number_format($ACP);?> LE.</td>
			<td><?php echo number_format($TACP);?> LE.</td>
			<?php
			$TSAP += $TACP;
			$profit = $A - $TACP;
			?>
			<td><?php echo $res['Shipping'];?> LE.</td>
			<td><?php echo number_format($res['Profit']);?> LE.</td>
			<?php
				$TADP += $res['Profit'];
			}else{
			?>
			<?php
				 $MSPQ = $res['MinimumPrice'] *  $res['Quantity'];
				 $OP = $res['SP'] *  $res['Quantity'];
				$EXP = $A - $MSPQ;
				?>
				<td><?php echo number_format($res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($MSPQ);?> LE.</td>
				<td><?php echo number_format($res['SoldPrice']-$res['MinimumPrice']);?> LE.</td>
				<td><?php echo number_format($res['UserProfit']);?> LE.</td>
				<td><?php echo number_format($res['Shipping']);?> LE.</td>
			<?php
				$TTP += $res['UserProfit'];
			}
        
			?>
			      <td><?php echo $res['Name'];?></td>
            <td><a href="tel:20<?php echo $res['Phone'];?>">+20<?php echo $res['Phone'];?></a></td>
            <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
            <td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
            <td><?php echo $res['Address'];?></td>
            <td><?php echo $res['Datetime'];?></td>
			<td><a href='DeleteOrderApp.php?DT=<?php echo $res['Datetime'];?>&amp;P=<?php echo $res['Phone'];?>&amp;SHID=<?php echo $res['AID'];?>&amp;QTY=<?php echo $res['Quantity'];?>&amp;Size=<?php echo $res['Size'];?>&amp;SID=<?php echo $res['SID'];?>'><i class='fa fa-trash-o' style='font-size:38px;color:crimson'></i></a></td>
        </tr>
        
		<?php
			}
		?>
			
				<?php
				if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
				?>
	<tr>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Sold Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSSP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Apparel Actual Price</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px"><?php echo $TSAP;?> LE.</td>
				<td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total Profit</td><td style="font-weight:bolder;color:purple;background-color:#2cc16a;;font-size:20px"><?php echo $TADP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
			</tr>
				<?php
				}else{
				?>
	<tr>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
				<td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>S
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="font-weight:bolder;color:red;background-color:skyblue;font-size:16px">Total <?php echo $rez['Sname']; ?> 's Profit</td>
        <td style="font-weight:bolder;color:purple;background-color:#2cc16a;font-size:20px;">
        <?php echo $TTP;?> LE.</td><td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
        <td style="background-color:rgba( 71, 147, 227, 1);"></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		    
    </table>

<center><br>
<a class="button button3" href="SellerOrdersShirts.php">Back To All</a><br><br><br><br>
<a class="button button2" href="Apparels.php">Make New Order</a><br><br><br><br>
<?php
if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<a class="button" href="InventoryC.php">See Inventory</a><br><br><br><br>
<?php
	if($Name == 'Ahmed Amin'){
    ?>
    <a class="button button1" href="EmployeeS.php">View Employees</a><br><br><br><br>
    <a class="button button4" href="KOloApparel.php">See All Orders</a><br><br><br><br>
	
<?php
	}
}else{
  ?>
<a class="button" href="InventoryCU.php">See Inventory</a><br><br><br><br>
<?php
}
?>
<a class="button button3" href="Logout.php">Logout</a><br><br><br>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	if($Name == 'Marwan Hamed'|| $Name == 'Ahmed Amin'){
?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[12];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
	}else{
  ?>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[13];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
  
  <?php		
  }
?>

</div>
</form>	
	
<?php
}
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>
</html>