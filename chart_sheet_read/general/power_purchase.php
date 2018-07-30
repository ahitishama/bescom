<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=1 and f_sid=4 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Bescom/'.$row['0'];
//$inputFileName = 'New Microsoft Excel Worksheet.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$abc = array_pop($sheetData);
	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'dsm';

	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	
	if($rw > 0 ){
		$bvalue = str_replace(' ', '', $value['B']);	
		$bar_labels[] = $bvalue;
		$cons[$rw-1][] = empty(trim($value['C']))?0:$value['C'] ;
		$cons[$rw-1][] = $value['D'];
	}
	
$rw++;
	
}
	$newReturn['0'] = $bar_labels;
	$newReturn['1'] = $cons;
	echo json_encode($newReturn);
		
?>
