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
$Zero=0.0;
$Count;
$TSPAK;
$TACPAK;
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
JOIN Apparel on BuyApp.ID=Apparel.AID ORDER BY `BuyApp`.`Datetime` DESC;");
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "All Apparel Orders.csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Order Number',
					'Apparel Model',					
					'Apparel Type',
					'Platform',
					'Apparel Size',
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
		$PH =$row['Phone'];
		$C =$row['Governorate'];
		$Count++;
		$TACPAK += $row['ActualPrice']*$row['Quantity'];
		$Userprofit += $row['Userprofit'];
        $lineData = array($Count,
						  $row['Model'],						  
						  $row['AppType'],
						  $row['Platform'], 
						  $row['Size'],
						  $row['Quantity'],
						  $row['Shipping'], 
						  $row['ActualPrice']*$row['Quantity'], 
						  $row['MinimumPrice']*$row['Quantity'], 
						  $row['SoldPrice']*$row['Quantity'],
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
						  $row['Profit']); 
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
$PROFIT += $row['Profit'];
}
	
	$TPz = $TACPAK+$PROFIT;
    $lineData = array('','','','','','','Total Actual Price', $TACPAK.' LE.', 'Total Sold Price', $TPz.' LE.'); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Asmaa Amin's Profit",$AsmaaAMIN,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Ibrahim Amin's Profit",$IbrahimAmin,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Bassem Khaled's Profit",$Bassem5aled,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Omar Fathy's Profit",$OmarFathy,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Tarek Abd El Azim's Profit",$Tarek3bdl3azim,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Arsany Beshara's Profit",$Arsanybeshara,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Obadah Moatasem's Profit",$OBADAH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Amr Ahmed's Profit",$AmrH,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','',"Total Fares ElAshryy's Profit",$FaresAsh,''); 
    fputcsv($f, $lineData, $delimiter);
	/*----------------------------------------------------------------------------------------------*/
	$lineData = array('','','','','','','' ,'' ,'' ,'','','','','','','','','','',"Total Profit",$PROFIT); 
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