<?php

    session_start();

    define('SITEURL', 'http://localhost/Student-Information-System/');
    define('LOCALHOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DBNAME', 'studentinformation');

    $conn = mysqli_connect(LOCALHOST, USERNAME, PASSWORD) or die (mysqli_error());
    $select_db = mysqli_select_db($conn, DBNAME);


?>