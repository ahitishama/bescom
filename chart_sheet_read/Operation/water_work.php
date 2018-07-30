<?php

require('../../include/reader-header.php');

$sql = "select f_filename from file_uploads where f_mid=3 and f_sid=15 and f_hid=14 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$chart_type = 'braz';
if(isset($_POST['type'])){
	$chart_type = $_POST['type'];
}

$inputFileName = '../../uploads/Operations/Water_Works/'.$row['0'];
//$inputFileName = 'water_works.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
$chartLabel = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

$sheetData = array_filter($sheetData);

$prevb = '';
$prevc = '';
$labelcount = 0;

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'water_works';
	$newArray = array();
$row = 0;
$lastLabel = '';
foreach ($sheetData as $key => $value) {
	# code...
	if($key == 4){
		

		$label  [] = $value['E'];
		$label  [] = $value['F'];
		$label  [] = $value['G'];
		$label  [] = $value['H'];
		$label  [] = $value['I'];
		$label  [] = $value['J'];
		
		$lastLabel = $value['S'];

	}
	else if($key == 5){
		

		$label  [] = $value['K'];
		$label  [] = $value['L'];
		$label  [] = $value['M'];
		$label  [] = $value['N'];
		$label  [] = $value['O'];
		$label  [] = $value['P'];
		$label  [] = $value['Q'];
		$label  [] = $value['R'];
		$label  [] = $lastLabel;

	}
	
	else if ($key > 5){
		$rws = 0;
		
		$b = strtoupper($value['B']);
		
		
		if(empty($value['B'])){
			$b = $prevb;
		}
		
		$c = strtolower(trim($value['C']));
		
		if(empty($value['C'])){
			$c = $prevc;
		}
		
		$bvalue = str_replace(' ', '_', $b);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);
		
		
		$d = $value['D'];
		
		$dvalue = str_replace(' ', '_', $d);
		$dvalue = str_replace('(', '', $dvalue);
		$dvalue = str_replace(')', '', $dvalue);
		
		
		if(strtolower($bvalue) == strtolower($c)){
			$totalData = 1;
		}else{
			$totalData = 0;
		}
		
		
		if(empty(trim($value['D'])) && $totalData != 1){	
			$row = 0;
			continue;
		}
		
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['E']))?0:$value['E']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['I']))?0:$value['I']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['J']))?0:$value['J']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['K']))?0:$value['K']);
		
		
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['L']))?0:$value['L']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['M']))?0:$value['M']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['N']))?0:$value['N']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['O']))?0:$value['O']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['P']))?0:$value['P']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['Q']))?0:$value['Q']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['R']))?0:$value['R']);
		$aarray[$bvalue][$c][$row][$rws++] = (empty(trim($value['S']))?0:$value['S']);
		
		$row++;
		
		
		$prevb = $b;
		$prevc = $c;
		
		
		$selectBox[$bvalue][$c][] = $value['D'];
		
		
		if(empty($value['C']) || strtolower($value['C']) == 'total' || strtolower($value['C']) == strtolower($bvalue)){
			continue;
		}
		$chartLabel[$bvalue][] = $value['C'];
		
	}
}


$selectHTMArray = array();
unset($selectBox[strtoupper($chart_type)]['bmaz']);
unset($selectBox[strtoupper($chart_type)]['braz']);
    
	foreach ($selectBox[strtoupper($chart_type)] as $key => $value) {
		$selectHTMArray[$key] = '';
		$htmlI = 1;
		foreach ($value as $valKey => $option) {
			$selectHTMArray[$key] .= '<option value="'.$key.$htmlI.'">'.$option.'</option>';
			$htmlI++;
		}
		
		if(empty(trim($selectHTMArray[$key]))){
			unset($selectHTMArray[$key]);
		}
			
		
	}
	
	$returnGraphData = array();
	
	foreach($aarray[strtoupper($chart_type)] as $key => $value){
		foreach($value as $val){
			$returnGraphData[$key][] = $val;
		}		
	}
	
	

	$newReturn['0'] = $label;
	$newReturn['1'] = $returnGraphData;
	$newReturn['2'] = $selectBox[strtoupper($chart_type)];
	$newReturn['3'] = $chartLabel[strtoupper($chart_type)];
	$newReturn['4'] = $selectHTMArray;
	//$newReturn['1'] = $aarray;
	//$newReturn['2'] = $selectBox;
	//$newReturn['3'] = $chartLabel;
	  
echo json_encode($newReturn)
	
		
?>
