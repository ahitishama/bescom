<?php

include '../../../includes/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=12 and f_hid=22 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../../uploads/Operations/Power_supply/'.$row['0'];
//$inputFileName = 'peakloadrecord-17-18.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'peakloadrecord';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {

	if ($key > 3){

	
		$avalue [] = $value['A']; 
		$bvalue [] = $value['B']; 
		

		if(empty($avalue))continue;


		$aarray[$avalue][] = trim(filter_var((empty($value['B']))?0:$value['B'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
	
	}

	$rw++;
}









	$newReturn['0'] = $avalue;
	$newReturn['1'] = $bvalue;


	echo json_encode($newReturn);
		
?>
