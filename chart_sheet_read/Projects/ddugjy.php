<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=5 and f_sid=18 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Projects/'.$row['0'];
//$inputFileName = 'ddugjy.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,null,true,true);


	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'DDUGJY';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($key == 5){
		/*$label  [] = $value['A'];*/
		//$label  [] = $value['B'];
		//$label  [] = $value['C'];
		$label  [] = substr($value['D'],0,30);
		$label  [] = substr($value['E'],0,30);
		$label  [] = substr($value['F'],0,30);
		$label  [] = substr($value['G'],0,30);
		$label  [] = substr($value['H'],0,30);
		$label  [] = substr($value['I'],0,30);
		$label  [] = substr($value['J'],0,30);
		$label  [] = substr($value['K'],0,30);
	}
	
	else if ($rw > 5){

		if($value['C'] !='')
		{
		$avalue = str_replace(' ', '_', $value['B']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);
		}
		else{
		$lablebvalue = str_replace(' ', '_', $value['B']);
		$lablebvalue = str_replace('(', '', $avalue);
		$lablebvalue = str_replace(')', '', $avalue);
		}

		if(empty($avalue))continue;


		//$aarray[$avalue][] = (empty(trim($value['B']))?0:$value['B']);
		//$aarray[$avalue][] = (empty(trim($value['C']))?0:$value['C']);
		$aarray[$avalue][] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$avalue][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$avalue][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$avalue][] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$avalue][] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$avalue][] = (empty(trim($value['I']))?0:$value['I']);
		$aarray[$avalue][] = (empty(trim($value['J']))?0:$value['J']);
	//	$aarray[$avalue][] = (empty(trim(filter_var$value['K']))?0:$value['K']);
		$aarray[$avalue][] = trim(filter_var((empty($value['K']))?0:$value['K'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
	}

	$rw++;
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

$htmBaseIndex = 0;
$circle = "BANGALORE  ELECTRICITY  SUPPLY  COMPANY LIMITED";


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
    $htmlI = 'BANGALORE  ELECTRICITY  SUPPLY  COMPANY LIMITED';
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
