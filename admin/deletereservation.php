 <?php require_once ("../db/config.php"); ?>
 <?php  
    $sql = "DELETE FROM tblreservation WHERE RESERVATIONID=" .$_GET['id']; 
    $res = mysql_query($sql) or die(mysql_error()); 
   
 ?>

      <script>
        window.location ='listreservation.php';
    </script>