  <?php 
  include_once('include/config.php');
  session_start();
  if($_SESSION['id'] == '')
  {
	  	echo "<script>window.location.href = 'login_bescom.php';</script>";	
  }
  $select= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM admin_user WHERE id=".$_SESSION['id']));
  $roletype = $select['roletype']; 
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="https://bescom.org/en/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BES</b>COM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
         <img src="dist/img/bescom.png" alt="BESCOM : Bangalore Electricity Supply Company Limited" title="BESCOM : Bangalore Electricity Supply Company Limited" width="200">
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar3.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar3.png" class="img-circle" alt="User Image">
                <p>
                 Welcome <?php echo $_SESSION['username']; ?>
                </p>
              </li>
              <!-- Menu Body -->
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="include/action.php?id=logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      
        </ul>
      </div>
    </nav>
  </header>