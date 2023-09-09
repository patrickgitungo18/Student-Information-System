<?php 
    include('config.php');
    include('login_check.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Information System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>Student Information <br>System</h1>
        <ul>
            <li><a href="<?php echo SITEURL;?>index.php">Dashboard</a></li>
            <li><a href="">Add Student</a></li>
            <li><a href="<?php echo SITEURL;?>logout.php">Logout</a></li>
        </ul>

        
    </body>
</html>