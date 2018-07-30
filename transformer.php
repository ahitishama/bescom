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
        Transformer
        <!-- <small>BANGALORE ELECTRICITY SUPPLY COMPANY LIMITED</small> -->
        <h6>Details of DTC failure for the month of Jan-18</h6>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">Transformer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- East Circle Graph -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Transformer
                <!-- <small>Circle</small> -->
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Particulars</label>
                <select class="selectpicker test" id="chartType" data-size="5">
                   <option value="pie1"> DTC Failed during month</option>
                   <option value="pie2">DTC Existing</option>
                   <option value="pie3">OB of failed DTCs</option>
                   <option value="pie4">Total failure</option>
                   <option value="pie5">Replaced during the month </option>
                   <option value="pie6">Balance to be replaced</option>
                   <option value="pie7">Status of repaired good Transformers in stock</option>
                   <option value="pie8">Status of new transformers in stock</option>
           
              </select>
            </div>
            <div class="chart">

              <!--  select bar chart -->
              

              <div id="js-legend" class="chart-legend" align="center"></div>
              <canvas id="barChart1" style="height:450px"></canvas>

              <!--   <canvas id="areaChart" style="height:250px"></canvas> -->
            </div>
          </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <!-- /.box -->

        </div>
      
     
    
      </div>
      <!-- /.row -->

    </section>
   
<!-- ./wrapper -->

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
    //- East CHART -
    //--------------
	
	
	$.ajax({
    type: "POST",
    url: "chart_sheet_read/Operation/transformer.php",
	data: 1,
     success: function(data) {
      charData = $.trim(data);
	 
    },
    async: false,
  });
  
  var allObject = $.parseJSON( charData );
  
  console.log(allObject);
	
	
   var ctx = document.getElementById("barChart1").getContext("2d");





var manlabels = allObject[0];

    /*data*/

var eastData = allObject[1];



var eastSelect = allObject[2];



var dataMap = {};
for(row=0;row<eastData.length;row++){
  var obj={};
  obj['method']='Bar';
  
  var rowdata = {};
  rowdata['label'] = eastSelect[row];     //selected Lable will come here
  rowdata['fillColor'] = '#46BFBD';
  rowdata['data'] = eastData[row];


  var mainData={};
  mainData['labels']=manlabels;
  mainData['datasets'] = [];
 mainData['datasets'].push(rowdata);


  obj['data']=mainData;

  var newIndex='pie'+(row+1);
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