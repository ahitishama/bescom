<?php
error_reporting(0);
include('include/config.php');
$menu=$_POST['menu'];
$area_name=$_POST['area_name'];
$submenu=$_POST['typemenu'];
$file_name=$_POST['file_name'];

if($submenu == 'submenu')
{
$select=mysqli_query($con,"select * from sub_menu where s_mid=".$menu);
?><option value=''>Select </option>
<?php 
  while($row=mysqli_fetch_array($select))
  {
   echo "<option value=".$row['sid'].">".$row['s_name']."</option>";
} }

else if($submenu == 'subhireachy')
{
$select1=mysqli_query($con,"select * from sub_hirarchy where h_fid=".$area_name);
$count=mysqli_num_rows($select1);
if($count>0)
{ 
?><option value=''>Select </option>
<?php 
 while($row1=mysqli_fetch_array($select1))
  {
   echo "<option value=".$row1['hid'].">".$row1['h_name']."</option>";
}
}
else
{
	echo 1;
}
 }
 
 else if($submenu == 'filename')
{
$select1=mysqli_query($con,"select * from sub_file_name where f_hid=".$file_name); 
$count=mysqli_num_rows($select1);

if($count>0)
{
?><option value=''>Select </option>
<?php 
	while($row1=mysqli_fetch_array($select1))
  {
   echo "<option value=".$row1['h_fid'].">".$row1['f_name']."</option>";
}
}
else
{
	echo 1;
}
 }
 ?>
	

