<?php
require './class/atclass.php';

$editid = $_GET['editid'];
if(!isset($_GET['editid']) || empty($_GET['editid']))
{
    header("location:display-feedback.php");
}
$q = mysqli_query($connection, "select * from tbl_feedback where feedback_id='{$editid}'") or die(mysqli_error($connection));
$qrow = mysqli_fetch_array($q);
//print_r($qrow);
$msg = "";
if ($_POST) 
{
    $feedback_id = mysqli_real_escape_string($connection, $_POST['feedback_id']);
    $feedback_date = mysqli_real_escape_string($connection, $_POST['feedback_date']);
    $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
    $orderdetails_id = mysqli_real_escape_string($connection, $_POST['orderdetails_id']);

    $qupdate = mysqli_query($connection, "update tbl_feedback set feedback_date='{$feedback_date}',user_id='{$user_id}',order_details='{$orderdetails_id}' where feedback_id='{$feedback_id}'") or die(mysqli_error($connection));

    if ($qupdate) 
    {
        echo "<script> alert('Record Updated'); window.location='display-feedback.php'; </script>";
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
                <h2 class="main-title-w3layouts mb-2 text-center"> Feedback </h2>
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
                                <h4 class="tittle-w3-agileits mb-4"> Edit Feedback Information </h4>
                                <form   method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="inputEmail3" value="<?php echo $qrow['feedback_id'] ?>" name="feedback_id">                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Feedback-Date </label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputEmail3" name="feedback_date" value="<?php echo $qrow['feedback_date'] ?>" placeholder="Enter Feedback-Date" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> User Name </label>
                                        <div class="col-sm-10">
                                            
                                            
                                            <?php 
                                      
                                                $drpq = mysqli_query($connection, "select * from tbl_usermaster") or die(mysqli_error($connection));
                                                echo "<select name='user_id' class='form-control'>";
                                     
                                                 while($drdata = mysqli_fetch_array($drpq))
                                                 {
                                                     echo "<option value='{$drdata['user_id']}'>{$drdata['user_name']}</option>";
                                                 }
                                     
                                                echo "</select>";
                                        ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Details </label>
                                        <div class="col-sm-10">
                                            
                                            
                                            <?php 
                                      
                                                $drpq = mysqli_query($connection, "select * from tbl_orderdetails") or die(mysqli_error($connection));
                                                echo "<select name='orderdetails_id' class='form-control'>";
                                     
                                                 while($drdata = mysqli_fetch_array($drpq))
                                                 {
                                                     echo "<option value='{$drdata['orderdetails_id']}'>{$drdata['order_details']}</option>";
                                                 }
                                     
                                                echo "</select>";
                                            ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"> Update Feedback</button>
                                            <button type="reset" class="btn btn-danger"> Reset</button>
                                            <button type="button" onclick="window.location='display-feedback.php'" class="btn btn-info"> View </button>
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
