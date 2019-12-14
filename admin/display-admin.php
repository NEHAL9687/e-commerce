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
                <h2 class="main-title-w3layouts mb-2 text-center"> Admin Table </h2>
                <!--// main-heading -->

                <!-- Tables content -->
                <section class="tables-section">
                    <!-- table1 -->

                    <!--// table1 -->

                    <!-- table2 -->
                    <div class="outer-w3-agile mt-3">
                        <h4 class="tittle-w3-agileits mb-4"> Admin Details </h4>

                        <table class="table">
                            <h5 class="tittle-w3-agileits mb-4"> <a href="add-admin.php" >  <button type="button" class="btn btn-primary" style="margin-left: 80%"> <img style='width:25px;' src='images/add.png'> <b>Add Admin Details</b> </button></a> </h5>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"> Id </th>
                                    <th scope="col"> Name </th>
                                    <th scope="col"> Email-Id </th>
                                    <th scope="col"> Password </th>
                                    <th scope="col"> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($_GET['deleteid'])) {
                                    $deleteid = $_GET['deleteid'];

                                    $q = mysqli_query($connection, "delete from tbl_admin where admin_id = '{$deleteid}'") or die(mysqli_error($connection));
                                    if ($q) {
                                        echo "<script> alert('Record Deleted'); </script>";
                                    }
                                }

                                $q = mysqli_query($connection, "select * from tbl_admin") or die(mysqli_error($connection));
                                $count = mysqli_num_rows($q);
                                echo $count . " Records Found ";
                                while ($adminrow = mysqli_fetch_array($q)) {
                                    echo "<tr>";
                                    echo "<td>{$adminrow['admin_id']}</td>";
                                    echo "<td>{$adminrow['admin_name']}</td>";
                                    echo "<td>{$adminrow['admin_email']}</td>";
                                    echo "<td>{$adminrow['admin_password']}</td>";
                                    echo "<td> <a href='edit-admin.php?editid={$adminrow['admin_id']}'> <img style='width:20px;' src='images/edit.png'> Edit</a> | <a href='display-admin.php?deleteid={$adminrow['admin_id']}]'> <img style='width:20px;' src='images/delete.png'> Delete </a> </td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>
                </section>
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
