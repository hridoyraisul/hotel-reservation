 <?php require_once ("../db/config.php"); ?>
 <?php  
    $sql = "DELETE FROM tbluseraccount WHERE USERID=" .$_GET['id']; 
    $res = mysql_query($sql) or die(mysql_error()); 
   
 ?>

      <script>
        window.location ='listservices.php';
    </script>