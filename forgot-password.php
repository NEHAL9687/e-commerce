<?php
session_start();
require './admin/class/atclass.php';


if ($_POST) {
    $email = $_POST['email'];
 

    $q = mysqli_query($connection, "select * from tbl_usermaster where user_email ='{$email}'  ") or die(mysqli_error($connection));

    $row = mysqli_fetch_row($q);


    if ($row > 0) {
      

require './admin/class/PHPMailerAutoload.php';
//        require_once './class.phpmailer.php';

$mail = new PHPMailer;

$mail->isSMTP();                                // Set mailer to use SMTP

$mail->SMTPDebug = 0;

$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->Port = 587;                                    // TCP port to connect to
$mail->Username = 'nehalpanchal54@gmail.com';                 // SMTP username
$mail->Password = 'np89805443200';                           // SMTP password
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$mail->setFrom('nehalpanchal54@gmail.com', 'Company Name');

$mail->addReplyTo('nehalpanchal54@gmail.com', 'Company Name');

$address = $email;  //Receiver Email ID
$mail->addAddress($address, 'Company Name');     // Add a recipient

$mail->addAddress('nehalpanchal54@gmail.com', 'Company Name');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Forgot Password";
$body = "Hello your Password is ".$row[4];
$mail->msgHTML($body);


if (!$mail->send()) {
    echo "<script> alert ('Error in Email Send');</script>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script> alert ('Email Send');</script>";
}
        
    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Contact Us :: w3layouts</title>
        <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--//tags -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--pop-up-box-->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    </head>

    <body>
        <!-- top-header -->
<?php
include './themepart/header.php';
?>
        <!-- //Modal2 -->
        <!-- //signup Model -->
        <!-- //header-bot -->
        <!-- navigation -->
<?php
include './themepart/top-menu.php';
?>
        <!-- //navigation -->
        <!-- banner-2 -->
        <div class="page-head_agile_info_w3l">

        </div>
        <!-- //banner-2 -->
        <!-- page -->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="#">Home</a>
                            <i>|</i>
                        </li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //page -->
        <!-- contact page -->
        <div class="contact-w3l">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">Forgot Password
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <!-- //tittle heading -->
                <!-- contact -->
                <div class="contact agileits">
                    <div class="contact-agileinfo">
                        <div class="contact-form wthree">
                            <form action="#" method="post">
                                <div class="">
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>
                               


                                <input type="submit" value="Get Password">
                                <br/>
                                <a href="signup.php">Create New Account ?</a>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- //contact -->
            </div>
        </div>
        <!-- map -->

        <!-- //map -->
        <!-- newsletter -->
<?php
include './themepart/footer.php';
?>
        <!-- //footer -->
        <!-- copyright -->
        <div class="copy-right">
            <div class="container">
                <p>©   Akshar All rights reserved  </a>
                </p>
            </div>
        </div>
        <!-- //copyright -->

        <!-- js-files -->
        <!-- jquery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jquery -->

        <!-- popup modal (for signin & signup)-->
        <script src="js/jquery.magnific-popup.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>
        <!-- Large modal -->
        <!-- <script>
                $('#').modal('show');
        </script> -->
        <!-- //popup modal (for signin & signup)-->

        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

            paypalm.minicartk.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });
        </script>
        <!-- //cart-js -->

        <!-- password-script -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- //password-script -->

        <!-- smoothscroll -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smoothscroll -->

        <!-- start-smooth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->

        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->

        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- //js-files -->

    </body>

</html>