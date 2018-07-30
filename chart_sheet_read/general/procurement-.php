<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=1 and f_sid=1 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Bescom/'.$row['0'];
//$inputFileName = 'Procurement.xls';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'procurement';


	$newArray = array();

	
$rw = 0;


foreach ($sheetData as $key => $value) {
	# code...
	if($key == 2){

		foreach ($value as $a => $b) {
			$value[$a] = preg_replace('!\s+!', ' ', $b);
		}
		
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
		$label  [] = $value['R'];
		$label  [] = $value['S'];


		$label  [] = $value['T'];
		$label  [] = $value['U'];
		$label  [] = $value['V'];

		$label  [] = $value['W'];
		$label  [] = $value['X'];
		$label  [] = $value['Y'];
		$label  [] = $value['Z'];

	

	}
	
	else if ($key > 2){

		if(!empty($value['B'])){
			 $b = $value['B'];
			
		}

		$bvalue = str_replace(' ', '_', $b);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);




		//print_r($bvalue);


		$cvalue = str_replace(' ', '_', $value['C']);


		$cvalue = str_replace('(', '', $cvalue);
		$value['C'] = str_replace(')', '', $cvalue);



		//if(empty($bvalue))continue;

		//print_r($value['C']);die;

		$aarray[$bvalue][$value['C']][] = (empty(trim($value['D']))?0:$value['D']);
		$aarray[$bvalue][$value['C']][] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$bvalue][$value['C']][] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$bvalue][$value['C']][] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$bvalue][$value['C']][] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$bvalue][$value['C']][] = (empty(trim($value['I']))?0:$value['I']);

		$b = $value['B'];
	}

	$rw++;
}


		echo '<pre>';
print_r($aarray);die;



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
		
		
				$selectHTMArray[$htmlI] .='<option value="'.$htmlI.($key+1).'">'.trim($avalue).'</option>';
		
	}



	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTMArray;
	$newReturn['3'] = 'Bar';
	$newReturn['4'] = '12';

	echo json_encode($newReturn);
		
?>
