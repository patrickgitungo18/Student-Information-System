<?php
    include('config.php');

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
        <h2>Please Login...</h2>

        <?php
            if (isset($_SESSION['adduser'])){
                echo $_SESSION['adduser'];
                unset($_SESSION['adduser']);
            }
            if (isset($_SESSION['no-login_message'])){
                echo $_SESSION['no-login_message'];
                unset($_SESSION['no-login_message']);
            }

        ?>
       <div>
        <form method="POST" action="">
            <table>
                <tr>
                <td><input type="text" name="username" placeholder="cardo.dalisay" required></td>
                </tr>
                <tr>
                <td><input type="password" name="password" placeholder="**********" required></td>
                </tr>
                <tr>
                <td><input class="btn-info" type="submit" name="login" value="Login">
                <a class ="btn-warning" href="<?php echo SITEURL;?>add-user.php">Register</a></td>
                </tr>
            </table>

        </form>
        </div>
    </center>

    <?php

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE username == '$username' && password == '$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count == 1){
            $_SESSION['userlogin'] = "<div>User Logged in successfully!</div>";
            $_SESSION['user'] = $username;
            header('location:'.SITEURL. 'index.php');
        }else{
            $_SESSION['userlogin'] = "<div>Username or Password is incorrect</div>";
            header('location:'.SITEURL. 'login.php');
        }
    }


    ?>
    </body>
</html>