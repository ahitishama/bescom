 
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
         Dashboard
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">dcm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- East Circle Graph -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">East
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
                  <optgroup label="Indiranagar">
                   <option value="pie1">Indiranagar</option>
                   <option value="pie2">Shivajinagar</option>
                   <option value="pie3">Vindhana Soudha</option>
                 <!--   <option value="pie4">E6</option>
                 <option value="pie4">E7</option> -->
                 </optgroup>
           
              </select>
            </div>
            <div class="chart">

              <!--  select bar chart -->
              

              <div id="js-legend" class="chart-legend" align="center"></div>
              <canvas id="barChart1" style="height:300px"></canvas>

              <!--   <canvas id="areaChart" style="height:250px"></canvas> -->
            </div>
          </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <!-- North Circle  Graph -->
          <div class="box box-danger">
           <div class="box-header with-border">
             <h3 class="box-title">North</h3>
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
              <optgroup label="Hebbal">
                 <option value="north1">Hebbal</option>
                 <option value="north2">Malleswaram</option>
                 <option value="north3">Peenya</option>
<!--                  <option value="pie4">C8</option>
                -->               </optgroup>

            
            </select>
              </div>
            <div class="chart">
            <div id="js-legend2" class="chart-legend" align="center"></div>
            <canvas id="barChart2" style="height:300px"></canvas>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
         <!-- South Circle graph -->
         <div class="box box-info">
           <div class="box-header with-border">
             <h3 class="box-title">South</h3>
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
              <select class="selectpicker test" id="chartType3" data-size="5">
              <optgroup label="HSR">
                 <option value="south1">HSR</option>
                 <option value="south2">Jayanagar</option>
                <option value="south3">koramangala</option>
              <!--    <option value="pie3">S13</option>
              <option value="pie4">S8</option> -->
               </optgroup>

            </select>
              </div>


             <div class="chart">
             <div id="js-legend3" class="chart-legend" align="center"></div>
             <canvas id="barChart3" style="height:300px"></canvas>
              
             </div>
           </div>
         <!--   /.box-body -->
         </div>
      <!--    /.box -->
       
       <!--   West Circle Graph____________-4 -->
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">West</h3>
                <label>Circle Name</label>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <div class="box-body">
            <div class="form-group">
              <label>Circle Name</label>
              <select class="selectpicker test" id="chartType4" data-size="5">
              <optgroup label="Kengeri">
                 <option value="west1">Kengeri</option>
                 <option value="west2">Rajajinagar</option>
                <option value="west3">RR Nagar</option>
            
               </optgroup>

            
            </select>
           
              </div>
             <div class="chart">
             <div id="js-legend4" class="chart-legend" align="center"></div>
               <canvas id="barChart4" style="height:300px"></canvas>
             </div>
           </div>
       <!--     /.box-body -->
         </div>
        <!--  /.box -->
       
       </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php';?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
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
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- East CHART -
    //--------------
   var ctx = document.getElementById("barChart1").getContext("2d");

    /*data*/





  

/*bar1--->   Indiranagar data*/
var e10 =[3 ,2 ,2, 6, 3, 16]
var e3  =[36 , 8, 6 ,0 ,0, 50]
var e4 =[ 42  ,24  ,6 ,2 ,16,  90]
var e6  =[4 ,0 ,3, 9, 7, 23]
var e7  =[1 ,1 ,6 ,7 ,0 ,15]

  

/*pie2--->   DAVANAGERE data */
var agridataD = [0, 55, 43, 30, 6, 0, 134];
var commdataD = [0, 0, 0, 1, 0, 0, 1];

var domesticdataD = [1, 0, 0, 0, 0, 0, 1];

var industrialdataD = [0, 2, 1, 2, 2, 0, 7];
var mixedloaddataD = [0, 3, 2, 42, 4, 9, 60];
var njydataD = [2, 5, 17, 38, 1, 1, 64];
var waterworksdataD = [3, 1, 0, 4, 2, 0, 10];
var blankdataD = [0, 0, 0, 1, 9, 0, 10];

/*pie3--->   HARIHARA data */
var agridataH = [1, 47, 36, 12, 1, 1, 98];
var domesticdataH = [1, 0, 2, 0, 0, 0, 3];
var industrialdataH = [0, 0, 1, 5, 0, 0, 6];
var leftIntegdataH = [1, 0, 0, 0, 0, 0, 1];
var mixedldataH = [1, 2, 1, 25, 0, 8, 37];
var njydataH = [0,2, 1, 38, 2, 4, 47]; 

