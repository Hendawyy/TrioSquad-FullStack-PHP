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
if($Admin == 'Yes'){
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer's Data</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

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
.bs-example{
	margin: 20px;
}
	h1{
		color: deeppink;
		padding-top: 70px;
	}
	
*{
	color:cyan;
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
.button1 {background-color:deeppink;} /* deeppink */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: blueviolet;} /* blueviolet */ 
.button5 {background-color:grey;} /* grey */ 
</style>
</head>
<body>
<?php
include('NAvS.php');
?>
<h1 align='center'>Customer's Data</h1><br><br><br><br>
<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Customer.."/>
</div></center><br><br><br><br>
<div align="center">
<a class="button" style="background:green;" href="ExportALLCustomers.php">Export To Excel</a>
</div><br><br><br>	

<div class="bs-example">
    <table class="table table-striped table-dark"id ='myTable'>
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone Number</th>
				<th>Customer's City</th>
				<th>Customer's Zone</th>
				<th>Customer's Address</th>
                <th>City</th>
                <th>Delete Customers</th>
            </tr>
        </thead>
        <tbody>
			<?php
			error_reporting(0);
			include("DBCONN.php");
			$SP = mysqli_query($mycon,'SELECT UPPER(Name) AS Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Gender,CPhone,city.Governorate,Address FROM `customers` JOIN city on City = city.CityID JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate  ORDER BY `customers`.`Name` ASC');
			while ($res = mysqli_fetch_array ($SP)){
			?>
            <tr>
                <td ><?php echo $res['Name'] ;?></td>
                <td ><?php echo $res['Gender'] ;?></td>
                <td ><?php echo '+20'.$res['CPhone'] ;?></td>
                <td><?php echo $res['governorate_name_en']."-----".$res['governorate_name_ar'];?></td>
          		<td><?php echo $res['city_name_en']."-----".$res['city_name_ar'];?></td>
                <td ><?php echo $res['Address'] ;?></td>                
				<td ><?php echo $res['Governorate'] ;?></td>
				<td><a href='DeleteSh.php?P=<?php echo $res['CPhone'];?>'><i class='fa fa-trash-o' style='font-size:38px;color:red'></i></a></td>
			</tr>
			<?php
			}
			?>
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
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[2];
    td3 = tr[i].getElementsByTagName("td")[3];
    td4 = tr[i].getElementsByTagName("td")[4];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
		var aztxtValue = td3.textContent || td3.innerText;
		var sztxtValue = td4.textContent || td4.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1
		  || ztxtValue.toUpperCase().indexOf(filter) > -1
		 || aztxtValue.toUpperCase().indexOf(filter) > -1
		 || sztxtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
<form>
<div align='center'>
<button class="button button1" formaction="InventoryS.php">View Inventory</button><br><br><br><br>
<button class="button button2" formaction="SellerOrders.php">View My Orders</button><br><br><br><br>
<?php
	if($res['Sname'] == 'Ahmed Amin'){
?>
<button class="button button4" formaction="a.php">View All Orders</button><br><br><br><br>
<?php		
	}
?>
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