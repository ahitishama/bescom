<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=1 and f_sid=1 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Bescom/'.$row['0'];
$inputFileName = 'A&RT.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


	$rw = 0;

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'AnRT';

	foreach ($sheetData as $key => $value) {
		# code...
		if($rw == 2){
			/*$label  [] = $value['A'];*/
			$label  [] = trim($value['B']);
			$label  [] = $value['C'];
			$label  [] = $value['D'];
			$label  [] = $value['E'];
			$label  [] = $value['F'];
			$label  [] = $value['G'];
			$label  [] = $value['H'];
			$label  [] = $value['I'];

		}else if ($rw > 2){
			
			$avalue = str_replace(' ', '_', $value['A']);
			$avalue = str_replace('+', '_', $avalue);
			$avalue = str_replace('(', '', $avalue);
			$avalue = str_replace(')', '', $avalue);

			if($avalue == "Grand_Total"){
				continue;
			}

			$selectBoxValue[$recordIndex][] = strtoupper($avalue);

			$aarray[$recordIndex][$avalue][] = (empty(trim($value['B']))?0:$value['B']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['C']))?0:$value['C']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['D']))?0:$value['D']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['E']))?0:$value['E']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['F']))?0:$value['F']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['G']))?0:$value['G']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['H']))?0:$value['H']);
			$aarray[$recordIndex][$avalue][] = (empty(trim($value['I']))?0:$value['I']);

			if($avalue == "LT_Total"){
				$recordIndex++;
			}
		}

		$rw++;
	}


	$color[0] = '#00e6ac';
	$color[1] = '#66cc00';
	$color[2] = '#e6e600';
	$color[3] = '#8e5ea2';
	$color[4] = '#3cba9f';
	$color[5] = '#e8c3b9';
	$color[6] = '#c45850';
	$color[7] = '#80bfff';
	$color[8] = '#bf4040';
	$color[9] = '#8a8a5c';
	$color[10]= '#4d79ff';
	
	
	$returnArray = array();
	$prevZone = '';
	$chartIndex = 0;
	$rawIndex = 0;
	$selectBoxIndex = 0;
	$firstIndex = 0;

	foreach ($aarray as $fIndex => $category) {
		foreach ($category as $key => $arrayValue) {
			$chartIndex = 0;
			foreach ($arrayValue as $arrayValueKey => $value) {
				$returnArray[$firstIndex][$rawIndex][$chartIndex]['label'] = trim($label[$chartIndex]);
				$returnArray[$firstIndex][$rawIndex][$chartIndex]['fillColor'] =  $color[0];
				$returnArray[$firstIndex][$rawIndex][$chartIndex]['value'] = $value;
				$chartIndex++;
				
			}
			$rawIndex++;
		}
		$firstIndex++;
	}



    $selectHTMIndex = 0;
    $selectHTMArray = array();
    $htmlI = 1;
	foreach ($selectBoxValue as $key => $category) {
		$selectHTMArray[$key] = '';
		foreach ($category as $categoryKey => $value) {
				$selectHTMArray[$key] .='<option value="pie'.$htmlI.'">'.trim($value).'</option>';
				$htmlI++;
		}
	}

	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '12';

	echo json_encode($newReturn);
		
?>
