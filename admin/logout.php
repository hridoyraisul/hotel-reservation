<?php
@session_start();
@session_unset($_SESSION['USERID']) ; 
@session_unset($_SESSION['U_USERNAME']) ; 
@session_unset($_SESSION['U_UNAME']) ; 
?>
 <script>
        window.location ='login.php?logout';
    </script>