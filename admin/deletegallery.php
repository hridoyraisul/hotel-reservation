 <?php require_once ("../db/config.php"); ?>
 <?php  
    $sql = "DELETE FROM tblgallery WHERE ID=" .$_GET['id']; 
    $res = mysql_query($sql) or die(mysql_error()); 
   
 ?>

      <script>
        window.location ='listgallery.php';
    </script>