<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=5 and f_sid=22 and f_hid=19 and f_fid=27 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$sql2 = "select f_filename from file_uploads where f_mid=5 and f_sid=22 and f_hid=19 and f_fid=28 order by fid desc";
$result2 = $con->query($sql2);
$row2=mysqli_fetch_array($result2,MYSQLI_NUM);

$inputFileName = '../../uploads/Projects/NJY/NJY Last Month/'.$row['0'];
$inputFileName2 = '../../uploads/Projects/NJY/NJY Last Month/'.$row2['0'];
//$inputFileName = 'njx_lastmonth.xlsx';
//$inputFileName2 = 'njy_lastmonth_2.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

$objPHPExcel2 = PHPExcel_IOFactory::load($inputFileName2);

	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

$sheetData2 = $objPHPExcel2->getActiveSheet()->toArray(null,true,true,true);
	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'njysheet2';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($key == 5){
		
		$label  [] = $value['F'];
		$label  [] = $value['J'];
		$label  [] = $value['K'];
	}
	
	else if ($rw > 6){

		
		$avalue = str_replace(' ', '_', $value['B']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);
		

		if(empty($avalue))continue;


		
		$aarray[$avalue][] = trim(filter_var((empty($value['E']))?0:$value['E'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$avalue][] = trim(filter_var((empty($value['J']))?0:$value['J'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$avalue][] = trim(filter_var((empty($value['K']))?0:$value['K'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
	}

	$rw++;
}

$rw2 = 0;
foreach ($sheetData2 as $key2 => $value2) {
	# code...
	if($key2 == 5){
		
		$label2  [] = $value2['F'];
		$label2  [] = $value2['J'];
		$label2  [] = $value2['K'];
	}
	
	else if ($rw2 > 6){
		$avalue2 = str_replace(' ', '_', $value2['B']);
		$avalue2 = str_replace('(', '', $avalue2);
		$avalue2 = str_replace(')', '', $avalue2);
		

		if(empty($avalue2))continue;


		
		$aarray2[$avalue2][] = trim(filter_var((empty($value2['E']))?0:$value2['E'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$avalue2][] = trim(filter_var((empty($value2['J']))?0:$value2['J'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$avalue2][] = trim(filter_var((empty($value2['K']))?0:$value2['K'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
	}

	$rw2++;
}




$color[0]= '#4f98c3';
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
$selectBoxValue2 = array();

$htmBaseIndex = 0;
$circle = "STATUS OF NIRANTHARA JYOTHI – Phase-3 at  the end of Dec-2017";


foreach ($aarray as $key => $value) {
	$selectBoxValue[] =  $key;
	$chartIndex = 0;	
	$returnArray[$circle][$key][$chartIndex]['label'] = $key;
	$returnArray[$circle][$key][$chartIndex]['fillColor'] = $color[0];
	$returnArray[$circle][$key][$chartIndex]['data'] = $value;
	$chartIndex++;
}
$circle2 = "STATUS OF NIRANTHARA JYOTHI – Phase-3 at  the end of Jan-2018";
foreach ($aarray2 as $key2 => $value2) { 
	$selectBoxValue2[] =  $key2;
	$chartIndex = 0;	
	$returnArray[$circle2][$key2][$chartIndex]['label'] = $key2;
	$returnArray[$circle2][$key2][$chartIndex]['fillColor'] = $color[0];
	$returnArray[$circle2][$key2][$chartIndex]['data'] = $value2;
	$chartIndex++;
}



    $selectHTMIndex = 0;
    $selectHTMArray = array();
    $htmlI = 'STATUS OF NIRANTHARA JYOTHI – Phase-3 at  the end of Dec-2017';
    $selectHTMArray[$htmlI] = '';
	foreach ($selectBoxValue as $key => $category) {
		$avalue = ucwords(str_replace('_', ' ', $category));
	
				$selectHTMArray[$htmlI] .='<option value="'.$htmlI.($key+1).'">'.trim($avalue).'</option>';
		
		
		
	}
	
	$selectHTMIndex2 = 0;
    $selectHTMArray2 = array();
    $htmlI2 = 'STATUS OF NIRANTHARA JYOTHI – Phase-3 at  the end of Jan-2018';
	$selectHTMArray[$htmlI2] = '';
	foreach ($selectBoxValue2 as $key2 => $category2) {
	$avalue2 = ucwords(str_replace('_', ' ', $category2));
	$selectHTMArray[$htmlI2] .='<option value="'.$htmlI2.($key2+1).'">'.trim($avalue2).'</option>';
		
	}



	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '12';

	echo json_encode($newReturn);
		
?>
