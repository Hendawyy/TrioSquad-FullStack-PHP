<?php
error_reporting(0);
session_start();
?>
<html class="main menu" style="resize: horizontal;overflow overflow-y:hidden;">
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<style>
*
{
	margin:0;
	padding:0;
}
#nav-bar
{
	position:sticky;
	top:0;
	z-index:10;
}
.navbar-brand img 
{
	height:40px;
	padding-left:10px;

}
.navbar-nav li 
{
	padding:5x;
}
.navbar-nav li a
{
	float: right;
	text-align: left;
}
#nav-bar ul li a :hover
{
	color: #007bff!important;
}
.navbar
{
	background-color:dimgrey!important;
}
.navbar-toggler
{
	border:none!important
}
.nav-link
{
	color: black!important;
	font-weight:600;
	font-size:12px;
}
a
{
text-decoration: none!important;
color:bisque;
}
.avatar {

  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.w3-btn,.w3-button{
	border:none;
	display:inline-block;
	padding:8px 16px;
	vertical-align:middle;
	overflow:hidden;
	text-decoration:none;
	color:inherit;
	background-color:inherit;
	text-align:left;
	cursor:pointer;
	white-space:nowrap;
	color:black;
}

.w3-dropdown-content{
	background-color:white!important;
	color:black!important;
	display:none;
	position:absolute;
	min-width:160px;
	margin:0;
	padding:0;
	z-index:1;
    overflow-x: hidden;
    overflow-y: auto;
}

.w3-show-block,.w3-show{
	display:block!important;
	overflow-x: hidden;
    overflow-y: auto;
}
.w3-dropdown-hover.w3-mobile .w3-dropdown-content,.w3-dropdown-click.w3-mobile .w3-dropdown-content{
	position:relative;overflow-x: hidden;
    overflow-y: auto;
	background-color:aqua;
	color:black!important;
}	
.w3-display-container:hover .w3-display-hover{
	display:block;overflow-x: hidden;
    overflow-y: auto;
}

.w3-button:hover{
	color:white;
background-color:black!important;
	background-color:white;overflow-x: hidden;
    overflow-y: auto;
}
/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
img { max-width: 100%; height: auto; }
@media (min-device-width:600px) {
    img[data-src-600px] {
        content: attr(data-src-600px, url);
    }
}

@media (min-device-width:800px) {
    img[data-src-800px] {
        content: attr(data-src-800px, url);
    }
}
</style>
</head>
<body> 
<?php
include('DBCONN.php');
error_reporting(0);
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];
$img = $res['Image'];
if($res['Sname']=='Ahmed Amin'){
?>
<!-------navigationbar-------->
<section id="nav-bar"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Logout.php"><img src ="images/Amin%20Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		 
		 <li class="nav-item">
          <a class="nav-link" href="#team">OWNERS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT US</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="Products.php">Shoes</a>
        </li>	
		  <li class="nav-item">
          <a class="nav-link" href="InventoryS.php">All Shoes</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="Perfumes.php">Perfumes</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryP.php">All Perfumes</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Apparels.php">Apparel</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryC.php">All Apparel</a>
        </li>
		  <li class="nav-item">
		  <div class="w3-container">
  			<div class="w3-dropdown-click">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"onclick="myFunction()"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="w3-dropdown-content">
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
		  </div>
		  
			  </div>
		  </div>
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>
<script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<?php
}
	else if($res['Sname'] == 'Mohamed Ali'){
?>
<section id="nav-bar"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Homepage.php"><img src ="images/Amin%20Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		 
		 <li class="nav-item">
          <a class="nav-link" href="#team">OWNERS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT US</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="Products.php">Shoes</a>
        </li>	
		  <li class="nav-item">
          <a class="nav-link" href="InventoryS.php">All Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Apparels.php">Apparels</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryCU.php">All Apparels</a>
        </li>
		  
		  <li class="nav-item">
		  <div class="w3-container">
  			<div class="w3-dropdown-click">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"onclick="myFunction()"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="w3-dropdown-content">
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
		  </div>
		  
			  </div>
		  </div>
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>
<script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<?php
}
?>
</body>
</html>
