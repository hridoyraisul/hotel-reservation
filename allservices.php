<?php 
$arrival= '';
$departure= '';
if (isset($_SESSION['from'])){
$arrival = $_SESSION['from']; 
$departure = $_SESSION['to'];
}
?>
<link rel="stylesheet" type="text/css"  href="css/style.css">
<!-- Gallery Section -->
<div id="team-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <h2>Our <strong>Services</strong></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="row">
         
      <div class="col-lg-12">
         <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
							<img src="slide/single.jpg" width="100%" class="img-reponsive">	
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Single</h4>
                        <p>Hotel Reservation</p>
                        <a href="index.php?category=single&#team-section" class="btn btn-primary">Reserve a Room!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                             <!--  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i> -->
							<img src="slide/double.jpeg" width="100%" class="img-reponsive">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Double</h4>
                        <p>Hotel Reservation</p>
                        <a href="index.php?category=double&#team-section" class="btn btn-primary">Reserve a Room!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
							<img src="slide/suite.jpg" width="100%" class="img-reponsive">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Suite Room</h4>
                        <p>Hotel Reservation</p>
                        <a href="index.php?category=suite&#team-section" class="btn btn-primary">Reserve a Room!</a>
                    </div>
                </div>
            </div>
           
          </div>
      </div>
    </div>
</div>
</div>