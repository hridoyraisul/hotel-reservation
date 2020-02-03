<?php
@session_start();
@session_unset($_SESSION['CUSTOMERID']) ; 
@session_unset($_SESSION['FNAME']) ; 
@session_unset($_SESSION['LNAME']) ; 
?>
 <script>
        window.location ='index.php?logout';
    </script>