var waterworksdataH = [3, 1, 0, 2, 0, 0, 6];

var blankdataH = [0, 0, 0, 3, 14, 0, 17];

/*pie4--->   HIRIYURU data */
var agridataU = [1, 49, 25, 35, 1, 4, 115];
var industrialdataU = [1, 0, 0, 2, 0, 3, 6];
var mixedloaddataU = [0, 3, 0, 22, 0, 10, 35];
var njydataU = [1, 1,13, 29, 1, 0, 45];
var waterworksdataU = [1, 0, 0, 4, 0, 2, 7];
var blankdataU = [0, 0, 1, 2, 7, 1, 11];


 var dataMap = {
     'pie1':  {
          method: 'Bar',
         data: {
             labels: ["0 to 5%","5 to 10%","10 to 15%","15% & above","Negative Loss","Grand Total"],
             datasets: [{
          label               : 'E10',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : e10
        },
        {
          label               : 'E3',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : e3
        },
        {
          label               : 'E4',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : e4
        },

         {
          label               : 'E6',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  e6
        },
         {
          label               : 'E7',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  e7
        }
             ],
         }
     },


     'pie2': {
      method: 'Bar',
      data: {
        labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
        datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataD
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdataD
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataD
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdataD
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddataD
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataD
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataD

        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataD
        }],
      }
     },

     'pie3':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataH
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataH
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : industrialdataH
        },
        {
          label               : 'LIFT IRRIGATION',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : leftIntegdataH
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedldataH
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataH
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataH
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataH
        } ],
         }
     },


'pie4':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataU
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdataU
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddataU
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataU
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataU
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataU
        } ],
         }
     }
 };

    

  




   
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
<!-- North circle -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx2 = document.getElementById("barChart2").getContext("2d");

    /*data*/





  

/*pie1--->   chitradurga data*/
     var agridata = [0, 23, 19, 24, 5, 1, 72];
     var commdata = [0, 0, 0, 1, 0, 0, 1];

     var industrialdata = [1, 0, 0, 1, 0, 0, 2];

     var mixedloaddata = [6, 5, 4, 49, 3, 15, 82];

     var njydata = [0, 0, 0, 31, 7, 3, 41];

     var waterworksdata = [0, 0, 0, 1, 0, 1, 2];

     var blankdata = [0, 0, 0, 4, 8, 0, 12];
  

/*pie2--->   DAVANAGERE data */
var agridataD = [0, 55, 43, 30, 6, 0, 134];
var commdataD = [0, 0, 0, 1, 0, 0, 1];

var domesticdataD = [1, 0, 0, 0, 0, 0, 1];

var industrialdataD = [0, 2, 1, 2, 2, 0, 7];
var mixedloaddataD = [0, 3, 2, 42, 4, 9, 60];
var njydataD = [2, 5, 17, 38, 1, 1, 64];
var waterworksdataD = [3, 1, 0, 4, 2, 0, 10];
var blankdataD = [0, 0, 0, 1, 9, 0, 10];

/*pie3--->   HARIHARA data */
var agridataH = [1, 47, 36, 12, 1, 1, 98];
var domesticdataH = [1, 0, 2, 0, 0, 0, 3];
var industrialdataH = [0, 0, 1, 5, 0, 0, 6];
var leftIntegdataH = [1, 0, 0, 0, 0, 0, 1];
var mixedldataH = [1, 2, 1, 25, 0, 8, 37];
var njydataH = [0,2, 1, 38, 2, 4, 47]; 

var waterworksdataH = [3, 1, 0, 2, 0, 0, 6];

var blankdataH = [0, 0, 0, 3, 14, 0, 117];

