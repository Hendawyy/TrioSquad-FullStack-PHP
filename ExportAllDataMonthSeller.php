<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 
$TSSP;
$TTP;
$TSAP;
$TADP;
$TP;
$D;
$Count=0;
$ID = $_GET['SID'];
$Year = $_GET['Year'];
$Month = $_GET['Month'];
$result = $mycon->query("SELECT * FROM salesperson Where SID = $ID");
$rez = mysqli_fetch_array ($result);
$Name = $rez['Sname'];
$query  = $mycon->query("SELECT DISTINCT buys.CPhone,buys.SID,Pages.Platform,buys.ID,buys.Datetime,Month(Date) As Month,Year(Date) As Year, buys.Date,buys.sPrice,buys.Shipping,buys.Size,buys.Quantity,buys.Userprofit AS UserProfit,buys.Profit As TotProf,customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, customers.Name,customers.Gender,customers.City,customers.Address,city.Governorate,shoes.Model,shoes.Brand,buys.MinP AS MinPrice,buys.ActualPrice,shoes.Profit,shoes.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,salesperson.Gender From buys JOIN customers ON buys.CPhone = customers.CPhone JOIN salesperson ON buys.SID = salesperson.SID JOIN shoes ON buys.ID = shoes.ID JOIN shoesquantity ON shoes.ID = shoesquantity.ID JOIN city ON customers.City = city.CityID JOIN Pages ON Pages.ID=buys.PN
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate
WHERE  buys.SID = $ID AND Year(Date) = $Year AND Month(Date) = $Month
ORDER BY `buys`.`Datetime` DESC");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
	if($Month == 1){
	$D = 'January';
}else if($Month == 2){
	$D = 'February';
}else if($Month == 3){
	$D = 'March';
}else if($Month == 4){
	$D = 'April';
}else if($Month == 5){
	$D = 'May';
}else if($Month == 6){
	$D = 'June';
}else if($Month == 7){
	$D = 'July';
}else if($Month == 8){
	$D = 'August';
}else if($Month == 9){
	$D = 'September';
}else if($Month == 10){
	$D = 'October';
}else if($Month == 11){
	$D = 'November';
}else if($Month == 12){
	$D = 'December';
}
    $filename = $Name."'s shoes Orders ".$D." ".$Year.".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
   $fields = array(
		  'Order Number',
		  'Shoe Model',
		  'Platform', 
		  'Shoe Size',
		  'Shoe Quantity', 
		  'Shoe Shipping Price', 
		  'Shoe Actual Price', 
		  'Shoe Minimum Price', 
		  'Shoe Sold Price', 
		  'Seller Name', 
		  'Customer Name', 
		  'Customer Phone Number',
		  'Customer City EN',
		  'Customer City AR',
		  'Customer Zone EN',
		  'Customer Zone AR',
		  'Customer Address', 
		  'Customer City', 
		  'Date Sold' 
		  , $Name."'s Profit",
		  'Total Profit'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
		$Count++;
		$PH ="20".$row['CPhone'];
		$C =$row['Governorate'];
		$TSAP +=$row['ActualPrice']*$row['Quantity'];
		$TSSP +=($row['ActualPrice']*$row['Quantity']) + $row['TotProf'];
		$TADP +=$row['UserProfit'];
		$TTP +=$row['TotProf'];
        $lineData = array(
			$Count,
			$row['Model'],
			$row['Platform'], 
			$row['Size'],
			$row['Quantity'], 
			$row['Shipping'], 
			$row['ActualPrice']*$row['Quantity'], 
			$row['MinPrice']*$row['Quantity'], 
			$row['sPrice']*$row['Quantity'], 
			$row['Sname'],
			$row['Name'],
			$PH,
			$row['governorate_name_en'],
			$row['governorate_name_ar'],
			$row['city_name_en'],
			$row['city_name_ar'],
			$row['Address'],
			$C,
			$row['Date'],
			$row['UserProfit'],
			$row['Profit']); 
        fputcsv($f, $lineData, $delimiter);
	} 
	
	$lineData = array('','','','','','Total Actual Price ',$TSAP.' LE.', 'Total Sold Price ', $TSSP.' LE.', '','','','','','TOTAL '.$Name."'s Profit",$TADP.' LE.',$TTP.' LE.'); 
        fputcsv($f, $lineData, $delimiter);
    // Move back to beginning of file 
  fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>