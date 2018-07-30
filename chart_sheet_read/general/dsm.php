<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=1 and f_sid=5 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

//$inputFileName = '../../uploads/Bescom/'.$row['0'];
$inputFileName = 'DSM.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'dsm';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($key == 1){
		/*$label  [] = $value['A'];*/
		//$label  [] = $value['B'];
		//$label  [] = $value['C'];
		$label  [] = $value['D'];
		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G'];
		/*$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];*/
	}
	else if($rw == 3){
		$avalue = str_replace(' ', '_', $value['C']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);

		if(empty($avalue))continue;


		//$aarray[$avalue][] = (empty(trim($value['B']))?0:$value['B']);
		//$aarray[$avalue][] = (empty(trim($value['C']))?0:$value['C']);

		

		$dValArray = explode("\n", $value['D']);
		$eValArray = explode("\n", $value['E']);
		$fValArray = explode("\n", $value['F']);
		$gValArray = explode("\n", $value['G']);

		$dValArray['0'] = trim(filter_var(  $dValArray['0'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$dValArray['1'] = trim(filter_var(  $dValArray['1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		
		$eValArray['0'] = trim(filter_var(  $eValArray['0'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$eValArray['1'] = trim(filter_var(  $eValArray['1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		
		$fValArray['0'] = trim(filter_var(  $fValArray['0'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$fValArray['1'] = trim(filter_var(  $fValArray['1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		
		$gValArray['0'] = trim(filter_var(  $gValArray['0'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$gValArray['1'] = trim(filter_var(  $gValArray['1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		


		$aarray[$avalue][] = $dValArray;
		$aarray[$avalue][] = $eValArray;
		$aarray[$avalue][] = $fValArray;
		$aarray[$avalue][] = $gValArray;
		
		/*$aarray[$avalue][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$avalue][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$avalue][] = (empty(trim($value['G']))?0:$value['G']);*/


	}
	else if ($rw > 3){

		$avalue = str_replace(' ', '_', $value['C']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);

		if(empty($avalue))continue;


		//$aarray[$avalue][] = (empty(trim($value['B']))?0:$value['B']);
		//$aarray[$avalue][] = (empty(trim($value['C']))?0:$value['C']);
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
$circle = "dsm";


foreach ($aarray as $key => $value) {
	$selectBoxValue[] =  $key;
	$chartIndex = 0;	
	$returnArray[$circle][$key][$chartIndex]['label'] = $key;
	$returnArray[$circle][$key][$chartIndex]['fillColor'] = $color[0];
	$returnArray[$circle][$key][$chartIndex]['data'] = $value;
	$chartIndex++;
}





    $selectHTMIndex = 0;
    $selectHTMArray = array();
    $htmlI = 'dsm';
    $selectHTMArray[$htmlI] = '';
	foreach ($selectBoxValue as $key => $category) {
		$avalue = ucwords(str_replace('_', ' ', $category));
		if($key !=4)
		{
				$selectHTMArray[$htmlI] .='<option value="'.$htmlI.($key+1).'">'.trim($avalue).'</option>';
		}
		
		
	}



	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '12';

	echo json_encode($newReturn);
		
?>
