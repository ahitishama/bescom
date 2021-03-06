<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Bescom</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include '../../../header.php';?>
<?php include '../../../nav.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
 Station
    <small>Zone wise Stations in BESCOM As on 31.01.2018</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Charts</a></li>
    <li class="active">station</li>
  </ol>
</section>
<!-- Main content -->
<section class="content" id="sec1">

  <div class="row">
    <div class="col-md-6">
      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">BMAZ </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

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
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">BRAZ</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
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
      </section>


<!--  section 2-->
<section class="content" id="sec2">

  <div class="row">
<div class="col-md-6">
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">CTAZ</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="form-group">
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


<div class="col-md-6">
<!-- LINE CHART -->
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">TOTAL</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
 
    <div class="row">
      <div class="col-md-8">
        <div class="chart" id="fieldname"> 
          <canvas id="myChart4" style="height:330px"></canvas>
        </div></div>
        <div class="col-md-4"> <div id="js-legend4" class="chart-legend"></div></div>
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
<script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../../../bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="../../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->

<!-- ht chaRT FIRST CHART-->
<script>


  var ctx = document.getElementById("myChart").getContext("2d");
  var ctxTwo = document.getElementById("myChart2").getContext("2d");
  var ctxThree = document.getElementById("myChart3").getContext("2d");
  var ctxFour = document.getElementById("myChart4").getContext("2d");



  var dataMapOne = {
        method: 'Pie',
      data: [{
        value: '170',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "220 kV"
      }, {
        value: '17',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "110 kV"
      }, 
      {
        value: '17',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "66 kV"
      },
      {
        value: '90',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "30Kv"
      },
      {
        value: '51',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "TOTAL"
      }],
  }
  var dataMapTwo = {
        method: 'Pie',
      data: [{
        value: '137',
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "220 kV"
      }, {
        value: '17',
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "110 kV"
      }, 
      {
        value: '17',
        color: "rgba(210, 214, 222, 1)",
        highlight: "rgba(210, 214, 222, 1)",
        label: "66 kV"
      },
      {
        value: '70',
        color: "#e6e600",
        highlight: "#e6e600",
        label: "30Kv"
      },
      {
        value: '51',
        color: "#8e5ea2",
        highlight: "#8e5ea2",
        label: "TOTAL"
      }],
  }
  var dataMapThree = {
    method: 'Pie',
    data: [{
      value: '157',
      color: "#F7464A",
      highlight: "#FF5A5E",
      label: "220 kV"
    }, {
      value: '17',
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "110 kV"
    }, 
    {
      value: '17',
      color: "rgba(210, 214, 222, 1)",
      highlight: "rgba(210, 214, 222, 1)",
      label: "66 kV"
    },
    {
      value: '02',
      color: "#e6e600",
      highlight: "#e6e600",
      label: "30Kv"
    },
    {
      value: '51',
      color: "#8e5ea2",
      highlight: "#8e5ea2",
      label: "TOTAL"
    }],
  }
   var dataMapFour = {
    method: 'Pie',
    data: [{
      value: '17',
      color: "#F7464A",
      highlight: "#FF5A5E",
      label: "220 kV"
    }, {
      value: '127',
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "110 kV"
    }, 
    {
      value: '17',
      color: "rgba(210, 214, 222, 1)",
      highlight: "rgba(210, 214, 222, 1)",
      label: "66 kV"
    },
    {
      value: '40',
      color: "#e6e600",
      highlight: "#e6e600",
      label: "30Kv"
    },
    {
      value: '51',
      color: "#8e5ea2",
      highlight: "#8e5ea2",
      label: "TOTAL"
    }],
  },
  
  currentChart = new Chart(ctx)[dataMapOne.method](dataMapOne.data, {});
  document.getElementById("js-legend").innerHTML = currentChart.generateLegend();

  currentChart2 = new Chart(ctxTwo)[dataMapTwo.method](dataMapTwo.data, {});
  document.getElementById("js-legend2").innerHTML = currentChart2.generateLegend();

  currentChart3 = new Chart(ctxThree)[dataMapThree.method](dataMapThree.data, {});
  document.getElementById("js-legend3").innerHTML = currentChart3.generateLegend();

  currentChart4 = new Chart(ctxFour)[dataMapFour.method](dataMapFour.data, {});
  document.getElementById("js-legend4").innerHTML = currentChart4.generateLegend();


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
<style type="text/css">
  #js-legend4 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  #js-legend4 ul li {
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
