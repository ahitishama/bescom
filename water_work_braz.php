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
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Water Work - BRAZ ZONE
        <small>BANGALORE ELECTRICITY SUPPLY COMPANY LIMITED</small>
        <h6>Pendency and progress of energisation of Drinking Water Supply</h6>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">Water Work</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- East Circle Graph -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blore Rural
                <small>Circle</small>
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
                <select class="selectpicker test" id="chartType" data-size="5">
                   <option value="brc1">Nelamangala</option>
                   <option value="brc2">Hosakote</option>
                   <option value="brc3">Total</option>
           
              </select>
            </div>
            <div class="chart">

              <!--  select bar chart -->
              

              <div id="js-legend" class="chart-legend" align="center"></div>
              <canvas id="barChart1" style="height:600px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <!-- North Circle  Graph -->
          <div class="box box-danger">
           <div class="box-header with-border">
             <h3 class="box-title">Ramnagar</h3>
                  <small>Circle</small>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <div class="box-body">
            <div class="form-group">
              <label>Circle Name</label>
              <select class="selectpicker test" id="chartType2" data-size="5">
               <option value="ramnagara1">Ramnagara</option>
                 <option value="ramnagara2">Kanakpura</option>
                 <option value="ramnagara3">Chandapura</option>
                 <option value="ramnagara4">Total</option>
            </select>
              </div>
            <div class="chart">
            <div id="js-legend2" class="chart-legend" align="center"></div>
            <canvas id="barChart2" style="height:600px"></canvas>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
         <!-- South Circle graph -->
         <div class="box box-info">
           <div class="box-header with-border">
             <h3 class="box-title">Kolar</h3>
               <small>Circle</small>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <div class="box-body">
            <div class="form-group">
              <label>Circle Name</label>
              <select class="selectpicker test" id="chartType3" data-size="6">
               <option value="kolar1">Kolar </option>
                 <option value="kolar2">KGF</option>
                <option value="kolar3">CB Pura</option>
                <option value="kolar4">Chintamani</option>
                <option value="kolar5">Total</option>
            </select>
              </div>
             <div class="chart">
             <div id="js-legend3" class="chart-legend" align="center"></div>
             <canvas id="barChart3" style="height:600px"></canvas>
              
             </div>
           </div>
         <!--   /.box-body -->
         </div>
      <!--    /.box -->

       </div>
       <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">BRAZ ZONE Total
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <div id="js-legend5" class="chart-legend"></div>
               <canvas id="barChart5" style="height:650px"></canvas>
                  
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
	  
	  
	  
	  
	$.ajax({
    type: "POST",
    url: "chart_sheet_read/Operation/water_work.php",
	data: {'type' : 'braz'},
     success: function(data) {
      charData = $.trim(data);
	  
	 
    },
    async: false,
  });
  
    
  var allObject = $.parseJSON( charData );
  
  console.log(allObject);
var manlabels = allObject[0];


    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- East CHART -
    //--------------
   var ctx = document.getElementById("barChart1").getContext("2d");

    /*data*/
	
	

var blore_rural = allObject[1]['brc'];
var blore_rural_Select = allObject[2]['brc'];

var dataMap = {};
for(row=0;row<blore_rural.length;row++){
  var obj={};
  obj['method']='Bar';
  
  var rowdata = {};
  rowdata['label'] = blore_rural_Select[row];     //selected Lable will come here
  rowdata['fillColor'] = '#46BFBD';
  rowdata['data'] = blore_rural[row];


  var mainData={};
  mainData['labels']=manlabels;
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


  obj['data']=mainData;

  var newIndex='brc'+(row+1);
  dataMap[newIndex]=obj;
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


    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx2 = document.getElementById("barChart2").getContext("2d");

var ramnagar= allObject[1]['ramanagara'];
var ramnagara_Select = allObject[2]['ramanagara'];


var dataMap2 = {};
for(row=0;row<ramnagar.length;row++){
  var obj={};
  obj['method']='Bar';
  
  var rowdata = {};
  rowdata['label'] = ramnagara_Select[row];     //selected Lable will come here
  rowdata['fillColor'] = '#46BFBD';
  rowdata['data'] = ramnagar[row];


  var mainData={};
  mainData['labels']=manlabels;
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


  obj['data']=mainData;

  var newIndex='ramnagara'+(row+1);
  dataMap2[newIndex]=obj;
}

var currentChart2;

 function updateChart2() {
     if(currentChart2){currentChart2.destroy();}
   
     var determineChart2 = $("#chartType2").val();

     var params2 = dataMap2[determineChart2]
     currentChart2 = new Chart(ctx2)[params2.method](params2.data, {});
     document.getElementById("js-legend2").innerHTML = currentChart2.generateLegend();
 }

 $('#chartType2').on('change', updateChart2)
 updateChart2();

    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx3 = document.getElementById("barChart3").getContext("2d");

    /*data*/
var kolarData = allObject[1]['kolar'];
var kolar_Select = allObject[2]['kolar'];




var dataMap3 = {};
for(row=0;row<kolarData.length;row++){
  var obj={};
  obj['method']='Bar';
  
  var rowdata = {};
  rowdata['label'] = kolar_Select[row];     //selected Lable will come here
  rowdata['fillColor'] = '#46BFBD';
  rowdata['data'] = kolarData[row];


  var mainData={};
  mainData['labels']=manlabels;
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


  obj['data']=mainData;

  var newIndex='kolar'+(row+1);
  dataMap3[newIndex]=obj;
}



var currentChart3;

 function updateChart3() {
     if(currentChart3){currentChart3.destroy();}
   
     var determineChart3 = $("#chartType3").val();

     var params3 = dataMap3[determineChart3]
     currentChart3 = new Chart(ctx3)[params3.method](params3.data, {});
     document.getElementById("js-legend3").innerHTML = currentChart3.generateLegend();
 }

 $('#chartType3').on('change', updateChart3)
 updateChart3();



    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart5').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var barChart       = new Chart(areaChartCanvas)

    /*data*/
	
	
  
    var total= allObject[1]['braz'][0];



    var areaChartData = {
      labels  : manlabels,
      datasets: [
        {
          label               : 'BRAZ ZONE Total',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : total
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
     document.getElementById("js-legend5").innerHTML = legend.generateLegend();


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