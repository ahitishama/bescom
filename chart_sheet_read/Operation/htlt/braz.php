<?php

include '../../../includes/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=11 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		


$inputFileName = '../../../uploads/Operations/'.$row['0'];
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
PHPExcel_Calculation::getInstance()->setCalculationCacheEnabled(false);

static $c = '';
static $b = '';
static $a = '';
$d='';
$label = array();


$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,null,true,true);

$rw = 0;

$arr = array();
$aarr11111 = array();
$selectBoxValue = array(); 

foreach ($sheetData as $key => $value) {
	# code...

	if($rw == 3){ 
		/*$label  [] = $value['A'];
		$label  [] = $value['B'];*/
		$label  [] = $value['C']; 
		$label  [] = $value['D'];
		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G']; 
		$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];
		$label  [] = $value['K'];
		$label  [] = $value['L'];
		$label  [] = $value['M'];
		$label  [] = $value['N'];
		$label  [] = $value['O'];
		$label  [] = $value['P'];
		$label  [] = $value['Q'];
	}

	
	
	else if ($rw > 5){
	
		if(!empty($value['A'])){
			 $a = $value['A'];
		}
		else{
			$value['A'] = $a;
		}

		

		$bvalue = str_replace(' ', '_', $value['B']);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);
		
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['C']))?0:$value['C'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['D']))?0:$value['D'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['E']))?0:$value['E'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['F']))?0:$value['F'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['G']))?0:$value['G'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['H']))?0:$value['H'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['I']))?0:$value['I'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['J']))?0:$value['J'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['K']))?0:$value['K'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['L']))?0:$value['L'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['M']))?0:$value['M'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['N']))?0:$value['N'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['O']))?0:$value['O'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['P']))?0:$value['P'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$value['A']][$bvalue][] =  trim(filter_var((empty($value['Q']))?0:$value['Q'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		
		$b = $value['B'];
		
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['C']))?0:$value['C'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['D']))?0:$value['D'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['E']))?0:$value['E'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['F']))?0:$value['F'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['G']))?0:$value['G'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['H']))?0:$value['H'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['I']))?0:$value['I'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['J']))?0:$value['J'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['K']))?0:$value['K'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['L']))?0:$value['L'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['M']))?0:$value['M'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['N']))?0:$value['N'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['O']))?0:$value['O'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['P']))?0:$value['P'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray2[$bvalue][] =  trim(filter_var((empty($value['Q']))?0:$value['Q'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
	}

	$rw++;
}

	$color[0]= '#46BFBD';
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
	$tcolor[0]= '#d2d6de';

	
	$returnArray = array();
	$prevZone = '';
	$chartIndex = 0;
	foreach($aarray as $zone=>$area){  
		$prevArea = '';
			foreach ($area as $key => $value) { 
			if($zone =='Blore Rural' || $zone =='Ramnagar' || $zone =='Kolar')
		{
			if(strtolower($prevArea) != strtolower($key)){
					$selectBoxValue[$zone][] = strtoupper($key);
					$chartIndex = 0;
				}
				$returnArray[$zone][$key][$chartIndex]['label'] = $key;
				$returnArray[$zone][$key][$chartIndex]['fillColor'] = $color[$chartIndex];
				$returnArray[$zone][$key][$chartIndex]['data'] = $value;
				$prevArea = $key;
				$chartIndex++;
			
		}
			}
		$prevZone = $zone;
	}

	
	$chartIndex = 0;
foreach($aarray2 as $zone=>$area)
	{ 
	if($zone == "BRAZ_TOTAL")
	{
		        $selectBoxValue[$zone][] = strtoupper($area);
		     	$returnArray[$zone][$chartIndex]['label'] = $zone;
				$returnArray[$zone][$chartIndex]['fillColor'] = $tcolor[$chartIndex];
				$returnArray[$zone][$chartIndex]['data'] = $area;
				$chartIndex++;

	}
	}

		$selectHTMArray = array();
    
	foreach ($selectBoxValue as $key => $value) {
		$selectHTMArray[$key] = '';
		$htmlI = 1;
		foreach ($value as $valKey => $option) {
			$selectHTMArray[$key] .= '<option value="'.$key.$htmlI.'">'.$option.'</option>';
			$htmlI++;
		}
	}
    
	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '6';

echo json_encode($newReturn)
	

?>
