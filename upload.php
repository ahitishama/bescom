<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Bescom</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'header.php';?>
  <?php include 'nav.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
	if(isset($_SESSION['success']))
	{
	?>
	<div class="alert alert-success fade in" id="timeoutmessage">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
	</div>
	<?php
	unset($_SESSION['success']); }
	?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload Excel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">dcm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <form action="include/action.php?id=upload" enctype="multipart/form-data" method="post" id="submit_form">
            <!-- East Circle Graph -->
            <div class="box box-primary">
              <div class="box-header with-border">


                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
			  <input type="hidden" name="firstoption" id="firstoption"/>
			  <input type="hidden" name="secondoption" id="secondoption"/>
			  <input type="hidden" name="thirdoption" id="thirdoption"/>
			  <input type="hidden" name="fourthoption" id="fourthoption"/>
			  
            <!--  form-control form-control-sm -->
                <div class="row" style="    min-height: 300px;">
                  <div class="col-md-6">   
                  <div class="form-group">
                    <label> Title</label>
                    <select class="selectpicker test form-control form-control-sm" name="chartType" id="chartType" data-size="5" onchange="submenu();">

                     <option value="">-- select one -- </option>
                     <option value="1">Bescom</option>
					  <option value="4">A&RT</option>
                     <option value="2">M & C - EA</option>
                     <option value="3">Operations</option>
                  <option value="5">Projects</option>
                <!-- <option value="pie4">E7</option> -->

               </select>
             </div>

           </div>

           <div class="col-md-6"><div class="form-group" onchange="subhireachy();">
            <label>Select Title</label>
            <select id="second_option" name="area_name" class="form-control form-control-sm">
              <option value="">-- select one -- </option>
            </select></div>
          </div>

          <div class="col-md-6"><div class="form-group" id="Sub_sub_title" name="Sub_sub_title" onchange="subfilename();" style="display:none;"> 
            <label>Select Title</label>
            <select id="third_option" name="subarea_name" class="form-control form-control-sm">
              <option value="">-- select one -- </option>
            </select></div>
          </div>
    

          <div class="col-md-6"><div class="form-group" id="Sub_sub_sub_title"  name="Sub_sub_sub_title" onchange="lastfilename();"  style="display:none;">
            <label>select Title</label>
            <select id="fourth_option" name="sub_subarea_name" class="form-control form-control-sm">
              <option value="">-- select one -- </option>
            </select></div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Upload Excel</label>

              <input type="file" name="file_tmp" id="file_tmp"/>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-5">
              <button type="button" class="btn btn-primary centered" onclick="validation();">Import</button>
          </div>
        </div>

















      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  
  </form>
</div>
<!-- /.col (LEFT) -->

<!-- /.col (RIGHT) -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php';?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- page script -->
<script>
function submenu()
{
	var menu =$("#chartType").val();
	var menutext=$('#chartType option:selected').html();
	$("#firstoption").val(menutext);
	  $.ajax({
            url:"submenu.php", //the page containing php script
            type: "post", //request type,
			data: {typemenu: "submenu",menu:menu},
            success:function(result){
				 document.getElementById("second_option").innerHTML=result; 
	
           }
         });
}


function subhireachy()
{
	var area_name =$("#second_option").val();
	var menutext=$('#second_option option:selected').html();
	$("#secondoption").val(menutext);
	  $.ajax({
            url:"submenu.php", //the page containing php script
            type: "post", //request type,
			data: {typemenu: "subhireachy",area_name:area_name},
            success:function(result){
				if(result == 1)
				{
					$("#Sub_sub_title").hide();
				
				}
				else
				{
					$("#Sub_sub_title").show();
				 document.getElementById("third_option").innerHTML=result; 
				}
	
           }
         });
}

function subfilename()
{
	var file_name =$("#third_option").val();
	var menutext=$('#third_option option:selected').html();
	$("#thirdoption").val(menutext);
	  $.ajax({
            url:"submenu.php", //the page containing php script
            type: "post", //request type,
			data: {typemenu: "filename",file_name:file_name},
            success:function(result){
				if(result == 1)
				{
					$("#Sub_sub_sub_title").hide();
				
				}
				else
				{
					$("#Sub_sub_sub_title").show();
				 document.getElementById("fourth_option").innerHTML=result; 
				}
	
           }
         });
}

function lastfilename()
{
	var menutext=$('#fourth_option option:selected').html();
	$("#fourthoption").val(menutext);
}
	

   $(document).ready(function () {
     setTimeout(function() {
             $('#timeoutmessage').fadeOut('fast');
             }, 3000); // <-- time in milliseconds
	
 });

function validation()
{
	var error ='';
	var title = $('#chartType').val();
	var title1 = $('#second_option').val();
	var title2 = $('#third_option').val();
	var title3 = $('#fourth_option').val();
	var filename= $("#file_tmp").val();
	if (title == ''){
		error = 1;
            alert('You should select a title.');
        }
		if (title1 == '') {
		error = 1;
            alert('You should select a sub title.');
        }
		
		if($('#Sub_sub_title').css('display') == 'block')
		{
		if (title2 == '') {
		error = 1;
            alert('You should select a sub sub title.');
        }
		}
		if($('#Sub_sub_sub_title').css('display') == 'block')
		{
		if (title3 == '') {
		error = 1;
            alert('You should select a sub sub title.');
        }
		}
		if(filename == '')
		{
			error = 1;
            alert('You should select the file');
		}
		 if (error) {
            return false;
        } else {
			$("#submit_form").submit();
			  return true;
        }
}
</script>


</body>
</html>
<style type="text/css">
  #js-legend ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

#js-legend ul li {
display: inline;
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
    font-size: 14px;
    cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}

#js-legend li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 12px;
  height: 100%;
  border-radius: 5px;
}
/* legend2 */
  #js-legend2 ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

#js-legend2 ul li {
display: inline;
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
    font-size: 10px;
    cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}

#js-legend2 li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 12px;
  height: 100%;
  border-radius: 5px;
}
/* legend3 */
  #js-legend3 ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

#js-legend3 ul li {
display: inline;
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
    font-size: 14px;
    cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}

#js-legend3 li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 12px;
  height: 100%;
  border-radius: 5px;
}
/* legend4 */
  #js-legend4 ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

#js-legend4 ul li {
display: inline;
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
    font-size: 10px;
    cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}

#js-legend4 li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 12px;
  height: 100%;
  border-radius: 5px;
}


</style>
