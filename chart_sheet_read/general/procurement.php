<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=1 and f_sid=2 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/Bescom/'.$row['0'];
//$inputFileName = 'Procurement.xls';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


	
$label = array();
$chartLabel = array();
	

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$prev = '';

	$arr = array();
	$aarray = array();
	$recordIndex = 0;
	$circle = 'procurement';
	$newArray = array();
$row = 0;
foreach ($sheetData as $key => $value) {
	# code...
	if($key == 2){

		foreach ($value as $a => $b) {
			$value[$a] = preg_replace('!\s+!', ' ', $b);
		}

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
		$label  [] = $value['AA'];
		$label  [] = $value['AB'];
	}
	
	else if ($key > 2){
		
		
		$rws = 0;
		
		
		
		

		if(empty(trim($value['B']))){
			$value['B'] = $b;
		}
		
		
		$b = $value['B'];
		
		$bvalue = str_replace(' ', '_', $b);
		$bvalue = str_replace('(', '', $bvalue);
		$bvalue = str_replace(')', '', $bvalue);
		
		if($prev != $bvalue){
			$row = 0;
		}
		
		$c = $value['C'];
		
		$cvalue = str_replace(' ', '_', $c);
		$cvalue = str_replace('(', '', $cvalue);
		$cvalue = str_replace(')', '', $cvalue);
		
		
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['F']))?0:$value['F']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['G']))?0:$value['G']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['H']))?0:$value['H']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['I']))?0:$value['I']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['J']))?0:$value['J']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['K']))?0:$value['K']);
		
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['L']))?0:$value['L']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['M']))?0:$value['M']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['N']))?0:$value['N']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['O']))?0:$value['O']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['P']))?0:$value['P']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['Q']))?0:$value['Q']);
		
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['R']))?0:$value['R']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['S']))?0:$value['S']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['T']))?0:$value['T']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['U']))?0:$value['U']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['V']))?0:$value['V']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['W']))?0:$value['W']);
		
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['X']))?0:$value['X']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['Y']))?0:$value['Y']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['Z']))?0:$value['Z']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['AA']))?0:$value['AA']);
		$aarray[$bvalue][$row][$rws++] = (empty(trim($value['AB']))?0:$value['AB']);
		
		$chartLabel[$bvalue][] = $cvalue;
		

		$prev = $bvalue;
		$row++;
		
	}
}

	$newReturn['0'] = $label;
	$newReturn['1'] = $aarray;
	$newReturn['2'] = $chartLabel;
	
	/*
	echo '<pre>';
	print_r($newReturn);   */
echo json_encode($newReturn)
	
		
?>
