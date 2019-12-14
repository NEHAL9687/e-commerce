<?php
require './class/atclass.php';

if(!isset($_SESSION['adminid']))
{
    header("location:login.php");
}

if($_POST)
{
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    
    $oldpasswordquery = mysqli_query($connection, "select admin_password from tbl_admin where admin_id='{$_SESSION['adminid']}'") or die(mysqli_error($connection));
    $oldpasswordfromdb = mysqli_fetch_array($oldpasswordquery);
    if ($oldpasswordfromdb['admin_password'] == $opass)
    {
        
        if($npass == $cpass)
        {
            if($opass == $npass)
            {
                echo "<script> alert('Old Password & New Password Must be Different'); </script>";
            }
            else 
            {
                $updateq = mysqli_query($connection, "update tbl_admin set admin_password='{$npass}' where admin_id='{$_SESSION['adminid']}'") or die(musqli_error($connection));
                if($updateq)
                {
                    echo "<script> alert('Password Changed'); </script>";
                }
            }
        }
        else 
        {
            echo "<script>alert('New Password & Confirm Password Must be same');</script>";
        }
    }
    else 
    {
        echo "<script>alert('Old Pass Not Metch');</script>";
    }
}


?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Creative Login Form Responsive Widget Template :: w3layouts</title>
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
			<span>C</span>hange
			<span>P</span>assword</h1>
	</div>
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<h2> Change Password </h2>
			<form method="post">
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Enter Old Password" name="opass" class="pass" type="password" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Enter New Password" name="npass" class="pass" type="password" required="">
				</div>
                            <br>
                                <div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Enter Confim Password" name="cpass" class="pass" type="password" required="">
				</div>
				<div class="sub-w3l">
					 
<!--					<a href="#">Forgot Password?</a>-->
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
					<input href="login.php" type="submit">
<!--                                        <input onclick="login.php" type="button" value="Login">-->
                       	</div>
			</form>
		</div>
        </div>
</body>

</html>


