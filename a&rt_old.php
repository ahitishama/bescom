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
         A&RT - 
        <small>CONSUMER, LOAD, CONSUMPTION, DEMAND</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">a&rt</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cumulative (Apr-17 to Jan-18) LT
                  <small>In Crores.</small>
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
                    <label>Category-LT</label>
                    <select  id="chartType"><!-- class="form-control"  -->
                      <option value="pie1">Domestic (LT1+LT2)</option>
                      <option value="pie2">Commercial (LT3)</option>
                   
                     
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
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cumulative (Apr-17 to Jan-18)    HT
                  <small>In Crores.</small>
              </h3>
                  
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!-- <div class="chart">
               <div id="js-legend2" class="chart-legend"></div>
              <canvas id="barChart2" style="height:230px"></canvas>
                <canvas id="lineChart" style="height:250px"></canvas>
              </div> -->
              <!--  select pie chart -->
                   <div class="form-group">
                    <label>Category-HT</label>
                    <select  id="chartType2"><!-- class="form-control"  -->

                     <option value="pie9"> Water Supply (HT)</option>
                     <option value="pie10"> HT Industries (HT2A)</option>
                    <!--  <option> HT Commercial (HT2B)</option>
                    <option>Residential Apartments (HT4)</option>
                    <option> Others (HT2C+HT5+HT3)</option>
                    <option>HT Total</option>
                    <option> Grand Total</option> -->
                   </select>
                 </div>
                 <div class="row">
                  <div class="col-md-8">
                    <div class="chart" id="fieldname"> 
                     
                     <canvas id="myChart2" style="height:330px"></canvas>
                   </div></div>
                   <div class="col-md-4"> <div id="js-legend2" class="chart-legend"></div></div>
                 </div>


                  
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
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

<!-- page script -->
<script>
  var ctx = document.getElementById("myChart").getContext("2d");
 ctx.canvas.width = 600;
 ctx.canvas.height = 200;
var charData;
 $.ajax({
    type: "POST",
    url: "chart_sheet_read/general/A&RT.php",
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
  $('#chartType2').html(selectHtmlData['1']);
 
  var dataMap = {};
  var dataMap2 = {};
  var data1Set = chartObject[0];
  //var data1Set2 = chartObject[1];

  var data1Set2 = $.map(chartObject[1], function(value, index) {
      return [value];
  });

  for(row=0;row<data1Set.length;row++){

    var obj = {};
    obj["method"] = 'Pie';
    obj["data"] = data1Set[row];
    var newIndex = 'pie'+ (row+1);
    dataMap[newIndex] = obj;

  }

  var newrow = row;
  var totalLength = (parseInt(data1Set2.length) + parseInt(data1Set.length));
  var data2Index = 0;
  for(row=newrow;row<totalLength;row++){

    var obj = {};
    obj["method"] = 'Pie';
    obj["data"] = data1Set2[data2Index];
    var newIndex = 'pie'+ (row+1);
    dataMap2[newIndex] = obj;

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


  var ctx2 = document.getElementById("myChart2").getContext("2d");
 ctx2.canvas.width = 600;
 ctx2.canvas.height = 200;
console.log(dataMap2);


var currentChart2;
var params2;
 function updateChart2() {
     if(currentChart2){currentChart2.destroy();}
   
     var determineChart2 = $("#chartType2").val();

     params2 = dataMap2[determineChart2]
     currentChart2 = new Chart(ctx2)[params2.method](params2.data, {});
     document.getElementById("js-legend2").innerHTML = currentChart2.generateLegend();
 }

 $('#chartType2').on('change', updateChart2)
 updateChart2();


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
