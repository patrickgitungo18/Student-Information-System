<?php

    include ('config.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Information System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
   
    <center>
        <h1>Student Informatiion <br>System</h1>
        <h2>Create Account</h2>
        <?php
            if (isset($_SESSION['adduser'])){
                echo $_SESSION['adduser'];
                unset($_SESSION['adduser']);
            }

        ?>
        <form method="POST" action="">
            <table>
                <tr>
                <td><input type="text" name="name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                <td><input type="text" name="username" placeholder="Create Username"></td>
                </tr>
                <tr>
                <td><input type="password" name="password" placeholder="Create Password"></td>
                </tr>
                <tr>
                <td><input class="btn-success" type="submit" name="submit" value="Create User">
                <a class ="btn-info" href="<?php echo SITEURL;?>login.php">already has an account</a></td>
                </tr>
            </table>

        </form>
    </center>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user SET
    name = '$name',
    username = '$username',
    password = '$password'
    ";

    $res = mysqli_query($conn,$sql);

    if ($res == TRUE){
        $_SESSION['adduser'] = "<div>User Successfully Added!</div>";
        header('location:'.SITEURL.'login.php');
    }else{
        $_SESSION['adduser'] = "<div>User Successfully Added!</div>";
        header('location:'.SITEURL.'add-user.php');
    }
}
?>

        
    </body>
</html>