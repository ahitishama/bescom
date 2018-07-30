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
    A&RT - 
    <small>CONSUMER, LOAD, CONSUMPTION, DEMAND</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Charts</a></li>
    <li class="active">a&rt</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="box box-primary">
<div class="box-header with-border">
<div class="box-header with-border">
<h3 class="box-title">Persent</h3>
<select  id="chartType"><!-- class="form-control"  -->
<option value="total_installation">Total No of Installation </option>
<option value="live_installation">No of live Installations</option>  
<option value="total_installation">Connected Load KW</option>
<option value="pie2">Connected Load HP</option>
<option value="total_installation">Connected Load KVA</option>
<option value="pie2">Net Consumption</option>  
<option value="total_installation">Demand Revenue Total</option>
<option value="pie2">Collection Total</option>     
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<!-- AREA CHART -->
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Persent- LT </h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
</button>
<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
</div>
</div>
<div class="box-body">
<!--  select pie chart -->
<div class="form-group">
<label>Persent- LT</label>
</div>
<div class="row">
<div class="col-md-8">
<div class="chart" id="fieldname"> 
  <canvas id="myChart" style="height:330px"></canvas>
</div></div>
<div class="col-md-4"> <div id="js-legend" class="chart-legend"></div></div>
</div>
</div> </div>


</div>
<!-- /.col (LEFT) -->
<div class="col-md-6">
<!-- LINE CHART -->
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Persent- HT</h3>
<div class="box-tools pull-right">
  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
  </button>
  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
  <label>Persent- HT</label>
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
</div>

<div class="col-md-8 col-md-offset-2">
<!-- LINE CHART -->
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">Persent- LT-HT TOTAL</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="form-group">
      <label>Persent- HT</label>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="chart" id="fieldname"> 
          <canvas id="myChart3" style="height:330px"></canvas>
        </div></div>
        <div class="col-md-4"> <div id="js-legend3" class="chart-legend"></div></div>
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

<!-- ht chaRT FIRST CHART-->
<script>


  var ctx = document.getElementById("myChart").getContext("2d");
  var dataMap = {
    'total_installation': {
      method: 'Pie',
      data: [{
        value: '8297713',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "Domestic (LT1+LT2)"
      }, {
        value: '1038266',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Commercial (LT3)"
      }, 
      {
        value: '866946',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "Agricutotal_installationure (LT4)"
      },
      {
        value: '200627',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "Industrial (LT5)"
      },
      {
        value: '73737',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "Water Supply (LT6A)"
      },
      {
        value: '62711',
        color: "#e8c3b9",
        highlight: "#e8c3b9",
        label: "Street Light (LT6B)"
      },
      {
        value: '608805',
        color: "#c45850",
        highlight: "#c45850",
        label: "Others (LT7)"
      }],
  },

    'live_installation': {
      method: 'Pie',
      data: [{
        value: '7321701',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "Domestic (LT1+LT2)"
      }, {
        value: '904851',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Commercial (LT3)"
      }, 
      {
        value: '810016',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "Agricutotal_installationure (LT4)"
      },
      {
        value: '149533',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "Industrial (LT5)"
      },
      {
        value: '61575',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "Water Supply (LT6A)"
      },
      {
        value: '55953',
        color: "#e8c3b9",
        highlight: "#e8c3b9",
        label: "Street Light (LT6B)"
      },
      {
        value: '70526',
        color: "#c45850",
        highlight: "#c45850",
        label: "Others (LT7)"
      }],
    }

  };
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

<!-- ht pie chart to container -->
<script>
  var ctx2 = document.getElementById("myChart2").getContext("2d");

  var dataMap2 = {
    'total_installation': {
      method: 'Pie',
      data: [{
        value: '230',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "Water Supply (HT)"
      }, {
        value: '6589',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "HT Industries (HT2A)"
      }, 
      {
        value: '6082',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "HT Commercial (HT2B)"
      },
      {
        value: '220',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "Residential Apartments (HT4)"
      },
      {
        value: '1636',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "Others (HT2C+HT5+HT3)"
      }],

    },
    'live_installation': {
      method: 'Pie',
      data: [{
        value: '214',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "Water Supply (HT)"
      }, {
        value: '5847',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "HT Industries (HT2A)"
      }, 
      {
        value: '5708',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "HT Commercial (HT2B)"
      },
      {
        value: '161',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "Residential Apartments (HT4)"
      },
      {
        value: '1005',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "Others (HT2C+HT5+HT3)"
      }],
    }

  };
  var currentChart2;
  function updateChart2() {
    if(currentChart2){currentChart2.destroy();}
    var determineChart2 = $("#chartType").val();
    var params = dataMap2[determineChart2]
    currentChart2 = new Chart(ctx2)[params.method](params.data, {});
    document.getElementById("js-legend2").innerHTML = currentChart2.generateLegend();
  }
  $('#chartType').on('change', updateChart2)
  updateChart2();
</script>

<!-- total ht nad total_installation-->
<script>
  var ctx3 = document.getElementById("myChart3").getContext("2d");
  ctx3.canvas.width = 600;
  ctx3.canvas.height = 200;


  var dataMap3 = {
    'total_installation': {
      method: 'Pie',

      data: [{
        value: '11148805',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "LT Total"
      }, {
        value: '14757',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "HT Total"
      }],

    },
    'live_installation': {
      method: 'Pie',
      data: [{
        value: '9374155',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "LT Total"
      }, {
        value: '12935',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "HT Total"
      }],
    }

  };

var currentChart3;
function updateChart3() {
  if(currentChart3){currentChart3.destroy();}
  var determineChart3 = $("#chartType").val();
  var params3 = dataMap3[determineChart3]
  currentChart3 = new Chart(ctx3)[params3.method](params3.data, {});
  document.getElementById("js-legend3").innerHTML = currentChart3.generateLegend();
}
$('#chartType').on('change', updateChart3)
updateChart3();
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
cursor: defautotal_installation;
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
    cursor: defautotal_installation;
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
<style type="text/css">
  #js-legend3 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  #js-legend3 ul li {
    /* display: inline; */
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
    font-size: 10px;
    cursor: defautotal_installation;
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
</style>
