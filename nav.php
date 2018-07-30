
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    
  <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
<?php  if($roletype == 1 || $roletype == 3)
{ ?>
        <!--  /bescom -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>BESCOM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<!--            <li><a href="staticChart.php?file=general&st=a&rt"><i class="fa fa-circle-o"></i> A & RT</a></li>
 -->           <li><a href="procurement.php?file=general&st=procurement"><i class="fa fa-circle-o"></i> Procurement</a></li>
           <li><a href="powerpurchase.php?file=general&st=power_purchase"><i class="fa fa-circle-o"></i>Power Purchase</a></li>
           <li><a href="barchartSidebySide.php?file=general&st=dsm"><i class="fa fa-circle-o"></i>DCM</a></li>
         </ul>
       </li>
    <!-- A & RT -->           
       <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>A & RT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="a&rt.php?file=general&st=Present"><i class="fa fa-circle-o"></i> Present Month</a></li>
         <li><a href="a&rt.php?file=general&st=Cumelative"><i class="fa fa-circle-o"></i> Cumulative</a></li>
       </ul>
       </li>

       <!--  /bescom -->
      <!-- M & C - EA  -->           
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>M & C - EA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="barchartSidebySide.php?file=mc_ea&st=sheet1"><i class="fa fa-circle-o"></i>CTAZ</a></li>
            <li><a href="barchartSidebySide.php?file=mc_ea&st=sheet2"><i class="fa fa-circle-o"></i>BRAZ</a></li>
            <li><a href="barchartSidebySide.php?file=mc_ea&st=sheet3"><i class="fa fa-circle-o"></i>BMAZ</a></li>
            <li><a href="barchartSidebySide.php?file=mc_ea&st=sheet4"><i class="fa fa-circle-o"></i>24 TOWNS</a></li>
          </ul>
        </li>

      <!--  /M & C - EA-->
       <!--  operations -->
     <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i><span>Operations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> -->
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> GKS
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="barchartSidebySide.php?file=operation&st=gks_bmaz"><i class="fa fa-circle-o"></i> BMAZ Zone</a></li>
                <li><a href="barchartSidebySide.php?file=operation&st=gks_braz"><i class="fa fa-circle-o"></i> BRAZ Zone</a></li>
                <li><a href="barchartSidebySide.php?file=operation&st=gks_ctaz"><i class="fa fa-circle-o"></i> CTAZ zone</a></li>
                <li><a href="grandtotal.php?file=operation&st=gks_total"><i class="fa fa-circle-o"></i> BESCOM Total</a></li>
             </ul>
            </li>
           <!--  ht&lt ***************************************************************************-->
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> HT LT Cummulative
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="barchartSidebySide.php?file=operation&st=ht_lt_bmaz"><i class="fa fa-circle-o"></i> BMAZ Zone</a></li>
                <li><a href="barchartSidebySide.php?file=operation&st=ht_lt_braz"><i class="fa fa-circle-o"></i> BRAZ Zone</a></li>         
                <li><a href="barchartSidebySide.php?file=operation&st=ht_lt_ctaz"><i class="fa fa-circle-o"></i> CTAZ zone</a></li>
                <li><a href="grandtotal.php?file=operation&st=ht_lt_total"><i class="fa fa-circle-o"></i> BESCOM Total</a></li>
              </ul>
      

            </li>
             <!--  Power supply position ***************************************************************************-->
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Power supply position
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               <li><a href="barchartSidebySide.php?file=operation&st=sheet3"><i class="fa fa-circle-o"></i>SCADA_AVERAGE</a></li>
               <li><a href="stations.php?file=operation&st=sheet4"><i class="fa fa-circle-o"></i>Stations</a></li>
               <li><a href="barchartSidebySide.php?file=operation&st=sheet5"><i class="fa fa-circle-o"></i>ABSTARCT OF 11KV FEEDERS</a></li>
               <li><a href="linechart.php?file=operation&st=sheet1"><i class="fa fa-circle-o"></i>PEAK LOAD RECORDED</a></li>
               <li><a href="linechart.php?file=operation&st=sheet2"><i class="fa fa-circle-o"></i>Peak LOAD Recorded 16-17</a></li>
               <li><a href="linechart.php?file=operation&st=sheet3"><i class="fa fa-circle-o"></i>Peak LOAD Recorded 17-18</a></li>

              </ul>
      

            </li>
            <!-- ri ,saifi&saidi ********************************************-->
         <!--    <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> RI, SAIFI & SAIDI
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li> 
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>Apr anx i signed copy
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
            <li class="active"><a href="bescom_charts/operations/saidi/sheet1.html"><i class="fa fa-circle-o"></i> sheet1</a></li>
            <li><a href="bescom_charts/operations/saidi/sheet2.html"><i class="fa fa-circle-o"></i> sheet2</a></li>
             <li><a href="bescom_charts/operations/saidi/sheet3.html"><i class="fa fa-circle-o"></i> sheet3</a></li>
             <li><a href="bescom_charts/operations/saidi/sheet4.html"><i class="fa fa-circle-o"></i> sheet4</a></li>
                  </ul>
                </li>
              </ul>
            </li>-->
            <!-- Transformer Statistics -->
                  <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Transformer Statistics
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               <li><a href="transformer.php?file=operation&st=transformer_s1"><i class="fa fa-circle-o"></i> DTC failure</a></li>
              </ul>
            </li>

          <!-- water-works-->


           <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Water Works
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="water_work_bmaz.php?file=operation&st=water_work_bmaz"><i class="fa fa-circle-o"></i> BMAZ Zone</a></li>
                <li><a href="water_work_braz.php?file=operation&st=water_work_braz"><i class="fa fa-circle-o"></i> BRAZ Zone</a></li>                
                <li><a href="water_work_ctaz.php?file=operation&st=water_work_ctaz"><i class="fa fa-circle-o"></i> CTAZ zone</a></li>
                <li><a href="water_work_bescom.php?file=operation&st=water_work_total"><i class="fa fa-circle-o"></i> BESCOM Total</a></li>
              </ul>
            </li>
          </ul>
        </li>      <!-- //operations -->

              <!-- //projects -->
        <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i> <span>projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="barchartSidebySide.php?file=projects&st=ddugjy"><i class="fa fa-circle-o"></i> DDUGJY</a></li>
            <li><a href="barchartSidebySide.php?file=projects&st=ipds"><i class="fa fa-circle-o"></i>IPDS</a></li>
            <li><a href="barchartSidebySide.php?file=projects&st=transformer"><i class="fa fa-circle-o"></i>TRANSFORMER</a></li>
            <li><a href="barchartSidebySide.php?file=projects&st=unip"><i class="fa fa-circle-o"></i>UNIP</a></li>
         <!--   <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> HVDS 
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="staticChart.php?file=projects&st=hvds_s1"><i class="fa fa-circle-o"></i>sheet1</a></li>
                <li><a href="staticChart.php?file=projects&st=hvds_s2"><i class="fa fa-circle-o"></i>sheet2</a></li>
                <li><a href="staticChart.php?file=projects&st=hvds_s3"><i class="fa fa-circle-o"></i>sheet3</a></li>
              </ul>
            </li>-->
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> NJY 
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
               <li><a href="barchartSidebySide.php?file=projects&st=njy_s1"><i class="fa fa-circle-o"></i>NJY_CURRENT_MONTH</a></li>
                <li><a href="barchartSidebySide.php?file=projects&st=njy_last_month"><i class="fa fa-circle-o"></i>NJY_LAST_MONTH</a></li>
              </ul>
            </li>
          </ul>
        </li>      <!-- //projects -->
<?php } ?>

<!-- FOR UPLOAD -->
<?php if($roletype == 1 || $roletype == 2)
{ ?>
             <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Upload Excel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="upload.php"><i class="fa fa-circle-o"></i> Upload Excel </a></li>
            <!-- <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
          </ul>
        </li>
<?php } ?>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


