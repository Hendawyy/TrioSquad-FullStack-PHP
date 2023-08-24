<?php
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT Sname,Admin,Image FROM salesperson Where SID = $ID");
$res = mysqli_fetch_array ($result);
$Admin = $res['Admin'];

?>
<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Product's Information</title>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script  type='text/javascript'>
	$(document).ready(function() { 
	$('input[name=rbtn]').change(function(){
     $('form').submit();

});
});
</script>

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
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(186, 216, 125);
    font-size: 0.8rem;
    font-family: 'Work Sans'
}

.card {
    max-width: 1000px;
    width: 100%;
    padding: 4rem;
    background-color: rgb(46, 45, 45);
    color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

@media(max-width:768px) {
    .card {
        width: 100%;
        padding: 1.5rem
    }
}

.row {
    margin: 0
}

.path {
    color: grey;
    margin-bottom: 1rem
}

.path a {
    color: #ffffff
}

.info {
    padding: 6vh 0vh
}

@media(max-width:768px) {
    .info {
        padding: 0
    }
}

.checked {
    color: rgb(255, 217, 0);
    margin-right: 1vh
}

.fa-star-half-full {
    color: rgb(255, 217, 0)
}

img {
    height: fit-content;
    width: 75%;
    padding: 1rem
}

@media(max-width:768px) {
    img {
        padding: 2.5rem 0
    }
}

.title .col {
    padding: 0
}

.fa-heart-o {
    font-size: 2rem;
    color: #ffffffaf;
    font-weight: lighter
}

#reviews {
    margin-left: 3vh;
    color: grey
}

.price {
    margin-top: 2rem
}

label.radio span {
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    color: grey;
    display: inline-block;
    margin-right: 2vh
}

label.radio input:checked+span {
    border: 1px solid white;
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    margin-right: 2vh;
    color: #ffffff;
    display: inline-block
}

.carousel-control-prev {
    width: unset
}

.carousel-control-next {
    left: 8vh;
    right: unset;
    width: unset
}

.lower {
    margin-top: 3rem
}

.lower i {
    padding: 2.5vh;
    margin-right: 1vh;
    color: grey;
    border: 1px solid rgb(85, 85, 85)
}

.lower .col {
    padding: 0
}

@media(max-width:768px) {
    .lower i {
        padding: 2vh;
        margin-right: 1vh;
        color: grey;
        border: 1px solid rgb(85, 85, 85)
    }
}

.btn {
    background-color: transparent;
    border-color: rgba(186, 216, 125, 0.863);
    color: rgba(186, 216, 125, 0.863);
    padding: 1.8vh 4.5vh;
    height: fit-content;
    border-radius: 3px
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
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

a {
    color: unset
}

a:hover {
    color: unset;
    text-decoration: none
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
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}
	input[type=number]{
		border-radius: 70px;
		height: 30px;
		width: 80px;
		text-align: center;
	}	
</style>
</head>
<body>
<?php
error_reporting(0);
include("DBCONN.php");
$result = $mycon->query("SELECT * FROM perfumes WHERE PerID  = '$_GET[ID]'");
$res = mysqli_fetch_array ($result);
?>
<form method="post" action="PerOrder.php?ID=<?php echo $_GET['ID'];?>">
 <div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card">
                    <div class="path"><a> Perfume's Data </a> </div>
                    <div class="row">
                        <div class="col-md-6 text-center align-self-center"> <img class="img-fluid" src="images/Perfumes/<?php echo $res['Image'];?>" alt='<?php echo $res['Model'] ;?>'> </div>
                        <div class="col-md-6 info">
                            <div class="row title">
                                <div class="col">
                                    <h2><?php echo $res['Model'];?></h2>
                                </div>
                            </div>
							<h4><?php echo "Price : ".$res['Price']," LE.";?></h4>
                            <?php
							$C = $mycon->query("SELECT Sname FROM salesperson WHERE SID = '$ID'");
							$CR = mysqli_fetch_array($C);
							if($CR['Sname'] == 'Ahmed Amin' || $CR['Sname'] == 'Ziad Mohamed'){
							?>	
							<h4><?php echo "Actual Price : ".$res['ActualPrice']," LE.";?></h4>
							<?php
						    }else{
							?>
							<h4 hidden><?php echo "Actual Price : ".$res['ActualPrice']," LE.";?></h4>
							<?php
							}
							?>
							<h5>Quantities:</h5>
                            <div class="row price">
								
								
								
							
							<br/>
								

								<?php	
									  
										  if($res['Quantity'] <= 0){
										  	?>
											<label class="radio"> 
											<input type="radio" name="rbtn" id="rbtn" disabled required value="<?php echo $res['Quantity'];?>">
											<span>
											<div class="row"><big><b><?php echo 'Out Of Stock'?></b></big></div>
											</span> 
											</label>	
										<?php
										  }else if($res['Quantity'] > 0){
											  ?>
											<label class="radio"> 
											<input type="radio" name="rbtn" id="rbtn" checked required value="<?php echo $res['Quantity'];?>">
											<span>
											<div class="row"><big><b><?php echo $res['Quantity'];?></b></big></div>	 
											</span> 
											</label> 
								<?php
										  }
							?>
										
							<div class="row">
							  <div class="col-md-6 mb-3">
								  <label for="validationCustom03">Qunatities:</label>
								  <select class="form-control form-control-lg" style="width:350px;" required name="Qunatity">
									<option value="" selected disabled>Choose A Valid Qunatity... </option>
									<?php
										if($res['Quantity'] >= 12){
											for($i=1;$i<=12;$i++){
									?>
									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									  <?php
									}
										}else if($res['Quantity'] < 12 && $res['Quantity'] > 0){
													for($i=1;$i<=$res['Quantity'];$i++){
									?>
									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									  <?php
									}
										}else if($res['Quantity'] == 0){
													
									?>
									<option value="" disabled>Out Of Stock</option>
									  <?php
									}
									  ?> 
								  </select>
							  </div>
							  </div>
								
								
								
							</div>
                        </div>
                    </div>
                    <div class="row lower">
                        <div class="col text-right align-self-center"> 
						<div align='left'><a class="btn" href="Perfumes.php">Back To Perfumes</a></div>
                        <div align='center'><button class="btn">Add To Cart</button></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div align='right'><a class="btn" href="Logout.php">Logout</a></div>
						</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
	</div>
</form>
</body>
</html>
<?php
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>