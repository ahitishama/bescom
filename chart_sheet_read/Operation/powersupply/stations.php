<?php

include '../../../includes/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=12 and f_hid=7 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../../uploads/Operations/Power_supply/'.$row['0'];
//$inputFileName = 'stations.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


	

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'ipds';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($key == 2){
		/*$label  [] = $value['A'];*/
		$label  [] = substr($value['B'],0,30);
		$label  [] = substr($value['C'],0,30);
		$label  [] = substr($value['D'],0,30);
		$label  [] = substr($value['E'],0,30);
                   }
	

	else if ($rw > 1){

	
		$avalue = str_replace(' ', '_', $value['A']);
		$avalue = str_replace('(', '', $avalue);
		$avalue = str_replace(')', '', $avalue);
		

		if(empty($avalue))continue;
		$selectBoxValue[$recordIndex][] = strtoupper($avalue);

		$aarray[$recordIndex][$avalue][] = trim(filter_var((empty($value['B']))?0:$value['B'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$recordIndex][$avalue][] = trim(filter_var((empty($value['C']))?0:$value['C'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$recordIndex][$avalue][] = trim(filter_var((empty($value['D']))?0:$value['D'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;
		$aarray[$recordIndex][$avalue][] = trim(filter_var((empty($value['E']))?0:$value['E'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),'.') ;

	}

	$rw++;
}





$color[0]= '#46bfbd';
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


$htmBaseIndex = 0;
$circle = "Stations";
$firstIndex = 0;
$rawIndex = 0;

foreach ($aarray as $fIndex => $category) {
		foreach ($category as $key => $arrayValue) {
			$chartIndex = 0;
			foreach ($arrayValue as $arrayValueKey => $value) {

	$returnArray[$firstIndex][$rawIndex][$chartIndex]['label'] = trim($label[$chartIndex]);
	$returnArray[$firstIndex][$rawIndex][$chartIndex]['color'] = $color[$chartIndex];
				$returnArray[$firstIndex][$rawIndex][$chartIndex]['highlight'] = $highlight[$chartIndex];
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
