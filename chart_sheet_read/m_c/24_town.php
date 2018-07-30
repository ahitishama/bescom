<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=2 and f_sid=9 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/M _ C - EA/'.$row['0'];
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);



$label = array();

$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($rw == 2){
		/*$label  [] = $value['A'];*/
		$label  [] = $value['B'];
		$label  [] = $value['C'];
		$label  [] = $value['D'];
		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G'];
		/*$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];*/
	}else if ($rw > 2){

		$avalue = str_replace(' ', '_', $value['A']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);


		$aarray[$avalue][] = (empty(trim($value['B']))?0:$value['B']);
		$aarray[$avalue][] = (empty(trim($value['C']))?0:$value['C']);
		$aarray[$avalue][] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$avalue][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$avalue][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$avalue][] = (empty(trim($value['G']))?0:$value['G']);
	}

	$rw++;
}




$color[0]= '#00e6ac';
$color[1]= '#66cc00';
$color[2]= '#e6e600';
$color[3]= '#8e5ea2';
$color[4]= '#3cba9f';
$color[5]= '#e8c3b9';
$color[6]= '#c45850';
$color[7]= '#80bfff';
$color[8]= '#bf4040';
$color[9]= '#8a8a5c';
$color[10]= '#4d79ff';

$returnArray = array();
$selectBoxValue = array();

$htmBaseIndex = 0;
$circle = "Town";

foreach ($aarray as $key => $value) {
	$selectBoxValue[] =  $key;
	$chartIndex = 0;	
	$returnArray[$circle][$key][$chartIndex]['label'] = $key;
	$returnArray[$circle][$key][$chartIndex]['fillColor'] = $color[0];
	$returnArray[$circle][$key][$chartIndex]['data'] = $value;
	$chartIndex++;
}



$selectHTMArray = array();

	$selectHTM = '';
    
    $optionIndex = 1;
    $key = 1;
	foreach ($selectBoxValue as $key1 => $value) {
			
			$selectHTMArray[$circle] .= '<option value="'.$circle.$optionIndex.'">'.$value.'</option>';
			$optionIndex++;
	}



	$newReturn = array();

	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '12';
	echo json_encode($newReturn);

?>
