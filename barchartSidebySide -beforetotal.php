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
	  <?php if($_GET['file'] == 'mc_ea') { if($_GET['st']=='sheet1') { echo 'CTAZ'; } else if($_GET['st']=='sheet2') { echo 'BRAZ'; } else if($_GET['st']=='sheet3') { echo 'BMAZ'; } else if($_GET['st']=='sheet4') { echo '24 Towns'; } } else if($_GET['file'] == 'projects') { if($_GET['st']=='ddugjy') { echo 'ELECTRICITY SUPPLY BANGALORE ELECTRICITY SUPPLY COMPANY LIMITED'; } else if($_GET['st']=='ipds') { echo 'IPDS Integrated Power Development Scheme'; } else if($_GET['st']=='transformer') { echo 'Sheet-3 TRANSFORMER STRUCTURE REDESIGN'; } else if($_GET['st']=='unip') { echo 'UNIP CIRCLE WISE dETAILS OF UNAUTHORISED IP SETS AS PER'; } else if($_GET['st']=='njy_s1') { echo 'ABSTRACT of NJY Phase -1 Scheme'; } else if($_GET['st']=='njy_last_month') { echo 'NJY STATUS OF NIRANTHARA JYOTHI'; } }  else {}  ?>
         
        <small></small>
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
      <div id="dynamicChartPrint">
      </div>
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
   
    var fileName = "<?=$fileName;?>";
    var sheetNumber = "<?=$sheet_number;?>";

    var htmlContent = '';
    var allChartData='';
    var dataMapAll = [];
    var prevsChartType;
   
    //var ajaxURL = 'chart_sheet_read/general/dsm.php?method=Sheet1';
    var ajaxURL = '';
    var currentChart;
    var params = '';

    //alert("hello");

   // console.log(fileName);
   // console.log(sheetNumber);
  
    if(fileName == "mc_ea" && sheetNumber=="sheet1"){
      ajaxURL = "chart_sheet_read/m_c/ctaz.php?method=Sheet1";
      
    }else if(fileName == "mc_ea" && sheetNumber=="sheet2"){
      ajaxURL = "chart_sheet_read/m_c/braz.php?method=Sheet2";

    }else if(fileName == "mc_ea" && sheetNumber=="sheet3"){
      ajaxURL = "chart_sheet_read/m_c/bmaz.php?method=Sheet3";
    }
    else if(fileName == "mc_ea" && sheetNumber=="sheet4"){
      ajaxURL = "chart_sheet_read/m_c/24_town.php?method=Sheet4";
    }
    else if(fileName == "general" && sheetNumber=="aNrtS1"){
      ajaxURL = "chart_sheet_read/general/A&RT.php?method=Sheet1";
    }
    else if(fileName == "general" && sheetNumber=="dsm"){
      ajaxURL = "chart_sheet_read/general/dsm.php?method=dsm";
    }
    else if(fileName == "gks" && sheetNumber=="sheet1"){
      ajaxURL = "chart_sheet_read/gks/gks-sheet1.php?method=Sheet1";
    }
	 else if(fileName == "projects" && sheetNumber=="ddugjy"){
      ajaxURL = "chart_sheet_read/projects/ddugjy.php?method=ddugjy";
    }
	 else if(fileName == "projects" && sheetNumber=="ipds"){
      ajaxURL = "chart_sheet_read/projects/ipds.php?method=ipds";
    }
	
	 else if(fileName == "projects" && sheetNumber=="transformer"){
      ajaxURL = "chart_sheet_read/projects/transformer.php?method=transformer";
    }
	 else if(fileName == "projects" && sheetNumber=="unip"){
      ajaxURL = "chart_sheet_read/projects/unip.php?method=unip";
    }
	 else if(fileName == "projects" && sheetNumber=="njy_s1"){
      ajaxURL = "chart_sheet_read/projects/njy_s1.php?method=njy_s1";
    }
	 else if(fileName == "projects" && sheetNumber=="njy_last_month"){
      ajaxURL = "chart_sheet_read/projects/njy_s2.php?method=njy_last_month";
    }
	else if(fileName == "operation" && sheetNumber=="gks_bmaz"){
      ajaxURL = "chart_sheet_read/Operation/gks/bmaz.php?method=gks_bmaz";
    }
	else if(fileName == "operation" && sheetNumber=="gks_braz"){
      ajaxURL = "chart_sheet_read/Operation/gks/braz.php?method=gks_braz";
    }
	else if(fileName == "operation" && sheetNumber=="gks_ctaz"){
      ajaxURL = "chart_sheet_read/Operation/gks/ctaz.php?method=gks_ctaz";
    }
	else if(fileName == "operation" && sheetNumber=="gks_total"){
      ajaxURL = "chart_sheet_read/Operation/gks/gks_total.php?method=gks_total";
    }
	else if(fileName == "operation" && sheetNumber=="ht_lt_bmaz"){
      ajaxURL = "chart_sheet_read/Operation/htlt/bmaz.php?method=ht_lt_bmaz";
    }
		else if(fileName == "operation" && sheetNumber=="ht_lt_braz"){
      ajaxURL = "chart_sheet_read/Operation/htlt/braz.php?method=ht_lt_braz";
    }
	
	else if(fileName == "operation" && sheetNumber=="ht_lt_ctaz"){
      ajaxURL = "chart_sheet_read/Operation/htlt/ctaz.php?method=ht_lt_ctaz";
    }
	
	else if(fileName == "operation" && sheetNumber=="sheet3"){
      ajaxURL = "chart_sheet_read/Operation/powersupply/scada.php?method=sheet3";
    }
	else if(fileName == "operation" && sheetNumber=="sheet5"){
      ajaxURL = "chart_sheet_read/Operation/powersupply/abstract.php?method=sheet5";
    }




    //alert(ajaxURL);


    $.get("barchartSidebySide.html", function(html_string)
     {
        htmlContent = html_string;
        $.ajax({
            type: "GET",
           url: ajaxURL,
             success: function(data) {
              allChartData = $.trim(data);
            },
            async: false,
        });

       
        var allObject = $.parseJSON(allChartData);

       

        var dynm_lbl = allObject['0'];
        var chartObject = allObject['1'];
        var selectHtmlData = allObject['2'];
        var chartType = allObject['3'];
        var col_md_Value = allObject['4'];
		var display = "none";
		var colval =12
		

        dynm_lbl = jQuery.grep(dynm_lbl, function(n, i){
          return (n !== "" && n != null);
        });

        var htmlIndex = 1;

        $.each(selectHtmlData, function (key, data) {
		//	alert(data);
          var partData = html_string;
          var printData = partData.replace(/{{circle}}/g, key);
          printData = printData.replace(/{{selectData}}/g, data);
          printData = printData.replace(/{{chartindex}}/g, htmlIndex);
        
		if(key=='BMAZ_TOTAL' || key=='BRAZ_TOTAL' || key=='CTAZ_TOTAL' || key=='Scada')
		{
			printData = printData.replace(/{{display}}/g, display);
			printData = printData.replace(/{{col-md-value}}/g, colval);
		}
		else
		{
			  printData = printData.replace(/{{col-md-value}}/g, col_md_Value);
		}
		  
          $('#dynamicChartPrint').append(printData);

           
          var dataMap = {};
          var circleObj = chartObject[key];
          var row = 1;
		  
		

          $.each(circleObj, function (circleKey, circledata) {
              var obj = {};
              obj["method"] = chartType;
              var mainData = {};
              mainData['labels'] = dynm_lbl;
			  
			  if(sheetNumber == 'dsm')
			  {
			   if(circledata[0].label != 'SRTPV_Progress')
			{
              mainData['datasets'] = circledata;
			 // console.log(circledata);
			}
			else
			{
				
				var tempArray = [];
				var tempArray2 = [];
			 for(var ok=0; ok<=3;ok++)
			  {
				  var valget = (circledata[0].data[ok][0]);
				  tempArray.push(valget);
			  }
			  for(var ok=0; ok<=3;ok++)
			  {
				  var valget = (circledata[0].data[ok][1]);
				  tempArray2.push(valget);
			  }
			  mainData['datasets'] = [{label:'SRTPV_Progress',fillColor: "#46BFBD",data:tempArray}, {label:'SRTPV_Progress',fillColor: "#46BFBD",data:tempArray2}]
			}
			  }
			  else{
				  mainData['datasets'] = circledata; 
			  }
			   obj["data"] = mainData;
			  
				 
              var newIndex = key+''+row;
              dataMap[newIndex] = obj;
              row++;
			 
          });



        dataMapAll[key] = dataMap;

       // console.log(dataMapAll);
        updateChart(dataMap,htmlIndex);
        htmlIndex++;
      })

      function updateChart(dataMap1 = null,htmlIndex=null) {
          var currentCirlce = $(this).attr("data-circle");

          if(currentCirlce != undefined){
            dataMap1 = dataMapAll[$(this).attr("data-circle")];
            htmlIndex = $(this).attr("data-size");
          }
          
          canVasId = 'barChart'+htmlIndex;
          var canVAs = '<canvas id="'+canVasId+'" style="height:300px"></canvas>';

          $("#writeChart"+htmlIndex).html('');
          $("#writeChart"+htmlIndex).html(canVAs);

          if(prevsChartType == "barChart"+htmlIndex){
           // console.log("destroy");
            if(currentChart){currentChart.destroy();} 
             
          }
          ctx = document.getElementById("barChart"+htmlIndex).getContext("2d");
          var determineChart = $("#chartType"+htmlIndex).val();
          params = dataMap1[determineChart];
          
          currentChart = new Chart(ctx)[params.method](params.data, {});

          var legend=currentChart;
          document.getElementById("js-legend"+htmlIndex).innerHTML = legend.generateLegend();
          prevsChartType = "barChart"+htmlIndex;
         
      } 
      $('.chartTypeClick').on('click', updateChart);

     },'html');   

  
  
    $.get("barcharttotal.html", function(html_string)
     {
	
	if (sheetNumber == 'ht_lt_bmaz' ) {
    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart5').get(0).getContext('2d')
	}
	else if (sheetNumber == 'ht_lt_braz' ) { 
	 var areaChartCanvas = $('#barChart4').get(0).getContext('2d')
	}
	else if (sheetNumber == 'ht_lt_ctaz' ) { 
	 var areaChartCanvas = $('#barChart3').get(0).getContext('2d')
	}
    // This will get the first returned node in the jQuery collection.
    var barChart       = new Chart(areaChartCanvas)
    /*data*/
  
        $.ajax({
            type: "GET",
           url: ajaxURL,
             success: function(data) {
              allChartData = $.trim(data);
            },
            async: false,
        });
		var allObject = $.parseJSON(allChartData);
		var dynm_lbl = allObject['0'];
        var chartObject = allObject['1'];
		 if (sheetNumber == 'ht_lt_bmaz' ) {
		var ojectvalue = chartObject['BMAZ_TOTAL']; } 
		else if (sheetNumber == 'ht_lt_braz' ) { 
		var ojectvalue = chartObject['BRAZ_TOTAL']; } 
		else if (sheetNumber == 'ht_lt_ctaz' ) { 
		var ojectvalue = chartObject['CTAZ_TOTAL']; } 
		
        var col_md_Value = 12;
		var areaChartData = {};
        var circleObj = ojectvalue;
		console.log(circleObj);
        var row = 1;
        var manlabels = dynm_lbl;
    
    var areaChartData = {
      labels  : manlabels,
      datasets:circleObj
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





