<?php require_once ("../db/config.php"); ?>
<?php
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) { 
	case 'confirm' :
	doConfirm();
	break;
	case 'cancel' :
	doCancel();
	break;
	case 'okay' :
	doCheckin();
	break;
	case 'end' :
	doCheckout();
	break;
	}



function doCheckout(){

	$id = $_GET['id'];

$sql ="UPDATE `tblreservation` SET `STATUS`='Check Out' WHERE `RESERVEID`=". $id;
$res = mysql_query($sql) or die(mysql_error());

if($res>0){
	?>
	<script type="text/javascript">
	window.location ="listreservation.php";
	</script>
	<?php
}
 

}
function doCheckin(){
$id = $_GET['id'];
$sql ="UPDATE `tblreservation` SET `STATUS`='Check In' WHERE `RESERVEID`=". $id;
$res = mysql_query($sql) or die(mysql_error());

if($res>0){
	?>
	<script type="text/javascript">
	window.location ="listreservation.php";
	</script>
	<?php
}
 
 

}


function doCancel(){
$id = $_GET['id'];

 $sql ="UPDATE `tblreservation` SET `STATUS`='Cancelled' WHERE `RESERVEID`=". $id;
$res = mysql_query($sql) or die(mysql_error());

if($res>0){
	?>
	<script type="text/javascript">
	window.location ="listreservation.php";
	</script>
	<?php
}
 

}
function doConfirm(){
$id = $_GET['id'];
 
$sql ="UPDATE `tblreservation` SET `STATUS`='Confirmed' WHERE `RESERVEID`=". $id;
$res = mysql_query($sql) or die(mysql_error());

if($res>0){
	?>
	<script type="text/javascript">
	window.location ="listreservation.php";
	</script>
	<?php
}
 
}	
?>