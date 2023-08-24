<?php
$Classes = array("table-primary", "table-secondary", "table-success", "table-info", "table-warning", "table-danger", "table-light");
?>
<html lang="en">
<?php
session_start();
include('DBCONN.php');
?>

<head>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventory</title>
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
  background-color: #f44336;
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
#myTable {}
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
include('NAv.php');
$ZAD;
?>
<center>
<div class="form__group field">
<input type="text"  class="form__field"  id="myInput" onkeyup="myFunction()" placeholder="Search for Shoe.."/><br><br><br>
</div></center>
<div class="bs-example">
    <table class="table table-striped table-dark" id ='myTable'>
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Size / Quantity</th>
            </tr>
        </thead>
        <tbody>
			<?php
			error_reporting(0);
			include("DBCONN.php");
			$Shoes = mysqli_query($mycon,'SELECT * FROM `shoes` ORDER BY Model');
			while ( $res = mysqli_fetch_array ($Shoes)){
				$Sizes = $mycon->query("SELECT * FROM shoesquantity WHERE ID = '$res[ID]'");
						while ($rex = mysqli_fetch_array ($Sizes)){
							$ZAD += $rex['Quantity'];
						}
				if($ZAD > 0){
				$img = $res['Image'];
				static $i=0;
?>
            <tr class="<?php echo $Classes[$i] ;?>">
                
				<?php
				if(!isset($_SESSION['UserID'])){
				?>
				<td><a href='UserLogin.php'><img class='img' src="images/Shoes/<?php echo $img ;?>"alt='<?php echo $res['Model'] ;?>'></a></td>
				<?php
				}else if(isset($_SESSION['UserID'])){
				?>
				<td><a href="Shoe.php?ID=<?php echo $res['ID'];?>" class="text-dark">
					<img class='img' src="images/Shoes/<?php echo $img ;?>"alt='<?php echo $res['Model'] ;?>'>
					</a></td>
				<?php
				}
?>

                <td><?php echo $res['Model'] ;?></td>
                <td><?php echo $res['Brand'] ;?></td>
				<td><?php echo $res['Price'] ;?></td>
                <td><?php
						$Sizes = $mycon->query("SELECT * FROM shoesquantity WHERE ID = '$res[ID]'");
						while ($rez = mysqli_fetch_array ($Sizes)){
							if($rez['Quantity'] > 0){
					?>
							Size: <?php echo $rez['Size'];?>&nbsp;&nbsp; Quantity: <?php echo $rez['Quantity'];?><br>
				<?php
					}
						}
				?><br>
				</td>
            </tr>
<?php
if($i == 6){
	$i=0;
}else{
	$i++;
}
$ZAD=0;
}
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
    td = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[4];
    if (td) {
		
      txtValue = td.textContent || td.innerText;
      var ztxtValue = td2.textContent || td2.innerText;
		
      if (txtValue.toUpperCase().indexOf(filter) > -1|| ztxtValue.toUpperCase().indexOf(filter) > -1) {
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
<?php
if(!isset($_SESSION['UserID'])){
?>
<button class="button button3" formaction="UserLogin.php">Login & Buy</button><br><br><br><br>
<?php
}else if(isset($_SESSION['UserID'])){
?>
<button class="button button2" formaction="Products.php">Products</button><br><br><br><br>
<button class="button button3" formaction="Logout.php">Logout</button><br><br><br><br>
<?php
}
?>
</div>
</form>
</body>
</html>