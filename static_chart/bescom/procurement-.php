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
 <?php include '../../header.php';?>
  <?php include '../../nav.php';?>

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
            <option value="conductor">Poles</option>
            <option value="transformer">Conductor</option>
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
<?php include '../../footer.php';?>
</div>

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
<!-- page script -->


<!-- Indiranagar lt data-->

<script>
  var ctx = document.getElementById("barChart").getContext("2d");
  /*indiranagarData*/
  var oneDt15=[ 587,0  ,0  ,0  ,0  ,3  ,50 ]
  var oneDt63 =[ 98 ,0  ,0  ,0  ,0  ,0  ,14 ]
  var oneDt100=[ 3  ,0  ,0  ,3  ,0  ,13 ,0 ]
  var oneDt250=[ 6  ,6  ,0  ,1  ,13 ,0  ,0 ]
  var oneDt500 = [ 0  ,0  ,0  ,1  ,0  ,0  ,0 ]

  /*shivajinagarData*/

 var oneRabbitACSR=[5.07, 7.41, 7.13, 9.06, 7.59, 7.45, 6.24 ]
  var oneCoyoteACSR=[5.15, 7.91, 0.00, 10.14, 7.52, 8.45, 5.99]


  var dataMap = {
    'transformer': {
      method: 'Bar',
      data: {
        labels:[ 
     "BESCOM",
     "Indiranagar",
     "Vidhanasoudha",
     "Malleshwaram",
     "Jayanagar",
     "Hebbal",
     "Y Hanka"],
        datasets: [{
          label               : '5 KVA',
          fillColor           : '#46BFBD',
          data                :oneDt15
        },
        {
          label               : '63 KVA',
          fillColor           : '#c45850',
          data                :oneDt63
        },
        {
          label               : '100 KVA',
          fillColor           : '#8e5ea2',
          data                :oneDt100
        },
        {
          label               : '250 KVA',
          fillColor           : '#e6e600',
          data                :oneDt250
        },
         {
          label               : '500 KVA',
          fillColor           : '#80bfff',
          data                :oneDt500
        }
        


        ]
      },
      options: {
    title: {
        display: true,
        text: 'Custom Chart Title'
    }
}
    },
    'conductor': {
      method: 'Bar',
      data: {
        labels: [ "BESCOM",
     "Indiranagar",
     "Vidhanasoudha",
     "Malleshwaram",
     "Jayanagar",
     "Hebbal",
     "Y Hanka"],
        datasets: [{
          label               : 'Rabbit ACSR',
          fillColor           : '#46BFBD',
          data                :oneRabbitACSR
        },
        {
          label               : 'Coyote ACSR',
          fillColor           : '#c45850',
          data                :oneCoyoteACSR
        }

        ],
      }
    },
  };

  var currentChart;
  function updateChart() {
    if(currentChart){currentChart.destroy();}
    var determineChart = $("#chartType").val();
    var params = dataMap[determineChart]
    currentChart = new Chart(ctx)[params.method](params.data, {});
    console.log(currentChart);
    document.getElementById("js-legend").innerHTML = currentChart.generateLegend();
  }
  $('#chartType').on('change', updateChart)
  updateChart();
</script>

<!-- indiranagar lt data-->
<script>
 var ctx2 = document.getElementById("barChart2").getContext("2d");

/*indiranagarData*/
  var twoDt15=[ 587,0  ,0  ,10  ,0  ,3  ,50 ]
  var twoDt63 =[ 98 ,0  ,30  ,0  ,0  ,0  ,14 ]
  var twoDt100=[ 3  ,0  ,0  ,3  ,0  ,13 ,0 ]
  var twoDt250=[ 60  ,6  ,0  ,1  ,13 ,0  ,0 ]
  var twoDt500 = [ 0  ,0  ,0  ,1  ,0  ,0  ,0 ]

 /*Conductor*/

 var twoRabbitACSR=[5.07, 7.41, 7.13, 9.06, 7.59, 7.45, 6.24 ]
  var twoCoyoteACSR=[5.15, 7.91, 0.00, 10.14, 7.52, 8.45, 5.99]

 var dataMap2 = {
  'transformer':  {
    method: 'Bar',
    data: {
      labels: ["N Mangala",
     "R Nagara",
     "KK Pura",
     "CD Pura",
     "Kolar",
     "KGF",
     "Chintamani"],
      datasets: [{
          label               : '5 KVA',
          fillColor           : '#46BFBD',
          data                :twoDt15
        },
        {
          label               : '63 KVA',
          fillColor           : '#c45850',
          data                :twoDt63
        },
        {
          label               : '100 KVA',
          fillColor           : '#8e5ea2',
          data                :twoDt100
        },
        {
          label               : '250 KVA',
          fillColor           : '#e6e600',
          data                :twoDt250
        },
         {
          label               : '500 KVA',
          fillColor           : '#80bfff',
          data                :twoDt500
        }
      ],
    }
  },
  'conductor':  {
    method: 'Bar',
    data: {
        labels:["N Mangala",
     "R Nagara",
     "KK Pura",
     "CD Pura",
     "Kolar",
     "KGF",
     "Chintamani"],
        datasets: [{
          label               : 'Rabbit ACSR',
          fillColor           : '#46BFBD',
          data                :twoRabbitACSR
        },
        {
          label               : 'Coyote ACSR',
          fillColor           : '#c45850',
          data                :twoCoyoteACSR
        }

        ],
    }
  },
};
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
    /*transformer*/
    var threeDt15=[ 87,0  ,0  ,0  ,0  ,3  ,50 ]
    var threeDt63 =[ 98 ,0  ,0  ,0  ,0  ,0  ,14 ]
    var threeDt100=[ 3  ,0  ,0  ,3  ,0  ,13 ,0 ]
    var threeDt250=[ 6  ,6  ,0  ,1  ,13 ,0  ,0 ]
    var threeDt500 = [ 0  ,0  ,0  ,1  ,0  ,0  ,500 ]
    /*Conductor*/
     var threeRabbitACSR=[5.07, 7.41, 7.13, 9.06, 7.59, 7.45, 6.24,50 ]
    var threeCoyoteACSR=[5.15, 7.91, 0.00, 10.14, 7.52, 8.45, 5.99,60]

    var dataMap3 = {
    'transformer':  {
        method: 'Bar',
        data: {
          labels: [ "C.B. Pura",
     "Tumkur",
     "M Giri",
     "Tiptur",
     "D Gere",
     "Harihara",
     "C Durga",
     "Hiriyur"],
          datasets: [{
          label               : '5 KVA',
          fillColor           : '#46BFBD',
          data                :threeDt15
        },
        {
          label               : '63 KVA',
          fillColor           : '#c45850',
          data                :threeDt63
        },
        {
          label               : '100 KVA',
          fillColor           : '#8e5ea2',
          data                :threeDt100
        },
        {
          label               : '250 KVA',
          fillColor           : '#e6e600',
          data                :threeDt250
        },
         {
          label               : '500 KVA',
          fillColor           : '#80bfff',
          data                :threeDt500
        }
          ],
        }
      },
      'conductor':  {
        method: 'Bar',
        data: {
          labels: [ "C.B. Pura",
     "Tumkur",
     "M Giri",
     "Tiptur",
     "D Gere",
     "Harihara",
     "C Durga",
     "Hiriyur"],
          datasets: [{
          label               : 'Rabbit ACSR',
          fillColor           : '#46BFBD',
          data                :threeRabbitACSR
        },
        {
          label               : 'Coyote ACSR',
          fillColor           : '#c45850',
          data                :threeCoyoteACSR
        }
          ],
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
