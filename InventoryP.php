<?php
$Classes = array("table-primary", "table-secondary", "table-success", "table-info", "table-warning", "table-danger",  "table-light");
?>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
if($res['Sname'] == 'Ahmed Amin' || $res['Sname'] == 'Ziad Mohamed'){
?>

<head>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perfumes Inventory</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
.bs-example{
	margin: 20px;
}
*{
	color:Black;
	align-content: center;
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
.a:link, a:visited {
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
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
<body>
<?php
include('NAv.php');
?>

<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Perfume.."/>
<br><br><br>
</div>
</center>
<div align="center">
<a class="button" style="background:green;" href="ExportPerfumes.php">Export To Excel</a>
</div>
<br><br><br>	

<div class="bs-example">
    <table class="table table-striped table-dark" id ='myTable'>
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Model</th>
                <th>WHOM</th>
                <th>Minimum Price</th>
                <th>Actual Price</th>
                <th>Quantity</th>                
				<th>Totals</th>
                <th>Edit Perfume Data</th>
                <th>Delete Perfume</th>
            </tr>
        </thead>
        <tbody>
			<?php
			error_reporting(0);
			include("DBCONN.php");
			$Q;
			$PT;
			$Shoes = mysqli_query($mycon,'SELECT * FROM `perfumes` ORDER BY perfumes.Model');
			while ( $res = mysqli_fetch_array ($Shoes)){
				$img = $res['Image'];
				static $i=0;
?>
            <tr class="<?php echo $Classes[$i] ;?>">
                <td ><a href="Perfume.php?ID=<?php echo $res['PerID'];?>"><img class='img'  src="images/Perfumes/<?php echo $img ;?>"alt='<?php echo $res['Model'] ;?>'></a></td>
                <td ><?php echo $res['Model'] ;?></td>
                <td ><?php echo $res['Gender'] ;?></td>
				<td ><?php echo $res['Price'] ;?></td>
				<td><?php echo $res['ActualPrice'] ;?></td>
                <td><?php echo $res['Quantity'] ;?></td>
                <?php 
                $Q += $res['Quantity'];                
				$TQ += $res['Quantity'];
				$X+= $res['ActualPrice']*$TQ;

                $PT += $res['ActualPrice']*$res['Quantity'];
                ?>
				<td style="font-size:20px;font-weight:bolder;padding-top:60px;">
				<span style='color:crimson;'><?php echo $TQ;$TQ=0;?></span> <span style='colorcolor:navy;font-weight:bolder;;'>Pairs Of The </span><span style='color:Blueviolet;'><?php echo $res['Model'] ;?></span>
				<br>
				<span style='color:Blueviolet;'>The Actual Price Per </span><span style='color:navy;font-weight:bolder;'><?php echo $res['Model'] ;?></span> is : <span style='color:crimson;'><?php echo number_format($X);?> LE.</span>
				<?php
				$X=0;
				?>
				</td>
				<td><a href="EditPer.php?ID=<?php echo $res['PerID'];?>"><i class="fa fa-edit" style='font-size:38px;color:skyblue'></i></a></td>
				<td><a href="DeletePer.php?ID=<?php echo $res['PerID'];?>"><i class="fa fa-trash" style='font-size:38px;color:Crimson'></i></a></td>
            </tr>
<?php
if($i == 6){
	$i=0;
}else{
	$i++;
}
}
?>
 <tr class="<?php echo $Classes[$i] ;?>">
                 <td></td><td></td><td style='color:Crimson;font-weight:bolder;font-size:18px;'>
                 Total Actual Price Of Perfumes in The Inventory</td><td style='color:navy;font-weight:bolder;font-size:20px;'>
                 <?php echo number_format($PT);?> LE.</td><td></td>	
                 <td style='color:Crimson;font-weight:bolder;font-size:18px;'>Total Number Of Perfumes in The Inventory</td>
                <td style='color:navy;font-weight:bolder;font-size:20px;'><?php echo $Q;?> Perfume.</td><td></td><td></td>
                
    </tr>
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
    td = tr[i].getElementsByTagName("td")[1];
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
</div>
<form>
<div align='center'>
<button class="button" formaction="AddPerfume.php">Add New Perfume</button><br><br><br><br>
<button class="button button1" formaction="Perfumes.php">View Perfumes Store</button><br><br><br><br>
<button class="button button2" formaction="SellerOrdersPerfumes.php">View My Orders</button><br><br><br><br>
<button class="button button4" formaction="AllPerfumesOrders.php">View All Perfumes Orders</button><br><br><br><br>
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