<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 

$query  = $mycon->query("SELECT * From perfumes");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Perfumes.csv"; 
    $Q='';
	$PT='';
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Perfume Model','Perfume Quantity', 'Perfume Minimum Price', 'Perfume Actual Price'); 
    fputcsv($f, $fields, $delimiter); 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
			$lineData = array($row['Model'], $row['Quantity'],$row['Price'], $row['ActualPrice']); 
			$Q += $row['Quantity'];
            $PT += $row['ActualPrice']*$row['Quantity'];
        fputcsv($f, $lineData, $delimiter);
			
    }
    $lineData = array('Total Number Of Perfumes in The Inventory ', $Q.' Perfume(s)','Total Actual Price Of Perfumes in The Inventory ',$PT.' LE.'); 
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