/*pie4--->   HIRIYURU data */
var agridataU = [1, 49, 25, 35, 1, 4, 115];
var industrialdataU = [1, 0, 0, 2, 0, 3, 6];
var mixedloaddataU = [0, 3, 0, 22, 0, 10, 35];
var njydataU = [1, 1,13, 29, 1, 0, 45];
var waterworksdataU = [1, 0, 0, 4, 0, 2, 7];
var blankdataU = [0, 0, 1, 2, 7, 1, 111];


 var dataMap2 = {
     'north1':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridata
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdata
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdata
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddata
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydata
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdata
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdata
        }  
        
             ],
         }
     },


     'north2': {
      method: 'Bar',
      data: {
        labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
        datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataD
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdataD
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataD
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdataD
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddataD
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataD
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataD

        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataD
        }],
      }
     },

     'north3':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataH
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataH
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : industrialdataH
        },
        {
          label               : 'LIFT IRRIGATION',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : leftIntegdataH
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedldataH
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataH
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataH
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataH
        } ],
         }
     },

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

  })

</script>



<!-- south circle -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx3 = document.getElementById("barChart3").getContext("2d");

    /*data*/





  

/*pie1--->   chitradurga data*/
 var s10 =[4 ,2 ,7 ,7 ,3 ,23]
var s11 =[2 ,23,  9, 0, 1, 35]
var s12 =[13  ,13,  8 ,4 ,0, 38]
var s13 =[21 , 3 ,5 ,8 ,9 ,46]
var s8  =[9 ,1 ,3 ,3 ,1 ,17]


/*pie2--->   DAVANAGERE data */
var agridataD = [0, 55, 43, 30, 6, 0, 134];
var commdataD = [0, 0, 0, 1, 0, 0, 1];

var domesticdataD = [1, 0, 0, 0, 0, 0, 1];

var industrialdataD = [0, 2, 1, 2, 2, 0, 7];
var mixedloaddataD = [0, 3, 2, 42, 4, 9, 60];
var njydataD = [2, 5, 17, 38, 1, 1, 64];
var waterworksdataD = [3, 1, 0, 4, 2, 0, 10];
var blankdataD = [0, 0, 0, 1, 9, 0, 10];

/*pie3--->   HARIHARA data */
var agridataH = [1, 47, 36, 12, 1, 1, 98];
var domesticdataH = [1, 0, 2, 0, 0, 0, 3];
var industrialdataH = [0, 0, 1, 5, 0, 0, 6];
var leftIntegdataH = [1, 0, 0, 0, 0, 0, 1];
var mixedldataH = [1, 2, 1, 25, 0, 8, 37];
var njydataH = [0,2, 1, 38, 2, 4, 47]; 

var waterworksdataH = [3, 1, 0, 2, 0, 0, 6];

var blankdataH = [0, 0, 0, 3, 14, 0, 117];

/*pie4--->   HIRIYURU data */
var agridataU = [1, 49, 25, 35, 1, 4, 115];
var industrialdataU = [1, 0, 0, 2, 0, 3, 6];
var mixedloaddataU = [0, 3, 0, 22, 0, 10, 35];
var njydataU = [1, 1,13, 29, 1, 0, 45];
var waterworksdataU = [1, 0, 0, 4, 0, 2, 7];
var blankdataU = [0, 0, 1, 2, 7, 1, 111];


 var dataMap3 = {
     'south1':  {
          method: 'Bar',
         data: {
             labels: ["0 to 5%","5 to 10%","10 to 15%","15% & above","Negative Loss","Grand Total"],
             datasets: [{
          label               : 'S10',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : s10
        },
        {
          label               : 'S11',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
         pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : s11
        },
        {
          label               : 'S12',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : s12
        },

         {
          label               : 'S13',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  s13
        },
         {
          label               : 'S8',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  s8
        },
       
        
             ],
         }
     },


     'south2': {
      method: 'Bar',
      data: {
        labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
        datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataD
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdataD
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataD
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdataD
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddataD
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataD
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataD

        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataD
        }],
      }
     },

     'south3':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataH
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataH
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : industrialdataH
        },
        {
          label               : 'LIFT IRRIGATION',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : leftIntegdataH
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedldataH
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataH
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataH
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataH
        } ],
         }
     },

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

  })

</script>
<!-- west Circle-->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx4 = document.getElementById("barChart4").getContext("2d");

    /*data*/





  

/*pie1--->   chitradurga data*/
     var agridata = [0, 23, 19, 24, 5, 1, 72];
     var commdata = [0, 0, 0, 1, 0, 0, 1];

     var industrialdata = [1, 0, 0, 1, 0, 0, 2];

     var mixedloaddata = [6, 5, 4, 49, 3, 15, 82];

     var njydata = [0, 0, 0, 31, 7, 3, 41];

     var waterworksdata = [0, 0, 0, 1, 0, 1, 2];

     var blankdata = [0, 0, 0, 4, 8, 0, 12];
  

