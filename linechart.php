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
    <section class="content-header">
      <h1>
        PEAK LOAD RECORDED IN MW(As per SCADA)  AND ENERGY CONSUMPTION IN MU IN BESCOM DURING LAST 4 YEARS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Operations</a></li>
        <li><a href="#">Power Supply</a></li>
        <li class="active">sheet-6</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
    
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Peak Load in MWs</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <div id="js-legend" class="chart-legend" align="center"></div>
                <canvas id="lineChart" style="height:250px"></canvas>
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
	if(fileName == "operation" && sheetNumber=="sheet1"){
      ajaxURL = "chart_sheet_read/Operation/powersupply/peakloadrecord.php";
      
    }else if(fileName == "operation" && sheetNumber=="sheet2"){
      ajaxURL = "chart_sheet_read/Operation/powersupply/peakloadrecord2.php";

    }else if(fileName == "operation" && sheetNumber=="sheet3"){
      ajaxURL = "chart_sheet_read/Operation/powersupply/peakloadrecord3.php";
    }
$.ajax({
    type: "POST",
    url: ajaxURL,
	data: 1,
     success: function(data) {
      charData = $.trim(data);
	 
    },
    async: false,
  });
  
  var allObject = $.parseJSON( charData );
  
 
var manlabels = allObject[0];

    var areaChartData = {
      labels  : allObject[0],
      datasets: [
   
        {
          label               : 'Peak Load in MWs',
          fillColor           : '#669900',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#669900',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : allObject[1]
        }
      ]
    }

    var areaChartOptions = {
     
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : true,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
     legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
/*    areaChart.Line(areaChartData, areaChartOptions)
*/
    //-------------
    //- LINE CHART -
    //--------------
   var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false

    var legend=lineChart.Line(areaChartData, lineChartOptions)
     document.getElementById("js-legend").innerHTML = legend.generateLegend();



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