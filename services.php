<?php  
$arrival= '';
$departure= ''; 
if (isset($_SESSION['from'])){
$arrival = $_SESSION['from'];  
$departure = $_SESSION['to'];
}
 
 
if(isset($_POST['avail'])){
$_SESSION['from'] = $_POST['from'];
$_SESSION['to']   = $_POST['to'];
}
?>
<link rel="stylesheet" type="text/css"  href="css/style.css">
<!-- Gallery Section -->
<div id="team-section"  >
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <h2>Other</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
           <!-- Service Tabs -->
        <div class="row">
          <!--   <div class="col-lg-12">
                <h2 class="page-header">Service Tabs</h2>
            </div> --> 
            <div class="col-lg-10">
              <div class="row">
                <br/>
				
                <?php 
                 // $sql = "SELECT *  FROM tblpackage";
                  $sql = "SELECT *  FROM tblpackage WHERE CATEGORY = '".$_GET['category']."'";
              // $sql = "SELECT *  FROM tblpackage"
             
              $res = mysql_query($sql) or die(mysql_error()); 

              while ($row = mysql_fetch_array($res)) {
                # code...
                $result = mysql_query("SELECT STATUS FROM tblreservation
                        WHERE ((
                        '$arrival' >= ARRIVAL
                        AND  '$arrival' <= DEPARTURE
                        )
                        OR (
                        '$departure' >= ARRIVAL
                        AND  '$departure' <= DEPARTURE
                        )
                        OR (
                        ARRIVAL >=  '$arrival'
                        AND ARRIVAL <=  '$departure'
                        )
                        )
                        AND PACKAGEID =".$row['PACKAGEID']) or die(mysql_error());
                   $stats = mysql_fetch_assoc($result);
                   
                   ?>
				   
                     <div class="col-md-3 col-sm-6">
                      <div class="panel panel-default text-center">
                          <div class="panel-heading" width="100%" hieght="150%">
                              <!-- <span class="fa-stack fa-5x"> -->
                                <img class="img-reponsive" src="<?php echo 'admin/'. $row['PIC']; ?>" width="100%" hieght="150%" />
                                   <!--  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-tree fa-stack-1x fa-inverse"></i> -->
                              <!-- </span> -->
                          </div> 
						 
                          <div class="panel-body">
                              <h4><?php echo  $row['PACKAGE'];?></h4>
                              <p><?php echo  $row['PHOTOGRAPHER'];?></p>
                              <p><?php echo  $row['PHOTOBOOK'];?></p>
                              <p><?php echo  $row['MAXPHOTO'];?></p>
                              <p><?php echo  $row['COVERAGE'];?></p> 
                              
							  <input type="hidden" name="PACKAGEID" value="<?php  echo $row['PACKAGEID']; ?> "/>
                               <?php
                                  
                               if($stats['STATUS']=='Confirmed'){
                                  echo '<div style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;"><strong>Reserve!</strong></div><br>';
                                }elseif($stats['STATUS']=='Check In'){
                                  echo '<div style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;"><strong>Booked!</strong></div><br>';
                                }else{
                                  echo '
                                       <div class="form-group">
                                              <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                  <a href="customerlogin.php?packageid='.$row['PACKAGEID'].'"   class="btn btn-primary btn-sm" name="btnbook">Book Now!</a>
                                                                         
                                                 </div>
                                              </div>
                                            </div>';
                                }
                            ?>  
                          </div>
                      </div>
                  </div>

                    
<?php

              }


 ?>

                
          </div>
        </div> 
        <div class="col-lg-2">
          <div class="row">
<br><br>

       <div class="panel panel-primary"> 
       <div class="panel-heading">Availabilty Search</div>
        <div class="panel-body">  
               <form  method="POST" action="index.php?category=<?php echo $_GET['category'];?>&#team-section">
                <div class="col-xs-12 col-sm-12">

                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12">
                              <label class="control-label" for="from">From</label>
                 
                                  <input class="form-control from" size="11" 
                                  value="<?php echo (isset($_SESSION['from'])) ? $_SESSION['from'] : date('Y-m-d'); ?>" 
                                  data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text"    name="from" id="from">
                                 
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12">
                              <label class="control-label" for="to">To</label>
                                
                                    <input class="form-control to" size="11" type="text" value="<?php echo (isset($_SESSION['to'])) ? $_SESSION['to'] :  date('Y-m-d'); ?>"  name="to" id="to" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                                   
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12">
                               <input type="submit" class="btn btn-primary" align="right"name="avail" value="Check Availability"/>
                             </div>
                          </div>
                        </div>
                    </div>
                  </form>
				</div>
      
			</div>
            
          </div> 
        </div>


       

      </div>

  </div>
</div>