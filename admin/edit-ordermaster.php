<?php
require './class/atclass.php';

$editid = $_GET['editid'];
if(!isset($_GET['editid']) || empty($_GET['editid']))
{
    header("location:display-ordermaster.php");
}
$q = mysqli_query($connection, "select * from tbl_ordermaster where order_id='{$editid}'") or die(mysqli_error($connection));
$qrow = mysqli_fetch_array($q);
//print_r($qrow);
$msg = "";
if ($_POST) 
{
    $order_id = mysqli_real_escape_string($connection, $_POST['order_id']);
    $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
    $order_date = mysqli_real_escape_string($connection, $_POST['order_date']);
    $order_status = mysqli_real_escape_string($connection, $_POST['order_status']);
    $shipping_name = mysqli_real_escape_string($connection, $_POST['shipping_name']);
    $shipping_mobile = mysqli_real_escape_string($connection, $_POST['shipping_mobile']);
    $shipping_address = mysqli_real_escape_string($connection, $_POST['shipping_address']);
    $area_id = mysqli_real_escape_string($connection, $_POST['area_id']);

    $qupdate = mysqli_query($connection, "update tbl_ordermaster set user_id='{$user_id}',order_date='{$order_date}',order_status='{$order_status}',shipping_name='{$shipping_name}',shipping_mobile='{$shipping_mobile}',shipping_address='{$shipping_address}',area_id='{$area_id}' where order_id='{$order_id}'") or die(mysqli_error($connection));

    if ($qupdate) 
    {
        echo "<script> alert('Record Updated'); window.location='display-ordermaster.php'; </script>";
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
                <h2 class="main-title-w3layouts mb-2 text-center"> Order Master </h2>
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
                                <h4 class="tittle-w3-agileits mb-4"> Edit Order Master Information </h4>
                                <form   method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="inputEmail3" value="<?php echo $qrow['order_id'] ?>" name="order_id">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> User Name </label>
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
                                    <form   method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputEmail3" name="order_date" value="<?php echo $qrow['order_date'] ?>" placeholder="Enter Order Date" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Order Status </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="order_status" value="<?php echo $qrow['order_status'] ?>" placeholder="Enter Order Status" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Shipping Name </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="shipping_name" value="<?php echo $qrow['shipping_name'] ?>" placeholder="Enter Shipping Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Shipping Mobile-No </label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputPassword3" name="shipping_mobile" value="<?php echo $qrow['shipping_mobile'] ?>" placeholder="Enter Shipping Mobile-No" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Shipping Address </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="shipping_address"  placeholder="Enter Shipping Address" required=""> <?php echo $qrow['shipping_address'] ?> </textarea>
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
                                            <button type="submit" class="btn btn-primary"> Update Order </button>
                                            <button type="reset" class="btn btn-danger"> Reset</button>
                                            <button type="button" onclick="window.location='display-ordermaster.php'" class="btn btn-info"> View </button>
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
