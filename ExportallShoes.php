<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 

$query  = $mycon->query("SELECT * From shoes JOIN shoesquantity on shoes.ID = shoesquantity.ID");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Shoes.csv"; 
    $Q='';
    $X='';
    $ST=''; 
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Shoe Model','Shoe Sizes','Shoe Quantities', 'Shoe Minimum Price', 'Shoe Actual Price'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
			$lineData = array($row['Model'],$row['Size'], $row['Quantity'],$row['Price'], $row['ActualPrice']); 
			fputcsv($f, $lineData, $delimiter);
			$Q += $row['Quantity'];
			$X = $row['Quantity'] *  $row['ActualPrice'];
			$ST +=  $X;
			
        
			
    }
            $lineData = array('','Total Number Of Shoes in The Inventory', $Q.' Piece(s).','Total Actual Price Of Shoes in The Inventory',$ST.' LE.'); 
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


