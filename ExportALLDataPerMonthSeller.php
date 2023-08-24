<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 
$TUP;
$TZP;
$TAP;
$TACP;
$TSP;
$COUNT=0;
$ID = $_GET['SID'];
$Year = $_GET['Year'];
$Month = $_GET['Month'];
$result = $mycon->query("SELECT * FROM salesperson Where SID = $ID");
$rez = mysqli_fetch_array ($result);
$Name = $rez['Sname'];
$query  = $mycon->query("SELECT DISTINCT buyper.CPhone AS Phone,customers.Name,customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en, governorates.governorate_name_ar,governorates.governorate_name_en, buyper.SID ,buyper.Page,buyper.PerID,buyper.DateTime,Month(Date) As Month,Year(Date) As Year,buyper.Date,buyper.sPrice,buyper.Shipping,buyper.Quantity AS Quantity,buyper.Userprofit AS UP,buyper.Ahmed,buyper.Ziad,perfumes.Image AS SHOEIMG,perfumes.Model,buyper.MinP,buyper.ActualPrice,perfumes.Quantity as pq,salesperson.Image AS SIMG, salesperson.Sname,salesperson.Gender From buyper JOIN salesperson ON buyper.SID = salesperson.SID JOIN perfumes on buyper.PerID=perfumes.PerID JOIN customers ON customers.CPhone=buyper.CPhone JOIN cities ON cities.id = customers.Zone JOIN governorates on governorates.id=customers.Governorate WHERE buyper.SID = $ID AND Year(Date) = $Year AND Month(Date) = $Month ORDER BY `buyper`.`Datetime` DESC");
 
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
    $filename = $Name."'s Perfumes Orders ".$D." ".$Year.".csv";
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Order Number',
					'Perfume Model',
					'Platform',
					'Perfume Quantity',
					'Perfume Shipping Price',
					'Perfume Actual Price',
					'Perfume Minimum Price',
					'Perfume Sold Price',
					'Seller Name',
					'Customer Name',
					'Customer Phone Number',
					'Customer City EN',
					'Customer City AR',
					'Customer Zone EN',
					'Customer Zone AR',
					'Customer Address',  
					'Date Sold',
					$Name.' Profit',
					'Total Profit'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
		$COUNT++;
		$BOOB=$row['Ziad']+$row['Ahmed'];
		$lineData = array($COUNT,
						  $row['Model'],
						  $row['Page'], 
						  $row['Quantity'],
						  $row['Shipping'], 
						  $row['ActualPrice'], 
						  $row['MinP'], 
						  $row['sPrice'],
						  $row['Name'],
						  $row['Phone'],
						  $row['governorate_name_en'],
						  $row['governorate_name_ar'],
						  $row['city_name_en'],
						  $row['city_name_ar'],
						  $row['Address'],
						  $row['Date'],
						  $row['Sname'],
						  $row['UP'],
						  $BOOB); 
        fputcsv($f, $lineData, $delimiter);
		$TUP +=	$row['UP'];
		$TZP += $row['Ziad'];
		$TAP +=	$row['Ahmed'];
		$TACP += $row['ActualPrice']*$row['Quantity'];
		$TSP += $row['Price']*$row['Quantity'];
    } 
     $lineData = array('','','', 'Total Actual Price', $TACP.' LE.', 'Total Sold Price', $TSP.' LE.', '','','','','', '','','', '', 'Total Profits',$TUP.' LE.',$TZP+$TAP.' LE.'); 
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