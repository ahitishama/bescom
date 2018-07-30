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
	  <?php if($_GET['file'] == 'mc_ea') { if($_GET['st']=='sheet1') { echo 'CTAZ'; } else if($_GET['st']=='sheet2') { echo 'BRAZ'; } else if($_GET['st']=='sheet3') { echo 'BMAZ'; } else if($_GET['st']=='sheet4') { echo '24 Towns'; } } else if($_GET['file'] == 'projects') { if($_GET['st']=='ddugjy') { echo 'ELECTRICITY SUPPLY BANGALORE ELECTRICITY SUPPLY COMPANY LIMITED'; } else if($_GET['st']=='ipds') { echo 'IPDS Integrated Power Development Scheme'; } else if($_GET['st']=='transformer') { echo 'Sheet-3 TRANSFORMER STRUCTURE REDESIGN'; } else if($_GET['st']=='unip') { echo 'UNIP CIRCLE WISE dETAILS OF UNAUTHORISED IP SETS AS PER'; } else if($_GET['st']=='njy_s1') { echo 'ABSTRACT of NJY Phase -1 Scheme'; } else if($_GET['st']=='njy_last_month') { echo 'NJY STATUS OF NIRANTHARA JYOTHI'; } }  else {}  ?>
         
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">dcm</li>
      </ol>
    </section>

    <!-- Main content -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        
       <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">BESCOM TOTAL 
                  <small>Division Name</small>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <div id="js-legend1" class="chart-legend"></div>
               <canvas id="barChart1" style="height:550px"></canvas>
                  
            <!--   <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col (RIGHT) -->
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
    var fileName = "<?=$fileName;?>";
    var sheetNumber = "<?=$sheet_number;?>";
	
	var htmlContent = '';
    var allChartData='';
    var dataMapAll = [];
    var prevsChartType;
   
    //var ajaxURL = 'chart_sheet_read/general/dsm.php?method=Sheet1';
    var ajaxURL = '';

	
  var areaChartCanvas = $('#barChart1').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var barChart       = new Chart(areaChartCanvas)
	
	if(fileName == "operation" && sheetNumber=="gks_total"){
      ajaxURL = "chart_sheet_read/Operation/gks/gks_total.php?method=gks_total";
    }
	if(fileName == "operation" && sheetNumber=="ht_lt_total"){
      ajaxURL = "chart_sheet_read/Operation/htlt/htlt_total.php?method=ht_lt_total";
    }

        $.ajax({
            type: "GET",
           url: ajaxURL,
             success: function(data) {
              allChartData = $.trim(data);
            },
            async: false,
        });
		var allObject = $.parseJSON(allChartData);
		
		var dynm_lbl = allObject['0'];
        var chartObject = allObject['1'];
      
		 var areaChartData = {};
         var circleObj = chartObject['BESCOM_Total'];
         var row = 1;
        var manlabels = dynm_lbl;
    


    var areaChartData = {
      labels  : manlabels,
      datasets:circleObj
    }
		  
        
    var barChartOptions     = {
  scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true

    }
    barChartOptions.datasetFill = false
    var legend=barChart.Bar(areaChartData, barChartOptions)
     document.getElementById("js-legend1").innerHTML = legend.generateLegend();


  })

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
  padding: 2px 8px 2px 28px;
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
  width: 20px;
  height: 100%;
  border-radius: 5px;
}

</style>