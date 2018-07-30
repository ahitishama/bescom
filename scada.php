
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
               <h3 class="box-title">Details showing the Feeder wise T&D loss level For the month of Nov-17  Of 24 Towns
                 
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Monthly Report  </label>
                <input type="hidden" value="avg" id="chartType" />
                
              </div>
              <div class="chart">
              
              <!--  select bar chart -->
              
                            
<div id="js-legend" class="chart-legend" align="center"></div>
               <canvas id="barChart1" style="height:430px"></canvas>
                  
            <!--   <canvas id="areaChart" style="height:250px"></canvas> -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        

        </div>
      
       </div> 
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>


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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
   var ctx = document.getElementById("barChart1").getContext("2d");

  

/*data start*/


var anekal = [23.39,8.23,  6.28,  8.22,  6.19,  23.40, 22.30]


 var dataMap = {
     'avg':  {
          method: 'Bar',
         data: {
             labels: ['INDUSTRIAL',  'RURAL-1PH',  'RURAL-3PH' , 'AGRI-1PH', 'AGRI-3PH', 'URBAN', 'NJY'],
             datasets: [{
                 label: "AVERAGE",
                fillColor: "#46BFBD",
                 strokeColor: "#46BFBD",
                 highlightFill: "#46BFBD",
                 highlightStroke: "#46BFBD",
                 data: anekal
             }],
         }
     },
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