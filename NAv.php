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
	top:0;
	z-index:10;
	width: 100%;
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
	background-color:lavender!important;
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
.dropbtn {
background: lavender!important
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lavender!important;
  width: 190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #3e8e41;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
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
if($Admin == 'NO'){
$img = $res['Image'];
if($res['Sname'] == 'Ziad Mohamed'){ 
?>
<!-------navigationbar-------->
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
          <a class="nav-link" href="Perfumes.php">Perfumes</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryP.php">All Perfumes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Products.php">Shoes</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventorySU.php">All Shoes</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Apparels.php">Apparels</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryCU.php">All Apparels</a>
        </li>
		  <li class="nav-item">
		  <div class="dropdown">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"class="dropbtn"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="dropdown-content">
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
		  </div>
		  
		  </div>
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>
<?php
}
	else if($res['Sname'] == 'Marwan Hamed'){
?>
<!-------navigationbar-------->
<section id="nav-bar"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Homepage.php"><img src ="images/Amin%20Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
    aria-label="Toggle navigation">
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
          <a class="nav-link" href="InventorySU.php">All Shoes</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Apparels.php">Apparels</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryC.php">All Apparels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Perfumes.php">Perfumes</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryPU.php">All Perfumes</a>
        </li>
		  <li class="nav-item">
		  <div class="dropdown">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"class="dropbtn"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="dropdown-content">
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
		  </div>
		  
		  </div>
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>
<?php
}else
{
?>
<!-------navigationbar-------->
<section id="nav-bar"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Homepage.php"><img src ="images/Amin%20Logo.png"></a>
    <button class="navbar-toggler" 
    type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="InventorySU.php">All Shoes</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="Perfumes.php">Perfumes</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryPU.php">All Perfumes</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Apparels.php">Apparels</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="InventoryCU.php">All Apparels</a>
        </li>
		 <li class="nav-item">
		  <div class="dropdown">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"class="dropbtn"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="dropdown-content">
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
		  </div>
		  
		  </div>
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>

<?php
}
}else if($Admin == 'Yes'){
if($res['Sname'] == 'Ahmed Amin'){
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
		  <div class="dropdown">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"class="dropbtn"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="dropdown-content">
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
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>
<?php
}else
{
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
		  <div class="dropdown">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"class="dropbtn"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="dropdown-content">
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
		</li>
      </ul>
    </div>
  </div>
</nav>
</section>

<?php
	}
}
?>
</body>
</html>