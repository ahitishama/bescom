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
          POWER PURCHASE
        <small>SOURCE WISE POWER PURCHASED & AMOUNT BILLED DURING OCTOBER  17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">power purchase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">POWER PURCHASE
                  <small>NAME OF THE COMPANY</small>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <div id="js-legend" class="chart-legend"></div>
               <canvas id="barChart1" style="height:430px"></canvas>
                  
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
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
$.ajax({
    type: "POST",
    url: "chart_sheet_read/general/power_purchase.php",
	data: 1,
     success: function(data) {
      charData = $.trim(data);
	 
    },
    async: false,
  });
  
  var allObject = $.parseJSON( charData );
  
  console.log(allObject);

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart1').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var barChart       = new Chart(areaChartCanvas)

    /*data*/

    var areaChartData = {
      labels  : ["CONS IN KWH","AMOUNT BILLED RS"],
      datasets: [
        {
          label               : allObject[0][0],
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : allObject[1][0]
        },
        {
          label               : allObject[0][1],
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : allObject[1][1]
        },
        {
          label               :  allObject[0][2],
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                :  allObject[1][2]
        },

        {
          label               :  allObject[0][3],
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                :  allObject[1][3]
        },   
         {
          label               : 'KPCL-HYDEL',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  allObject[1][4]
        },
         {
          label               : 'KPCL-THERMAL',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  allObject[1][5]
        },
        {
          label               : 'KPCL-WIND',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : allObject[1][6]
        },


/*change Colour*/

{
          label               : 'KPCL-Solar',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : allObject[1][7]
        },
        {
          label               : 'Solar',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : allObject[1][8]
        },
        {
          label               : 'UPCL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : allObject[1][9]
        },

        {
          label               : 'Co-Generation',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : allObject[1][10]
        },   
         {
          label               : 'Bio-Mass',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  allObject[1][11]
        },
         {
          label               : 'Mini-Hydel',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  allObject[1][12]
        },
        {
          label               : 'Wind',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : allObject[1][13]
        }
   
      ]
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