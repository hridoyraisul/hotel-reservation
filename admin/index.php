<?php require_once ("../db/config.php"); ?>
<?php if(!isset($_SESSION['USERID'])){ ?>
  <script>
        window.location ='login.php';
    </script>
<?php } ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PJC</title>
<meta name="description" content="">
<meta name="author" content="">
 

    <!-- Custom CSS -->
  
<!-- Favicons
    ================================================== -->

<!-- Bootstrap -->
 <link href="adminhome/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> -->
  <link href="adminhome/css/freelancer.css" rel="stylesheet">
<!-- Slider
    ================================================== -->
<!--<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">


<!-- Stylesheet
    ================================================== -->
<!--<link rel="stylesheet" type="text/css"  href="css/style.css">
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
      <a class="navbar-brand" target="_blank" href="../index.php" font = "century gothic">Hotel Reservation</a></font></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="page-scroll">Home</a></li>
        <!-- <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#services-section" class="page-scroll">Courses</a></li> -->
        <li><a href="listservices.php" class="page-scroll">Rooms</a></li>

        <li><a href="listreservation.php" class="page-scroll">Reservation</a></li>
        <li><a href="listgallery.php" class="page-scroll">Gallery</a></li>
       <li><a href="listuser.php" class="page-scroll">User</a></li>
        <!-- <li><a href="#testimonials-section" class="page-scroll">History</a></li> -->
        <li><a href="#contact-section" class="page-scroll">Report</a></li>
        <!-- <li><a href="#contact-section" class="page-scroll">Package</a></li> -->
        <li><a href="#contact-section" class="page-scroll"><?php echo $_SESSION['U_NAME']; ?></a></li>
        <li><a href="logout.php" class="page-scroll">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
    </nav>
 </head>
<body>
  </head>
<!-- Header -->
<header>

        <div class="container">
            <div class="row">
                <div class="col-md-10.5">
				
				<a href="listuser.php"><div><img src="<?php echo $_SESSION['UPIC'];?>"width="250" height="250" alt="" style="border-radius: 200%;
    background: #1ec3db;
    padding: 4px; 
    width: 300px;
    height: 260px;" 
 /></a></div>
 
           
				    <span class="circular"></span>
                    <div class="intro-text">
                        <span class="name">Welcome Home! Sir. <?php echo $_SESSION['U_USERNAME']; ?></span>
                        <hr class="star-light">
                        <span class="skills"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
				
</html>