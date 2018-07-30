<?php
$fileName = $_GET['file'];
$sheet_number = $_GET['st'];
?>

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
  <div class="content-wrapper" id="printFile">
   
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
<!-- <script src="dist/js/demo.js"></script> -->
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

    console.log(fileName);
    console.log(sheetNumber);
  
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
    else if(fileName == "general" && sheetNumber=="power_purchase"){
      ajaxURL = "static/bescom/powerpurchase.html";
    }
    else if(fileName == "general" && sheetNumber=="procurement"){
      ajaxURL = "static/bescom/procurement.html";
    }


    else if(fileName == "gks" && sheetNumber=="sheet1"){
      ajaxURL = "chart_sheet_read/gks/gks-sheet1.php?method=Sheet1";
    }
    else if(fileName == "operation" && sheetNumber=="sheet3"){
      ajaxURL = "static/operations/power_supply_position/sheet3.html";
    }
    else if(fileName == "operation" && sheetNumber=="sheet4"){
      ajaxURL = "static/operations/power_supply_position/sheet4.html";
    }

    else if(fileName == "operation" && sheetNumber=="sheet5"){
      ajaxURL = "static/operations/power_supply_position/sheet5.html";
    }
    else if(fileName == "operation" && sheetNumber=="sheet6"){
      ajaxURL = "static/operations/power_supply_position/sheet6.html";
    }
    else if(fileName == "operation" && sheetNumber=="sheet7"){
      ajaxURL = "static/operations/power_supply_position/sheet7.html";
    }
    else if(fileName == "operation" && sheetNumber=="sheet8"){
      ajaxURL = "static/operations/power_supply_position/sheet8.html";
    }

    else if(fileName == "operation" && sheetNumber=="ht_lt_braz"){
      ajaxURL = "static/operations/ht_lt/braz.html";
    }
    else if(fileName == "operation" && sheetNumber=="ht_lt_bmaz"){
      ajaxURL = "static/operations/ht_lt/bmaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="ht_lt_ctaz"){
      ajaxURL = "static/operations/ht_lt/ctaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="ht_lt_total"){
      ajaxURL = "static/operations/ht_lt/total.html";
    }
    
    else if(fileName == "operation" && sheetNumber=="gks_bmaz"){
      ajaxURL = "static/operations/gks/bmaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="gks_braz"){
      ajaxURL = "static/operations/gks/braz.html";
    }
    else if(fileName == "operation" && sheetNumber=="gks_ctaz"){
      ajaxURL = "static/operations/gks/ctaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="gks_total"){
      ajaxURL = "static/operations/gks/total.html";
    }

    else if(fileName == "operation" && sheetNumber=="water_work_bmaz"){
      ajaxURL = "static/operations/water_work/bmaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="water_work_braz"){
      ajaxURL = "static/operations/water_work/braz.html";
    }
    else if(fileName == "operation" && sheetNumber=="water_work_ctaz"){
      ajaxURL = "static/operations/water_work/ctaz.html";
    }
    else if(fileName == "operation" && sheetNumber=="water_work_total"){
      ajaxURL = "static/operations/water_work/total.html";
    }

    else if(fileName == "operation" && sheetNumber=="transformer_s1"){
      ajaxURL = "static/operations/transformer/sheet1.html";
    }


    else if(fileName == "projects" && sheetNumber=="ddugjy"){
      ajaxURL = "static/projects/ddugjy.html";
    }
    else if(fileName == "projects" && sheetNumber=="ipds"){
      ajaxURL = "static/projects/ipds.html";
    }
    else if(fileName == "projects" && sheetNumber=="transformer"){
      ajaxURL = "static/projects/transformer.html";
    }
    else if(fileName == "projects" && sheetNumber=="unip"){
      ajaxURL = "static/projects/unip.html";
    }
    
    else if(fileName == "projects" && sheetNumber=="hvds_s1"){
      ajaxURL = "static/projects/hvds/sheet1.html";
    }
    else if(fileName == "projects" && sheetNumber=="hvds_s2"){
      ajaxURL = "static/projects/hvds/sheet2.html";
    }
    else if(fileName == "projects" && sheetNumber=="hvds_s3"){
      ajaxURL = "static/projects/hvds/sheet3.html";
    }

    else if(fileName == "projects" && sheetNumber=="njy_last_month"){
      ajaxURL = "static/projects/njy/njy_last_month.html";
    }
    else if(fileName == "projects" && sheetNumber=="njy_s1"){
      ajaxURL = "static/projects/njy/sheet1.html";
    }


    



    $.get(ajaxURL, function(html_string)
     {
        $("#printFile").html(html_string);

     },'html');   

  })

</script>


</body>
</html>