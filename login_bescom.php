<?php
include('include/config.php');
session_start();
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


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
<!--     <a href="../../index2.html"><b>Admin</b>LTE</a>
 -->    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <img src="dist/img/bescom.png" alt="BESCOM : Bangalore Electricity Supply Company Limited" title="BESCOM : Bangalore Electricity Supply Company Limited" width="250" >

	<?php
	if(isset($_SESSION['error_login']))
	{ ?>
	<p class="error"> Invalid Email Id and Password</p>	
	<?php  unset($_SESSION['error_login']); } ?>
	

	
    <form action="include/action.php?id=login" method="post" id="login-page">
      <div class="form-group has-feedback">
        <input type="email" id="username" name="username" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
          <a href="#">I forgot my password</a><br>
        </div>
        <!-- /.col -->

        <div class="col-xs-4">
          <button type="button" id="login_submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!-- 
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  
  $("#login_submit").click(function(){
	  var name = $("#username").val();
	  var password = $("#password").val();
	  $("#error_username").hide();
	  $("#error_password").hide();
	  if(name =='')
	  {
		  $('#username').after('<span id="error_username" class="error"><p>Please enter EmailId</p></span>');
		  $('#username').focus();
	  }
	   else if(password =='')
	  {
		  $('#password').after('<span id="error_password" class="error"><p>Please enter Password</p></span>');
		  $('#password').focus();
	  }
	  else{
		   $("#login-page").submit();
	  }
	  
  })
</script>
</body>
</html>
<style type="text/css">
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10%;
}
.error
{
	color:red;
}
</style>