<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href = "NavBar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<head>
<title>Apparel Data</title>
<style>
	
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
.video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
html { font-size:100%; }

@media (min-width: 640px) { body {font-size:1rem;} } 
@media (min-width:960px) { body {font-size:1.2rem;} } 
@media (min-width:1100px) { body {font-size:1.5rem;} } 	
body {
    min-height: 100vh;
    background: #fafafa;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}

.progress {
    height: 10px;
}
	.dog{
		text-decoration: none;
	}
	
</style>
<?php
error_reporting(0);
include("DBCONN.php");
$Shoes = mysqli_query($mycon,'SELECT * FROM `Apparel`  ORDER BY Model');

?>
</head>
<body>
<?php
error_reporting(0);
session_start();
if(isset($_SESSION['UserID'])){
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
		  <div class="w3-container">
  			<div class="w3-dropdown-click">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"onclick="myFunction()"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="w3-dropdown-content">
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
		  <div class="w3-container">
  			<div class="w3-dropdown-click">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"onclick="myFunction()"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="w3-dropdown-content">
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
		  <div class="w3-container">
  			<div class="w3-dropdown-click">
		
		  <span><button style="width:50px;border-radius: 50%;border:none; Text-Decoration: None !important;background-color: #f1f1f1;"onclick="myFunction()"><img src="images/<?php echo $img;?>"  class="avatar" style="width:50px;border-radius: 50%;"></button></span>
		  <div id="Demo" style='overflow:auto;background:white;text-decoration: none;font-size:12px;' class="w3-dropdown-content">
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
}
$ZAD;
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<div align="center">
<div style="width:53.333%;">
<div class="input-group">
<input type="search" list="Cats" class="form-control rounded" placeholder="Search For An Apparel" name="SAD" aria-label="Search"
    aria-describedby="search-addon"/>
<input type="submit" formaction="" name="search" value="search" class="btn btn-outline-primary">
</div>
</div>
</div>
</form>
<?php
	if(!isset($_POST["search"])){
?>
<div class="container py-5">
    <!-- For Demo Purpose-->
    <header class="text-center mb-5">
        <h1 class="display-4 font-weight-bold">Apparel Data</h1>
    </header>

    
    <!-- First Row [Prosucts]-->
    <h2 class="font-weight-bold mb-2">From The Inventory</h2>
    
    <div class="row pb-5 mb-4">
<?php
while ( $res = mysqli_fetch_array ($Shoes)){
$Sizes = $mycon->query("SELECT * FROM AppQuantity WHERE ID = '$res[AID]'");
while ($rex = mysqli_fetch_array ($Sizes)){
$ZAD += $rex['Quantity'];
}
if($ZAD > 0){
	$img = $res['Image'];
?>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4">
                    <a href="Apparel.php?ID=<?php echo $res['AID']; ?>" class="text-dark" style="color:red;">
                    <img src="images/Apparel/<?php echo $img;?>" alt="<?php echo $res['Model'];?>" class="img-fluid d-block mx-auto mb-3"></a>
                    <h5>Product Model : <a href="Apparel.php?ID=<?php echo $res['AID'];?>" class="text-dark" style="color:red;">
                    <?php echo $res['Model'];?></a></h5>
                    <p class="small text-muted font-italic">Avilable Quantities : <?php echo $ZAD;?></p>
                    <h5>Price : <?php echo $res['Price'];?> LE.</h5>
                </div>
            </div>
        </div>
<?php
$ZAD=0;
}
?>
<?php
}?>
</div>
</div>
<?php
}else if(isset($_POST["search"])){
$A = strtoupper($_POST['SAD']);
$Search = mysqli_query($mycon, "SELECT UPPER(Apparel.Model) AS Model,Image, AID,Price FROM `Apparel` WHERE Model LIKE '%$A%';");
?>
<div class="container py-5">
    <!-- For Demo Purpose-->
    <header class="text-center mb-5">
        <h1 class="display-4 font-weight-bold">Search Result</h1>
    </header>

    
    <!-- First Row [Prosucts]-->
    <h2 class="font-weight-bold mb-2">You Searhed For <?php echo $A;?> </h2>
    
    <div class="row pb-5 mb-4">
<?php
while($res = mysqli_fetch_array ($Shoes)){
while($rez = mysqli_fetch_array ($Search)){
$Sizez = $mycon->query("SELECT * FROM AppQuantity WHERE ID = '$rez[AID]'");
while ($rex = mysqli_fetch_array ($Sizez)){
$ZAD += $rex['Quantity'];
}
if($ZAD > 0){
	$img = $rez['Image'];
?>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4">
                    <a href="Apparel.php?ID=<?php echo $rez['ID'];?>" class="text-dark" style="color:red;">
                    <img src="images/Apparel/<?php echo $img;?>" alt="<?php echo $rez['Model'];?>" class="img-fluid d-block mx-auto mb-3"></a>
                    <h5>Product Model : <a href="Apparel.php?ID=<?php echo $rez['ID'];?>" class="text-dark" style="color:red;">
                    <?php echo $rez['Model'];?></a></h5>
                    <p class="small text-muted font-italic">Avilable Quantities : <?php echo $ZAD;?></p>
                    <h5>Price : <?php echo $rez['Price'];?> LE.</h5>
                </div>
            </div>
        </div>
<?php
$ZAD=0;
}	
?>
<?php
}
}
?>
 </div>
<a class="a" href="Apparels.php">Back To All Products</a>
</div>	
<?php
}
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>
</body>
</html>