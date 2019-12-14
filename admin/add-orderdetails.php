<?php
require './class/atclass.php';
$msg = "";
if ($_POST) 
    {
   // $orderdetails_id = mysqli_real_escape_string($connection, $_POST['orderdetails_id']);
    $order_details = mysqli_real_escape_string($connection, $_POST['order_details']);
    $order_id = mysqli_real_escape_string($connection, $_POST['order_id']);
    $product_id = mysqli_real_escape_string($connection, $_POST['product_id']);
    $order_quantity = mysqli_real_escape_string($connection, $_POST['order_quantity']);
    $order_price = mysqli_real_escape_string($connection, $_POST['order_price']);

    $q = mysqli_query($connection, "insert into tbl_orderdetails(order_details,order_id,product_id,order_quantity,order_price) values('{$order_details}','{$order_id}','{$product_id}','{$order_quantity}','{$order_price}') ") or die(mysqli_error($connection));

    if ($q) {

        $msg = '<div class="alert alert-success" role="alert">
                     Record Inserted
                </div>';
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
                <h2 class="main-title-w3layouts mb-2 text-center"> Order Details </h2>
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
                                <h4 class="tittle-w3-agileits mb-4"> Order Details </h4>
                                <form   method="post" enctype="multipart/form-data">
                                    
<!--                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Details Id </label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="orderdetails_id"  placeholder="Enter Order Details Id" required="">
                                        </div>
                                    </div>-->
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Details </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="order_details"  placeholder="Enter Order Details" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Date </label>
                                        <div class="col-sm-10">
                                            
                                            
                                            <?php 
                                      
                                                $drpq = mysqli_query($connection, "select * from tbl_ordermaster") or die(mysqli_error($connection));
                                                echo "<select name='order_id' class='form-control'>";
                                     
                                                 while($drdata = mysqli_fetch_array($drpq))
                                                 {
                                                     echo "<option value='{$drdata['order_id']}'>{$drdata['order_date']}</option>";
                                                 }
                                     
                                                echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Product Name </label>
                                        <div class="col-sm-10">
                                            
                                            
                                            <?php 
                                      
                                                $drpq = mysqli_query($connection, "select * from tbl_product") or die(mysqli_error($connection));
                                                echo "<select name='product_id' class='form-control'>";
                                     
                                                 while($drdata = mysqli_fetch_array($drpq))
                                                 {
                                                     echo "<option value='{$drdata['product_id']}'>{$drdata['product_name']}</option>";
                                                 }
                                     
                                                echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Quantity </label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputEmail3" name="order_quantity" placeholder="Enter Order Quantity" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Order Price </label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputEmail3" name="order_price" placeholder="Enter Order Price" required="">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"> Add Order Details</button>
                                            <button type="reset" class="btn btn-danger"> Reset</button>
                                            <button type="button" onclick="window.location='display-orderdetails.php'" class="btn btn-info"> View </button>
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
