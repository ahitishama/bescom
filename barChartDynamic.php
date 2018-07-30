<?php
$fileName = $_GET['file'];
$sheet_number = $_GET['st'];
?>
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
          M & C - EA
        <small>Details showing the Feeder wise T&D loss level For the month of Nov-17 Of BMAZ</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">dcm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="dynamicChartPrint">
      </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- page script -->
<script>
  
  $(function () {
   
    var htmlContent = '';
    var allChartData='';
    var dataMapAll = [];
    // url: "chart_sheet_read/m_c/24_town.php",
    //url: "chart_sheet_read/m_c/M_C-sheet3.php",

    $.get("barchartSidebySide.html", function(html_string)
     {
        htmlContent = html_string;

        $.ajax({
            type: "GET",
            url: "chart_sheet_read/m_c/24_town.php",
             success: function(data) {
              allChartData = $.trim(data);
            },
            async: false,
        });

        var allObject = $.parseJSON( allChartData );
       

        var dynm_lbl = allObject['0'];
        var chartObject = allObject['1'];
        var selectHtmlData = allObject['2'];
        var chartType = allObject['3'];
        var col_md_Value = allObject['4'];

        dynm_lbl = jQuery.grep(dynm_lbl, function(n, i){
          return (n !== "" && n != null);
        });


        var htmlIndex = 1;


        $.each(selectHtmlData, function (key, data) {
          var partData = html_string;

          var printData = partData.replace(/{{circle}}/g, key);
          printData = printData.replace(/{{selectData}}/g, data);
          printData = printData.replace(/{{chartindex}}/g, htmlIndex);
          printData = printData.replace(/{{col-md-value}}/g, col_md_Value);

          $('#dynamicChartPrint').append(printData);


         
          var dataMap = {};

          var circleObj = chartObject[key];

          var row = 1;

          $.each(circleObj, function (circleKey, circledata) {

              var obj = {};
              obj["method"] = chartType;
              var mainData = {};
              mainData['labels'] = dynm_lbl;
              mainData['datasets'] = circledata;
              obj["data"] = mainData;
            
              var newIndex = key+''+row;
              dataMap[newIndex] = obj;
              row++;

          });

          dataMapAll[key] = dataMap;

         updateChart(dataMap,htmlIndex);
         htmlIndex++;

      })

        var currentChart;
        var params = '';
        function updateChart(dataMap1 = null,htmlIndex=null) {
            var currentCirlce = $(this).attr("data-circle");

            if(currentCirlce != undefined){
              dataMap1 = dataMapAll[$(this).attr("data-circle")];
              htmlIndex = $(this).attr("data-size");
              //alert(currentCirlce);
            }

            ctx = document.getElementById("barChart"+htmlIndex).getContext("2d");
             //if(currentChart){currentChart.destroy();}
            var determineChart = $("#chartType"+htmlIndex).val();
            params = dataMap1[determineChart];
            
            currentChart = new Chart(ctx)[params.method](params.data, {});
            var legend=currentChart;
            document.getElementById("js-legend"+htmlIndex).innerHTML = legend.generateLegend();
         } 

        $('.chartTypeClick').on('click', updateChart);

     },'html');   

  })

</script>


</body>
</html>
<style type="text/css">
.chart-legend ul {
  list-style-type: none;
    margin: 0;
    padding: 0;
}

.chart-legend ul li {
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

.chart-legend li span {
display: inline;
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 100%;
  border-radius: 5px;
}

</style>