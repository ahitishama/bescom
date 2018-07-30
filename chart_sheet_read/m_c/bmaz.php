<?php

include '../../include/reader-header.php';


$sql = "select f_filename from file_uploads where f_mid=2 and f_sid=8 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		


$inputFileName = '../../uploads/M _ C - EA/'.$row['0'];
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

static $c = '';
static $b = '';
static $a = '';
$d='';
$label = array();


$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

$rw = 0;

$arr = array();
$aarr11111 = array();
$selectBoxValue = array();

foreach ($sheetData as $key => $value) {
	# code...
	if($rw == 2){
		/*$label  [] = $value['A'];
		$label  [] = $value['B'];
		$label  [] = $value['C'];*/
		$label  [] = $value['D'];
		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G'];
		$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];
	}else if ($rw > 2){
	
		if(!empty($value['A'])){
			 $a = $value['A'];
		}
		else{
			$value['A'] = $a;
		}
		if(!empty($value['B'])){
			 $b = $value['B'];
		}
		else{
			$value['B'] = $b;
		}
		

		$bvalue = str_replace(' ', '_', $value['B']);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);
		
		
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['I']))?0:$value['I']);
		//$aarray[$value['A']][$bvalue][$value['C']][] = (empty(trim($value['J']))?0:$value['J']);
		
		$b = $value['B'];
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
	$prevZone = '';
	$chartIndex = 0;
	foreach($aarray as $zone=>$area){ 
		$prevArea = '';
		foreach ($area as $areaKey => $areaSub) {
			foreach ($areaSub as $key => $value) {
				if(strtolower($prevArea) != strtolower($areaKey)){
					$selectBoxValue[$zone][] = strtoupper($areaKey);
					$chartIndex = 0;
				}
				$returnArray[$zone][$areaKey][$chartIndex]['label'] = $key;
				$returnArray[$zone][$areaKey][$chartIndex]['fillColor'] = $color[$chartIndex];
				$returnArray[$zone][$areaKey][$chartIndex]['data'] = $value;
				$prevArea = $areaKey;
				$chartIndex++;
			}
		}
		$prevZone = $zone;
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
