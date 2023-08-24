<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 
$Count;
$TSPAK;
$TACPAK;
$ID = $_GET['SID'];
$Year = $_GET['Year'];
$Year = $_GET['Year'];
$Month = $_GET['Month'];
$result = $mycon->query("SELECT * FROM salesperson Where SID = $ID");
$rez = mysqli_fetch_array ($result);
$Name = $rez['Sname'];
$query  = $mycon->query("SELECT DISTINCT BuyApp.CPhone As Phone,BuyApp.SID,BuyApp.PN,BuyApp.ID,BuyApp.Datetime
,Month(Date) As Month,Year(Date) As Year, BuyApp.Date,BuyApp.sPrice,BuyApp.Shipping,BuyApp.Size,
BuyApp.Quantity,BuyApp.Userprofit AS UserProfit,BuyApp.Profit, Pages.Platform,Pages.Type,BuyApp.PN, 
customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Apparel.AID,BuyApp.ActualPrice,
BuyApp.Price AS MinimumPrice,BuyApp.Sprice AS SoldPrice,
Apparel.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,BuyApp.AppType,Apparel.Model,
salesperson.Gender 
From BuyApp JOIN Pages ON Pages.ID=BuyApp.PN 
JOIN customers ON BuyApp.CPhone = customers.CPhone 
JOIN salesperson ON BuyApp.SID = salesperson.SID 
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate 
JOIN Apparel on BuyApp.ID=Apparel.AID WHERE BuyApp.SID= $ID AND Year(Date) = $Year ORDER BY `BuyApp`.`Datetime` DESC");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = $Name."'s Apparels Orders ".$Year.".csv"; 

     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
       $fields = array(
		  'Order Number',
		  'Apparel Model',					
		  'Apparel Type',
		  'Platform',
		  'Apparel Size',
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
		$PH =$row['Phone'];
		$C =$row['Governorate'];
		$Count++;
		$TACPAK += $row['ActualPrice']*$row['Quantity'];		
		$TSPAK += $row['SoldPrice']*$row['Quantity'];

		$Userprofit += $row['Userprofit'];
        $lineData = array(
			$Count,
			$row['Model'],						  
			$row['AppType'],
			$row['Platform'], 
			$row['Size'],
			$row['Quantity'],
			$row['Shipping'], 
			$row['ActualPrice']*$row['Quantity'], 
			$row['MinimumPrice']*$row['Quantity'], 
			$row['SoldPrice']*$row['Quantity'], 
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
		$PROFIT += $row['Profit'];
	} 
	$TPz = $TSPAK;
	$lineData = array('','','','','','','Total Actual Price ',$TACPAK.' LE.', 'Total Sold Price ', $TPz.' LE.', '','','','','','','','','TOTAL '.$Name."'s Profit",$Userprofit.' LE.','Total Profit',$PROFIT.' LE.'); 
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