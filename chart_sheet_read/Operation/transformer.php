<?php

require('../../include/reader-header.php');

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=14 and f_hid=13 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Operations/Transformer/'.$row['0'];
//$inputFileName = 'Transformer_Statistics.xls'; 
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
$chartLabel = array();
	
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


$sheetData = array_filter($sheetData);
$prev = '';

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'procurement';
	$newArray = array();
$row = 0;
foreach ($sheetData as $key => $value) {
	# code...
	if($key == 4){
		
		$label  [] = $value['C'];
		$label  [] = $value['D'];
		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G'];
		$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];
		
	}
	
	else if ($key > 4){
		$rws = 0;
		
		if(empty(trim($value['B'])) || empty(trim($value['C'])) || empty(trim($value['D']))) continue;
		
		$b = $value['B'];
		
		$bvalue = str_replace(' ', '_', $b);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);
		
		
		$aarray[$row][$rws++] = (empty(trim($value['C']))?0:$value['C']);
		$aarray[$row][$rws++] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$row][$rws++] = (empty(trim($value['E']))?0:$value['E']);
		
		
		$aarray[$row][$rws++] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$row][$rws++] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$row][$rws++] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$row][$rws++] = (empty(trim($value['I']))?0:$value['I']);
		$aarray[$row][$rws++] = (empty(trim($value['J']))?0:$value['J']);
		
		$chartLabel[] = $value['B'];

		$row++;
		
	}
}

	$newReturn['0'] = $label;
	$newReturn['1'] = $aarray;
	$newReturn['2'] = $chartLabel;
	
	/*
	echo '<pre>';
	print_r($newReturn);   */
echo json_encode($newReturn)
	
		
?>
