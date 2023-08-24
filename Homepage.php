<html class="main menu" style="resize: horizontal;overflow overflow-y:hidden;">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<head>
<title>Homepage</title>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<link rel="stylesheet" href = "Homepage.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
				  <li style= "list-style-type:none;"><a href="AddBrand.php" class="w3-bar-item w3-button">Add A Brands/Pages</a></li>
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
?>
<!-----------slider--------------->
<div id="slider">
<div id="headerslidider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-bs-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-bs-slide-to="1"></li>
    <li data-target="#headerslider" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    
	  <div class="carousel-item">
		<a href="#"><img src="images/Web capture_3-10-2021_34738_.jpeg" class="d-block w-100"></a>
    </div>
	  <div class="carousel-item">
		<a href="#"><img src="images/na.jpg" class="d-block w-100"></a>
	  </div>
	  <div class="carousel-item active">
		<a href="#"><img src="images/pexels-erik-mclean-7543640.jpg" class="d-block w-100"></a>
	  </div>
    </div>
      
  <a class="carousel-control-prev" href="#headerslidider" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerslidider" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
   </div>
    </div>
<!-----------team members--------------->
<section id="team" class="text-center">
<h1 style="color: white">Owners</h1>
<center>
<div class="rowme text-center">
<div class="containerme columnme">
</div>
<div class="containerme columnme">
    <img src="images/amin.jpg" alt="Ahmed Amin"  height="1000" class="imageme">
    <div class="overlay-top" >
        <a TARGET=blank href="https://www.facebook.com/profile.php?id=100008220187376"><div class="textme">Ahmed Amin</div></a>
    </div>
</div>

<div class="containerme columnme">
    <img  src="images/3aliiii.jpg" alt="Mohamed Ali" height="600" class="imageme">
    <div class="overlay-bottom">
        <a TARGET=blank href="https://www.facebook.com/mohamed.ali.523/"><div class="textme">Mohamed Ali</div></a>
    </div>
</div>
</div>
</center>
</section>
<!-----------about--------------->

<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h1 style="color:midnightblue;"> About Us</h1>
<div class="about-content">
   <p style="color:black;font-size: 19px">TrioSquad is a franchise of online stores,
    With a couple of years in the field.<br>
    We Sell Shoes.<br>
    We Deliver to all the cities in Egypt, Though we Reside in Cairo .<br>
	We Have All Kinds of Payment, Visa, Vodafone Cash And on Delivery.<br>  
    We aim to please.<br>
    We will give you the best quality for the best prices you could ask for.<br>
    Our team will humbly assist you in any think you may inquire about.<br>
    We hope to give you the best experience and learn from each other.<br>
    by having a realtionship based on mutual respect and trust.<br>
    and may we learn from each other.	<br>
    Amin Group, Cairo, Egypt</p>
</div>
</div>
</div>
</div>
</section>
<?php
}else{
	require('UserLogin.php');
}
?>
</body>
</html>
