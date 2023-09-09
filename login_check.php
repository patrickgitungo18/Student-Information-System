<?php

    include('config.php');

    if(!isset($_SESSION['user'])){
        $_SESSION['no-login_message'] = "<div>Please fillup the form to login..</div>";
        header('location:'.SITEURL.'login.php');
    }

?>