<?php

include '../../../includes/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=10 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		


$inputFileName = '../../../uploads/Operations/'.$row['0'];
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
	
	if($rw == 4){
		/*$label  [] = $value['A'];
		$label  [] = $value['B'];*/
		$label  [] = substr($value['C'],0,10);
		$label  [] = substr($value['D'],0,10);
		$label  [] = substr($value['E'],0,10);
		$label  [] = substr($value['F'],0,10);
		$label  [] = substr($value['G'],0,10);
		$label  [] = substr($value['P'],0,10);
	}
	
	else if($rw == 5){
		/*$label  [] = $value['A'];
		$label  [] = $value['B'];*/
	
		$label  [] = $value['G'];
		$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];
		$label  [] = $value['K'];
		$label  [] = $value['L'];
		$label  [] = $value['M'];
		$label  [] = $value['N'];
		$label  [] = $value['O'];
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
		
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['C']))?0:$value['C']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['I']))?0:$value['I']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['J']))?0:$value['J']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['K']))?0:$value['K']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['L']))?0:$value['L']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['M']))?0:$value['M']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['N']))?0:$value['N']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['O']))?0:$value['O']);
		$aarray[$value['A']][$bvalue][] = (empty(trim($value['P']))?0:$value['P']);
		
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
			foreach ($area as $key => $value) { 
			if($zone =='Blore Rural' || $zone =='Ramnagara' || $zone =='Kolar')
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
	$newReturn['4'] = '12';

echo json_encode($newReturn)
	

?>
