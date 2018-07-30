<?php
include_once('config.php');
session_start();
error_reporting(0);

	
$filename = $_POST['chartType'];
$area_name = $_POST['area_name'];
$Subfilename = $_POST['subarea_name'];
$SubSubfilename = $_POST['sub_subarea_name'];

$firstoption = str_replace('&amp;', '_', $_POST['firstoption']);
$secondoption = trim($_POST['secondoption']);
$thirdoption = str_replace('&amp;', '_', $_POST['thirdoption']);
$fourthoption = trim($_POST['fourthoption']);

if($filename!='' && $area_name !='' && $Subfilename =='' && $SubSubfilename =='')
{
	
$mailpath=mkdir("../uploads/".$firstoption, 0777, true);
$fileareaname = $secondoption;
}
else if($filename!='' && $area_name !='' && $Subfilename !='' && $SubSubfilename =='')
{
	
	$mailpath=mkdir("../uploads/".$firstoption . "/" . $secondoption, 0777, true); 
	$fileareaname = $thirdoption;
}
else
{
	$mailpath=mkdir("../uploads/".$firstoption . "/" . $secondoption . "/" . $thirdoption, 0777, true);
	$fileareaname = $fourthoption;
}
$filename1=explode(".", $_FILES['file_tmp']['name']);
$tempfile1 = $_FILES["file_tmp"]["tmp_name"];
$datetime=date('d-m-y-H-i-s',time());

$newfilename = $datetime.'_'.$fileareaname . '.' . end($filename1); 

if($filename!='' && $Subfilename=='' && $SubSubfilename=='')
{
move_uploaded_file($tempfile1,"../uploads/".$firstoption . "/" . $newfilename);
}
else if($filename!='' && $Subfilename!='' && $SubSubfilename=='')
{
move_uploaded_file($tempfile1,"../uploads/".$firstoption . "/" . $secondoption . "/" . $newfilename);
}
else
{
move_uploaded_file($tempfile1,"../uploads/".$firstoption . "/" . $secondoption . "/"  . "/" . $thirdoption . "/" . "/" . $newfilename);
}


$sql=mysqli_query($con,"Insert into file_uploads (f_mid,f_sid,f_hid,f_fid,f_filename,f_date) values ('$filename', '$area_name', '$Subfilename','$SubSubfilename','$newfilename', now())");

$_SESSION['success'] = 'Uploaded successfully.';
echo "<script type='text/javascript'>window.location.href = '../upload.php';</script>";
exit();
?>
