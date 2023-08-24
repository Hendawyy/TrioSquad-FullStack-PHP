<?php 
// Load the database configuration file 
include_once 'DBCONN.php'; 
 error_reporting(0);
// Fetch records from database
$AhmedAminProf;
$M7med3liProf;
$AsmaaAMIN;
$IbrahimAmin;
$Bassem5aled;
$OmarFathy;
$Arsanybeshara;
$Tarek3bdl3azim;
$AhmedYasser;
$OBADAH;
$Amrh;
$FaresAsh;
$PROFIT;
$Zero=0.00;
$Count=0;
$TACPAK;
$TSPAK;
$year = $_GET['Year'];
$query  = $mycon->query("SELECT DISTINCT buys.CPhone,buys.SID,Pages.Platform,buys.ID,buys.Datetime,Month(Date) As Month,Year(Date) As Year, buys.Date,buys.sPrice,buys.Shipping,buys.Size,buys.Quantity,buys.Userprofit AS UserProfit,buys.Profit As TotProf,customers.Name,cities.city_name_ar, cities.city_name_en,
governorates.governorate_name_ar,governorates.governorate_name_en, customers.Name,customers.Gender,customers.City,customers.Address,city.Governorate,shoes.Model,shoes.Brand,buys.MinP AS MinPrice,buys.ActualPrice,shoes.Profit,shoes.Image AS SHOEIMG, salesperson.Image AS SIMG, salesperson.Sname,salesperson.Gender From buys JOIN customers ON buys.CPhone = customers.CPhone JOIN salesperson ON buys.SID = salesperson.SID JOIN shoes ON buys.ID = shoes.ID JOIN shoesquantity ON shoes.ID = shoesquantity.ID JOIN city ON customers.City = city.CityID JOIN Pages ON Pages.ID=buys.PN
JOIN cities ON cities.id = customers.Zone 
JOIN governorates on governorates.id=customers.Governorate
Where Year(Date) = '$year'
ORDER BY `buys`.`Datetime` DESC");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "All Shoes Orders For Year : ".$year.".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Order Number',
					'Shoe Model',
					'Platform',
					'Shoe Size',
					'Shoe Quantity',
					'Shoe Shipping Price',
					'Shoe Actual Price',
					'Shoe Minimum Price',
					'Shoe Sold Price',
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
    while($row = $query->fetch_assoc()){ 
		$PH =$row['CPhone'];
		$C =$row['Governorate'];
		$Count++;
		$TACPAK += $row['ActualPrice']*$row['Quantity'];
		$Userprofit += $row['Userprofit'];
        $lineData = array($Count,
						  $row['Model'],
						  $row['Platform'], 
						  $row['Size'],
						  $row['Quantity'],
						  $row['Shipping'], 
						  $row['ActualPrice'], 
						  $row['MinPrice'], 
						  $row['sPrice'],
						  $row['Name'],
						  $PH,
						  $row['governorate_name_en'],
						  $row['governorate_name_ar'],
						  $row['city_name_en'],
						  $row['city_name_ar'],
						  $row['Address'],
						  $row['Date'],
						  $row['Sname'],
						  $row['UserProfit'],
						  $row['TotProf']); 
        fputcsv($f, $lineData, $delimiter);
if($row['Sname']=='Asmaa Amin'){
$AsmaaAMIN += $row['UserProfit'];
}else if($row['Sname'] == 'Ibrahim Amin'){
$IbrahimAmin += $row['UserProfit'];
}else if($row['Sname'] == 'Bassem Khaled'){
$Bassem5aled += $row['UserProfit'];
}else if($row['Sname'] == 'Omar Mohamed Fathy'){
$OmarFathy += $row['UserProfit'];
}else if($row['Sname'] == 'Arsany Beshara'){
$Arsanybeshara += $row['UserProfit'];
}else if($row['Sname'] == 'Tarek Abd El Azim'){
$Tarek3bdl3azim += $row['UserProfit'];
}else if($row['Sname'] == 'Obadah Motasem'){
$OBADAH += $row['UserProfit'];
}else if($row['Sname'] == 'Amr Hamed'){
$AmrH += $row['UserProfit'];
}else if($row['Sname'] == 'Fares ElAshryy'){
$FaresAsh += $row['UserProfit'];
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
$PROFIT += $row['TotProf'];
}
	
	$TPz = $TACPAK+$PROFIT;
    $lineData = array('','','','','','Total Actual Price', $TACPAK.' LE.', 'Total Sold Price', $TPz.' LE.','','','','','','','','','','','','','','',''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Asmaa Amin's Profit",$AsmaaAMIN,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Ibrahim Amin's Profit",$IbrahimAmin,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Bassem Khaled's Profit",$Bassem5aled,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Omar Fathy's Profit",$OmarFathy,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Tarek Abd El Azim's Profit",$Tarek3bdl3azim,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Arsany Beshara's Profit",$Arsanybeshara,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Obadah Moatasem's Profit",$OBADAH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Amr Ahmed's Profit",$AmrH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','',"Total Fares ElAshryy's Profit",$FaresAsh,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Profit",$PROFIT); 
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