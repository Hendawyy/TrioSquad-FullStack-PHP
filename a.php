<link rel="icon" href="images/Logos/instagram_profile_image.png">
<?php
error_reporting(0);
session_start();
include('DBCONN.php');
if(isset($_SESSION['UserID'])){
$ID = $_SESSION['UserID'];
$result = $mycon->query("SELECT * FROM salesperson Where SID = $ID");
$rez = mysqli_fetch_array ($result);
$Admin = $rez['Admin'];
$Name = $rez['Sname'];
if($Admin == 'Yes'){
	if($Name == 'Ahmed Amin'){
		require('AminKolo.php');
	}else if($Name == 'Mohamed Ali'){
		require('E7.php');
	}else{
		require('E7.php').exit();
	}
}else{
	require('E7.php');
}
}else if(!isset($_SESSION['UserID'])){
	require('UserLogin.php');
}
?>