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
 	<div class="container"> 
		<!-- <div class="panel panel-de"> -->
<div class="row">
			<div class="panel-body">
				<h1 class="page-header">List of Services</h1>
			    <form action="addservices.php" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr > 
				  		<th>Image</th>
				  		<th>Room</th>
				  		<th>Room Type</th> 
				  		<th>Description</th>
				  		<th>Adult</th>
				  		<th>Children</th>
				  		<th>Max Member</th>
				  		<th>Price of Room</th>
				  		<th>Option</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		$sql = "SELECT * FROM `tblpackage`";
				  		 $cur = mysql_query($sql) or die(mysql_error());

						while ($result = mysql_fetch_array($cur)) {

						 	# code...
						 	echo '<tr>'; 
				  		echo '<td width="5%"><a href="#"  class="roomImg" data-id="'.$result['PACKAGEID'].'" title="Click here to Change Image."><img src='.$result['PIC']. '  width="100%" hieght="100%" /></a></td>';
				  		echo '<td> '.$result['CATEGORY'].'</td>';
				  		echo '<td>'. $result['PACKAGE'].'</td>';  
				  		echo '<td>'. $result['PHOTOGRAPHER'].'</td>';  
				  		echo '<td>'. $result['PHOTOBOOK'].'</td>';   
				  		echo '<td>'. $result['MAXPHOTO'].'</td>';   
				  		echo '<td>'. $result['COVERAGE'].'</td>';   
				  		echo '<td>'. $result['PRICE'].'</td>'; 
				  		echo '<td><a  href="editservices.php?id='.$result['PACKAGEID'].'">  <span class="glyphicon glyphicon-info-sign"></span></a> &nbsp
							 <a  href="deleteservices.php?id='.$result['PACKAGEID'].'">  <span class="glyphicon glyphicon-remove-circle"></span></a></td>'; 
				  		echo '</tr>';
						 } 
				  	?>
				  </tbody>
				
				</table>
				<div class="btn-group">
				  <a href="addservices.php" class="btn btn-default">New</a>
				  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
				</div>
				</form>
	  		</div><!--End of Panel Body-->
	  	<!-- </div> -->
	  	<!--End of Main Panel-->
</div>
</div><!--End of container-->

<div class="modal fade" id="myModal" tabindex="-1">
</div>
 </body>
</html>