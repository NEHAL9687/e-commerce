<?php
require './class/atclass.php';
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

                <!-- main-heading -->
                <h2 class="main-title-w3layouts mb-2 text-center"> Product Photo Table </h2>
                <!--// main-heading -->

                <!-- Tables content -->
                <section class="tables-section">
                    <!-- table1 -->

                    <!--// table1 -->

                    <!-- table2 -->
                    <div class="outer-w3-agile mt-3">
                        <h4 class="tittle-w3-agileits mb-4"> Product Photo </h4>

                        <table class="table">
                            <h5 class="tittle-w3-agileits mb-4"> <a href="add-productphoto.php" > <button type="button" class="btn btn-primary" style="margin-left: 75%"> <img style='width:25px;' src='images/add.png'> <b>Add Product Photo Details</b> </button> </a> </h5>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"> Id </th>
                                    <th scope="col"> Product Name </th>
                                    <th scope="col"> Product Photo Path </th>
                                    <th scope="col"> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($_GET['deleteid'])) {
                                    $deleteid = $_GET['deleteid'];

                                    $q = mysqli_query($connection, "delete from tbl_productphoto where productphoto_id='{$deleteid}'") or die(mysqli_error($connection));
                                    if ($q) {
                                        echo "<script> alert('Record Deleted'); </script>";
                                    }
                                }
                                $display = "SELECT
                                                `tbl_productphoto`.`productphoto_id`
                                                , `tbl_product`.`product_name`
                                                , `tbl_productphoto`.`productphoto_path`
                                            FROM
                                                `tbl_product`
                                                INNER JOIN `tbl_productphoto` 
                                                    ON (`tbl_product`.`product_id` = `tbl_productphoto`.`product_id`)
                                            ORDER BY `tbl_productphoto`.`productphoto_id` ASC";

                                $q = mysqli_query($connection, $display) or die(mysqli_error($connection));
                                $count = mysqli_num_rows($q);
                                echo $count . " Records Found ";
                                while ($productprow = mysqli_fetch_array($q)) 
                                {
                                    echo "<tr>";
                                    echo "<td>{$productprow['productphoto_id']}</td>";
                                    echo "<td>{$productprow['product_name']}</td>";
                                    echo "<td><img src='{$productprow['productphoto_path']}' style='width:100px;'></td>";
                                    echo "<td> <a href='edit-productphoto.php?editid={$productprow['productphoto_id']}'> <img style='width:20px;' src='images/edit.png'> Edit </a> | <a href='display-productphoto.php?deleteid={$productprow['productphoto_id']}]'> <img style='width:20px;' src='images/delete.png'> Delete</a> </td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>
                    <!--// table2 -->

                    <!-- table3 -->

                    <!--// table3 -->

                    <!-- table4 --> 
                    <!--// table4 -->

                    <!-- table5 -->

                    <!--// table5 -->

                    <!-- table6 -->

                    <!--// table6 -->


                    <!--// table7 -->

                </section>

                <!--// Tables content -->

<?php
include './themepart/footer.php';
?>
                <!--// Copyright -->
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
