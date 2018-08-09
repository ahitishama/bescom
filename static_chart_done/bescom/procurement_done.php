<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Bescom</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php include './../../header.php';?>
  <?php include './../../nav.php';?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Procurement
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">procurement</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box box-primary">
         <div class="box-header with-border">
          <h3 class="box-title">Particulars
           <select class="selectpicker test" id="chartType" data-size="5">
            <option value="transformer">Transformer</option>
            <option value="conductor">Conductor</option>
            <option value="poles">Poles</option>
            <option value="cable">Cable</option>
          </select>
        </h3>
      </div>
    </div>
     
    <!-- /.col (LEFT) -->
    <div class="col-md-12">
      <!-- South Circle graph -->
      <div class="box box-info">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <div id="js-legend" class="chart-legend" align="center"></div>
            <canvas id="barChart" style="height:400px"></canvas>              
          </div>
        </div>
        <!--   /.box-body -->
      </div>
      <!--    /.box -->
    </div>
    <!-- /.col (RIGHT) -->

    <div class="col-md-12">         
      <!-- North Circle  Graph -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">           
          <div class="chart">
            <div id="js-legend2" class="chart-legend" align="center"></div>
            <canvas id="barChart2" style="height:400px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-12">         
      <!-- North Circle  Graph -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">            
          <div class="chart">
            <div id="js-legend3" class="chart-legend" align="center"></div>
            <canvas id="barChart3" style="height:400px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>       
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php';?>
</div>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../../bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- page script -->


<!-- Indiranagar lt data-->

<script>
$.ajax({
    type: "POST",
    url: "chart_sheet_read/general/procurement.php",
	data: 1,
     success: function(data) {
      charData = $.trim(data);
	 
    },
    async: false,
  });
  var allarray =[];
var allObject = $.parseJSON( charData );
var mainlabel = allObject[0];
var charObj = allObject[1]['Transformers'];
var legend_label=allObject[2]['Transformers'];


console.log(legend_label);

var charObj2 = allObject[1]['Conductor'];
var legend_label2 = allObject[2]['Conductor'];

var charObj3 = allObject[1]['Poles'];
var legend_label3 = allObject[2]['Poles'];

var charObj4 = allObject[1]['Cable'];
var legend_label4 = allObject[2]['Cable'];

var colors = []; var colors1 = [];
  colors[0]= '#00e6ac';
  colors[1]= '#66cc00';
  colors[2]= '#e6e600';
  colors[3]= '#8e5ea2';
  colors[4]= '#3cba9f';
  colors[5]= '#e8c3b9';
  colors[6]= '#c45850';
  colors[7]= '#80bfff';

   colors1[0]= '#46BFBD';
  colors1[1]= '#c45850';

  
 var mainData={}; var labelarray = [];
 	for(row1=0;row1<=6;row1++){
		var getfirst = mainlabel[row1];
		labelarray.push(getfirst);
	}
   var labelarray2 = [];
 	for(row2=7;row2<=13;row2++){
		var getfirst2 = mainlabel[row2];
		labelarray2.push(getfirst2);
	}
	   var labelarray3 = [];
 	for(row3=14;row3<=21;row3++){
		var getfirst3 = mainlabel[row3];
		labelarray3.push(getfirst3);
	}
	
  var outsidearray = []; var outsidearray2 = []; var outsidearray3 = []; var outsidearray4 = [];
  var outsideconductarray = []; var outsideconductarray2 = [];   var outsideconductarray3 = [];
  var outsidepolesarray = []; var outsidepolesarray2 = [];   var outsidepolesarray3 = [];
  var outsidecablearray =[];  var outsidecablearray2 =[]; var outsidecablearray3 =[];
for(row=0;row<charObj.length;row++){
	  var array = [];  var array2 = []; var array3 = []; var array4 = [];
	  var arrayconduct = []; 
	for(row1=0;row1<=6;row1++){
  var rowdata = {}; 
  rowdata['label'] = legend_label[row];
  rowdata['fillColor'] = colors[row];
  var datas = charObj[row][row1];
  array.push(datas);
  rowdata['data'] = array;

	} 
	outsidearray.push(rowdata);
	
		for(row2=7;row2<=13;row2++){
		// var arrays = charObj[row][row1];
		// array.push(arrays);
  var rowdata2 = {}; 
  rowdata2['label'] = legend_label[row];
  rowdata2['fillColor'] = colors[row];
  var datas2 = charObj[row][row2];
  array2.push(datas2);
  rowdata2['data'] = array2;
	} 
	outsidearray2.push(rowdata2);
	
			for(row3=14;row3<=21;row3++){
  var rowdata3 = {}; 
  rowdata3['label'] = legend_label[row];
  rowdata3['fillColor'] = colors[row];
  var datas3 = charObj[row][row3];
  array3.push(datas3);
  rowdata3['data'] = array3;
	} 
	outsidearray3.push(rowdata3);
	
		
}
<!------------------------------- COnductor -------------------------------->
for(row=0;row<charObj2.length;row++){
	 var arrayconduct = [];  var arrayconduct2 = [];  var arrayconduct3 = []; 
	for(row1=0;row1<=6;row1++){
  var conduct = {};
  conduct['label'] = legend_label2[row];
  conduct['fillColor'] = colors1[row];
  var conductdatas = charObj2[row][row1];
  arrayconduct.push(conductdatas);
  conduct['data'] = arrayconduct;
	} 
	outsideconductarray.push(conduct);
	
		for(row2=7;row2<=13;row2++){
 var conduct2 = {};
  conduct2['label'] = legend_label2[row];
  conduct2['fillColor'] = colors1[row];
  var conductdatas2 = charObj2[row][row2];
  arrayconduct2.push(conductdatas2);
  conduct2['data'] = arrayconduct2;
	} 
	outsideconductarray2.push(conduct2);
	
	for(row3=14;row3<=21;row3++){
   var conduct3 = {};
  conduct3['label'] = legend_label2[row];
  conduct3['fillColor'] = colors1[row];
  var conductdatas3 = charObj2[row][row3];
  arrayconduct3.push(conductdatas3);
  conduct3['data'] = arrayconduct3;
	} 
	outsideconductarray3.push(conduct3);
}