/*pie2--->   DAVANAGERE data */
var agridataD = [0, 55, 43, 30, 6, 0, 134];
var commdataD = [0, 0, 0, 1, 0, 0, 1];

var domesticdataD = [1, 0, 0, 0, 0, 0, 1];

var industrialdataD = [0, 2, 1, 2, 2, 0, 7];
var mixedloaddataD = [0, 3, 2, 42, 4, 9, 60];
var njydataD = [2, 5, 17, 38, 1, 1, 64];
var waterworksdataD = [3, 1, 0, 4, 2, 0, 10];
var blankdataD = [0, 0, 0, 1, 9, 0, 10];

/*pie3--->   HARIHARA data */
var agridataH = [1, 47, 36, 12, 1, 1, 98];
var domesticdataH = [1, 0, 2, 0, 0, 0, 3];
var industrialdataH = [0, 0, 1, 5, 0, 0, 6];
var leftIntegdataH = [1, 0, 0, 0, 0, 0, 1];
var mixedldataH = [1, 2, 1, 25, 0, 8, 37];
var njydataH = [0,2, 1, 38, 2, 4, 47]; 

var waterworksdataH = [3, 1, 0, 2, 0, 0, 6];

var blankdataH = [0, 0, 0, 3, 14, 0, 117];

/*pie4--->   HIRIYURU data */
var agridataU = [1, 49, 25, 35, 1, 4, 115];
var industrialdataU = [1, 0, 0, 2, 0, 3, 6];
var mixedloaddataU = [0, 3, 0, 22, 0, 10, 35];
var njydataU = [1, 1,13, 29, 1, 0, 45];
var waterworksdataU = [1, 0, 0, 4, 0, 2, 7];
var blankdataU = [0, 0, 1, 2, 7, 1, 111];


 var dataMap4 = {
     'west1':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridata
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdata
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdata
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddata
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydata
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdata
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdata
        }  
        
             ],
         }
     },


     'west2': {
      method: 'Bar',
      data: {
        labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
        datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataD
        },
        {
          label               : 'COMMERCIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : commdataD
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataD
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : industrialdataD
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedloaddataD
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataD
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataD

        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataD
        }],
      }
     },

     'west3':  {
          method: 'Bar',
         data: {
             labels: ["Less than 5%","5 to 10%","10 to 15%","More than 15%","MNR","Negative","Grand Total"],
             datasets: [{
          label               : 'AGRI',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : agridataH
        },
        {
          label               : 'DOMESTIC',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : domesticdataH
        },
        {
          label               : 'INDUSTRIAL',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : industrialdataH
        },
        {
          label               : 'LIFT IRRIGATION',
          fillColor           : '#e6e600',
          strokeColor         : 'rgba(255,221,50,1)',
          pointColor          : 'rgba(255,221,50,1)',
          pointStrokeColor    : 'rgba(255,221,50,1)',
          pointHighlightFill  : 'rgba(255,221,50,1)',
          pointHighlightStroke: 'rgba(255,221,50,1)',
          data                : leftIntegdataH
        },

         {
          label               : 'MIXED LOAD',
          fillColor           : '#8e5ea2',
          strokeColor         : 'rgba(60,186,159,0.2)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,186,159,0.2)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  mixedldataH
        },
         {
          label               : 'NJY',
          fillColor           : '#3cba9f',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                :  njydataH
        },
        {
          label               : 'WATER WORKS',
          fillColor           : '#e8c3b9',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : waterworksdataH
        },

{
          label               : 'Blank',
          fillColor           : '#c45850',
          strokeColor         : '#c45850',
          pointColor          : '#c45850',
          pointStrokeColor    : '#c45850',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#c45850',
          data                : blankdataH
        } ],
         }
     },

}


  




var currentChart4;

 function updateChart4() {
     if(currentChart4){currentChart4.destroy();}
   
     var determineChart4 = $("#chartType4").val();

     var params4 = dataMap4[determineChart4]
     currentChart4 = new Chart(ctx4)[params4.method](params4.data, {});
     document.getElementById("js-legend4").innerHTML = currentChart4.generateLegend();
 }

 $('#chartType4').on('change', updateChart4)
 updateChart4();

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
