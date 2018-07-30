<?php
//error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Europe/London');
//include('../include/config.php');
//$sql = "select f_filename from file_uploads where f_mid=2 and f_sid=6 and f_hid=0 and f_fid=0 order by fid desc";
//$result = $con->query($sql);
//$row=mysqli_fetch_array($result,MYSQLI_NUM);

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');

/** PHPExcel_IOFactory */
include '../../../library/PHPExcel/IOFactory.php';
		
$inputFileName = 'sheet1.xlsx';
//$inputFileName = '../uploads/M _ C - EA/'.$row['0'];
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

	static $a = '';
	 $b = '';
	$label = array();
	$NoOfLiveInstallations = '[';
	$ConnectedLoadKW = '[';
	$ConnectedLoadHP = '[';
	$ConnectedLoadKVA = '[';
	$NetConsumption = '[';
	$DemandRevenueTotal = '[';
	$CollectionTotal = '[';

	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,null,true,true);
	$rw = 0;

	$arr = array();
	$aarray = array();
	
	foreach ($sheetData as $key => $value) {
		# code...
		if($rw == 4){
			/*$label  [] = $value['A'];
			$label  [] = $value['B'];*/
			$label  [] = $value['C'];
			$label  [] = $value['D'];
			$label  [] = $value['E'];
			$label  [] = $value['F'];
			$label  [] = $value['G'];
			$label  [] = $value['P'];

	
		}
		
		if($rw == 5){
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

echo '<pre>';
	print_r($aarray);die;
	$color[0]= '#00e6ac';


	$returnArray = array();
	$mainareaTile = '';
	$chartIndex = 0;
	
	foreach($aarray as $maintitle=>$area){
	
		foreach ($area as $areaKey => $value) {
		if($mainareaTile != $maintitle)
		{
			$mainareaTile = $maintitle;
		
		}
		if($mainareaTile !='BESCOM Total')
		{
			$selectBoxValue[$mainareaTile][] = strtoupper($areaKey);
			$chartIndex = 0;
				$returnArray[$mainareaTile][$areaKey][$chartIndex]['label'] = $key;
				$returnArray[$mainareaTile][$areaKey][$chartIndex]['fillColor'] = $color[$chartIndex];
				$returnArray[$mainareaTile][$areaKey][$chartIndex]['data'] = $value;
				$chartIndex++;
		}
		}
		
		$mainareaTile = $maintitle;
		
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

echo json_encode($newReturn)
		
?>
