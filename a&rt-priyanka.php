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
    var htmlContent = '';
    var allChartData='';
    var dataMapAll = [];
    var prevsChartType;

    var ajaxURL = '';
    var currentChart;
    var params = '';
	var datapass = '<?php echo $_GET['st']; ?>';

	if(datapass == 'Present')
	{
		var menulink = 'Sheet1';
	}
	else
	{
		var menulink = 'Sheet2';
	}
	console.log(menulink);
   $.ajax({
    type: "POST",
    url: "chart_sheet_read/general/A&RT.php",
	data: {menulink: menulink},
     success: function(data) {
      charData = $.trim(data);
    },
    async: false,
  });

       
        var allObject = $.parseJSON( charData );

        // console.log(allObject);

        var dynm_lbl = allObject['0'];
        var chartObject = allObject['1'];
        var selectHtmlData = allObject['2'];
        var chartType = allObject['3'];
       
		//console.log(selectHtmlData);
		
        var htmlIndex = 1;
  $('#chartType').html(selectHtmlData['0']);
  
for (var okk=0; okk<= 7; okk++)
{	
   for (var ok=0;ok <= 14; ok++)
  {
	  window['TotCol' + ok + okk] = chartObject[0][ok][okk];
  }
}
 
 console.log(TotCol12);
  
/*<-- json data -->*/
  var ctx = document.getElementById("myChart").getContext("2d");
  var dataMap = {
    'pie1': {
      method: chartType,
      data: [TotCol00, TotCol10, TotCol20, TotCol30, TotCol40, TotCol50, TotCol60 ],

    },
   'pie2': {
      method: chartType,
      data: [TotCol01, TotCol11, TotCol21, TotCol31, TotCol41, TotCol51, TotCol61 ],
    },
	 'pie3': {
      method:  chartType,
      data: [TotCol02, TotCol12, TotCol22, TotCol32, TotCol42, TotCol52, TotCol62 ],
    },
	 'pie4': {
      method: chartType,
      data: [TotCol03, TotCol13, TotCol23, TotCol33, TotCol43, TotCol53, TotCol63 ],
    },
	 'pie5': {
      method: chartType,
      data: [TotCol04, TotCol14, TotCol24, TotCol34, TotCol44, TotCol54, TotCol64 ],
    },
	 'pie6': {
      method: chartType,
      data: [TotCol05, TotCol15, TotCol25, TotCol35, TotCol45, TotCol55, TotCol65 ],
    },
	 'pie7': {
      method: chartType,
      data: [TotCol06, TotCol16, TotCol26, TotCol36, TotCol46, TotCol56, TotCol66 ],
    },
	 'pie8': {
      method: chartType,
      data: [TotCol07, TotCol17, TotCol27, TotCol37, TotCol47, TotCol57, TotCol67 ],
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
	  
   'pie1': {
      method: chartType,
      data: [TotCol80, TotCol90, TotCol100, TotCol110, TotCol120 ],

    },
   'pie2': {
      method: chartType,
      data: [TotCol81, TotCol91, TotCol101, TotCol111, TotCol121 ],
    },
	 'pie3': {
      method: chartType,
      data: [TotCol82, TotCol92, TotCol102, TotCol112, TotCol122 ],
    },
	 'pie4': {
      method: chartType,
      data: [TotCol83, TotCol93, TotCol103, TotCol113, TotCol123 ],
    },
	 'pie5': {
      method: chartType,
      data: [TotCol84, TotCol94, TotCol104, TotCol114, TotCol124 ],
    },
	'pie6': {
      method: chartType,
      data: [TotCol85, TotCol95, TotCol105, TotCol115, TotCol125 ],
    },
	'pie7': {
      method: chartType,
      data: [TotCol86, TotCol96, TotCol106, TotCol116, TotCol126 ],
    },
	'pie8': {
      method: chartType,
      data: [TotCol87, TotCol97, TotCol107, TotCol117, TotCol127 ],
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
    'pie1': {
      method: chartType,
      data: [TotCol70, TotCol130],
    },
     'pie2': {
      method: chartType,
      data: [TotCol71, TotCol131],
    },
	 'pie3': {
      method: chartType,
      data: [TotCol72, TotCol132],
    },
	 'pie4': {
      method: chartType,
      data: [TotCol73, TotCol133],
    },
	'pie5': {
      method: chartType,
      data: [TotCol74, TotCol134],
    },
	'pie6': {
      method: chartType,
      data: [TotCol75, TotCol135],
    },
	'pie7': {
      method: chartType,
      data: [TotCol76, TotCol136],
    },
	'pie8': {
      method: chartType,
      data: [TotCol77, TotCol137],
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
