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
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
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
        <li><a href="contact.php" class="page-scroll">CONTACT US</a></li> 
		<li><a href="index.php?#contact-section" class="page-scroll">ABOUT US</a></li>
		<!--m-->
		
		
		<!--g-->
 <?php 
 if(isset($_SESSION['CUSTOMERID'])){
?> 
<li><a ><?php echo $_SESSION['FNAME'] .' '. $_SESSION['LNAME']; ?></a></li> 
 <li><a href="logout.php" class="page-scroll">Logout</a></li>
<?php 
 }
 ?>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
  </nav>
<!--header-->
 <link rel="stylesheet" href="home/demo/css/demostyles.css">
        <link rel="stylesheet" href="home/css/simple-slideshow-styles.css">
            <p><span class="desc">.</span> <a href=""><span></span></a></p>    
        <div class="bss-slides num1" tabindex="1" autofocus="autofocus">
            <figure>
		      <img src="slide/1.jpg" width="100%" /><figcaption>"Medium" by <a href="">Thomas Hawk</a>.</figcaption> 
            </figure>
            <figure>
		      <img src="slide/2.jpg" width="100%" /><figcaption>"Colorado" by <a href="">Trey Ratcliff</a>.</figcaption> 
            </figure>
            <figure>
		      <img src="slide/3.jpg" width="100%" /><figcaption>"Early Morning at the Monte Vista Wildlife Refuge, Colorado" by <a href="">Dave Soldano</a>.</figcaption> 
            </figure>
            <figure>
		      <img src="slide/4.jpg" width="100%" /><figcaption>"Sunrise in Eastern Colorado" by <a href="">Pam Morris</a>.</figcaption> 
            </figure>
            <figure>
		      <img src="slide/5.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/6.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/7.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/8.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/9.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/10.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/11.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/12.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
			  <figure>
		      <img src="slide/13.jpg" width="100%" /><figcaption>"colorado colors" by <a href="">Jasen Miller</a>.</figcaption> 
            </figure>
        </div> <!-- // bss-slides -->         
<script src="home/demo/js/hammer.min.js"></script><!-- for swipe support on touch interfaces -->
<script src="home/js/better-simple-slideshow.min.js"></script>
<script>
var opts = {
    auto : {
        speed : 2500, 
        pauseOnHover : true
    },
    fullScreen : false, 
    swipe : true
};
makeBSS('.num1', opts);

var opts2 = {
    auto : false,
    fullScreen : true,
    swipe : true
};
makeBSS('.num2', opts2);
</script>      


<!--for sure-->
<!-- Gallery Section -->

<div id="works-section">
  <div class="container"> <!-- Container -->
   <!-- <div class="section-title">-->
      <marquee behavior="alternate"><h2>Our Rooms</h2></marquee>
      <hr>
      <div class="clearfix"></div>
   <!-- </div>-->
	      <div class="portfolio_item">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter=".app">Reserve a Room</a></li>
          </ol>
        </li>
      </ul>
      
    <div class="row">
      <div class="portfolio-items"> 
            <?php 
                 // $sql = "SELECT *  FROM tblpackage";
                  $sql = "SELECT *  FROM tblgallery";
              // $sql = "SELECT *  FROM tblpackage"
             
              $res = mysql_query($sql) or die(mysql_error()); 

              while ($row = mysql_fetch_array($res)) { 
                ?>
		
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo "admin/".$row['LOCATION']; ?>" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Rooms</h4>
               <!-- <small>Web Design</small> -->
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="<?php echo "admin/".$row['LOCATION']; ?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php

  if(isset($_GET['category'])){
     include "services.php";
  }else{
      include "allservices.php";
  }


 ?>
 <br><br>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script>   
<script type="text/javascript" src="js/owl.carousel.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
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