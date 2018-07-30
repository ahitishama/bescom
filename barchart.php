<?php
$fileName = $_GET['file'];
$sheet_number = $_GET['st'];
?>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          DCM
        <small>Monthly progress report of DSM section -Jan-2018</small>
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
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SRTPV Progress
                  <small>nos .</small>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label>Circle Name</label>
              <select class="selectpicker test select_menu_print" id="chartType">
              </select>
          
              </div>
              <div class="chart">

              	<div id="js-legend" class="chart-legend" align="center"></div>
              	<canvas id="barChart1" style="height:430px"></canvas>

              	<!--   <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
          </div>
          <!-- /.box-body -->
      </div>


  </div>

</div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php';?>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<input type="text" id="div1" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- page script -->
<script>
  $(function () {
  
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
	
	var fileName = "<?=$fileName;?>";
	var sheetNumber = "<?=$sheet_number;?>";
	
	console.log(fileName);
	console.log(sheetNumber);
    var ctx = document.getElementById("barChart1").getContext("2d");
	var charData;
    /*data*/
	
	var ajaxURL = '';

	
	if(fileName == "mc_ea" && sheetNumber=="sheet1"){
		ajaxURL = "chart_sheet_read/m_c/ctaz.php?method=Sheet1";
		
	}else if(fileName == "mc_ea" && sheetNumber=="sheet2"){
		ajaxURL = "chart_sheet_read/m_c/braz.php?method=Sheet2";

	}else if(fileName == "mc_ea" && sheetNumber=="sheet4"){
		ajaxURL = "chart_sheet_read/m_c/24_town.php?method=Sheet4";
	}
	else if(fileName == "gks" && sheetNumber=="sheet1"){
		ajaxURL = "chart_sheet_read/gks/gks-sheet1.php?method=Sheet1";
	}

	
	if(ajaxURL==""){
		alert("URL not found");
		return false;
	}

	$.ajax({
		type: "POST",
		url: ajaxURL,
		 success: function(data) {
			charData = $.trim(data);
		},
		async: false,
	});

	var allObject = $.parseJSON( charData );

	var dynm_lbl = allObject['0'];
	console.log(dynm_lbl);
	var chartObject = allObject['1'];
	var selectHtmlData = allObject['2'];

	

	$('.select_menu_print').html(selectHtmlData);

	var dataMap = {};

	

	for(row=0;row<chartObject.length;row++){

		var obj = {};
		obj["method"] = 'Bar';
		var mainData = {};
		mainData['labels'] = dynm_lbl;
		mainData['datasets'] = chartObject[row];
		obj["data"] = mainData;
	
		var newIndex = 'pie'+ (row+1);
		dataMap[newIndex] = obj;

	}



var currentChart;

 function updateChart() {
     if(currentChart){currentChart.destroy();}
   
    var determineChart = $("#chartType").val();

    var params = dataMap[determineChart]
    currentChart = new Chart(ctx)[params.method](params.data, {});
    var legend=currentChart;
    document.getElementById("js-legend").innerHTML = legend.generateLegend();
 }


 $('#chartType').on('click', updateChart)
 	updateChart();

  })

</script>
</body>
</html>
<style type="text/css">
.chart-legend ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

.chart-legend ul li {
  display: inline;
  padding-left: 30px;
  position: relative;
  margin-bottom: 4px;
  border-radius: 5px;
  padding: 2px 8px 2px 28px;
  font-size: 14px;
  cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}

.chart-legend li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 100%;
  border-radius: 5px;
}

</style>