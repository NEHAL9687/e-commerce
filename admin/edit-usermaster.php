<?php
require './class/atclass.php';

$editid = $_GET['editid'];
if(!isset($_GET['editid']) || empty($_GET['editid']))
{
    header("location:display-usermaster.php");
}
$q = mysqli_query($connection, "select * from tbl_usermaster where user_id='{$editid}'") or die(mysqli_error($connection));
$qrow = mysqli_fetch_array($q);
//print_r($qrow);
$msg = "";
if ($_POST) 
{
    $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
    $user_name = mysqli_real_escape_string($connection, $_POST['user_name']);
    $user_gender = mysqli_real_escape_string($connection, $_POST['user_gender']);
    $user_email = mysqli_real_escape_string($connection, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($connection, $_POST['user_password']);
    $user_mobile = mysqli_real_escape_string($connection, $_POST['user_mobile']);
    $user_address = mysqli_real_escape_string($connection, $_POST['user_address']);
    $area_id = mysqli_real_escape_string($connection, $_POST['area_id']);

    $qupdate = mysqli_query($connection, "update tbl_usermaster set user_name='{$user_name}',user_gender='{$user_gender}',user_email='{$user_email}',user_password='{$user_password}',user_mobile='{$user_mobile}',user_address='{$user_address}',area_id='{$area_id}' where user_id='{$user_id}'") or die(mysqli_error($connection));

    if ($qupdate) 
    {
        echo "<script> alert('Record Updated'); window.location='display-usermaster.php'; </script>";
    }
}
?>  
<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Akshar Engineers </title>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta Tags -->
        <!-- Style-sheets -->
        <!-- Bootstrap Css -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap Css -->
        <!-- Common Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--// Common Css -->
        <!-- Nav Css -->
        <link rel="stylesheet" href="css/style4.css">
        <!--// Nav Css -->
        <!-- Fontawesome Css -->
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <!--// Fontawesome Css -->
        <!--// Style-sheets -->
        <!--web-fonts-->
        <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!--//web-fonts-->
    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
<?php
include './themepart/sidebar.php';
?>

            <!-- Page Content Holder -->
            <div id="content">
                <!-- top-bar -->
<?php
include './themepart/menubar.php';
?>
                <!--// top-bar -->
                <!-- main-heading -->
                <h2 class="main-title-w3layouts mb-2 text-center"> User Master </h2>
                <!--// main-heading -->
                <!-- Forms content -->
<?php
echo $msg;
?>
                <section class="forms-section">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Forms-1 -->

                            <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                                <h4 class="tittle-w3-agileits mb-4"> Edit User Master Information </h4>
                                <form   method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="inputEmail3" value="<?php echo $qrow['user_id'] ?>" name="user_id">
                                    
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Name </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="user_name" value="<?php echo $qrow['user_name'] ?>" placeholder="Enter User Name" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0"> Gender </label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input"  value="<?php if($qrow['user_gender']=='male') { echo "Selected "; }  ?>"  type="radio" name="user_gender" value="Male">
                                                <label class="form-check-label"  value="<?php echo $qrow['user_gender'] ?>">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="<?php if($qrow['user_gender']=='Male') { echo "checked"; }  ?>" type="radio" name="user_gender" >
                                                <label class="form-check-label" value="<?php if($qrow['user_gender']=='Female') { echo "checked "; }  ?>"  name="user_gender"  >
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="user_email" value="<?php echo $qrow['user_email'] ?>" id="inputEmail3" placeholder="Enter Email Id" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label"> Password </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="user_password" value="<?php echo $qrow['user_password'] ?>" id="inputPassword3" placeholder="Enter Password" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">  Mobile No </label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="inputPassword3" name="user_mobile" value="<?php echo $qrow['user_mobile'] ?>" placeholder="Enter User Mobile No" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">  Address </label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="user_address"  placeholder="Enter User Address" required=""> <?php echo $qrow['user_address'] ?> </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Area Name </label>
                                        <div class="col-sm-10">
                                            
                                            <?php 
                                      
                                                $drpq = mysqli_query($connection, "select * from tbl_area") or die(mysqli_error($connection));
                                                echo "<select name='area_id' class='form-control'>";
                                     
                                                 while($drdata = mysqli_fetch_array($drpq))
                                                 {
                                                     echo "<option value='{$drdata['area_id']}'>{$drdata['area_name']}</option>";
                                                 }
                                     
                                                echo "</select>";
                                            ?>
                                        </div>
                                        </div>
                                    

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"> Update User Details </button>
                                            <button type="reset" class="btn btn-danger"> Reset</button>
                                            <button type="button" onclick="window.location='display-usermaster.php'" class="btn btn-info"> View </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
<?php
include './themepart/footer.php';
?>
            </div>
        </div>

        <!-- Required common Js -->
        <script src='js/jquery-2.2.3.min.js'></script>
        <!-- //Required common Js -->

        <!-- Sidebar-nav Js -->
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <!--// Sidebar-nav Js -->

        <!-- Validation Script -->
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        <!--// Validation Script -->

        <!-- dropdown nav -->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <!-- //dropdown nav -->

        <!-- Js for bootstrap working-->
        <script src="js/bootstrap.min.js"></script>
        <!-- //Js for bootstrap working -->

    </body>

</html>
