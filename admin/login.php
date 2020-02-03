<?php include ("../db/config.php"); ?>
<?php if(isset($_SESSION['USERID'])){ ?>
  <script>
        window.location ='index.php';
    </script>
<?php    } ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>
	<link rel="stylesheet"  type='text/css'/ href="facebox/css/style.css">
    <!-- Bootstrap core CSS -->

    <link href="loginstyle/css/bootstrap.min.css" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,10); } </script>
	<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
	 
	<link href="loginstyle/css/style.css" rel='stylesheet' type='text/css'/>
	<link href="loginstyle/css/font-awesome.css" rel="stylesheet"> 
	<script src="loginstyle/js/jquery.min.js"> </script>
	<script src="loginstyle/js/bootstrap.min.js"> </script>
    <!-- Custom styles for this template -->
   <link href="facebox/facebox.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
if(isset($_POST['btnlogin'])){
	$sql = "SELECT * FROM tbluseraccount WHERE U_USERNAME='".$_POST['email']."' AND UPASS = '".$_POST['pass']."'"; 
	$result =  mysql_query($sql) or die(mysql_error());

     $count=mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    while ($row = mysql_fetch_array($result)) {
        # code...
        $_SESSION['USERID'] = $row['USERID'];
        $_SESSION['U_NAME'] = $row['U_NAME'];
        $_SESSION['U_USERNAME'] = $row['U_USERNAME'];
		$_SESSION['UPIC']= $row['UPIC'];
    }
    // session_register("mypassword"); 
    ?>
    <script>
        window.location ='index.php';
    </script>
    <?php 

    }
    else {
     echo "<script type=\"text/javascript\">
                alert(\"Incorrect Password and Username.\");
                window.location = \"login.php\"
            </script>";
  return false;
    }
 
}
  
?> 
<br><br>
<br><br>
<br><br>
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="app-title">&copy; Welcome</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="login.php">
                            <fieldset>
                                <div class="login-mail">
                                    <input class="fa fa-envelope" placeholder="Username" required="" name="email" type="text" autofocus>
									<i class="fa fa-envelope"></i>
                                </div>
                                <div class="login-mail">
                                    <input class="fa fa-lock" placeholder="Password" required="" name="pass" type="password" value="">
									<i class="fa fa-lock"></i>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
								<div class="login-mail login-do">
								<label class="hvr-shutter-in-horizontal login-sub">
                                <button type="submit"  name="btnlogin" class="btn btn-lg btn-success btn-block">Login</button>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
</label>
								<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by W3layouts</a> </p>	    </div>  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php ?>