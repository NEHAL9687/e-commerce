<?php
require './class/atclass.php';

if ($_POST) {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    $selectquery = mysqli_query($connection, "select * from tbl_admin where admin_email='{$admin_email}' and admin_password='{$admin_password}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);

    if ($count > 0) {
        $_SESSION['adminid'] = $row['admin_id'];
        $_SESSION['adminname'] = $row['admin_name'];
        $_SESSION['adminemail'] = $row['admin_email'];

        // header("location:home.php");
        header("location:homepage.php");
    } else {
        echo "<script> alert('Email & Password Not Match')</script>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title> Akshar Engineers </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Creative Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
        <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <link rel="stylesheet" href="css/login-style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/login-font-awesome.css">
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>

    <body>
        <div class="header-w3l">
            <h1>
                <span>L</span>ogin
                <span>F</span>orm</h1>
        </div>
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <h2>Login Here</h2>
                <form method="post">
                    <div class="pom-agile">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input placeholder="E-mail" name="admin_email" class="user" type="email" required="">
                    </div>
                    <div class="pom-agile">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input placeholder="Password" name="admin_password" class="pass" type="password" required="">
                    </div>
                    <div class="sub-w3l">
                        <div class="sub-agile">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1">
                                <span></span>Remember me</label>
                        </div>
                        <a href="forgot-password.php">Forgot Password?</a>
                        <div class="clear"></div>
                    </div>
                    <div class="right-w3l">
                        <input  type="submit" value="Login">
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </body>
</html>
