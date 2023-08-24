<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database 

$AhmedAminProf=0.0;
$M7med3liProf=0.0;
$AsmaaAMIN=0.0;
$IbrahimAmin=0.0;
$Bassem5aled=0.0;
$OmarFathy=0.0;
$Arsanybeshara=0.0;
$Tarek3bdl3azim=0.0;
$AhmedYasser=0.0;
$OBADAH=0.0;
$Amrh=0.0;
$FaresAsh=0.0;
$Zero=0.0;
$Count=0.0;
$TACPAK=0.0;
$TSPAK=0.0;

 $year = $_GET['Year'];
$Month = $_GET['Month'];
$query  = $mycon->query("SELECT DISTINCT buyper.CPhone AS Phone,customers.Name,customers.Name,customers.Gender,customers.Address, customers.Name,cities.city_name_ar, cities.city_name_en, governorates.governorate_name_ar,governorates.governorate_name_en, buyper.SID ,buyper.Page,buyper.PerID,buyper.DateTime,Month(Date) As Month,Year(Date) As Year,buyper.Date,buyper.sPrice,buyper.Shipping,buyper.Quantity AS Quantity,buyper.Userprofit AS UP,buyper.Ahmed,buyper.Ziad,perfumes.Image AS SHOEIMG,perfumes.Model,buyper.MinP,buyper.ActualPrice,perfumes.Quantity as pq,salesperson.Image AS SIMG, salesperson.Sname,salesperson.Gender From buyper JOIN salesperson ON buyper.SID = salesperson.SID JOIN perfumes on buyper.PerID=perfumes.PerID JOIN customers ON customers.CPhone=buyper.CPhone JOIN cities ON cities.id = customers.Zone JOIN governorates on governorates.id=customers.Governorate Where Year(Date) = $year  AND Month(Date) = $Month ORDER BY `buyper`.`Datetime` DESC");
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
    $filename = "All Perfumes Orders For : ".$D." ". $year.".csv"; 
     

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
					'Customer Name',
					'Customer Phone Number',
					'Customer City EN',
					'Customer City AR',
					'Customer Zone EN',
					'Customer Zone AR',
					'Customer Address',  
					'Date Sold',
					'Seller Name', 
					' User Profit', 
					'Total Profit'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
		$PH =$row['Phone'];
		$C =$row['Governorate'];
		$Count++;
		$BOOB=$row['Ziad']+$row['Ahmed'];
		$Userprofit += $row['UP'];
        $lineData = array($Count,
						  $row['Model'],
						  $row['Page'], 
						  $row['Quantity'],
						  $row['Shipping'], 
						  $row['ActualPrice']*$row['Quantity'], 
						  $row['MinP']*$row['Quantity'], 
						  $row['sPrice']*$row['Quantity'],
						  $row['Name'],
						  $PH,
						  $row['governorate_name_en'],
						  $row['governorate_name_ar'],
						  $row['city_name_en'],
						  $row['city_name_ar'],
						  $row['Address'],
						  $row['Date'],
						  $row['Sname'],
						  $row['UP'],
						  $BOOB
						 ); 
        fputcsv($f, $lineData, $delimiter);
if($row['Sname']=='Asmaa Amin'){
$AsmaaAMIN += $row['UP'];
}else if($row['Sname'] == 'Ibrahim Amin'){
$IbrahimAmin += $row['UP'];
}else if($row['Sname'] == 'Bassem Khaled'){
$Bassem5aled += $row['UP'];
}else if($row['Sname'] == 'Omar Mohamed Fathy'){
$OmarFathy += $row['UP'];
}else if($row['Sname'] == 'Arsany Beshara'){
$Arsanybeshara += $row['UP'];
}else if($row['Sname'] == 'Tarek Abd El Azim'){
$Tarek3bdl3azim += $row['UP'];
}else if($row['Sname'] == 'Obadah Motasem'){
$OBADAH += $row['UP'];
}else if($row['Sname'] == 'Amr Hamed'){
$AmrH += $row['UP'];
}else if($row['Sname'] == 'Fares ElAshryy'){
$FaresAsh += $row['UP'];
}else{
$AsmaaAMIN += $Zero;
$IbrahimAmin += $Zero;
$Bassem5aled += $Zero;
$OmarFathy += $Zero;
$Arsanybeshara += $Zero;
$Tarek3bdl3azim += $Zero;
$OBADAH += $Zero;				
$AmrH += $Zero;
$FaresAsh += $Zero;	
}
$ASSS=$row['ActualPrice']*$row['Quantity'];

$TZP += $row['Ziad']; 
$TAP += $row['Ahmed'];
$TACPAK += $ASSS;

} 

$BOOBS = $TZP + $TAP;
$TSPAK = $TACPAK+$BOOBS;	



	$lineData = array('','','','','Total Actual Price', $TACPAK.' LE.', 'Total Sold Price', $TSPAK.' LE.'); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Asmaa Amin's Profit",$AsmaaAMIN,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Ibrahim Amin's Profit",$IbrahimAmin,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Bassem Khaled's Profit",$Bassem5aled,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Omar Fathy's Profit",$OmarFathy,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Tarek Abd El Azim's Profit",$Tarek3bdl3azim,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Arsany Beshara's Profit",$Arsanybeshara,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Obadah Moatasem's Profit",$OBADAH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Amr Ahmed's Profit",$AmrH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','',"Total Fares ElAshryy's Profit",$FaresAsh,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Profit",$BOOBS); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	
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