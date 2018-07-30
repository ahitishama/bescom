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

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">Stations</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Zone wise Stations in BESCOM As on 31.01.2018
                 
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!-- <div class="chart">
                <div id="js-legend" class="chart-legend"></div>
               <canvas id="barChart1" style="height:230px"></canvas>
              
                          <canvas id="areaChart" style="height:250px"></canvas>
              </div> -->
               <!--  select pie chart -->
                   <div class="form-group">
                    <label>Stations</label>
                    <select  id="chartType"><!-- class="form-control"  -->
                    
                     
                    </select>
                  </div>
                  <div class="row">
                  <div class="col-md-8">
                     <div class="chart" id="fieldname"> 
                       <canvas id="myChart" style="height:330px"></canvas>
                     </div></div>
                    <div class="col-md-4"> <div id="js-legend" class="chart-legend"></div></div>
                  </div>
               
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


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

<!-- page script -->
<script>
  var ctx = document.getElementById("myChart").getContext("2d");
 ctx.canvas.width = 600;
 ctx.canvas.height = 200;
var charData;
 $.ajax({
    type: "POST",
    url: "chart_sheet_read/Operation/powersupply/stations.php",
     success: function(data) {
      charData = $.trim(data);
    },
    async: false,
  });

  var allObject = $.parseJSON( charData );

  var dynm_lbl = allObject['0'];
  var chartObject = allObject['1'];
  var selectHtmlData = allObject['2'];

  $('#chartType').html(selectHtmlData['0']);

  console.log(selectHtmlData['0']);
  
  var dataMap = {};
  var data1Set = chartObject[0];
  //var data1Set2 = chartObject[1];


  for(row=0;row<data1Set.length;row++){
	  
    var obj = {};
    obj["method"] = 'Pie';
    obj["data"] = data1Set[row];
    var newIndex = 'pie'+ (row+1);
    dataMap[newIndex] = obj;
  }


var currentChart;

 function updateChart() {
     if(currentChart){currentChart.destroy();}
   
     var determineChart = $("#chartType").val();

     var params = dataMap[determineChart]
     currentChart = new Chart(ctx)[params.method](params.data, {});
     document.getElementById("js-legend").innerHTML = currentChart.generateLegend();
 }

 $('#chartType').on('change', updateChart)
 updateChart();




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
/* display: inline;
     */    padding-left: 30px;
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

#js-legend li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 12px;
  height: 100%;
  border-radius: 5px;
}
</style>
<style type="text/css">
  #js-legend2 ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

#js-legend2 ul li {
/* display: inline; */
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
</style>
