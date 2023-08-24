<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
// error_reporting(0);
$query  = $mycon->query("SELECT UPPER(Name) AS Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, Gender,CPhone,city.Governorate,Address FROM `customers` JOIN city on City = city.CityID JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate  ORDER BY `customers`.`Name` ASC");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "All Customers.csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Customer Name',
					'Customer Gender',
					'Customer Phone Number',
					'Customer City EN', 'Customer City AR',
					'Customer Zone EN','Customer Zone AR',
					'Customer Address',
					'CITY'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
		$PH = "0".$row['CPhone'];
		$C =$row['Governorate'];
        $lineData = array($row['Name'],
						  $row['Gender'],
						  $PH,
						  $row['governorate_name_en'],
						  $row['governorate_name_ar'],
						  $row['city_name_en'],
						  $row['city_name_ar'],
						  $row['Address'],
						  $C); 
        fputcsv($f, $lineData, $delimiter);
	} 
     
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