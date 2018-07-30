<?php

include '../../include/reader-header.php';

$sql = "select f_filename from file_uploads where f_mid=2 and f_sid=6 and f_hid=0 and f_fid=0 order by fid desc";
$result = $con->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$inputFileName = '../../uploads/M _ C - EA/'.$row['0'];
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

	$a = '';
	static $b = '';
	$label = array();
	$NoOfLiveInstallations = '[';
	$ConnectedLoadKW = '[';
	$ConnectedLoadHP = '[';
	$ConnectedLoadKVA = '[';
	$NetConsumption = '[';
	$DemandRevenueTotal = '[';
	$CollectionTotal = '[';

	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

	$rw = 0;

	$arr = array();
	$aarray = array();

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

			if(empty(trim($value['A']))){
				$value['A'] = $a;
			}
			if(!empty($value['B'])){
				 $b = $value['B'];
			}
			else{
				$value['B'] = $b;
			}
			
			if(trim(strtolower($value['A'])) == "grand total"){
				$value['B'] = 'grand';
				$cvalue = 'total';
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['D']))?0:$value['D']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['E']))?0:$value['E']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['F']))?0:$value['F']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['G']))?0:$value['G']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['H']))?0:$value['H']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['I']))?0:$value['I']);
				$aarray[$value['B']][$cvalue][] = (empty(trim($value['J']))?0:$value['J']);
				continue;
			}
			
			$cvalue = str_replace(' ', '_', $value['C']);
			$cvalue = str_replace('(', '', $cvalue);
			$cvalue = str_replace(')', '', $cvalue);
			
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['D']))?0:$value['D']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['E']))?0:$value['E']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['F']))?0:$value['F']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['G']))?0:$value['G']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['H']))?0:$value['H']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['I']))?0:$value['I']);
			$aarray[$value['B']][$cvalue][] = (empty(trim($value['J']))?0:$value['J']);
			
			
		
			$a = $value['A'];
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
	$selectBoxValue = array();


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

	print_r($returnArray);







	foreach($aarray as $key=>$value){
		$selectBoxValue[] = strtoupper($key);
		if(strtolower($key) == "chitradurga"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(strtolower($key) == "davanagere"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(strtolower($key) == "harihara"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(strtolower($key) == "hiriyuru"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(strtolower($key) == "madhugiri"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(strtolower($key) == "tiptur"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(trim(strtolower($key)) == "tumkur"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
		}
		if(trim(strtolower($key)) == "grand"){
			$runTimeArray = array();
			$chartIndex = 0;
			foreach($value as $cindex=>$cvalue){
				$runTimeArray[$chartIndex]['label'] = $cindex;
				$runTimeArray[$chartIndex]['fillColor'] = $color[$chartIndex];
				$runTimeArray[$chartIndex]['data'] = $cvalue;
				$chartIndex++;
			}
			$returnArray[] = $runTimeArray;
			
		}
		
		 
	}

    $selectHTM = '';
    $htmlI = 1;
	foreach ($selectBoxValue as $key => $value) {
		$selectHTM .= '<option value="pie'.$htmlI.'">'.$value.'</option>';

$htmlI++;		
	}
	$newReturn['0'] = $label;
	$newReturn['1'] = $returnArray;
	$newReturn['2'] = $selectHTM;
	echo json_encode($newReturn);
		
?>
