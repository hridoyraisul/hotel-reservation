<!-- <?php session_start(); ?> -->
<?php require_once ("../db/config.php"); ?>
<?php if(!isset($_SESSION['USERID'])){ ?>
  <script>
        window.location ='login.php';
    </script>
<?php    } ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PJC</title>
<meta name="description" content="">
<meta name="author" content="">

<link href="adminhome/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link href="adminhome/css/freelancer.css" rel="stylesheet">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> -->

<!-- Slider
    ================================================== -->

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
        <li><a href="#contact-section" class="page-scroll"><?php echo $_SESSION['U_USERNAME']; ?></a></li>
        <li><a href="logout.php" class="page-scroll">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
    </nav>

 
 </head> 
 <body> 
 <br/>  
<?php 
  if(isset($_POST['save'])){
    $sql = "UPDATE `tblpackage` SET PACKAGE='".$_POST['PACKAGE']."',`CATEGORY`='".$_POST['CATEGORY']."', `PHOTOGRAPHER`='".$_POST['PHOTOGRAPHER']."'
    , `PHOTOBOOK`='".$_POST['PHOTOBOOK']."', `MAXPHOTO`='".$_POST['MAXPHOTO']."', `COVERAGE`='".$_POST['COVERAGE']."', `PRICE`='".$_POST['PRICE']."' WHERE PACKAGEID=" .$_POST['PACKAGEID']; 

    $res = mysql_query($sql) or die(mysql_error());

    if ($res==true){ ?>
      <script>
        window.location ='listservices.php';
    </script>
  <?php  }
  }

 ?>
 <div class="container"> 
    <!-- <div class="panel panel-de"> -->
<div class="row">
      <div class="panel-body">
        <h1 class="page-header">Update Package</h1>
<form class="form-horizontal  span6" action="" method="POST">
 

 <?php 
  $sql = "SELECT * FROM tblpackage where PACKAGEID = " . $_GET['id'];
  $result = mysql_query($sql);

  while ($row = mysql_fetch_array($result)) { ?>


        <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PACKAGE">Room Type:</label>

              <div class="col-md-8">
                <input name="PACKAGEID" type="hidden" value="<?php echo $row['PACKAGEID'] ;?>">
                 <input class="form-control input-sm" id="PACKAGE" name="PACKAGE" placeholder=
                    "Room Type Name" type="text" value="<?php echo $row['PACKAGE'] ;?>">
              </div>
            </div>
          </div>
                      
          
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "CATEGORY">Room:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="CATEGORY" name="CATEGORY" placeholder=
                    "Room" type="text" value="<?php echo $row['CATEGORY'] ;?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PHOTOGRAPHER">Description:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="PHOTOGRAPHER" name="PHOTOGRAPHER" placeholder=
                    "Description of Room" type="text" value="<?php echo $row['PHOTOGRAPHER'] ;?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PHOTOBOOK">Adult:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="PHOTOBOOK" name="PHOTOBOOK" placeholder=
                    "Adult" type="text" value="<?php echo $row['PHOTOBOOK'] ;?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "MAXPHOTO">Child:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="MAXPHOTO" name="MAXPHOTO" placeholder=
                    "Child" type="text" value="<?php echo $row['MAXPHOTO'] ;?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "COVERAGE">Max Member:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="COVERAGE" name="COVERAGE" placeholder=
                    "Max Member" type="text" value="<?php echo $row['COVERAGE'] ;?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PRICE">Price:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder=
                    "Price" type="text" value="<?php echo $row['PRICE'] ;?>">
              </div>
            </div>
          </div>



            <?php }
 ?>

 

      <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Save</button>
              </div>
            </div>
          </div>
</form>
</div>
</div>
</div>
 </body>
</html>