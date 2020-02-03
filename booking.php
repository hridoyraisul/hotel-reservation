<?php require_once ("db/config.php"); ?>
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
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> -->

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

 <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

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
        <li><a href="index.php?#works-section" class="page-scroll">ROOMS</a></li>
       <li><a href="index.php?#team-section" class="page-scroll">RESERVATION</a></li>
        <!-- <li><a href="#testimonials-section" class="page-scroll">History</a></li> -->
        <li><a href="index.php?#contact-section" class="page-scroll">CONTACT US</a></li> 
 <li><a href="index.php?#contact-section" class="page-scroll">ABOUT US</a></li>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
   </nav>

 </head>
 
<body>

<?php 
if(isset($_POST['continue'])){
   $sql = "INSERT INTO `tblreservation` (`PACKAGEID`, `CUSTOMERID`, `ARRIVAL`, `DEPARTURE`, `STATUS`) VALUES('".$_SESSION['PACKAGEID']."','".  $_SESSION['CUSTOMERID']."','".  $_SESSION['from']."','".  $_SESSION['to']."','Pending')";
  $res = mysql_query($sql) or die(mysql_error());
  if($res>0){
		//unset($_SESSION['from']);
		//unset($_SESSION['to']);
		//unset($_SESSION['PACKAGEID']);
		
		// $_SESSION['msg'] = '<span style="background-color:skyblue;"><h3>Your are now successfully booked!</h3></span>';
    ?>
      <script type="text/javascript">
	  alert("Your are now successfully booked!");
      window.location = "index.php?";
      </script>
    <?php
  }else{
    $loginmsg = "Error to save! " ;
    die(mysql_error());
  }
}

?>
 <br/>
     <form method="post" action="">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Booking Details</h1>
            </div>
            <div class="col-lg-12"> 
              
                <table class="table table-hover">

             <thead>
              <tr  bgcolor="#999999">
              <!-- <th width="10">#</th> -->
              <th align="center" width="120">Room Type</th>
              <th align="center" width="120">Check In</th>
              <th align="center" width="120">Check Out</th>
              <th align="center" width="120">Price</th>
            </tr> 
          </thead>
          <tbody>
              
            <?php 
 
   
// echo $_SESSION['PACKAGEID'];


$sql = "SELECT * FROM `tblpackage` WHERE  `PACKAGEID`='". $_SESSION['PACKAGEID']."'" ;
  $cur = mysql_query($sql) or die(mysql_error());

            while ($result = mysql_fetch_array($cur)) {
                       echo '<tr>';  
                       echo '<td>'.$result['PACKAGE'].' </td>';
                       echo '<td>'.date_format(date_create($_SESSION['from']),"m/d/Y").'</td>';
                       echo '<td>'.date_format(date_create($_SESSION['to']),"m/d/Y").'</td>';
                       echo '<td > &#8369 '. $result['PRICE'] .'</td>'; 
                          echo '</tr>'; 
                      }
            ?>
          </tbody>
      
        </table> 
   
             <div class="col-xs-12 col-sm-12" align="right">
 
            
                <input type="submit" class="btn btn-primary" align="right" name="continue" value="Continue Booking">
               
        
     
               
          </div>
                  
     


          </div>
         
      </div>

  </div>
</div> 
  </form>
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