<!------------------------------- Poles -------------------------------->
for(row=0;row<charObj3.length;row++){
	 var arraypoles = [];  var arraypoles2 = [];  var arraypoles3 = []; 
	for(row1=0;row1<=6;row1++){
  var poles = {};
  poles['label'] = legend_label3[row];
  poles['fillColor'] = colors[row];
  var polesdatas = charObj3[row][row1];
  arraypoles.push(polesdatas);
  poles['data'] = arraypoles;
	} 
	outsidepolesarray.push(poles);
	
		for(row2=7;row2<=13;row2++){
  var poles2 = {};
  poles2['label'] = legend_label3[row];
  poles2['fillColor'] = colors[row];
  var polesdatas2 = charObj3[row][row2];
  arraypoles2.push(polesdatas2);
  poles2['data'] = arraypoles2;
	} 
	outsidepolesarray2.push(poles2);
	
	for(row3=14;row3<=21;row3++){
   var poles3 = {};
  poles3['label'] = legend_label3[row];
  poles3['fillColor'] = colors[row];
  var polesdatas3 = charObj3[row][row3];
  arraypoles3.push(polesdatas3);
  poles3['data'] = arraypoles3;
	} 
	outsidepolesarray3.push(poles3);
}


<!------------------------------- Cable -------------------------------->
for(row=0;row<charObj4.length;row++){
	 var arraycable = [];  var arraycable2 = [];  var arraycable3 = []; 
	for(row1=0;row1<=6;row1++){
  var cable = {};
  cable['label'] = legend_label4[row];
  cable['fillColor'] = colors[row];
  var cabledatas = charObj4[row][row1];
  arraycable.push(cabledatas);
  cable['data'] = arraycable;
	} 
	outsidecablearray.push(cable);
	
		for(row2=7;row2<=13;row2++){
 var cable2 = {};
  cable2['label'] = legend_label4[row];
  cable2['fillColor'] = colors[row];
  var cabledatas2 = charObj4[row][row2];
  arraycable2.push(cabledatas2);
  cable2['data'] = arraycable2;
	} 
	outsidecablearray2.push(cable2);
	
	for(row3=14;row3<=21;row3++){
   var cable3 = {};
  cable3['label'] = legend_label4[row];
  cable3['fillColor'] = colors[row];
  var cabledatas3 = charObj4[row][row3];
  arraycable3.push(cabledatas3);
  cable3['data'] = arraycable3;
	} 
	outsidecablearray3.push(cable3);
}

  var ctx= document.getElementById("barChart").getContext("2d");
 var dataMap = {
    'transformer': {
      method: 'Bar',
      data: {
        labels:labelarray,
        datasets: outsidearray,
      }
    },
    'conductor': {
      method: 'Bar',
      data: {
        labels: labelarray,
        datasets: outsideconductarray,
      }
    },
	    'poles': {
      method: 'Bar',
      data: {
        labels: labelarray,
        datasets: outsidepolesarray,
      }
    },
	 'cable':  {
    method: 'Bar',
    data: {
        labels:labelarray,
        datasets:  outsidecablearray,
    }
  },
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

<!-- indiranagar lt data-->
<script>
 var ctx2 = document.getElementById("barChart2").getContext("2d");
  var dataMap2 = {
  'transformer':  {
    method: 'Bar',
    data: {
      labels: labelarray2,
      datasets: outsidearray2,
    }
  },
  'conductor':  {
    method: 'Bar',
    data: {
        labels:labelarray2,
        datasets: outsideconductarray2,
    }
  },
  	    'poles': {
      method: 'Bar',
      data: {
        labels: labelarray2,
        datasets: outsidepolesarray2,
      }
    },
      'cable':  {
    method: 'Bar',
    data: {
        labels:labelarray2,
        datasets:  outsidecablearray2,
    }
  },
};
var options= {
    title: {
      display: true,
      text: 'TEST'
    }
  }

var currentChart2;
function updateChart2() {
  if(currentChart2){currentChart2.destroy();}   
  var determineChart2 = $("#chartType").val();
  var params2 = dataMap2[determineChart2]
  currentChart2 = new Chart(ctx2)[params2.method](params2.data, {});
  document.getElementById("js-legend2").innerHTML = currentChart2.generateLegend();
}
$('#chartType').on('change', updateChart2)
updateChart2();
</script>

<!--Indirangar Total-->
<script>
    var ctx3 = document.getElementById("barChart3").getContext("2d");
    var dataMap3 = {
    'transformer':  {
        method: 'Bar',
        data: {
         labels: labelarray3,
        datasets: outsidearray3,
        }
      },
      'conductor':  {
        method: 'Bar',
        data: {
         labels:labelarray3,
        datasets: outsideconductarray3,
        }
      },
	 'poles': {
      method: 'Bar',
      data: {
        labels: labelarray3,
        datasets: outsidepolesarray3,
      }
    },
	 'cable':  {
    method: 'Bar',
    data: {
        labels:labelarray3,
        datasets:  outsidecablearray3,
    }
  },
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
display: inline;
    padding-left: 30px;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 2px 3px 2px 15px;
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
    font-size: 14px;
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
