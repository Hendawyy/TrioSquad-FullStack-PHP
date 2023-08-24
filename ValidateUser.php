<html>
<link rel="icon" href="images/Logos/instagram_profile_image.png">
<title>Homepage</title>
<head>
<script>
</script>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<?php
error_reporting(0);
include('DBCONN.php');
$USERS = mysqli_query($mycon,'SELECT * FROM salesperson');
session_start();
while ( $res = mysqli_fetch_array ($USERS))
{
 if($_SERVER["REQUEST_METHOD"] == 'POST'){
     if($_POST['un'] == $res['Sname'] && $_POST['pass'] == $res['Password']){
		$_SESSION["UserID"] = $res['SID'];
		 if(isset($_SESSION['UserID'])){
   			require("Homepage.php");
}
         return false;
    }
 }
}
if(empty ($_POST['pass'])){
?>

<div class="alert" id="mydiv" >
  <span class="closebtn"onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Error!</strong> Please Type Your Password.
</div>
<?php
    include('UserLogin.php');
     return false;
 }   
else{
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Error!</strong> Password Is Not Correct.
</div>
<?php
    include('UserLogin.php');
}
?>
</html>