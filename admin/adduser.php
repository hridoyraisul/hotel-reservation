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


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"> 
<link href='fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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

          if (!isset($_FILES['image']['tmp_name'])) {
      message("No Image Selected!", "error");
      redirect("index.php?view=add");
          }else{

        $file=$_FILES['image']['tmp_name'];
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
        $image_size= getimagesize($_FILES['image']['tmp_name']);

        if ($image_size==FALSE) {
          message("That's not an image!", "error");
          redirect("index.php?view=add");
        }else{

      $location="img/".$_FILES["image"]["name"];
    }
  move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$_FILES["image"]["name"]);

 

      // if(file_exists($location)){
      
     //     message("There is such an image. Please select another one!", "error");
      //  redirect("index.php?view=add"); 
      // }
      // else{
    


      $sql = "INSERT INTO `tbluseraccount` ( `U_NAME`, `U_USERNAME`, `UPASS`,`UPIC`)  VALUES ('".$_POST['U_NAME']."','".$_POST['U_USERNAME']."','".$_POST['UPASS']."','".  $location."')"; 
    $res = mysql_query($sql) or die(mysql_error());

    if ($res==true){ ?>
      <script>
        window.location ='index.php';
    </script>
  <?php  } 
  }
  }

 ?>
  <div class="container"> 
    <!-- <div class="panel panel-de"> -->
<div class="row">
      <div class="panel-body">
        <h1 class="page-header">New Package</h1>
<form class="form-horizontal  span6" action="" enctype="multipart/form-data"  method="POST">

 

         <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "U_NAME">Name:</label>

              <div class="col-md-8">
              	<input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
									  "Account Name" type="text" value="">
              </div>
            </div>
          </div>
											
          
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "U_USERNAME">Username:</label>

              <div class="col-md-8">
              	<input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
									  "Username" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "UPASS">Password:</label>

              <div class="col-md-8">
              	<input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="UPASS" name="UPASS" placeholder=
									  "Account Password" type="Password" value="">
              </div>
            </div>
          </div>

          
         
         <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "image">Upload Image:</label>

              <div class="col-md-8">
              <input type="file" name="image" value="" id="image">
              </div>
            </div>
          </div>


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