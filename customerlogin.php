<?php require_once ("db/config.php"); 
if(isset($_SESSION['CUSTOMERID'])){
?>
 <script type="text/javascript">
  window.location = "booking.php?#team-section";
  </script>
<?php
}

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PJC</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> 

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Custom CSS -->
    <link href="css/modernCss.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"> 
<link href='fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>


<!-- Navigation
    ==========================================-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
     <a class="navbar-brand" href="index.php" <font = "century gothic" >Hotel Reservation</a></font></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="page-scroll">HOME</a></li>
        <!-- <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#services-section" class="page-scroll">Courses</a></li> -->
        <li><a href="index.php?#works-section" class="page-scroll">ROOM</a></li>
       <li><a href="index.php?#team-section" class="page-scroll">RESERVATION</a></li>
        <!-- <li><a href="#testimonials-section" class="page-scroll">History</a></li> -->
        <li><a href="index.php?#contact-section" class="page-scroll">CONTACT US</a></li> 
 <li><a href="index.php?#contact-section" class="page-scroll">ABOUT US</a></li>
  <?php 
 if(isset($_SESSION['CUSTOMERID'])){
?> 
<li><span  class="glyphicon glyphicon-user"></span><a  href="" title="Name" ><?php echo $_SESSION['FNAME'] .' '. $_SESSION['LNAME']; ?></a></li> 
 <li><a href="logout.php" class="page-scroll">Logout</a></li>
<?php
	 
 }
 
 ?>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
   </nav>

 </head>
 
<body>
<?php  $_SESSION['PACKAGEID'] = $_GET['packageid']; ?> 

<?php 
if(isset($_POST['Save'])){ 
 
  $sql = "INSERT INTO tblcustomer (`FNAME`, `LNAME`, `ADDRESS`, `CONTACT`, `EMAIL`, `USER_NAME`, `PASS`) VALUE  ('". $_POST['FNAME']."','".$_POST['LNAME']."','". $_POST['ADDRESS']."','". $_POST['CONTACT']."','". $_POST['EMAIL']."','". $_POST['USER_NAME']."','".$_POST['PASS']."')";

  $res = mysql_query($sql) or die(mysql_error());
  if($res>0){
      $sql = "SELECT * FROM tblcustomer WHERE USER_NAME='".$_POST['USER_NAME']."' AND PASS = '".$_POST['PASS']."'"; 
             $result =  mysql_query($sql) or die(mysql_error());

     $count=mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    while ($row = mysql_fetch_array($result)) {
        # code...
        $_SESSION['CUSTOMERID'] = $row['CUSTOMERID']; 
		$_SESSION['FNAME'] = $row['FNAME']; 
		$_SESSION['LNAME'] = $row['LNAME']; 
    }
    // session_register("mypassword"); 
    ?>
      <script type="text/javascript">
      window.location = "booking.php?#team-section";
      </script>
    <?php
  }else{
    $loginmsg = "Error to save! " ;
    die(mysql_error());
  }
}
  
}
?> 
<?php 
if(isset($_POST['btnlogin'])){
   $sql = "SELECT * FROM tblcustomer WHERE USER_NAME='".$_POST['email']."' AND PASS = '".$_POST['pass']."'"; 
             $result =  mysql_query($sql) or die(mysql_error());

     $count=mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    while ($row = mysql_fetch_array($result)) {
        # code...
        $_SESSION['CUSTOMERID'] = $row['CUSTOMERID']; 
		$_SESSION['FNAME'] = $row['FNAME']; 
		$_SESSION['LNAME'] = $row['LNAME'];  
    }
    // session_register("mypassword"); 
    ?>
      <script type="text/javascript">
      window.location = "booking.php?#team-section";
      </script>
    <?php
}
}
?>
 

       <!---gh-->
	   
	   <link rel="stylesheet" type="text/css" href="customerlogin/css/style3.css" />
		<link rel="stylesheet" type="text/css" href="customerlogin/css/animate-custom.css" />
    <body>
        <div class="container">				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on" method="POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Username </label>
                                    <input name="email" required="required" type="text" autofocus placeholder="Email"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input  name="pass" required="required" type="password" placeholder="Password" value=""/> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="btnlogin" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
	 							</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="" autocomplete="on" method="POST"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="FNAME" data-icon="">First Name</label>
									<input name="deptid" type="hidden" value="">
                                    <input id="FNAME "name="FNAME" required="required" type="text" placeholder="First Name" value="" />
                                </p>
								
								 <p> 
                                    <label for="usernamesignup" class="LNAME" data-icon="">Last Name</label>
									<input name="deptid" type="hidden" value="">
                                    <input id="LNAME" name="LNAME" required="required" type="text" placeholder="Last Name" value="" />
                                </p>
								
								 <p> 
                                    <label for="usernamesignup" class="ADDRESS" data-icon="">Address</label>
									<input name="deptid" type="hidden" value="">
                                    <input id="ADDRESS" name="ADDRESS" required="required" type="text" placeholder="Address" value="" />
                                </p>
								
								 <p> 
                                    <label for="usernamesignup" class="CONTACT" data-icon="">Contact Number</label>
									<input name="deptid" type="hidden" value="">
                                    <input id="CONTACT" name="CONTACT" required="required" type="text" placeholder="Contact Number" value="" />
                                </p>
								
								
								<p> 
                                    <label for="emailsignup" class="EMAIL" data-icon="" > Your email</label>
									<input name="deptid" type="hidden" value="">
                                    <input id="EMAIL "name="EMAIL" required="required" type="email" placeholder="mysupermail@mail.com" value=""/> 
                                </p>
								
                                <p> 
                                    <label for="passwordsignup" class="USER_NAME" data-icon="">Username </label>
									<input name="deptid" type="hidden" value="">
                                    <input id="USER_NAME" name="USER_NAME" required="required" type="text" placeholder="Username" value=""/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="PASS" data-icon="">Your password </label>
                                    <input id="PASS" name="PASS" required="required" type="password" placeholder="Password" value=""/>
                                </p>
                                <p class="signin button"> 
									<input  type="submit" name="Save" value="Sign up"/> 
								</p>
								<p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>-->
                            </form>
                        </div>
						
                    </div>
                </div>  
        </div>
	   
	   
	   
	   <!--bh-->
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
     <script type="text/javascript" src="js/bootstrap-datetimepicker.uk.js" charset="UTF-8"> </script>
 
<script type="text/javascript">
  $('.from').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.to').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
    $(function() {
    var dates = $( "#from, #to" ).datepicker({                   
      defaultDate:'',
      changeMonth: true,
      numberOfMonths: 1,
      onSelect: function( selectedDate ) {
      var now =Date();
        var option = this.id == "from" ? "minDate" : "maxDate",
          instance = $(this).data("datepicker"),
          date = $.datepicker.parseDate(
            instance.settings.dateFormat ||
            $.datepicker._defaults.dateFormat,
            selectedDate, instance.settings );
        dates.not( this ).datepicker( "option", option, date );
      }
    });
  });
</script>
</body>
</html>