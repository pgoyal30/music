<?php
    session_start();

    if(isset($_SESSION['ID']) && isset($_SESSION['NAME'])){
        unset($_SESSION['ID']);
        unset($_SESSION['NAME']);
        unset($_SESSION['EMAIL']);
        unset($_SESSION['ROLE']);
        unset($_SESSION['ACCESS']);
        session_destroy();
        header("Location: http://localhost/insurance/panel/login.php");
    }
?>