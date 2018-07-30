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

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Charts</a></li>
    <li class="active">a&rt</li>
  </ol>
</section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <h3>procurement</h3>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Transformers
                  <small>Units in Nos.</small>
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
               <canvas id="barChart1" style="height:400px"></canvas>
              
            <!--   <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Poles</h3>
              <small>Units in Nos.</small>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div class="chart">
               <div id="js-legend3" class="chart-legend"></div>
             <!--  <canvas id="pieChart" style="height:250px"></canvas> -->
               <canvas id="barChart3" style="height:400px"></canvas></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Conductor</h3>
                  <small>Units in Kms</small>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
               <div id="js-legend2" class="chart-legend"></div>
              <canvas id="barChart2" style="height:400px"></canvas>
                <!-- <canvas id="lineChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Cable</h3>
                      <small>Units in Mtrs</small><br/><small>XLPE armoured HT UG Al  <span style="color:green">& </span> LT AB </small><strong>Cabel</strong>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <div id="js-legend4" class="chart-legend"></div>
                <canvas id="barChart4" style="height:400px"></canvas>
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
    url: "chart_sheet_read/general/procurement.php",
	data: 1,
     success: function(data) {
      charData = $.trim(data);
	 
    },
    async: false,
  });
  
   var allObject = $.parseJSON( charData );
console.log(allObject[0]);

var mainlabel = allObject[0];




var colors = [];
  colors[0]= '#00e6ac';
  colors[1]= '#66cc00';
  colors[2]= '#e6e600';
  colors[3]= '#8e5ea2';
  colors[4]= '#3cba9f';
  colors[5]= '#e8c3b9';
  colors[6]= '#c45850';
  colors[7]= '#80bfff';
  colors[8]= '#bf4040';
  colors[9]= '#8a8a5c';
  colors[10]= '#4d79ff';
  colors [11] = '#ff4d4d';
  colors [12] = '#336980';
  colors[13] ='#0d0d0d';
  colors[14] ='#114499';
  colors[15] ='#33ff33';
  colors[16] ='#ff3399';

var legend_label=allObject[2]['Transformers'];


    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- 111111111111BAR CHART -Transformers
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart1').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var barChart       = new Chart(areaChartCanvas);

var charObj = allObject[1]['Transformers'];


  var dataMap = {};
  

 var areaChartData1 = {
      labels  : mainlabel
    }
    areaChartData1['datasets'] = [];

for(row=0;row<charObj.length;row++){
  var obj={};
  obj['labels']= mainlabel;

  var rowdata = {};
  rowdata['label'] = legend_label[row];
  rowdata['fillColor'] = colors[row];
  rowdata['data'] = charObj[row];


  var mainData={};
  mainData['labels']=mainlabel[row];
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


obj['datasets']= [];

obj['datasets'].push(rowdata);
 areaChartData1['datasets'].push(rowdata);

  dataMap[row]=obj;
}
console.log(dataMap);

   // console.log(areaChartData);
    console.log(areaChartData1);

    areaChartData = areaChartData1;
    

    var barChartOptions     = {
    
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
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
     
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

   var legend=barChart.Bar(areaChartData, barChartOptions)
     document.getElementById("js-legend").innerHTML = legend.generateLegend();


/*3rd baar chart******************************************************************************************/
 //-------------
    //- bar CHART -2 for testing purpose
    //--------------
  var charObj = allObject[1]['Conductor'];
var legend_label2 = allObject[2]['Conductor'];

  var dataMap = {};
  

 var areaChartData2 = {
      labels  : mainlabel
    }
    areaChartData2['datasets'] = [];

for(row=0;row<charObj.length;row++){
  var obj={};
  obj['labels']= mainlabel;
  
  var rowdata = {};
  rowdata['label'] = legend_label2[row];
  rowdata['fillColor'] = colors[row];
  rowdata['data'] = charObj[row];


  var mainData={};
  mainData['labels']=mainlabel[row];
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


obj['datasets']= [];

obj['datasets'].push(rowdata);
 areaChartData2['datasets'].push(rowdata);

  dataMap[row]=obj;
}
console.log(dataMap);


  var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData2
   
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
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
   /* */
  var legend=barChart.Bar(barChartData, barChartOptions)
     document.getElementById("js-legend2").innerHTML = legend.generateLegend();



/*3rd baar chart******************************************************************************************/
 //-------------
    //- bar CHART -3 for testing purpose
    //--------------
  var charObj = allObject[1]['Poles'];

var legend_label3= allObject[2]['Poles'];


var dataMap = {};
  

 var areaChartData3 = {
      labels  : mainlabel
    }
    areaChartData3['datasets'] = [];

for(row=0;row<charObj.length;row++){
  var obj={};
  obj['labels']= mainlabel;
  
  var rowdata = {};
  rowdata['label'] = legend_label3[row];
  rowdata['fillColor'] = colors[row];
  rowdata['data'] = charObj[row];


  var mainData={};
  mainData['labels']=mainlabel[row];
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


obj['datasets']= [];

obj['datasets'].push(rowdata);
 areaChartData3['datasets'].push(rowdata);

  dataMap[row]=obj;
}
console.log(dataMap);




  var barChartCanvas                   = $('#barChart3').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData3
    
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
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
   /* */
  var legend=barChart.Bar(barChartData, barChartOptions)
     document.getElementById("js-legend3").innerHTML = legend.generateLegend();


     /*4th baar chart******************************************************************************************/
 //-------------
    //- bar CHART -4 for testing purpose
    //--------------

    var charObj =  allObject[1]['Cable'];
var legend_label4= allObject[2]['Cable'];
var dataMap = {};
  

 var areaChartData4 = {
      labels  : mainlabel
    }
    areaChartData4['datasets'] = [];

for(row=0;row<charObj.length;row++){
  var obj={};
  obj['labels']= mainlabel;
  
  var rowdata = {};
  rowdata['label'] = legend_label4[row];
  rowdata['fillColor'] = colors[row];
  rowdata['data'] = charObj[row];


  var mainData={};
  mainData['labels']=mainlabel[row];
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


obj['datasets']= [];

obj['datasets'].push(rowdata);
 areaChartData4['datasets'].push(rowdata);

  dataMap[row]=obj;
}
console.log(dataMap);



  var barChartCanvas                   = $('#barChart4').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
   var barChartData                     = areaChartData4
   
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
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
   /* */
  var legend=barChart.Bar(barChartData, barChartOptions)
     document.getElementById("js-legend4").innerHTML = legend.generateLegend();
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
    font-size: 10px;
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